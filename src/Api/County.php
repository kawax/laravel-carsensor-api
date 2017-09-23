<?php

namespace Revolution\CarSensor\Api;

trait County
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function country(array $query = [])
    {
        $url = $this->url('country');

        return $this->request($url, $query);
    }
}
