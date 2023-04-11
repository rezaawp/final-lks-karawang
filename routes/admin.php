<?php

use App\Helpers\Role;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin', 'password.change'])->group(function () {
    Route::prefix('admin')->group(function () {

        // page
        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'index')->name('admin.dashboard');
            Route::get('users', 'users')->name('admin.users');
            Route::get('pollings', 'pollings')->name('admin.polls');
            Route::get('polling/{id}', 'showPolling');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('buat-user', 'index')->name('admin.buatuser');
            Route::post('buat-user', 'store')->name('user.store');
        });

        Route::controller(PollingController::class)->group(function () {
            Route::get('buat-polling', 'create')->name('admin.createpoll');

            // Proses
            Route::post('polling', 'store')->name('polling.store');
        });
    });
});
