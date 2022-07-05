<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('auth.home');
    }

    public function product(){
        return view('auth.product.shop-grid');
    }


    public function product_detail(){
        return view('auth.list.shop-details');
    }
    public function product_cart(){
        return view('auth.list.shoping-cart');
    }
    public function product_checkout(){
        return view('auth.list.shop-checkout');
    }
    public function blog_detail(){
        return view('auth.list.blog-details');
    }

    public function blog(){
        return view('auth.blog.blog');
    }

    public function contact(){
        return view('auth.contact.contact');
    }
}
