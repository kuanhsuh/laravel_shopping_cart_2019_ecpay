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

Route::get('/', 'BooksController@index');
Route::get('/cart', 'BooksController@cart');
Route::get('/increase-one-item/{id}', 'BooksController@increaseByOne');
Route::get('/decrease-one-item/{id}', 'BooksController@decreaseByOne');
Route::get('/remove-item/{id}', 'BooksController@removeItem');
Route::get('/add-to-cart/{id}', 'BooksController@getAddToCart');
Route::get('/clear-cart', 'BooksController@clearCart');
Route::get('/order/new', 'OrdersController@new');
Route::post('/orders', 'OrdersController@store');
Route::get('/orders', 'OrdersController@index');
Route::get('/confirm-orders/{order}', 'OrdersController@confirm');
