<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\addUserController;
use App\Http\Middleware\EnsureUserLoginAdmin;



// BEGIN::PUBLIC
Route::get('/', [AppController::class, 'index'])->name('public.index');
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");
Route::get( "/login", [PublicHomeController::class,"login"])->name("publicLogin");
Route::get( "/register", [PublicHomeController::class,"register"])->name("publicRegister");
Route::post( "/register", [PublicHomeController::class,"postRegister"]);

Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/category', [CategoryController::class, 'Index'])->name("category.index");
Route::get('/category/{slug}', [CategoryController::class, 'category'])->name("category");

Route::get('/product',[ProductController::class,'publicIndex'])->name('public.product.index');
Route::get('/product-detail/{id}',[ProductDetailController::class,'product-detail'])->name('product-detail');
// Route::get('/product/taosp', [ProductController::class, 'create'])->name("product.create");

// END::PUBLIC

// BEGIN::ADMIN
Route::middleware([EnsureUserLoginAdmin::class])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('Admin.index');
    Route::prefix('admin')->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/edit{id}', [ProductController::class, 'edit'])->name("product.edit");
        // Route::post('/product/udpate', [ProductController::class, 'update'])->name('product.update');
        // Route::get('/product/insert', [ProductController::class, 'create'])->name('product.insert');

        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController :: class,'store'])->name('product.store');

        Route::get('/add-account', [addUserController::class, 'showRegiserForm'])->name('account.add');
        Route::post('/add-account', [addUserController::class, 'addAccount'])->name('account.addEx');
    });
});
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout');

// END:ADMIN
