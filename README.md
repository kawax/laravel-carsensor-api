# Car Sensor API for Laravel

https://webservice.recruit.co.jp/carsensor/

## Requirements
- PHP >= 7.1.3
- Laravel >= 5.8

## Installation

### Composer
```
composer require revolution/laravel-carsensor-api
```

### Add to config/services.php
```
    'carsensor' => [
        'key' => env('CARSENSOR_API_KEY', ''),
    ],
```

### .env
https://webservice.recruit.co.jp/register/
```
CARSENSOR_API_KEY=
```

## Usage

```php
<?php
use CarSensor;

/**
* @param array $query = []
*
* @return object|array
*/
$results = CarSensor::usedcar();
dd($results);
# returns object

$usedcars = data_get($results, 'results.usedcar');;
dd($usedcars);
```

### Returns array
```
CarSensor::setAssoc(true);
$results = CarSensor::usedcar();
dd($results);
```

### Search Query
```
$query = [
    'keyword' => 'test',
];
$results = CarSensor::usedcar($query);
```

## LICENSE
MIT  
Copyright kawax
