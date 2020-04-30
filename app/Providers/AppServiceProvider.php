<?php

namespace App\Providers;

use App\contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $serve=service::all()->where('home',1);
        $con=contact::find(1);

        return view()->share(['serve'=>$serve,'con'=>$con]);
    }
}
