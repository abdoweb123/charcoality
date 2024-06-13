<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // app()->setlocale(setting('DefaultLang'));
        // view()->composer('*', function () {
        //     if(!str_contains(url()->current(), '/dashboard') && !str_contains(url()->current(), '/system'))
        //     visitor()->visit();
        // });
    }
}
