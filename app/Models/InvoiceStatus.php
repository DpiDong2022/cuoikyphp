<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OrderDetail
 *
 * @property int $id
 * @property string $name
 */

class InvoiceStatus extends Model
{
    use HasFactory;
    protected $table = 'invoice_status';

    public function invoices()
    {
        return $this -> hasMany(Invoice::class, 'status_id');
    }
}
