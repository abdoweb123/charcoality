<?php

use App\Http\Middleware\AdminLoggedIn;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\Controller;

Route::group(['prefix' => 'dashboard', 'as' => 'admin.'], function () {
    Route::group(['middleware' => [Localization::class, AdminLoggedIn::class]], function () {
        Route::resources(['blogs' => Controller::class]);
    });
});
