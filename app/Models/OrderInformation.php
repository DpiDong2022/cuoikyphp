<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property string $address
 * @property int $invoice_id
 * @property string $name
 * @property string $phone
 */

class OrderInformation extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this -> belongsTo(Invoice::class, 'invoice_id');
    }
}
