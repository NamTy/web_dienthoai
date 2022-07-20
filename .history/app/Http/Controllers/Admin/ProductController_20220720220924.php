<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        return view('admin.products.product');
    }
    public function create()
    {
        $category = new Category;
        $category = new CategoryController($category);
        $htmloptions = $category->getCategory('');

        return view('admin.products.create', compact('htmloptions'));
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
