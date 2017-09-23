<?php

namespace Revolution\CarSensor\Api;

trait Body
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function body(array $query = [])
    {
        $url = $this->url('body');

        return $this->request($url, $query);
    }
}
