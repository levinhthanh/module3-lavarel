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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/','BlogController@index')->name('blog.index');
    Route::get('/create','BlogController@create')->name('blog.create');
    Route::post('/create','BlogController@store')->name('blog.store');
    Route::get('/{id}/read','BlogController@read')->name('blog.read');
    Route::get('/{id}/edit','BlogController@edit')->name('blog.edit');
    Route::post('/{id}/edit','BlogController@update')->name('blog.update');
    Route::get('/{id}/destroy','BlogController@destroy')->name('blog.destroy');
  });

  Route::group(['prefix' => 'category'], function () {
    Route::get('/','CategoryController@index')->name('category.index');
    Route::get('/create','CategoryController@create')->name('category.create');
    Route::post('/create','CategoryController@store')->name('category.store');
    Route::get('/{id}/read','CategoryController@read')->name('category.read');
    Route::get('/{id}/edit','CategoryController@edit')->name('category.edit');
    Route::post('/{id}/edit','CategoryController@update')->name('category.update');
    Route::get('/{id}/destroy','CategoryController@destroy')->name('category.destroy');
  });
