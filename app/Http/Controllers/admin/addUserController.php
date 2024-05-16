<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

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
        ], [
            'password.confirmed' => 'The password confirmation does not match.',
        ]);

        Account::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Your account has been created! You can now log in.');
    }
}
