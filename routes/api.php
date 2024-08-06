<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\EmailVerification\SendVerificationController;
use App\Http\Controllers\EmailVerification\VerifyController;
use Illuminate\Support\Facades\Route;

Route::post('/register-user', RegisterUserController::class)->name('register.user');
Route::get('/email/verify/{token}', VerifyController::class)->name('email.verify');
Route::post('email/send-verification/{userId}', SendVerificationController::class)->name('email.send-verification');

Route::middleware('auth')->group(function () {
    Route::post('/logout', LogoutController::class)->name('auth.logout');
    Route::middleware('permission:ADMINISTRATOR')->group(function () {
    });
});
