<?php

namespace Revolution\CarSensor\tests;

use PHPUnit\Framework\TestCase;

use Revolution\CarSensor\CarSensorClient;

use GuzzleHttp\Client;

class CarSensorTest extends TestCase
{
    /**
     * @var CarSensorClient
     */
    protected $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = new CarSensorClient(new Client(), 'test_key');
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Revolution\CarSensor\CarSensorClient', $this->client);
    }
}
