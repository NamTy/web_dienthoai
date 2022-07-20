<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

class ProductController extends Controller
{

    public function index(Category $category)
    {
        $a = new CategoryController($category);
        dd($a->getCategory(""));

        return view('admin.products.product');
    }
    public function create()
    {
        return view('admin.products.create');
    }
}
