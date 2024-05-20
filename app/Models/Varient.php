<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\LowStockNotification;
use Illuminate\Support\Facades\Notification;

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
 * @property string $price
 */

class Varient extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'varients';
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function invoiceDetails()
    {
        return $this -> hasMany(InvoiceDetail::class, 'varient_id');
    }
    public static function boot()
    {
        parent::boot();

        static::updated(function ($varient) {
            if ($varient->quantity <= $varient->minimum_qty) {
                // Notify all admin accounts
                $accounts = Account::whereHas('role', function ($query) {
                    $query->where('name', 'admin'); // Assuming role name 'admin' for admin accounts
                })->get();

                Notification::send($accounts, new LowStockNotification($varient));
            }
        });
    }
}
