<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property float $discount
 * @property string $image
 */

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    // protected $fillable = ['id', 'name', 'category_id','price','image','description','discount'];

    public function reviews()
    {
        return $this->hasMany(Review::class,'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function varients()
    {
        return $this->hasMany(Varient::class,'product_id');
    }
}
