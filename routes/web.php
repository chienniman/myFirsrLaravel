<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\ShoppingCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [NewsController::class, 'index']);

Route::get('/shoppingCart', [ShoppingCartController::class, 'step1']);

Route::get('/shoppingCart02', [ShoppingCartController::class, 'step2']);

Route::get('/shoppingCart03', [ShoppingCartController::class, 'step3']);

Route::get('/shoppingCart04', [ShoppingCartController::class, 'step4']);

Route::get('/bootstrap', function () {
    $data = DB::table('news')->get();
    //get無論幾筆都是陣列
    //抓舊三、新三、隨機三
    $data1=DB::table('news')->whereBetween('id', [1, 3])->get();
    //take(3)
    // $data2=DB::table('news')->whereBetween('id', [3, 5])->get();
    //orderBy('id','desc')
    // $data3=DB::table('news')->inRandomOrder()->take(3)->get();
    // dd($data1);
    return view('index',compact('data1'));
});
Route::get('/log', function () {
    return view('log_in');
});
