<?php

use App\Helpers\CountryHelper;
use App\Http\Controllers\CurrencyController;
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

// Route::group(['prefix'=>'admin'], function(){


// });


// Route::post('/logout',\App\Http\Controllers\LogoutController::class)->name('logout')->middleware('auth:web');
Route::get('/', function () {
    return view('user.front.index');
})->name('index');

Route::get('about',fn () => view('user.front.about'))->name('about');
Route::get('contact',fn () => view('user.front.contact'))->name('contact');
Route::get('faq',fn () => view('user.front.faq'))->name('faq');
Route::get('offline',fn()=>view('vendor.laravelpwa.offline'))->name('offline');

// Route::get('admin',fn()=>view('admin.index'))->name('admin');

Route::resource('currency',CurrencyController::class);


Route::middleware('verified')->group(function (){
    Route::get('home',function() {
        // auth()->guard('web')->logout();
        return view('user.dashboard.index');
    })->name('dashboard');
    Route::get('trade',fn() => view('user.dashboard.trade'))->name('trade');
    Route::get('wallet',fn() => view('user.dashboard.wallet'))->name('wallet');
    Route::get('profile',fn() => view('user.dashboard.profile'))->name('profile');
    Route::get('profile-edit',fn() => view('user.dashboard.profile-edit'))->name('profile-edit');
    Route::get('withdraw',fn()=>view('user.dashboard.withdraw'))->name('withdraw');
    Route::get('deposit',fn()=>view('user.dashboard.deposit'))->name('deposit');
    Route::get('verify',fn()=>view('user.dashboard.verify'))->name('verify');
    Route::get('subscribe',fn()=>view('user.dashboard.subscription'))->name('subscribe');
    Route::get('two-factor-auth',fn()=>view('user.dashboard.two-factor-authentication'))->name('two-factor-authentication');
});
