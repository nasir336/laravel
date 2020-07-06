<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Cart;



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
         Schema::defaultStringLength(191);

         View::composer('*', function ($view) {

            $view->with('CartGetContents',Cart::getContent());
            $view->with('CartGetQuantity',Cart::getTotalQuantity());
            $view->with('CartGetTotal',Cart::getSubTotal());

            });
    }
}
