<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        // Process
        Route::post('login', 'login')->name('login');

        // Page
        Route::get('login', function () {
            return view('login');
        });
        Route::get('panduan-akun', 'panduanAkun')->name('auth.panduan');
    });
    Route::middleware('auth')->group(function () {
        Route::post('update-password', 'changePassword')->name('auth.password.update');
        Route::get('update-password', function () {
            return view('updatepassword');
        });

        Route::post('logout', 'logout')->name('logout');
    });
});
