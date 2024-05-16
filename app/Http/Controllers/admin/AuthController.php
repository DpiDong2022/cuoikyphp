<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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

        $hashedPassword = Hash::make($request->password);

        $credentials = [
            'username' => $request->username,
            'password' => $hashedPassword,
        ];

        if (Auth::guard('account')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('Admin.index'));
        }

        throw ValidationException::withMessages([
            'username' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('account')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
