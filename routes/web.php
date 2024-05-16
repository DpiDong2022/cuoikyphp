<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\ProductController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderInformationController;

// BEGIN::PUBLIC
Route::get('/', [PublicHomeController::class, 'Index'])->name("Home.index");
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");
Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/product/taosp', [ProductController::class, 'create'])->name("product.create");
Route::get('/product/luu', [ProductController::class, 'store'])->name("product.store");

Route::get('/checkout', [OrderInformationController::class, 'index'])->name("checkout.index");





// END::PUBLIC

// BEGIN::ADMIN
Route::get('/admin', [AdminHomeController::class, 'Index'])->name("Admin.index");
// END:ADMIN
