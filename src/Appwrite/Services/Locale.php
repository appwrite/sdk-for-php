<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Locale extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get the current user location based on IP. Returns an object with user
     * country code, country name, continent name, continent code, ip address and
     * suggested currency. You can use the locale header to get the data in a
     * supported language.
     * 
     * ([IP Geolocation by DB-IP](https://db-ip.com))
     *
     * @throws AppwriteException
     * @return array
     */
    public function get(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all locale codes in [ISO
     * 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).
     *
     * @throws AppwriteException
     * @return array
     */
    public function listCodes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/codes'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all continents. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listContinents(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/continents'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all countries. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listCountries(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all countries that are currently members of the EU. You can use the
     * locale header to get the data in a supported language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listCountriesEU(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries/eu'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all countries phone codes. You can use the locale header to get the
     * data in a supported language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listCountriesPhones(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries/phones'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all currencies, including currency symbol, name, plural, and
     * decimal digits for all major and minor currencies. You can use the locale
     * header to get the data in a supported language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listCurrencies(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/currencies'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List of all languages classified by ISO 639-1 including 2-letter code, name
     * in English, and name in the respective language.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listLanguages(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/languages'
        );

        $apiParams = [];

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}