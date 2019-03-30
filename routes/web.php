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

Route::get('/show-cart', 'ProductController@showCart')->name('show.cart');
Route::get('/forget', 'ProductController@destroy')->name('destroy');
Route::get('/reduce-by-one/{id}', 'ProductController@reduceByOne')->name('reduce.by.one');
Route::get('/delete/{id}', 'ProductController@delete')->name('delete.product');
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout');
Route::post('/checkout', 'CheckoutController@checkoutForm')->name('checkout.form');
Route::get('/success', 'CheckoutController@success')->name('success.redirect');
Route::post('/get-user', 'CheckoutController@getUser')->name('get.user');
Route::get('/get-order', 'OrderController@getOrders')->name('get.order');

Route::get('/', 'HomeController@index')->name('main.page');
//Route::get('/{slug}', 'PageController@show')->name('page');
Route::get('/catalog/{slug}', 'ProductController@show')->name('show.product');
Route::get('/categories/{slug}', 'CategoryController@productList')->name('product.list');
Route::get('/{slug}', 'PageController@show')->name('show.page');
Route::post('/search', 'SearchController@search')->name('search');


Route::get('/get-add-to-cart/{id}', 'ProductController@getAddToCart')->name('add.to.cart');