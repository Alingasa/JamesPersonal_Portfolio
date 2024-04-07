<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user()) {
            return redirect('/login')->with('login_first', 'Please login First');
        }

       
        if ($request->user()->role !== $role) {
           
            return redirect()->back()->with('unauthorized', 'Unauthorized Acess');
        }

        return $next($request);
    }
}
