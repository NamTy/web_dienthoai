<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function index(){
    //     return view('admin.dashboard');
    // }
    public function loginAdmin(){
        return view('admin.login');
    }
    public function postAdminLogin(Request $request)
    {
        dd($request->all());
    }
}
