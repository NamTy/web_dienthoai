<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductController extends Controller
{

    public function index()
    {
        $a = (new Category())->getCategory();
        dd($a);
        return view('admin.products.product');
    }
    public function create()
    {
        return view('admin.products.create');
    }
}
