<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Variant
 *
 * @property int $id
 * @property int $product_id
 * @property int $memory
 * @property int $storage
 * @property int $minimum_qty
 * @property string $image
 * @property int $quantity
 * @property string $color
 */

class Varient extends Model
{
    use HasFactory;

    protected $table = 'varients';
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function invoiceDetails()
    {
        return $this -> hasMany(InvoiceDetail::class, 'varient_id');
    }
}
