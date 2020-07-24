<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormInput;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function checkValidation(FormInput $request)
    {
        $success = "Dữ liệu được xác thực thành công";
        return view('customer.register', compact('success'));
    }
}
