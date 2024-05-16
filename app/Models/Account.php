<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;

    // Specify the table name
    protected $table = 'accounts';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';

    protected $fillable = [
        'username', 'password', 'roleid'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Override the method to specify the username field
    public function getAuthIdentifierName()
    {
        return 'username';
    }

/**
 * App\Models\Review
 *
 * @property int $id
 * @property int $password
 * @property int $role_id
 * @property int $username
 */

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
}


