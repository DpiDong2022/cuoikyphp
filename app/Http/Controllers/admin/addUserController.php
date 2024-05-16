<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class addUserController extends Controller
{
    public function showRegiserForm()
    {
        return view("admin.adminHome.register");
    }

    
}
