<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('main');
Route::get('/cart', 'PagesController@cart')->name('cart');
Route::get('/checkout', 'PagesController@checkout')->name('checkout');
Route::get('/details', 'PagesController@details')->name('details');
Route::get('/wishlist', 'PagesController@wishlist')->name('wishlist');
Route::get('/searchlist', 'PagesController@searchlist')->name('searchlist');

//Admin
Route::get('/add_product', 'ProductController@add_product')->name('add_product');

