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

Route::get('/','customer_controller@index' );


Route::prefix('customer')->group(function () {
    Route::get('/','customer_controller@index');
    Route::get('add', 'customer_controller@add');
    Route::get('edit', 'customer_controller@edit');
    Route::get('delete', 'customer_controller@delete');
});

Route::post('/add_process','customer_controller@add_process' );

