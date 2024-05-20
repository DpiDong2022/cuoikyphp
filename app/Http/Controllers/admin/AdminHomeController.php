<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function Index()
    {
        return view("admin.adminHome.index");
    }
    
    public function dashboard()
    {
        $notifications = Auth::user()->notifications;
        return view('admin.dashboard', compact('notifications'));
    }
}
