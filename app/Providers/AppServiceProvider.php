<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\News;
use Illuminate\Support\Facades\Cookie;
//use Symfony\Component\HttpFoundation\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        /*view()->composer('header', function($view) {
            $view->with('data', 'some data');
        });*/

        Cookie::queue("prvi", "radi", 1500);
    }
}
