<?php

use App\Http\Controllers\webController;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => [Localization::class]], function () {
    Route::any('switch', [webController::class, 'switch'])->name('switch');
    Route::any('get-ip-details', [webController::class, 'ip'])->name('ip');
    Route::any('reorder', [webController::class, 'reorder'])->name('reorder');
    Route::any('language/{locale}', [webController::class, 'lang'])->name('lang');
    Route::any('removeids', [webController::class, 'RemoveIds'])->name('RemoveIds');
    Route::any('sendotp/{number}', [webController::class, 'SendOTP'])->name('SendOTP');
    Route::any('request_access/{path}', [webController::class, 'request_access'])->name('request_access');
    Route::any('artisan/{command}', [webController::class, 'artisan'])->name('artisan');
    Route::any('file-upload/upload-large-files', [webController::class, 'uploadLargeFiles'])->name('files.upload.large');
});
