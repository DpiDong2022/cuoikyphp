<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderDetail
 *
 * @property int $id
 * @property int $invoice_id
 * @property bool $is_visible
 * @property int $quantity
 * @property int $varient_id
 */

class InvoiceDetail extends Model
{
    use HasFactory;
    public function invoice()
    {
        return $this -> belongsTo(Invoice::class, 'invoice_id');
    }

    public function varient()
    {
        return $this -> belongsTo(Varient::class, 'varient_id');
    }
}
