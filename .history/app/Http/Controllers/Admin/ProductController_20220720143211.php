<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin/products.product');
    }
    public function create()
    {
        dd("nam đẹp trai");
        return view('admin.products.create');
    }
}
