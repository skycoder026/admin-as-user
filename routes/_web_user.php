<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('logout-temp-user', [DashboardController::class, 'logoutTempUser'])->name('logout-temp-user');


