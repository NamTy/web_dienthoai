<?php

namespace App\Http\Controllers\Admin;

use App\Components\MenusRecusive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    private $menusRecusive;
    /**
     * Class constructor.
     */
    public function __construct(MenusRecusive $menusRecusive)
    {
        $this->menusRecusive = $menusRecusive;
    }
    public function index(){
        return view('admin.menus.menu');
    }

    public function create(){
        $optionSelect = $this->menusRecusive->menuRecusiveAdd();
       echo "<pre>";
           var_dump($optionSelect);
       echo "</pre>";
        return view('admin.menus.create');
    }

    public function store(){


    }

    public function edit(){

    }
    public function delete(){

    }
    public function update(){

    }
}
