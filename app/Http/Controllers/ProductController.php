<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($product = '')
    {
        return view('product', compact('product'));
    }

    public function form()
    {
        return view('form');
    }

    public function coba_post(Request $request)
    {
        return $request;
    }
}
