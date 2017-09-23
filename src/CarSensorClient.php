<?php

namespace Revolution\CarSensor;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * https://webservice.recruit.co.jp/carsensor/
 *
 * Class CarSensorClient
 * @package Revolution\CarSensor
 */
class CarSensorClient implements CarSensorClientInterface
{
    use Api\UserCar;
    use Api\Catalog;
    use Api\Brand;
    use Api\County;
    use Api\LargeArea;
    use Api\Pref;
    use Api\Body;
    use Api\Color;

    /**
     * @var string
     */
    protected $api_url = 'https://webservice.recruit.co.jp/carsensor/';

    /**
     * @var string
     */
    protected $api_version = '/v1/';

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * API Key
     *
     * @var string
     */
    protected $key;

    /**
     * @var bool
     */
    protected $assoc = false;

    /**
     * constructor.
     *
     * @param ClientInterface $client
     * @param string          $key
     *
     */
    public function __construct(ClientInterface $client, string $key)
    {
        $this->client = $client;
        $this->key = $key;
    }

    /**
     * @param string $url
     * @param array  $query
     *
     * @return object|array
     */
    public function request(string $url, array $query = [])
    {
        $query = array_merge($this->defaultQuery(), $query);

        $result = $this->client->get($url, [
            'query' => $query,
        ]);

        return json_decode($result->getBody(), $this->assoc);
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setApiUrl(string $url): CarSensorClientInterface
    {
        $this->api_url = $url;

        return $this;
    }

    /**
     * @param string $version
     *
     * @return $this
     */
    public function setApiVersion(string $version): CarSensorClientInterface
    {
        $this->api_version = $version;

        return $this;
    }

    /**
     * @param ClientInterface $client
     *
     * @return $this
     */
    public function setClient(ClientInterface $client): CarSensorClientInterface
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(string $key): CarSensorClientInterface
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param string $assoc
     *
     * @return $this
     */
    public function setAssoc(string $assoc): CarSensorClientInterface
    {
        $this->assoc = $assoc;

        return $this;
    }

    /**
     * @return array
     */
    private function defaultQuery(): array
    {
        return [
            'key'    => $this->key,
            'format' => 'json',
            //5:年式新しい順
            'order'  => 5,
            'count'  => 50,
        ];
    }

    /**
     * @param string $api
     *
     * @return string
     */
    private function url(string $api): string
    {
        return $this->api_url . $api . $this->api_version;
    }
}
