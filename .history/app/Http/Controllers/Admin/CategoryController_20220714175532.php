<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $htmlSelect;
    public function __construct()
    {
        $this->htmlSelect = '';
    }
    public function index()
    {
        return view('admin/category.category');
    }
    public function create()
    {
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOptions = $this->categoryRecursive(0);
        return view('admin.category.create', compact('htmlOptions'));
    }
}
