<?php

namespace Revolution\CarSensor\Facades;

use Illuminate\Support\Facades\Facade;

use Revolution\CarSensor\CarSensorClient;

class CarSensorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CarSensorClient::class;
    }
}
