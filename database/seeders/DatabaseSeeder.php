<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Account::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'roleid' => 1,
        ]);
    }
}
