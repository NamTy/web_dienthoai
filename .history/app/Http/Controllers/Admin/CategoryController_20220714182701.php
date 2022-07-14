<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $htmlSelect;
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function index()
    {
        return view('admin/category.category');
    }
    public function create()
    {
        $data = $this->category->all();
        // $recusive = new Recusive($data);
        $htmlOptions = (new Recusive($data))->categoryRecursive();
        return view('admin.category.create', compact('htmlOptions'));
    }
    public function store(Request $request){
        $this->category->create(
            [
                'category_name'=>$request->name,
                'parent_id'=>$request->parent_id,
            ]
            );
    }
}
