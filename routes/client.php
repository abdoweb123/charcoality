<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Middleware\ForceSSL;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'client.', 'middleware' => [Localization::class, ForceSSL::class]], function () {
    Route::view('/','Client.index');
    Route::GET('/home', [HomeController::class,'home'])->name('home');
    Route::GET('/about', [HomeController::class,'about'])->name('about');
    
    Route::view('/blog/{id?}', 'Client.blog')->name('blog');
    
    Route::GET('/gallery/{id?}/', [HomeController::class,'gallery'])->name('gallery');
    Route::GET('/gallery_details/{id}/', [HomeController::class,'gallery_details'])->name('gallery_details');
    Route::GET('/blog/{id?}/', [HomeController::class,'blog'])->name('blog');
    Route::GET('/blog_details/{id}/', [HomeController::class,'blog_details'])->name('blog_details');
    Route::GET('/faq', [HomeController::class,'faq'])->name('faq');
    Route::view('/privacy','Client.privacy')->name('privacy');
    Route::view('/terms','Client.terms')->name('terms');
    Route::view('/contact','Client.contact')->name('contact');
    Route::POST('/contact', [HomeController::class,'contact'])->name('contact');
    Route::POST('/subscribe', [HomeController::class,'subscribe'])->name('subscribe');
});
