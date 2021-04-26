<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$guards)
    {

        $guard='admin';
            if(Auth::guard($guard)->check()){
                return redirect()->route('admin.index');
            }

        return $next($request);
    }
}
