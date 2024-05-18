<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.adminHome.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // $hashedPassword = Hash::make($request->password);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('account')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $accountId = Auth::guard('account')->user()->id;
            Auth::login(Auth::guard('account')->user());

            session(['account_id' => $accountId]);

            return redirect()->intended(route('Admin.index'));
        }

        return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('account')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('admin.adminHome.login');
    }
}
