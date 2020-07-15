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
    return view('calculator');
});


Route::post('/calculator', function (Illuminate\Http\Request $request) {
    if (isset($request->description)
        && isset($request->price) && isset($request->discount)) {
            $productDescription = $request->description;
            $price = $request->price;
            $discountPercent = $request->discount;

            $discountAmount = (int)$price * (int)$discountPercent * 0.1;
            $discountPrice = (float)$discountAmount * $price;
            return view('result', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
    }

    return view('error');
});
