<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $categories = $this->category->latest()->first()->paginate(5);
        /*
            latest() sắp xếp kết quả trả về theo ngày theo cột created_at
            paginate() trả về bao nhiêu giá trị theo thơi gian mới nhất->cũ nhất
        */
        return view('admin/category.category',compact('categories'));
    }
    public function create()
    {
        $data = $this->category->all();
        $htmlOptions = (new Recusive($data))->categoryRecursive();
        return view('admin.category.create', compact('htmlOptions'));
    }
    public function edit($id){
        $data = $this->category->all();
        $htmlOptions = (new Recusive($data))->categoryRecursive();
        $categories = $this->category->find($id);
        // $categories = $this->category->all()->where('category_id',$id);
        // dd($categories[0]->category_name);
        return view('admin.category.edit',compact('categories', 'htmlOptions'));
    }
    public function delete($id){
        return view('admin.category.delete');
    }
    public function store(Request $request){
        $this->category->create(
            [
                'category_id' => $request->category_id,
                'category_name'=>$request->category_name,
                'parent_id'=>$request->parent_id,
                'slug'=>Str::slug($request->name, '-')
            ]
            );
            return redirect()->route('category.create');
    }
}
