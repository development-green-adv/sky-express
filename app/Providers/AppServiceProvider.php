<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\News;

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

    }
}
