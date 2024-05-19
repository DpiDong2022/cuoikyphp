<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Cart;

class CartController extends Controller
{
    public function Index()
    {
        return view('public.cart.index');
    }
    public function add(Product $product){

    }public function update(Product $product){

    }public function delete(Product $product){

    }
    public function clear(){

    }
}
