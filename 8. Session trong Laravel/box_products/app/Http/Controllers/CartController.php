<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function sum()
    {
        $session = Session::all();
        $sum = 0;
        foreach ($session as $key => $value) {
            $check = substr($key, 0, 4);
            if ($check === 'prod') {
                $id = substr($key, 8);
                $info = Product::findOrFail($id);
                $sum += (float) ($value * $info->price);
            }
        }
        $sum = number_format($sum) . 'đ';
        return response()->json($sum);
    }

    public function multi($id)
    {
        $info = Product::findOrFail($id);
        $id = 'product_' . $id;
        $count = Session::pull($id, null);
        Session::put($id, $count);
        $multi = (float) ($count * $info->price);
        $multi = number_format($multi) . 'đ';
        return response()->json($multi);
    }

    public function delete($id)
    {
        $session = Session::all();
        $id = 'product_' . $id;
        foreach ($session as $key => $value) {
            if ($key === $id) {
                Session::forget("$key");
            }
        }
        return response()->json('Đã xóa khỏi giỏ hàng');
    }

    public function increase($id)
    {
        $id = 'product_' . $id;
        $count = Session::pull($id, null);
        $count = (int)$count + 1;
        Session::put($id, $count);
        return response()->json($count);
    }

    public function reduce($id)
    {
        $id = 'product_' . $id;
        $count = Session::pull($id, null);
        $count = (int)$count - 1;
        if ($count < 0) {
            $count = 0;
        }
        Session::put($id, $count);
        return response()->json($count);
    }
}
