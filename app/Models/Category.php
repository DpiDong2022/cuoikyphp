<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Review
 *
 * @property int $id
 * @property string $name
 */

class Category extends Model
{
     use HasFactory;
    protected $table = 'categories';
    // protected $fillable = ['id', 'name'];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
