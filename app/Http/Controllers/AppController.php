<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class AppController extends Controller
{
    public function index(){
        $product = Product::all();
        // $category = Category::orderBy('id','ASC')->get() ;
        return view('public.index',compact('product'));
        // $category = Category::orderBy('id','ASC')->get();
        // return view('public.index', ['products' => Product::all(), 'category' => Category::orderBy('name','ASC')->get()]) ;
    }
}
