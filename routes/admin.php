<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\Admin\PageController;


// Route::fallback([PageController::class,'notFound'])->name('not-found');
Route::as('admin.')->namespace('Admin')->group(function(){
    Route::get('/', [PageController::class,'index'])->name('index');

    Route::get('users',[PageController::class,'users'])->name('users');
    Route::get('trades',[PageController::class,'trades'])->name('trades');
    Route::get('deposits',[PageController::class,'deposits'])->name('deposits');
    Route::get('withdrawals',[PageController::class,'withdrawals'])->name('withdrawals');
    Route::get('tickets',[PageController::class,'tickets'])->name('tickets');
    Route::get('settings/{type}',[PageController::class,'settings'])->name('settings');
    Route::get('login-as/{id}',[PageController::class,'login'])->name('login-as');
    Route::get('sms',function(){
        $sms = new \App\Helpers\SmsHelper();
        dd($sms->sendSms());
    });
});
