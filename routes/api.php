<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class)->name('auth.login');

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::post('/logout', LogoutController::class)->name('auth.logout');
});