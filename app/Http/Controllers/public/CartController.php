<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\InvoiceDetail;
use App\Models\Invoice;
use App\Models\Varient;
use App\Models\Category;
use Cart;

class CartController extends Controller
{
    public function index()
{
    
    if (!session('user')) {
        return redirect()->route('publicLogin');
    }

    
    $latestInvoice = Invoice::where('user_id', session('user')->id)->where('status_id', 5)
                                                                    ->orderBy('id', 'desc')
                                                                    ->first();

    if (!$latestInvoice) {
        
        return view('cart.empty');
    }
    
    
    
    $invoiceDetails = InvoiceDetail::where('invoice_id', $latestInvoice->id)->get();
    $total = $invoiceDetails->sum(function ($invoiceDetail) {
        return $invoiceDetail->varient->product->price * $invoiceDetail->quantity;
    });
    

    
    return view('public.cart.index', ['total' => $total],['invoiceDetails' => $invoiceDetails]);
}

    public function add(Varient $var){
        
        dd($var);

    }public function update(Product $product){

    }public function delete(Product $product){

    }
    public function clear(){
//aaa
    }
}
