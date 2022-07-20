<?php

namespace App\Http\Controllers\Admin;

use App\Components\MenusRecusive;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    private $menusRecusive;
    private $menu;
    /**
     * Class constructor.
     */
    public function __construct(MenusRecusive $menusRecusive, Menu $menu)
    {
        $this->menusRecusive = $menusRecusive;
        $this->menu = $menu;
    }
    public function index(){
        $this->menu->paginate(10);
        return view('admin.menus.menu');
    }

    public function create(){
        $optionSelect = $this->menusRecusive->menuRecusiveAdd();
        return view('admin.menus.create',compact('optionSelect'));
    }

    public function store(Request $request){
        $this->menu->create([
            'name' => $request->menus_name,
            'parent_id' => $request->parent_id,
        ]);
        return redirect()->route('menus.create');
    }

    public function edit(){

    }
    public function delete(){

    }
    public function update(){

    }
}
