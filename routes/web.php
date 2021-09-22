<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::post('/logincon',[UserController::class,'login']);

Route::view('/register','register');
Route::post('/register',[UserController::class,'register']);

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/detail/{id}', 'App\Http\Controllers\ProductController@detail');
Route::post('/add_to_cart', 'App\Http\Controllers\ProductController@addToCart');
Route::get('/cartlist', 'App\Http\Controllers\ProductController@cartlist');
Route::get('/removecart/{id}', 'App\Http\Controllers\ProductController@removeCart');
Route::get('/ordernow', 'App\Http\Controllers\ProductController@orderNow');
Route::post('/add_to_order', 'App\Http\Controllers\ProductController@addToOrder');
Route::get('/myorder', 'App\Http\Controllers\ProductController@myOrder');
