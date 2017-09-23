<?php

namespace Revolution\CarSensor;

use GuzzleHttp\ClientInterface;

interface CarSensorClientInterface
{
    /**
     * @param array $query
     *
     * @return object|array
     */
    public function body(array $query = []);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function brand(array $query = ['count' => 200]);

    /**
     * @param string $url
     * @param array  $query
     *
     * @return object|array
     */
    public function request(string $url, array $query = []);

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setApiUrl(string $url): CarSensorClientInterface;

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setApiVersion(string $version): CarSensorClientInterface;

    /**
     * @param ClientInterface $client
     *
     * @return $this
     */
    public function setClient(ClientInterface $client): CarSensorClientInterface;

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(string $key): CarSensorClientInterface;

    /**
     * @param string $assoc
     *
     * @return $this
     */
    public function setAssoc(string $assoc): CarSensorClientInterface;

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function catalog(array $query = ['person' => 1]);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function color(array $query = []);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function country(array $query = []);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function largeArea(array $query = []);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function pref(array $query = []);

    /**
     * @param array $query
     *
     * @return object|array
     */
    public function usedcar(array $query = ['person' => 1]);
}
