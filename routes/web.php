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

Route::get('/','MainController@getproducts');
Route::get('slider', function () {
    return view('Page.slider');
});
Route::get('content', function () {
    return view('Page.content');
});
//Route::get('cart', function () {
//    return view('Page.cart');
//});
Route::get('product_detail/{id}','MainController@getproduct_detail')->name('product_detail');
Route::get('contact', function () {
    return view('Page.contact');
});
Route::get('checkout','MainController@checkout')->name('checkout');
Route::get('cart/{id}','MainController@cart')->name('cart');
Route::get('list-cart','MainController@listcart')->name('list-cart');
Route::post('cart_delete','MainController@cart_delete')->name('cart_delete');
Route::get('qty_up','MainController@qty_up');
Route::get('qty_down','MainController@qty_down');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');




Route::get('product', function () {
    return view('Page.product');
});
Route::get('phpdom','DomController@test');
Route::post('login','MainController@login')->name('login');
Route::post('register','MainController@register')->name('register');
Route::get('logout','MainController@logout');

