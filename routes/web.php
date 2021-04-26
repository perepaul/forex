<?php

use App\Helpers\CountryHelper;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\User\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('User')->group(function(){
    Route::get('/',[PageController::class,'index'])->name('index');
    Route::get('about',[PageController::class,'about'])->name('about');
    Route::get('contact',[PageController::class,'contact'])->name('contact');
    Route::get('faq',[PageController::class,'faq'])->name('faq');
    Route::get('terms',[PageController::class,'terms'])->name('terms');
    Route::get('privacy',[PageController::class,'privacy'])->name('privacy');
    Route::get('offline',[PageController::class,'offline'])->name('offline');

    Route::middleware(['verified','active'])->group(function (){
        Route::get('dashboard',[PageController::class,'dashboard'])->name('dashboard');
        Route::get('trade',[PageController::class,'trade'])->name('trade');
        Route::get('wallet',[PageController::class,'wallet'])->name('wallet');
        Route::get('profile',[PageController::class,'profile'])->name('profile');
        Route::get('profile-edit',[PageController::class,'profileEdit'])->name('profile-edit');
        Route::get('withdraw',[PageController::class,'withdraw'])->name('withdraw');
        Route::get('deposit',[PageController::class,'deposit'])->name('deposit');
        Route::get('verify',[PageController::class,'verify'])->name('verify');
        Route::get('subscribe',[PageController::class,'subscribe'])->name('subscribe');
        Route::get('two-factor-auth',[PageController::class,'twoFactorAuth'])->name('two-factor-auth');
    });
});
