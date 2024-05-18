<?php

namespace App\Http\Controllers\admin;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use App\Models\OrderInformation;

class orderDetailsController extends Controller
{

    public function show($id)
    {
        $order = Invoice::with(['user', 'status', 'invoiceDetails.varient', ])->findOrFail($id);
        $statuses = InvoiceStatus::all();
        $orderInformation = OrderInformation::findOrFail($id);
        return view('admin.adminHome.orderDetails', compact('order', 'statuses', 'orderInformation'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_id' => 'required|exists:invoice_status,id',
        ]);

        $order = Invoice::findOrFail($id);
        $order->status_id = $request->status_id;
        $order->save();

        return redirect()->route('order.detail', $order->id)->with('success', 'Order status updated successfully.');
    }
}
