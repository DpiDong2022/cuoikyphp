<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $user_id
 * @property float $total
 * @property string $status_id
 * @property int $order_information_id
 * @property  \Illuminate\Support\Carbon|null $date
 */

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    public function user()
    {
        return $this -> belongsTo(User::class, 'user_id');
    }

    public function payment()
    {
        return $this -> hasOne(Payment::class, 'invoice_id');
    }

    public function orderInformation()
    {
        return $this -> belongsTo(OrderInformation::class, 'invoice_id');
    }

    public function status()
    {
        return $this -> belongsTo(InvoiceStatus::class, 'status_id');
    }

    public function invoiceDetails()
    {
        return $this -> hasMany(InvoiceDetail::class, 'invoice_id');
    }

    // public function varients()
    // {
    //     return $this -> hasManyThrough(Varient::class, InvoiceDetail::class, 'invoice_id', 'varient_id', 'id', 'id');
    // }
}
