<?php

namespace Vdbelt\LaravelRevolut;

use Illuminate\Support\ServiceProvider;

class LaravelRevolutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(
            'revolut',
            function ($app) {
                return new RevolutClient($app->config->get('services.revolut'));
            }
        );
    }

    public function provides()
    {
        return [ 'revolut' ];
    }
}
