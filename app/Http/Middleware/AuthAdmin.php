<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->usertype === 'ADM')
        {
            session(['usertype'=>'ADM']);
        }
        else if (Auth::user()->usertype === 'USR')
        {
            session(['usertype'=>'USR']);
        }

        if (session('usertype') === 'ADM')
        {
            return $next($request);
        }
        else
        {
            session()->flush();
            return redirect()->route('login');
        }
    }
    
}
