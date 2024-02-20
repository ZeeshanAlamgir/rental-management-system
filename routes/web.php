<?php

use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
        Route::get('reload-captcha','reloadCaptcha')->name('captcha.reload');
        Route::post('store-user','store')->name('user.store');
    } );

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('cachew/flush', [DashboardController::class, 'cacheFlush'])->name('cache.flush');

    Route::controller(CategoryController::class)->prefix('admin/category')->group(function(){
        Route::get('index','index')->name('categories');
        Route::get('create/{id?}', 'create')->name('category.createOrEdit');
        Route::post('storeOrUpdate', 'storeOrUpdate')->name('category.storeOrUpdate');
        Route::get('getImage', 'getImage')->name('category.image');
        Route::get('details','categoryDetails')->name('category.details');
        Route::get('delete', 'delete')->name('category.delete');
    });
});
