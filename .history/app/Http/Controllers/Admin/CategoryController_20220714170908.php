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
        $htmlOptions =$this->categoryRecursive(0);
        die();
        return view('admin.category.create');
    }
    public function categoryRecursive($id,$text = "")
    {
        $data = Category::all();
        foreach ($data as $value){
            dd($value);

            if($value['parent_id'] === $id ){
                // $this->htmlSelect = `<option>{$text}{$value}</option>`;
                echo $value['category_name'];
               echo `<option>{$text}{$value['category_name']}</option>`;
                $this->categoryRecursive($value['category_id'],'-');
            }
        }
        return $this->htmlSelect;
    }
}
