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
        dd($htmlOptions);

        return view('admin.category.create',compact($htmlOptions));
    }
    public function categoryRecursive($id,$text = "")
    {
        $data = Category::all();
        foreach ($data as $value){
            if($value['parent_id'] === $id ){
                $this->htmlSelect .= "<option>".$text. $value['category_name'] ."</option>";
                $this->categoryRecursive($value['category_id'],'-');
            }
        }
        return $this->htmlSelect;
    }
}
