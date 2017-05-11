<?php

namespace Gunharth\Lightspeed;

use Illuminate\Support\ServiceProvider;

class LightspeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/lightspeed-api.php' => config_path('lightspeed-api.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lightspeed-api.php', 'lightspeed-api');

        $this->app->singleton(Lightspeed::class, function ($app) {
            $config = $app['config']['lightspeed-api'];

            return new Lightspeed($config);
        });

        $this->app->alias(Lightspeed::class, 'lightspeedapi');
    }
}
