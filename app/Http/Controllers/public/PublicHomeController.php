<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use DB;


class PublicHomeController extends Controller
{
    public function Index()
    {
        return view("public.publicHome.index");
    }
    public function login(){
        return view('public.Log.login');
    }
    public function register(){
        return view('public.Log.register');
    }
    public function postRegister(Request $request){ 
        //validate

        $data = $request->except('_token');
        Hash::make( $request->password );
        try {
            User::create( $data );
        } catch (\Throwable $th) {
            dd($th);
        }
        
        return redirect()->route('login');
        // dd($data);
        
    }
}
