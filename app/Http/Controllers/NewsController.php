<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(){
        $info = ['owner_number'=> 'A123456','owner_name' => 'John','car_color' => 'red'];
        foreach( $info as $key_name => $key_value) {
            dump( $key_name .":".$key_value);
        }
        return view('welcome');
    }
}
