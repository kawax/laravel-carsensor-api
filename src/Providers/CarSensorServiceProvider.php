<?php

namespace Revolution\CarSensor\Providers;

use Illuminate\Support\ServiceProvider;

use GuzzleHttp\Client;

use Revolution\CarSensor\CarSensorClient;

class CarSensorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
        $this->app->singleton(CarSensorClient::class, function ($app) {
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
        return [CarSensorClient::class];
    }
}
