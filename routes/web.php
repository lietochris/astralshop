<?php

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

use App\Product;

Route::get('/', function () {

    $products = App\Product::Orderby('id', 'DESC')->take(6)->get();
    return view('welcome', ['products' => $products]);
})->name('index');

Auth::routes();

Route::resource('orders', 'OrderController')->middleware('auth');
Route::resource('users', 'UserController')->middleware('auth');

Route::resource('products', 'ProductController');
Route::post('/addCart', 'Transactions\BuyController@addCart')->name('addCart')->middleware('auth');
Route::post('/confirm', 'Transactions\BuyController@showConfirmForm')->name('buy.showConfirmForm')->middleware('auth');
Route::post('/buy', 'Transactions\BuyController@confirm_buy')->name('buy')->middleware('auth');

Route::resource('addresses', 'AddressController')->middleware('auth');
