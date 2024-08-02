<?php

use App\Livewire\Auth\LoginPg;
use App\Livewire\Auth\SigupPg;
use App\Livewire\Dash\IndexPg;
use Illuminate\Support\Facades\Route;


// ========== Guest Route ========== //
Route::get('/', function () {return redirect('/login');});
Route::get('login', LoginPg::class)->name('auth.login');
Route::get('signup', SigupPg::class)->name('auth.reg');

// ========== Dashboard Route ========== //
Route::group(['middleware' => 'IsUser', 'prefix' => 'user'], function (){
    Route::get('dashboard', IndexPg::class)->name('user.dash');
});