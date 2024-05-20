<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserRoleForAccounts
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated account has the necessary role (e.g., role ID 2)
        if ($request->user() && $request->user()->roleid !== 2) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}