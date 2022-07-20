<?php

namespace App\Http\Controllers\Admin;

use App\Components\MenusRecusive;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    private $menusRecusive;
    /**
     * Class constructor.
     */
    public function __construct(MenusRecusive $menusRecusive, Menu $menu)
    {
        $this->menusRecusive = $menusRecusive;
    }
    public function index(){
        return view('admin.menus.menu');
    }

    public function create(){
        $optionSelect = $this->menusRecusive->menuRecusiveAdd();
        return view('admin.menus.create',compact('optionSelect'));
    }

    public function store(Request $request){

        return
    }

    public function edit(){

    }
    public function delete(){

    }
    public function update(){

    }
}
