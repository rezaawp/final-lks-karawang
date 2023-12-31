<?php

use App\Http\Controllers\PollingController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

// Route::controller()
Route::middleware(['auth', 'user', 'password.change'])->group(function () {
    Route::controller(PollingController::class)->group(function () {
        Route::get('/polls', 'index')->name('user.home');
        Route::get('/poll/{id}', 'show');
    });

    Route::get('tes', function () {
        $time = time() + 12 * (60 * 60);
        return date('Y-m-d h:i:s', $time);
    });

    Route::controller(VoteController::class)->group(function () {
        Route::post('vote', 'store')->name('vote.store');
    });
});
