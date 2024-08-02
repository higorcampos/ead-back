<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::post('/register-user', RegisterUserController::class)->name('register.user');

Route::middleware('auth')->group(function () {
    Route::post('/logout', LogoutController::class)->name('auth.logout');
    Route::middleware('permission:administrator')->group(function () {
    });
});