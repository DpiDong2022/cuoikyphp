<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Mail\SendTokenMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Hash;
use Illuminate\Support\Str;
use DB;
use PhpParser\Node\Expr\Cast\Bool_;
use Illuminate\Support\Facades\Validator;

class PublicHomeController extends Controller
{
    public function publicLogout()
    {
        session() -> remove('user');
        return redirect() -> intended('/');
    }
    public function veriryLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::table('users')->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withInput()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
        if (Hash::check($password, $user->password)) {
            session()->put('user', $user);
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withInput()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }
    public function indexVerifyEmail()
    {
        return view('public.log.verifyEmail');
    }

    public function sendTokenToEmail(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|max:255'
            ]);

            $email = $request->email;

            $user = DB::table('users')->where('email', $email)->first();
            if ($user) {
                return redirect()->back()->with('error', "Tài khoản đã tồn tại");
            }

            $this->sendEmail($email);

            return redirect()->route('email.formVerify');
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
            return view('public.log.enterPassword')->with('success', true);
        } else {
            return redirect()->back()->with('error', 'Bạn nhập sai mã xác thực');
        }
    }

    public function storeUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('email.enterPasswordRe')->withErrors($validator)->withInput();
        }

        DB::table('users')->insertGetId([
            'name' => $request->name,
            'email' => session()->get('email'),
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('email.enterPasswordRe')->with('success', true);
    }

    public function enterPasswordForm()
    {
        return view('public.log.enterPassword');
    }

    public function Index()
    {
        return view("public.publicHome.index");
    }
    public function login()
    {
        return view('public.Log.login');
    }
    public function register()
    {
        return view('public.Log.register');
    }
    public function postRegister(Request $request)
    {
        //validate

        $data = $request->except('_token');
        Hash::make($request->password);
        try {
            User::create($data);
        } catch (\Throwable $th) {
            dd($th);
        }

        return redirect()->route('login');
        // dd($data);

    }
}
