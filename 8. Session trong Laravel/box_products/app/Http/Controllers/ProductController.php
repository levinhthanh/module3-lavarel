<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('list_product', compact(['products']));
    }

    public function view_detail($id)
    {
        $productKey = 'product_' . $id;
        if (!Session::has($productKey)) {
            Session::put($productKey, 0);
            $count = 0;
        } else {
            $count = Session::pull($productKey, null);
        }
        $product = Product::findOrFail($id);
        return view('details', compact('product', 'count'));
    }

    public function add_box($id)
    {
        $productKey = 'product_' . $id;
        if (!Session::has($productKey)) {
            Session::put($productKey, 1);
            $count = 1;
        } else {
            $count = Session::pull($productKey, null);
            $count = (int)$count + 1;
            Session::put($productKey, $count);
        }
        $product = Product::findOrFail($id);
        return view('details', compact('product', 'count'));
    }

    public function view_box()
    {
        $session = Session::all();
        $array = [];
        foreach ($session as $key => $value) {
            $check = substr($key, 0, 4);
            if ($check === 'prod') {
                $id = substr($key, 8);
                $info = Product::findOrFail($id);
                $product = [$info, $value];
                array_push($array, $product);
            }
        }
        // dd($array);
        return view('list_box', compact('array'));
    }


}
