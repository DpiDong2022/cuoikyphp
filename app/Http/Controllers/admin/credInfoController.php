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

    public function destroy($id)
    {
        // Find the account by ID and delete it
        $account = Account::findOrFail($id);
        $account->delete();

        // Redirect back with a success message
        return redirect()->route('account.info')->with('success', 'Account deleted successfully');
    }
}
