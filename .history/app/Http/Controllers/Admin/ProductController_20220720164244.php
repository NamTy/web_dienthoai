<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.products.product');
    }
    public function create()
    {
        return view('admin.products.create');
    }
}
