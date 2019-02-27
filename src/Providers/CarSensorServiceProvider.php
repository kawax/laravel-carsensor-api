<?php

namespace Revolution\CarSensor\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

use GuzzleHttp\Client;

use Revolution\CarSensor\CarSensorClient;
use Revolution\CarSensor\Contracts\Factory;

class CarSensorServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            $client = new Client();

            $config = $app['config']['services']['carsensor'];

            return new CarSensorClient($client, $config['key']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [Factory::class];
    }
}
