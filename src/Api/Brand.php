<?php

namespace Revolution\CarSensor\Api;

trait Brand
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function brand(array $query = ['count' => 200])
    {
        $url = $this->url('brand');

        return $this->request($url, $query);
    }
}
