<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index(){
        return view('admin.menus.menu');
    }

    public function create(){
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
