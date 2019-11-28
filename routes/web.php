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
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/add-to-cart/{id}', 'BooksController@getAddToCart');
// Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todo.edit');
// Route::get('/todos/{todo}/{slug}', 'TodoController@show')->name('todo.show');
