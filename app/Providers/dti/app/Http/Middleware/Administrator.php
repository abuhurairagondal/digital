<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->level == 0 && $user->status == 1) {
            return $next($request);
        }

        // return redirect()->route('/login')->with('error', 'Unauthorized access. You do not have the necessary permissions.');

        return redirect('/login')->with('error', 'Unauthorized access.!');
    }
}
