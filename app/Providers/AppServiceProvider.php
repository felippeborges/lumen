<?php

namespace App\Providers;
use App\Restaurant;
use App\Observers\RestaurantObservers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Restaurant::observe(RestaurantObservers::class);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
