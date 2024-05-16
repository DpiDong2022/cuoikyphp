<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
//  * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
//  * @property string|null $token
 */

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function invoices()
    {
        return $this -> hasMany(Invoice::class, 'user_id');
    }
    public function payments()
    {
        return $this -> hasMany(Payment::class, 'user_id');
    }

    public function reviews()
    {
        return $this -> hasMany(Review::class, 'user_id');
    }

    public function role()
    {
        return $this -> belongsTo(Role::class, 'role_id');
    }
}
