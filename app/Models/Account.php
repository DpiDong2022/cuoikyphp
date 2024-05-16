<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
