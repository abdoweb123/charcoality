<?php

use App\Http\Middleware\AdminLoggedIn;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Modules\Value\Http\Controllers\Controller;

Route::group(['prefix' => 'dashboard', 'as' => 'admin.'], function () {
    Route::group(['middleware' => [Localization::class, AdminLoggedIn::class]], function () {
        Route::resources(['values' => Controller::class]);
    });
});
