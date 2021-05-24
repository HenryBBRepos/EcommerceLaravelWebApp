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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/cart', 'PagesController@cart')->name('cart');
Route::get('/checkout', 'PagesController@checkout')->name('checkout');
Route::get('/product_detail', 'PagesController@product_detail')->name('product_detail');
Route::get('/wishlist', 'PagesController@wishlist')->name('wishlist');
Route::get('/searchlist', 'PagesController@searchlist')->name('searchlist');
Route::get('/all_product', 'PagesController@all_product')->name('all_product');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/login', 'PagesController@login')->name('login');


Route::get('/signup_page', 'Account\AccountController@signup_page')->name('signup');
Route::post('/signup_page', 'AccountAccountController@signup');



//Admin
Route::get('/add_product', 'ProductController@add_product')->name('add_product');
Route::post('store', 'Admin\ProductController@store')->name('product.store');
Route::get('/all_product', 'Admin\ProductController@show')->name('all_product');
Route::get('/{id}', 'ProductController@show')->name('product_detail');

