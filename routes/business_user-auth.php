<?php

use App\Http\Controllers\Business_user\Auth\LoginController;
// use App\Http\Controllers\Auth\ConfirmablePasswordController;
// use App\Http\Controllers\Auth\EmailVerificationNotificationController;
// use App\Http\Controllers\Auth\EmailVerificationPromptController;
// use App\Http\Controllers\Auth\NewPasswordController;
// use App\Http\Controllers\Auth\PasswordController;
// use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Business_user\Auth\RegisteredUserController;

// use App\Http\Controllers\Admin\Auth\RegisteredUserController;
// use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::prefix('business-user')->middleware('guest:business_user')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('business-user.register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('business-user.login');

    Route::post('login', [LoginController::class, 'store']);

    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

    // Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');
});

Route::prefix('business-user')->middleware('auth:business_user')->group(function () {

    Route::get('/dashboard', function () {
        return view('business_user.dashboard');
    })->name('business-user.dashboard');

    Route::post('logout', [LoginController::class, 'destroy'])
                ->name('business-user.logout');


    // Route::get('verify-email', EmailVerificationPromptController::class)
    //             ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //             ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    
}); 
