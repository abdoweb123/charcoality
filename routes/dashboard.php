<?php

use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\webController;
use App\Http\Middleware\AdminLoggedIn;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'as' => 'admin.'], function () {
    Auth::routes();
    Route::group(['middleware' => [Localization::class, AdminLoggedIn::class]], function () {
        Route::any('/', [HomeController::class, 'index'])->name('home');
        Route::any('profile', [ProfileController::class, 'show'])->name('profile.show');
        Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::any('subscription', [SubscriptionController::class, 'index'])->name('subscriptions');
      
        Route::any('country_regions/{category_id}', [webController::class, 'CountryRegions'])->name('CountryRegions');
    });
});
