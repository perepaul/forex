<?php

namespace App\Providers;

// use App\Actions\Fortify\AttemptToAuthenticate;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Http\Controllers\AdminController;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Contracts\LoginResponse;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Responses\LoginResponse as CustomLoginResponse;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\RegisterResponse as CustomRegisterResponse;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(request()->isAdmin()){
            config(['fortify.domain'=>admin_url()]);
            config(['fortify.guard'=>'admin']);
        }

        $this->app->when([
            AuthenticatedSessionController::class,
            AttemptToAuthenticate::class,
            RedirectIfTwoFactorAuthenticatable::class
            ])
            ->needs(StatefulGuard::class)
            ->give(function(){
                if(request()->isAdmin()){
                    return Auth::guard('admin');
                }
                return  Auth::guard('web');
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->singleton(RegisterResponse::class,CustomRegisterResponse::class);
        // $this->app->singleton(LoginResponse::class,CustomLoginResponse::class);
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            if(request()->isAdmin()){
                if(auth('admin')->check()){
                    return redirect()->route('admin.index');
                }
                return view('admin.auth.login');
            }
            return view('user.auth.login');
        });
        Fortify::registerView(fn () => view('user.auth.register'));
        Fortify::verifyEmailView(fn () => view('user.auth.verify-email'));
        Fortify::requestPasswordResetLinkView(fn () => view('user.auth.forgot-password'));
        Fortify::resetPasswordView(fn ($request) => view('user.auth.reset-password', ['request' => $request]));
    }
}
