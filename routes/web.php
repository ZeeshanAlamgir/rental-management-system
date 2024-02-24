<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\User;
use App\Notifications\SendOTPNotification;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


require __DIR__ . DIRECTORY_SEPARATOR . 'auth.php';

Route::group([
], function () {
    Route::get('/', function () {
        return redirect()->route('login.view');
    });

    Route::controller(AuthenticateController::class)->group( function () {
        Route::get('sign-up', 'signupForm')->name('sign.up');
        Route::get('captcha-verification','captchaVerification')->name('captcha.verification');
        Route::get('reload-captcha','reloadCaptcha')->name('captcha.reload');
        Route::post('store-user','store')->name('user.store');
        Route::get('check-otp', 'checkOTP')->name('check.otp');
        Route::get('complate-user-registration', 'completeRegistration')->name('complete.user.registration');
        Route::post('user-login','login')->name('user.login');
    } );

    Route::controller( ForgotPasswordController::class )->group( function () {
        Route::get('forgot-password', 'forgotPasswordForm')->name('forgot.password.form');
        Route::get('send-forgot-email', 'sendForgotPasswordMail')->name('forgot.password.mail');
        Route::get('reset-password/{email}/{token}','tokenValidation')->name('token.validation');
        Route::post('change-password', 'resetPassword')->name('password.reset');
    } );

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
    Route::get('cachew/flush', [DashboardController::class, 'cacheFlush'])->name('cache.flush');

});

