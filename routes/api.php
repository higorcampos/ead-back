<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\GetUserByRoleController;
use App\Http\Controllers\Auth\GetUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EmailVerification\SendVerificationController;
use App\Http\Controllers\EmailVerification\VerifyController;
use Illuminate\Support\Facades\Route;

Route::post('/register-user', RegisterUserController::class)->name('register.user');
Route::get('/email/verify/{token}', VerifyController::class)->name('email.verify');
Route::post('email/send-verification/{userId}', SendVerificationController::class)->name('email.send-verification');

Route::post('password/email', ForgotPasswordController::class)->name('password.email');
Route::post('password/reset', ResetPasswordController::class)->name('password.reset');

Route::middleware('auth')->group(function () {

    Route::post('/logout', LogoutController::class)->name('auth.logout');
    Route::get('/user', GetUserController::class)->name('auth.get.user');

    Route::middleware(['permission:ADMINISTRATOR|TEACHER|SUPPORT'])->group(function () {
        Route::get('/users', GetUserByRoleController::class)->name('auth.get.all.users');
    });
});