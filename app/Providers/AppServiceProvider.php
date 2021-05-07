<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Repositories
        $this->app->bind('App\Repositories\PersonRepository', 'App\Repositories\Eloquent\PersonEloquentRepository');
        $this->app->bind('App\Repositories\TypeRepository', 'App\Repositories\Eloquent\TypeEloquentRepository');
        $this->app->bind('App\Repositories\PhoneRepository', 'App\Repositories\Eloquent\PhoneEloquentRepository');

        // Contracts
        $this->app->bind('App\Contracts\HttpClientContract', 'App\Services\HttpClientLaravel');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
