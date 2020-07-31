<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function add_product()
    {
        return view('add_product');
    }

    public function product_list()
    {
        return view('product_list');
    }
}
