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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontendController@getHome');

Route::get('/bong-da','FrontendController@getBongDa');

Route::get('/bong-ro','FrontendController@getBongRo');

Route::get('/cau-long','FrontendController@getCauLong');

Route::get('/chi-tiet-san-pham/{id}','FrontendController@getChiTiet');

Route::get('/lien-he','FrontendController@getLienHe');

Route::get('/gioi-thieu','FrontendController@getGioiThieu');

Route::get('/dang-nhap','FrontendController@getLogin');

Route::post('/dang-nhap','FrontendController@postLogin');

Route::get('/dang-ki','FrontendController@getSignup');

Route::post('/dang-ki','FrontendController@postSignup');

Route::get('/dang-xuat','FrontendController@getLogout');

Route::get('/tim-kiem','FrontendController@getSearch');

Route::get('/them-gio-hang/{id}','FrontendController@getAddToCart');

Route::get('/xoa-gio-hang/{id}','FrontendController@getDeleteCart');

Route::get('/dat-hang','FrontendController@getCheckout');

Route::post('/dat-hang','FrontendController@postCheckout');


Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});

	Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');

		Route::group(['prefix'=>'product'],function(){
			Route::get('/','ProductController@getProduct');

			Route::get('add','ProductController@getAddProduct');
			Route::post('add','ProductController@postAddProduct');

			Route::get('edit/{id}','ProductController@getEditProduct');
			Route::post('edit/{id}','ProductController@postEditProduct');

			Route::get('delete/{id}','ProductController@getDeleteProduct');
		});

		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CategoryController@getCate');
			Route::post('/','CategoryController@postCate');

			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit/{id}','CategoryController@postEditCate');

			Route::get('delete/{id}','CategoryController@getDeleteCate');
		});

		Route::group(['prefix'=>'typeproduct'],function(){
			Route::get('/','TypeProductController@getTypeProduct');
			Route::post('/','TypeProductController@postTypeProduct');

			Route::get('edit/{id}','TypeProductController@getEditTypeProduct');
			Route::post('edit/{id}','TypeProductController@postEditTypeProduct');

			Route::get('delete/{id}','TypeProductController@getDeleteTypeProduct');
		});

		Route::group(['prefix'=>'slide'],function(){
			Route::get('/','SlideController@getSlide');
			Route::post('/','SlideController@postSlide');

			Route::get('delete/{id}','SlideController@getDeleteSlide');
		});

		Route::get('/bill','BillController@getBillController');
	});
});




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
