<?php

namespace Irabbi\Timezone;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Irabbi\Timezone\TimezonesController');
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}