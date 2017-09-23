<?php

namespace Revolution\CarSensor\Api;

trait Catalog
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function catalog(array $query = ['person' => 1])
    {
        $url = $this->url('catalog');

        return $this->request($url, $query);
    }
}
