<?php

namespace Revolution\CarSensor\Api;

trait Pref
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function pref(array $query = [])
    {
        $url = $this->url('pref');

        return $this->request($url, $query);
    }
}
