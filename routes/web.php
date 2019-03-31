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

Route::get('/',[
'uses'=>'FrontendController@index',
'as'=>'index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
	Route::resource('product','ProductController');
});

Route::get('/auth/{provider}',[
'uses'=>'AuthController@auth',
'as'=>'auth.provider'
]);

Route::get('/{provider}/redirect',[
'uses'=>'AuthController@auth_callback',
'as'=>'auth.callback'
]);

Route::get('/product/{id}/edit',[
'uses'=>'ProductController@edit',
'as'=>'product.edit'
]);

Route::get('/product/{id}',[
'uses'=>'ProductController@destroy',
'as'=>'product.destroy'
]);

Route::get('/product/{id}',[
'uses'=>'ProductController@update',
'as'=>'product.update'
]);

Route::get('/pro/{id}',[
'uses'=>'FrontendController@single',
'as'=>'product.single'
]);

Route::get('/cart/items',[
'uses'=>'CartController@items',
'as'=>'cart.items'
]);

Route::post('/cart/add',[
'uses'=>'CartController@add',
'as'=>'cart.add'
]);

Route::get('/cart/remove/{rowId}',[
'uses'=>'CartController@remove',
'as'=>'cart.remove'
]);

Route::get('/inc/item/{qntt}/{rid}',[
'uses'=>'CartController@inc',
'as'=>'inc.item'
]);

Route::get('/dec/item/{qntt}/{rid}',[
'uses'=>'CartController@dec',
'as'=>'dec.item'
]);


Route::get('/checkout/cart',[
'uses'=>'CartController@checkout',
'as'=>'checkout.cart'
]);

Route::post('/bill/payment',[
'uses'=>'PaymentController@pay',
'as'=>'bill.payment'
]);


Route::post('/cupon/discount',[
'uses'=>'CartController@discount',
'as'=>'cupon.discount'
]);










