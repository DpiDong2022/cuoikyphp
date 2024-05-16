<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Review
 *
 * @property string $id
 * @property string $name
 */

class PaymentMethod extends Model
{
    use HasFactory;
    protected $table = 'payment_method';
    public function payments()
    {
        return $this->hasMany(Payment::class,'payment_method_id');
    }
}
