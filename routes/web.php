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
    return view('Page.home');
});
Route::get('slider', function () {
    return view('Page.slider');
});
Route::get('content', function () {
    return view('Page.content');
});
Route::get('cart', function () {
    return view('Page.cart');
});
Route::get('product_detail', function () {
    return view('Page.product_detail');
});
Route::get('contact', function () {
    return view('Page.contact');
});
Route::get('checkout', function () {
    return view('Page.checkout');
});
Route::get('cart', function () {
    return view('Page.cart');
});
Route::get('product', function () {
    return view('Page.product');
});
Route::get('phpdom','DomController@test');
Route::post('login','MainController@login')->name('login');