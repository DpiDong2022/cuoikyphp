<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function postregister(Request $req){
        //validate ...Hash::make($req -> password)
        $req -> merge(['password '=> Hash::make($req -> password)]);       
        try {
            User::created($req-> all());
        } catch (\Throwable $th) {
            dd($th);
        }
        dd ($req->all());
        //return redirect()->route('app.index') ;
    }
}
