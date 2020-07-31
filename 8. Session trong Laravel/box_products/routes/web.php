<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductController@index')->name('view_list');
Route::get('/get_products', 'ProductController@get_products')->name('get_products');
Route::get('/view_box', 'ProductController@view_box')->name('view_box');
Route::get('/product/{id}', 'ProductController@view_detail');
Route::get('/add/{id}', 'ProductController@add_box');
// Route::group(['prefix' => 'product'], function () {
//     Route::get('/{id}', 'ProductController@view_detail');
// });

// Route::group(['prefix' => 'add'], function () {
//     Route::get('/{id}', 'ProductController@add_box');
// });




Route::get('/delete/{id}', 'CartController@delete')->name('delete');
Route::get('/increase/{id}', 'CartController@increase')->name('increase');
Route::get('/reduce/{id}', 'CartController@reduce')->name('reduce');
Route::get('/sum', 'CartController@sum')->name('sum');
Route::get('/multi/{id}', 'CartController@multi')->name('multi');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::get('/product_list', 'AdminController@product_list')->name('product_list');
Route::get('/add_product', 'AdminController@add_product')->name('add_product');

