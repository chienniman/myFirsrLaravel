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
    public function step2(){
        return view('shoppingCart02');
    }
    public function step3(){
        return view('shoppingCart03');
    }
    public function step4(){
        return view('shoppingCart04');
    }
    public function add_product(){
        dd('fetch成功拉!');
    }
}
