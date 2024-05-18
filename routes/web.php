<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\addUserController;

use App\Http\Controllers\admin\credInfoController;
use App\Http\Middleware\EnsureUserLoginAdmin;

use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\orderDetailsController;

// BEGIN::PUBLIC
Route::get('/', [AppController::class, 'index'])->name('public.index');
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");

Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/category', [CategoryController::class, 'Index'])->name("category.index");

Route::get('/product',[ProductController::class,'publicIndex'])->name('public.product.index');
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
        Route::get('/info-account', [credInfoController::class, 'showCred'])->name('account.info');
        Route::post('/add-account', [addUserController::class, 'addAccount'])->name('account.addEx');

        Route::get('/order', [orderController::class, 'showInvoice'])->name('order.info');
        Route::get('/order/{order}', [orderDetailsController::class, 'show'])->name('order.detail');
        Route::patch('orders/{order}/status', [orderDetailsController::class, 'updateStatus'])->name('order.updateStatus');
    });
});
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout');


// END:ADMIN
