<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $htmlSelect;
    public function index()
    {
        return view('admin/category.category');
    }
    public function create()
    {
        $htmlOptions =$this->categoryRecursive(0)
        return view('admin.category.create');
    }
    public function categoryRecursive($id,$text = " ")
    {
        $data = Category::all();
        foreach ($data as $category){
            if($category === $id ){
                $
            }
        }
    }
}
