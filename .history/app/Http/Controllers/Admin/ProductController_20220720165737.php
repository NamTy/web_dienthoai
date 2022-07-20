<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

class ProductController extends Controller
{

    public function index()
    {

        return view('admin.products.product');
    }
    public function create()
    {
        // $category = ;
        $category = new CategoryController(new Category);
        $htmloptions = $category->getCategory('');

        return view('admin.products.create', compact('htmloptions'));
    }
}
