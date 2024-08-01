<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('/logout', LogoutController::class)->name('auth.logout');
    Route::middleware('permission:administrator')->group(function () {
    });
});