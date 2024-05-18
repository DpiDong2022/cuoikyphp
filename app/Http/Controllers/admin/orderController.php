<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
class orderController extends Controller
{
    public function showInvoice()
    {
        $orders = Invoice::with(['user', 'invoiceDetails.varient.product'])
        ->get();
        return view('admin.adminHome.order', compact('orders'));
    }
}
