<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ProductController extends Controller
{

    public function index()
    {
        $a = (new CategoryController)->getCategory();
        dd($a);
        return view('admin.products.product');
    }
    public function create()
    {
        return view('admin.products.create');
    }
}
