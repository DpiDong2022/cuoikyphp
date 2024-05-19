<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\public\CartController;
use App\Http\Controllers\public\PublicHomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VarientController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\addUserController;

use App\Http\Controllers\admin\credInfoController;
use App\Http\Middleware\EnsureUserLoginAdmin;

use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\orderDetailsController;
use App\Http\Controllers\PostController;

// BEGIN::PUBLIC
Route::get('/', [AppController::class, 'index'])->name('public.index');
Route::get('/home', [PublicHomeController::class, 'Index'])->name("Home.index");
Route::get("/login", [PublicHomeController::class, "login"])->name("publicLogin");
Route::get("/login/verify", [PublicHomeController::class, "veriryLogin"])->name("publicLogin.verify");
Route::get("/register", [PublicHomeController::class, "register"])->name("publicRegister");
Route::post("/register", [PublicHomeController::class, "postRegister"]);
Route::get("/publicLogout", [PublicHomeController::class, "publicLogout"]) -> name('publicLogout');

Route::get('/cart', [CartController::class, 'Index'])->name("cart.index");
Route::get('/category', [CategoryController::class, 'Index'])->name("category.index");
Route::get('/category/{slug}', [CategoryController::class, 'category'])->name("category");


Route::get('/product', [ProductController::class, 'publicIndex'])->name('public.product.index');
Route::get('/product-detail/{id}', [ProductController::class, 'product_detail'])->name('product_detail');
Route::get('/product', [ProductController::class, 'publicIndex'])->name('public.product.index');


Route::group(['prefix'=> 'cart'],function(){
    Route::get('/',[CartController::class,'index'])->name('cart.index');
    Route::get('/add/{product}',[CartController::class,'add'])->name('cart.add');
    Route::get('/delete/{product}',[CartController::class,'delete'])->name('cart.delete');
    Route::get('/update/{product}',[CartController::class,'update'])->name('cart.update');
    Route::get('/clear',[CartController::class,'clear'])->name('cart.clear');
});

Route::get('/emailVerify', [PublicHomeController::class, 'indexVerifyEmail'])->name('email.formVerify');
Route::post('/sendTokenToEmail', [PublicHomeController::class, 'sendTokenToEmail'])->name('email.sendToken');
Route::post('/verifyEmail', [PublicHomeController::class, 'verifyEmail'])->name('email.verify');
Route::post('/storeUser', [PublicHomeController::class, 'storeUser'])->name('email.storeUser');
Route::get('/enterPassregis', [PublicHomeController::class, 'enterPasswordForm'])->name('email.enterPasswordRe');

// Route::get('/product/taosp', [ProductController::class, 'create'])->name("product.create");

// END::PUBLIC

// BEGIN::ADMIN
Route::middleware([EnsureUserLoginAdmin::class])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('Admin.index');
    Route::prefix('admin')->group(function () {
        Route::get('/products', [ProductController::class, 'index'])->name('product.index');

        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

        Route::get('products/{id}/variants', [VarientController::class, 'index'])->name('varient.index');
        Route::get('varients/{varient}/edit', [VarientController::class, 'edit'])->name('varient.edit');
        Route::put('varient/update/{id}', [VarientController::class, 'update'])->name('varient.update');
        Route::post('varient/store', [VarientController::class, 'store'])->name('varient.store');


        Route::get('/add-account', [addUserController::class, 'showRegiserForm'])->name('account.add');
        Route::get('/info-account', [credInfoController::class, 'showCred'])->name('account.info');
        Route::post('/add-account', [addUserController::class, 'addAccount'])->name('account.addEx');

        Route::get('/order', [orderController::class, 'showInvoice'])->name('order.info');
        Route::get('/order/{order}', [orderDetailsController::class, 'show'])->name('order.detail');
        Route::patch('orders/{order}/status', [orderDetailsController::class, 'updateStatus'])->name('order.updateStatus');

        Route::get('/create-post', [PostController::class, 'create'])->name('post.create');
        // Route::get('/export-template', function () {
        //     $path = public_path('them_sanpham_template.xlsx');
        //     return response()->download($path);
        // })->name('product.export-template');
    });
});
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('logout');


// END:ADMIN
