<?php

use App\Http\Middleware\AdminLoggedIn;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Modules\Country\Http\Controllers\CountryController;
use Modules\Country\Http\Controllers\RegionController;

Route::group(['prefix' => 'dashboard', 'as' => 'admin.'], function () {
    Route::group(['middleware' => [Localization::class, AdminLoggedIn::class]], function () {
        Route::resource('countries', CountryController::class);
        Route::resource('country.regions', RegionController::class);
    });
});
