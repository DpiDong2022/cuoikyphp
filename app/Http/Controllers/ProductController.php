<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', ['products' => $this->list(), 'categories' => Category::all()]);
    }
    public function publicIndex(){
        // $all_products = DB::table('products')
        // ->join('category','id','=','products.category_id')
        // ->orderby('products.id','desc')->get();
        $product = Product::all();
        $category = Category::orderBy('name','ASC')->get();
        $all_products = DB::table('products')->orderby('products.id','desc')->limit(20)->get();

        //return view('public.product.index', ['products' => Product::all(), 'category' => Category::orderBy('name','ASC')->get()]) ;
        return view('public.product.index',compact('product','category','all_products'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

    }

    public function list(){
        return Product::all();
    }
}
