<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\role
 *
 * @property int $id
 * @property string $name
 */

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function users()
    {
        return $this -> hasMany(User::class,'role_id');
    }
}
