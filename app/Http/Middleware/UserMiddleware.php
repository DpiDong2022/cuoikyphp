<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (session('user')) {
    //         return $next($request);
    // }
    // return redirect()-> route('publicLogin');

    public function handle(Request $request, Closure $next): Response
    {
        // Check if 'user_id' is present in the session
        if (!$request->session()->has('user')) {
            // If 'user_id' is not present, redirect to the login page
            return redirect('login');
        }

        // If 'user_id' is present, allow the request to proceed
        return $next($request);
    }

}
