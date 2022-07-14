<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){
        $this->htmlSelect = '';
    }
    public function index()
    {
        return view('admin/category.category');
    }
    public function create()
    {
        $htmlOptions =$this->categoryRecursive(0);
        return view('admin.category.create',compact('htmlOptions'));
    }

}
