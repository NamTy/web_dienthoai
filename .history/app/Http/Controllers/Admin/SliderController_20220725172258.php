<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.sliders.slider');
    }
    public function create()
    {
        return view('admin.sliders.create');
    }
}
