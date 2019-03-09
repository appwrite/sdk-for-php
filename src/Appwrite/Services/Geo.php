<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Geo extends Service
{
    /**
     * Current user GEO information
     *
     * @throws Exception
     * @return array
     */
    public function current()
    {
        $path   = str_replace([], [], '/geo');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * List of all countries
     *
     * @throws Exception
     * @return array
     */
    public function countries()
    {
        $path   = str_replace([], [], '/geo/countries');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * List countries that are members of the EU
     *
     * @throws Exception
     * @return array
     */
    public function countriesEU()
    {
        $path   = str_replace([], [], '/geo/countries/eu');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * List of all countries phone codes
     *
     * @throws Exception
     * @return array
     */
    public function countriesPhones()
    {
        $path   = str_replace([], [], '/geo/countries/phones');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

}