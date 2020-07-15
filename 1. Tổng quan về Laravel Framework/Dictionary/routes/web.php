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
    return view('dictionary');
});


Route::post('/dictionary', function (Illuminate\Http\Request $request) {

    if (isset($request->english)) {
        $english = $request->english;
        $english_array = ["pen", "book", "library", "school"];
        $vietnam_array = ["bút", "sách", "thư viện", "trường học"];
        $result = "";
        for ($i = 0; $i < count($english_array); $i++) {
            if ($english_array[$i] === $english) {
                $result = $vietnam_array[$i];
            }
        }
        if($result === ""){
            $error = "Không tìm thấy";
        }
        else{
            $error = "";
        }
        return view('result', compact(['result'], ['error']));
    }

    return view('dictionary');
});
