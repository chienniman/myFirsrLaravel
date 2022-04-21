<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\ShoppingCartController;

use App\Http\Controllers\BannerController;

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
    $data1=DB::table('news')->whereBetween('id', [1, 5])->get();
    //take(3)
    // $data2=DB::table('news')->whereBetween('id', [3, 5])->get();
    //orderBy('id','desc')
    // $data3=DB::table('news')->inRandomOrder()->take(3)->get();
    // dd($data1);
    return view('index',compact('data1'));
});
Route::get('/log_in', function () {
    return view('/log_in');
});

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/edit_board', [Controller::class, 'edit_board']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/delete/{id}', [Controller::class, 'delete_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);

// Route::resource()
//群組化統一管理
Route::prefix('/banner')->group(function(){
    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::get('/banner/store', [BannerController::class, 'store']);
    Route::get('edit/{id}', [BannerController::class, 'edit']);
    Route::get('/banner/delete/{id}', [BannerController::class, 'delete']);
    Route::get('/banner/update/{id}', [BannerController::class, 'update']);
});
// Route::get('/banner', function () {
//     return view('/banners/banner');
// });
Route::get('/itemsList', [Controller::class, 'itemList']);
