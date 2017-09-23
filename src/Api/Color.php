<?php

namespace Revolution\CarSensor\Api;

trait Color
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function color(array $query = [])
    {
        $url = $this->url('color');

        return $this->request($url, $query);
    }
}
