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
use Illuminate\Support\Facades\Storage;

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
    public function itemList(){
        $item=Item::orderby('id','desc')->get();
        return view('Items/itemsList',compact('item'));
    }
    public function create_items(){
        return view('Items/items_create');
    }
    public function store(Request $request)
    {
        $path=Storage::disk('local')->put('public/banner', $request->items_img);
        $path='/'.str_replace("public","storage",$path);
        Item::create([
            "items_img_path"=>$path,
        ]);
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
        if($request->hasfile('items_img')){
            $path=Storage::disk('local')->put('public/banner', $request->items_img);
            $path='/'.str_replace("public","storage",$path);
            //先將舊有檔案刪除
            $target='/'.str_replace("/storage","public",$item->items_img_path);//將路徑恢復到public
            Storage::disk('local')->delete($target);
            //將新資料加到舊資料中
            $item->items_img_path=$path;
        }
        // Banner::update([
        //     "img_path"=>$request->img_path,
        //     "img_opacity"=>$request->img_opacity,
        //     "weight"=>$request->weight,
        // ]);

        $item->save();
        // $banners=Banner::orderby('id','desc')->get();
        return redirect('/itemsList');
    }

}
