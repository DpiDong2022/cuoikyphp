<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\ProductController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// BEGIN::PUBLIC
Route::get('/',[AppController::class,'index'])->name('public.index');
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");

Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/category', [CategoryController::class, 'Index'])->name("category.index");

// Route::get('/product/taosp', [ProductController::class, 'create'])->name("product.create");
// Route::get('/product/luu', [ProductController::class, 'store'])->name("product.store");

// END::PUBLIC

// BEGIN::ADMIN
Route::get('/admin', [AdminHomeController::class, 'Index'])->name("Admin.index");
// END:ADMIN
