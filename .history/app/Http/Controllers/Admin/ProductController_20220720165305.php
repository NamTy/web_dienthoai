<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

class ProductController extends Controller
{

    public function index(Category $category)
    {
        $htmloptions = new CategoryController($category)->getCategory('');

        return view('admin.products.product');
    }
    public function create()
    {
        return view('admin.products.create');
    }
}
