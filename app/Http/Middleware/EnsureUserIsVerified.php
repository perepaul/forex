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
        if (auth('web')->user()->isActive()) {
            return $next($request);
        } else if ($request->url() == route('verify') || $request->url() == route('profile')) {
            return $next($request);
        } elseif (auth('web')->user()->isPending()) {
            return redirect()->route('profile');
        } elseif (auth('web')->user()->isInActive()) {
            return redirect()->route('verify');
        }
    }
}
