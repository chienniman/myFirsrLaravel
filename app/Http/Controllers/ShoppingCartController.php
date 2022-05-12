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
use App\Models\OrderDetails;
use App\Models\Order;
use App\Mail\OrderComplete;
use App\Controllers\FilesController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ShoppingCartController extends Controller
{
    public function step1(){

        $user=Auth::id();
        $shopping_cart=ShoppingCart::where('user_id',$user)->get();
        // for($i=0;$i<count( $shopping_cart);$i++){
        //     dump($shopping_cart[$i]->Item2->items_name);
        // };
        // foreach($shopping_cart as $key){
        //     dump($key->Item2->items_name);
        //     dump($key->Item2->items_img_path);
        //     dump($key->Item2->items_price);
        //     dump($key->Item2->items_context);
        //     dd(123);
        // };
        return view('shoppingCart',compact('shopping_cart'));
    }
    public function step2(Request $request){
        $qty=$request->qty;
        session([
            'amount' =>  $qty,
        ]);
        return view('shoppingCart02');
    }
    public function step3(Request $request){

        $payway=$request->payway;
        $delivery=$request->delivery;
        session([
            'payway' =>$payway,
            'delivery'=> $delivery,
        ]);
        return view('shoppingCart03');
    }
    public function step4(Request $request){

       $merch=ShoppingCart::where('user_id',Auth::id())->get();
       $subtotal=0;
       //運費計算
       $fee=0;
       if(session()->get('delivery')==1){
            $fee=150;
       }else{
           $fee=80;
       }
       foreach($merch as $value){
            $subtotal+=$value->qty*$value->Item2->items_price;
       }
        //主要訂單成立
        $order=OrderDetails::create([
            'subTotal'=>$subtotal,
            'shipping_fee'=>$fee,
            'total'=>$subtotal+$fee,
            'product_qty'=>count(session()->get('amount')), //商品的數量
            'name'=>$request->cuz_name,
            'phone'=>$request->cuz_phone,
            'email'=>$request->cuz_email,
            'address'=>$request->cuz_city.$request->cuz_code.$request->cuz_address,
            'pay_way'=> session()->get('payway'),
            'delivery_way'=> session()->get('delivery'),
            'status'=>1,
            'ps',
            'user_id'=>Auth::id(),
        ]);
        //不同送貨地址
        if( session()->get('delivery')==1){
            $order->address=$request->cuz_city.$request->cuz_code.$request->cuz_address;
            //黑貓宅急便
        }else{
            $order->shop_address=$request->cuz_city.$request->cuz_code.$request->cuz_address;
            //蝦皮店到店
        }
        $order->save();
        //訂單明細，用迴圈一筆一筆存入
        foreach($merch as $value){
            Order::create([
                'product_id'=>$value->product_id,
                'product_price'=>$value->Item2->items_price,
                'qty'=>$value->qty,
                'order_id'=>$order->id,
            ]);
        };
        //清除購物車功能
        ShoppingCart::where('user_id',Auth::id())->delete();
        Mail::to('cscs851210max@gmail.com')->send(new OrderComplete);
        return redirect('/show_order');

    }
    public function show_order(){
        $history_shopping_data=OrderDetails::where('user_id',Auth::id())->get();
        return view('shoppingCart04',compact('history_shopping_data'));
    }
    public function order_management(){

        $history_shopping_data=OrderDetails::where('user_id',Auth::id())->get();
        return view('order_management',compact('history_shopping_data'));
    }
    public function edit_order($id){

        $edited_shopping_data=OrderDetails::where('id',$id)->get();
        return view('order_edit',compact('edited_shopping_data'));
    }
    public function save_order(Request $requsst){

        $edited_shopping_data=OrderDetails::where('id',$id)->get();
        return view('order_edit',compact('edited_shopping_data'));
    }

}

