<?php

namespace Revolution\CarSensor\Contracts;

use GuzzleHttp\ClientInterface;

interface Factory
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
    public function setApiUrl(string $url): Factory;

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setApiVersion(string $version): Factory;

    /**
     * @param ClientInterface $client
     *
     * @return $this
     */
    public function setClient(ClientInterface $client): Factory;

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(string $key): Factory;

    /**
     * @param string $assoc
     *
     * @return $this
     */
    public function setAssoc(string $assoc): Factory;

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
