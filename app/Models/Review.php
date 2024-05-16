<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property string $image
 * @property int $rating
 * @property string $comment
 */

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Review::class,'product_id');
    }
}
