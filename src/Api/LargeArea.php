<?php

namespace Revolution\CarSensor\Api;

trait LargeArea
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function largeArea(array $query = [])
    {
        $url = $this->url('large_area');

        return $this->request($url, $query);
    }
}
