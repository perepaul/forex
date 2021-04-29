<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->isActive()) {
            return $next($request);
        } else if ($request->url() == route('verify') || $request->url() == route('profile')) {
            return $next($request);
        } elseif ($request->user()->isPending()) {
            return redirect()->route('profile');
        } elseif ($request->user()->isInActive()) {
            return redirect()->route('verify');
        }
    }
}
