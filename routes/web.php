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
Route::get('product_detail/{slug}','MainController@getproduct_detail')->name('product_detail');
Route::get('contact', function () {
    return view('Page.contact');
});
Route::get('checkout','MainController@checkout')->name('checkout');
Route::post('checkout','MainController@postcheckout')->name('postcheckout');

Route::get('cart/{id}','MainController@cart')->name('cart');
Route::get('list-cart','MainController@listcart')->name('list-cart');
Route::post('cart_delete','MainController@cart_delete')->name('cart_delete');
Route::get('update/{id}','MainController@update');
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');




Route::get('test', function () {
    return view('Page.ht');
});
Route::get('phpdom','DomController@test');
Route::post('customLogin','MainController@login')->name('customLogin');
Route::post('customRegister','MainController@register')->name('customRegister');
Route::get('logout','MainController@logout')->name('logout');
Route::get('mail',function (){


    return view('Page.mail');
});
Route::get('check_order',function (){


    return view('Page.check_order');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    //Route::get('/admin', function (){
    //    return view('Admin.home');
    //});
Route::group(['prefix' => 'admin'], function() {

    Route::get('/home', function() {
        return view('Admin.home');
    });
    // -------------------- quan ly danh muc----------------------
    Route::group(['prefix' => 'danhmuc'], function() {
        Route::get('add',['as'        =>'getaddcat','uses' => 'CategoryController@getadd']);
        Route::post('add',['as'       =>'postaddcat','uses' => 'CategoryController@postadd']);

        Route::get('/',['as'       =>'getcat','uses' => 'CategoryController@getlist']);
        Route::get('del/{id}',['as'   =>'getdellcat','uses' => 'CategoryController@getdel'])->where('id','[0-9]+');

        Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'CategoryController@getedit'])->where('id','[0-9]+');
        Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'CategoryController@postedit'])->where('id','[0-9]+');
    });
    // -------------------- quan ly sản phẩm--------------------
    Route::group(['prefix' => '/sanpham'], function() {
        Route::get('/add',['as'        =>'getaddpro','uses' => 'ProductsController@getadd']);
        Route::post('/add',['as'       =>'postaddpro','uses' => 'ProductsController@postadd']);

        Route::get('/{loai}',['as'       =>'getpro','uses' => 'ProductsController@getlist']);
        Route::get('/del/{id}',['as'   =>'getdellpro','uses' => 'ProductsController@getdel'])->where('id','[0-9]+');

        Route::get('/edit/{id}',['as'  =>'geteditpro','uses' => 'ProductsController@getedit'])->where('id','[0-9]+');
        Route::post('edit/{id}',['as' =>'posteditpro','uses' => 'ProductsController@postedit'])->where('id','[0-9]+');
    });
    // -------------------- quan ly danh muc-----------------------------
    Route::group(['prefix' => '/news'], function() {
        Route::get('/add',['as'        =>'getaddnews','uses' => 'NewsController@getadd']);
        Route::post('/add',['as'       =>'postaddnews','uses' => 'NewsController@postadd']);

        Route::get('/',['as'       =>'getnews','uses' => 'NewsController@getlist']);
        Route::get('/del/{id}',['as'   =>'getdellnews','uses' => 'NewsController@getdel'])->where('id','[0-9]+');

        Route::get('/edit/{id}',['as'  =>'geteditnews','uses' => 'NewsController@getedit'])->where('id','[0-9]+');
        Route::post('/edit/{id}',['as' =>'posteditnews','uses' => 'NewsController@postedit'])->where('id','[0-9]+');
    });
    // -------------------- quan ly đơn đặt hàng--------------------
    Route::group(['prefix' => '/donhang'], function() {;

        Route::get('',['as'       =>'getpro','uses' => 'OrdersController@getlist']);
        Route::get('/del/{id}',['as'   =>'getdeloder','uses' => 'OdersController@getdel'])->where('id','[0-9]+');

        Route::get('/detail/{id}',['as'  =>'getdetail','uses' => 'OdersController@getdetail'])->where('id','[0-9]+');
        Route::post('/detail/{id}',['as' =>'postdetail','uses' => 'OdersController@postdetail'])->where('id','[0-9]+');
    });
    // -------------------- quan ly thong tin khach hang--------------------
    Route::group(['prefix' => '/khachhang'], function() {;

        Route::get('',['as'       =>'getmem','uses' => 'UsersController@getlist']);
        Route::get('/del/{id}',['as'   =>'getdelmem','uses' => 'UsersController@getdel'])->where('id','[0-9]+');

        Route::get('/edit/{id}',['as'  =>'geteditmem','uses' => 'UsersController@getedit'])->where('id','[0-9]+');
        Route::post('/edit/{id}',['as' =>'posteditmem','uses' => 'UsersController@postedit'])->where('id','[0-9]+');
    });
    // -------------------- quan ly thong nhan vien--------------------
    Route::group(['prefix' => '/nhanvien'], function() {;

        Route::get('',['as'       =>'getnv','uses' => 'Admin_usersController@getlist']);
        Route::get('/del/{id}',['as'   =>'getdelnv','uses' => 'Admin_usersController@getdel'])->where('id','[0-9]+');

        Route::get('/edit/{id}',['as'  =>'geteditnv','uses' => 'Admin_usersController@getedit'])->where('id','[0-9]+');
        Route::post('/edit/{id}',['as' =>'posteditnv','uses' => 'Admin_usersController@postedit'])->where('id','[0-9]+');
    });
    Route::group(['prefix' => '/ajax'], function() {

        Route::get('ajax_subcategory','AjaxController@getsubcategory');

    });

        // ---------------van de khac ----------------------
});
