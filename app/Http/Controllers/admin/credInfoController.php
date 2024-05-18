<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class credInfoController extends Controller
{
    public function showCred()
    {
        $adminAccounts = Account::with('role')->get();
        return view('admin.adminHome.displayAccount', compact('adminAccounts'));
    }
}
