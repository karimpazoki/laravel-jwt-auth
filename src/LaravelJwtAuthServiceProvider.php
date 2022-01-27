<?php

namespace Kaafochino\LaravelJwtAuth;

use Illuminate\Support\ServiceProvider;

class LaravelJwtAuthServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('jwt.php'),
            ], 'config');
        }
    }
}
