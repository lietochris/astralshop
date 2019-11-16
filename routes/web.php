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

Route::get('/', function () {

    $products = App\Product::Orderby('id', 'DESC')->take(6)->get();
    return view('welcome', ['products' => $products]);
});
Route::get('/login', function () {

    return view('login');
})->name('login');

Route::resource('orders', 'OrderController');
Route::resource('products', 'ProductController');