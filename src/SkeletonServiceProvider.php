<?php

namespace Spatie\Sitesearch;

use Illuminate\Support\ServiceProvider;

class SitesearchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/Sitesearch.php' => config_path('Sitesearch.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'Sitesearch');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/Sitesearch'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'Sitesearch');
    }
}
