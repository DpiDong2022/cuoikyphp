<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\OrderInformationController;
=======
use App\Http\Controllers\admin\AuthController;
>>>>>>> origin/duong

// BEGIN::PUBLIC
Route::get('/', [PublicHomeController::class, 'Index'])->name("Home.index");
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");

Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/category', [CategoryController::class, 'Index'])->name("category.index");

// Route::get('/product/taosp', [ProductController::class, 'create'])->name("product.create");
// Route::get('/product/luu', [ProductController::class, 'store'])->name("product.store");

Route::get('/checkout', [OrderInformationController::class, 'index'])->name("checkout.index");





// END::PUBLIC

// BEGIN::ADMIN
Route::get('/admin', [AdminHomeController::class, 'index'])->name('Admin.index');
Route::prefix('admin')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
// END:ADMIN
