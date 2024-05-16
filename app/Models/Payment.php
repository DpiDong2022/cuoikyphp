<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $user_id
 * @property int $amount
 * @property int $invoice_id
 * @property \Illuminate\Support\Carbon|null $payment_date
 * @property int $payment_method_id
 */

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';

    public function invoice()
    {
        return $this -> belongsTo(Invoice::class, 'invoice_id');
    }
    public function user()
    {
        return $this -> belongsTo(User::class, 'user_id');
    }

    public function paymentMethod()
    {
        return $this -> belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}
