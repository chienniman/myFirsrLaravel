<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\Item;
use App\Models\Product;
use App\Models\User;
use App\Models\ShoppingCart;
use App\Controllers\FilesController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function comment(){
        //這是第一種寫法，直接透過controller，容易受到SQL INJECTION 攻擊

        // $data=DB::table('comment')->orderby('id','desc')->get();
        // return view('comment/comment',compact('data'));

        //第二種寫法
        $data=Comment::orderby('id','desc')->get();
        return view('comment/comment',compact('data'));
    }
    public function save_comment(Request $request){
        // dd($request->all());
        // DB::table('comment')->insert([
        //     'title' => $request->cuz_title,
        //     'author' => $request->cuz_name,
        //     'context'=>$request->cuz_comment,
        // ]);
        Comment::create([
            'title' => $request->cuz_title,
            'author' => $request->cuz_name,
            'context'=>$request->cuz_comment,
        ]);
        $data=DB::table('comment')->orderby('id','desc')->get();
        return redirect('comment');
    }
    public function edit_comment($id){
        $comment=DB::table('comment')->find($id);
        return view('edit',compact('comment'));
    }
    public function delete_comment($id){
        // $target=DB::table('comment')->where('id',$id)->delete();
        Comment::where('id',$id)->delete();
        return redirect('/comment');
    }
    public function edit_board(){
        return view('edit');
    }
    public function update_comment($id,Request $request){
        DB::table('comment')->where('id',$id)->update([
            'title' => $request->cuz_title,
            'author' => $request->cuz_name,
            'context'=>$request->cuz_comment,
        ]
        );
        return redirect('comment');

    }
    //商品相關

    public function innerpage($id){

        $item=Item::where('id',$id)->get();
        $item=$item[0];
        return view('Items/innerpage',compact('item'));
    }
    public function add_to_cart(Request $request){
        $product_id=$request->product_id;
        $residual_amount=Item::where('id',$product_id)->get();
        $residual_amount=$residual_amount[0]->items_number;
        //購買大於顧存
        if( $request->qty>$residual_amount){
            $result=[
                'result'=>'error',
                'message'=>'超過庫存數量，請聯絡客服'
            ];
            return $result;
        }
        //購買數目異常
        elseif( $request->qty<1){
            $result=[
                'result'=>'error',
                'message'=>'購買數量異常，請重新嘗試'
            ];
            return $result;
        }
        //尚未登入卻想要購買
        elseif(!Auth::check()){
            $result=[
                'result'=>'error',
                'message'=>'請登入後再購買'
            ];
            return $result;
        }
        $id = Auth::id();
        ShoppingCart::create([
        "product_id"=>$request->product_id,
        "user_id"=>$id,
        "qty"=>$request->qty,
        ]);
        //購買成功
        $result=[
            'result'=>'success',
            'message'=>'購買成功'
        ];
        return $result;
    }

    public function itemList(){
        $item=Item::orderby('id','desc')->get();
        $header='';
        $slot='';
        return view('Items/itemsList',compact('item','header','slot'));

    }
    public function create_items(){
        return view('Items/items_create');
    }
    public function store_item(Request $request)
    {
        // dd($request->all());
        $path=Storage::disk('local')->put('public/banner', $request->items_img);
        $path='/'.str_replace("public","storage",$path);
        $item=Item::create([

            "items_img_path"=>$path,
            "items_name"=>$request->items_name,
            "items_price"=>$request->items_price,
            "items_context"=>$request->items_context,
            "items_number"=>$request->items_number,
        ]);
        //逐一上傳
       foreach($request->second_img as $key=>$value){
        $path=Storage::disk('local')->put('public/banner',$value);
        $path='/'.str_replace("public","storage",$path);
        Product::create([
            "img_path"=>$path,
            'product_id'=>$item->id,
        ]);
       }

        return redirect('itemsList/create');
    }
    public function delete_items($id)
    {
        $item=Item::find($id);
        $target='/'.str_replace("/storage","public",$item->items_img_path);//將路徑恢復到public
        Storage::disk('local')->delete($target);
        $item->delete();


        return redirect('/itemsList');
    }
    public function edit_items($id)
    {

        $item=Item::find($id);
        return view('Items/items_edit',compact('item'));
    }
    public function update_items(Request $request, $id)
    {
        $item=Item::find($id);
        //更換主要圖片
        if($request->hasfile('items_img')){
            $path=Storage::disk('local')->put('public/banner', $request->items_img);
            $path='/'.str_replace("public","storage",$path);
            //先將舊有檔案刪除
            $target='/'.str_replace("/storage","public",$item->items_img_path);//將路徑恢復到public
            Storage::disk('local')->delete($target);
            //將新資料加到舊資料中
            $item->items_img_path=$path;
        }
        if($request->hasfile('secondary_items_img')){
            $path=Storage::disk('local')->put('public/banner', $request->secondary_items_img);
            $path='/'.str_replace("public","storage",$path);
            Product::create([
                    'img_path' => $path,
                    'product_id'=>$item->id,
                ]);
        }

        $item->save();
        // $banners=Banner::orderby('id','desc')->get();
        return redirect('/itemsList');
    }
    //對於次要圖片的編輯、刪除、新增
    //刪除次要圖片
    public function delete_imgs($id){
        $img=Product::find($id);
        // dd($img->all());
        $img_id=$img->product_id;
        $img->delete();
        // $path=Storage::disk('local')->put('public/banner', $request->items_img);
        // $path='/'.str_replace("public","storage",$path);
        Product::where('id',$id)->delete();
        return redirect('/itemsList/edit'.$img_id);
    }
}
