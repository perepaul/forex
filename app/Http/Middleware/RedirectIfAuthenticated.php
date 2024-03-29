<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guard = request()->isAdmin() ?'admin':'web';
            if (Auth::guard($guard)->check()) {
                return $guard == 'web'? $this->redirectUser():$this->redirectAdmin();
            }

        return $next($request);
    }

    private function redirectAdmin()
    {
        return redirect()->route('admin.index');
    }

    private function redirectUser()
    {
        return redirect()->route('dashboard');
    }
}
