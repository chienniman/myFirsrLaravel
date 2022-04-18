<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    public function step1(){
        return view('shoppingCart');
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
}
