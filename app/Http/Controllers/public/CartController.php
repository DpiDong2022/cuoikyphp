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
        $invoiceDetails = InvoiceDetail::where('invoice_id', $latestInvoice->id)->get();
        $total = $invoiceDetails->sum(function ($invoiceDetail) {
            return $invoiceDetail->varient->product->price;
        });



        return view('public.cart.index', ['total' => $total], ['invoiceDetails' => $invoiceDetails]);
    }

    public function add(Request $request)
    {
        try {
            // Extract request data
            $productId = $request->product_id;
            $color = $request->color;
            $memory = $request->memory;
            $storage = $request->storage;
            $user_id = session()->get('user')->id;

            $latestInvoice = Invoice::where('user_id', $user_id)
                ->where('status_id', 5)
                ->orderBy('date', 'desc') // Order by the date column in descending order
                ->first();

            if ($latestInvoice) {
                // If there is an existing invoice, use its ID
                $orderId = $latestInvoice->id;
            } else {
                // If no invoice exists, create a new one
                $newInvoice = new Invoice();
                $newInvoice->user_id = $user_id;
                $newInvoice->status_id = 5;
                // Add other necessary fields to the new invoice
                $newInvoice->save();

                $orderId = $newInvoice->id;
            }

            // Find the variant ID based on the provided attributes
            $variant = Varient::where('product_id', $productId)
                ->where('color', $color)
                ->where('memory', $memory)
                ->where('storage', $storage)
                ->first();

            if ($variant) {
                // Check if an invoice detail exists for the given order ID and variant ID
                $invoiceDetail = InvoiceDetail::where('invoice_id', $orderId)
                    ->where('varient_id', $variant->id)
                    ->first();

                if ($invoiceDetail) {
                    // If the invoice detail exists, update the quantity
                    $invoiceDetail->quantity += 1; // Assuming you want to add 1 to the quantity
                    $invoiceDetail->save();
                } else {
                    // If the invoice detail doesn't exist, create a new one
                    $newInvoiceDetail = new InvoiceDetail();
                    $newInvoiceDetail->invoice_id = $orderId;
                    $newInvoiceDetail->varient_id = $variant->id;
                    $newInvoiceDetail->quantity = 1; // Assuming you want to start with a quantity of 1
                    $newInvoiceDetail->save();
                }
            }
            return redirect()->back()->with('success', 'Thêm vào giỏ hàng thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Product $product)
    {
    }
    public function delete(Product $product)
    {
    }
    public function clear()
    {
        //aaa
    }
}
