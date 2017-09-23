<?php

namespace Revolution\CarSensor\Api;

trait UserCar
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function usedcar(array $query = ['person' => 1])
    {
        $url = $this->url('usedcar');

        return $this->request($url, $query);
    }
}
