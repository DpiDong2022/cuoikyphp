<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendTokenMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Hash;
use Illuminate\Support\Str;
use DB;
use PhpParser\Node\Expr\Cast\Bool_;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    public function emailForm()
    {
        return view('public.resetPassword.enterEmail');
    }
    public function tokenForm()
    {
        return view('public.resetPassword.enterToken');
    }
    public function passwordForm()
    {
        return view('public.resetPassword.enterPassword');
    }

    public function sendToken(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|max:255'
            ]);

            $email = $request->email;

            $user = DB::table('users')->where('email', $email)->first();
            if (!$user) {
                return redirect()->back()->with('error', "Tài khoản chưa tồn tại");
            }

            $this->sendEmail($email);

            return redirect()->route('email.enterToken');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function sendEmail(string $email)
    {
        $token = random_int(10000000, 99999999);
        session()->put('token', $token);
        session()->put('email', $email);
        Mail::to($email)->Send(new SendTokenMail($token));
    }

    public function verifyEmail(Request $request)
    {
        $token = $request->input('token');

        if ($token == session()->get('token')) {
            return $this->passwordForm()->with('success', true);
        } else {
            return redirect()->back()->with('error', 'Bạn nhập sai mã xác thực');
        }
    }

    public function savePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()->route('email.enterPassword')->withErrors($validator)->withInput();
        }

        $user = DB::table('users')->where('email', session()->get('email'))->first();

        if (!$user) {
            return redirect()->route('email.enterPassword')->withErrors(['email' => 'Email không tồn tại']);
        }

        DB::table('users')->where('email', session()->get('email'))->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('email.enterPassword')->with('success', true);
    }
}
