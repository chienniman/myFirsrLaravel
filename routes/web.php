<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

use App\Http\Controllers\NewsController;

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
Route::get('/shoppingCart02', [Controller::class, 'test']);

Route::get('/', [NewsController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/bootstrap', function () {
    return view('index');
});
Route::get('/log', function () {
    return view('log_in');
});
Route::get('/shoppingCart', function () {
    return view('shoppingCart');
});
// Route::get('/shoppingCart02', function () {
//     return view('shoppingCart02');
// });
