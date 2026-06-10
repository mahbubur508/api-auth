<?php

namespace Mahbubur508\ApiAuth\Providers;

use Illuminate\Support\ServiceProvider;

class ApiAuthServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/api-auth.php', 'api-auth');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/api-auth.php' => config_path('api-auth.php'),
            ], 'api-auth-config');
        }
    }
}