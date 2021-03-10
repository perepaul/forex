<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('users',fn()=>view('admin.users'))->name('admin.users');
Route::get('trades',fn()=>view('admin.trades'))->name('admin.trades');
Route::get('deposits',fn()=>view('admin.deposits'))->name('admin.deposits');
Route::get('withdrawals',fn()=>view('admin.withdrawals'))->name('admin.withdrawals');
Route::get('tickets',fn()=>view('admin.tickets'))->name('admin.tickets');
Route::get('login-as/{id}',function($id){
    // dd($id);
   auth()->guard('web')->loginUsingId($id);
   return redirect()->to(route('dashboard'));
})->name('admin.login-as');
