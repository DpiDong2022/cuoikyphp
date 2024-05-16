<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function Index()
    {
        return view("admin.adminHome.index");
    }

    // public function product()
    // {
    //     // Fetch all products
    //     // $products = Product::all();

    //     // Pass the products to the view
    //     // compact('products')
    //     return view('admin.products.index');
    // }
}
