<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    // /**
    //  * Determine if the user is logged in to any of the given guards.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  array  $guards
    //  * @return void
    //  *
    //  * @throws \Illuminate\Auth\AuthenticationException
    //  */
    // protected function authenticate($request, array $guards)
    // {
    //     if (empty($guards)) {
    //         $guards = [null];
    //     }

    //     foreach ($guards as $guard) {
    //         if ($this->auth->guard($guard)->check()) {
    //             // $this->redirectDeactivatedUser($guard);
    //             return $this->auth->shouldUse($guard);
    //         }
    //     }

    //     $this->unauthenticated($request, $guards);
    // }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // protected function redirectDeactivatedUser($guard)
    // {
    //     if(!$this->auth->guard($guard)->user()->isActive()){
    //         return redirect()->route('login')->withErrors(['error' => ['Oops! Account is deactivated... Contact support']]);
    //     }
    // }
}
