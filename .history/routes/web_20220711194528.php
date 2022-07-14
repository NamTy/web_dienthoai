<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/shop-grid',[HomeController::class,'product'])->name('product');
Route::get('list/shop-details',[HomeController::class,'product_detail'])->name('shop-details');
Route::get('list/shoping-cart.',[HomeController::class,'product_cart'])->name('shoping-cart');
Route::get('list/checkout',[HomeController::class,'product_checkout'])->name('checkout');
Route::get('list/blog-details',[HomeController::class,'blog_detail'])->name('blog_details');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');



// Route::
Route::get('/admin',function(){
    return "Nam đẹp trai";
});
