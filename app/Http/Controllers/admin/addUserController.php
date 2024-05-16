<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class addUserController extends Controller
{
    public function showRegiserForm()
    {
        return view("admin.adminHome.register");
    }

    public function addAccount(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:accounts',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|integer'
        ], [
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        $username = $request->input('username');
        $password = Hash::make($request->input('password'));
        $role_id = $request->input('role_id');

        DB::table('accounts')->insert([
            'username' => $username,
            'password' => $password,
            'role_id' => $role_id,
        ]);

        return redirect()->back()->with('success', 'Account created successfully!');
    }
}
