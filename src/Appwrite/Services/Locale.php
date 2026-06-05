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
     * @return \Appwrite\Models\Locale
     */
    public function get(): \Appwrite\Models\Locale
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Locale::from($response);

    }

    /**
     * List of all locale codes in [ISO
     * 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes).
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\LocaleCodeList
     */
    public function listCodes(): \Appwrite\Models\LocaleCodeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/codes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LocaleCodeList::from($response);

    }

    /**
     * List of all continents. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\ContinentList
     */
    public function listContinents(): \Appwrite\Models\ContinentList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/continents'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ContinentList::from($response);

    }

    /**
     * List of all countries. You can use the locale header to get the data in a
     * supported language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\CountryList
     */
    public function listCountries(): \Appwrite\Models\CountryList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\CountryList::from($response);

    }

    /**
     * List of all countries that are currently members of the EU. You can use the
     * locale header to get the data in a supported language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\CountryList
     */
    public function listCountriesEU(): \Appwrite\Models\CountryList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries/eu'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\CountryList::from($response);

    }

    /**
     * List of all countries phone codes. You can use the locale header to get the
     * data in a supported language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\PhoneList
     */
    public function listCountriesPhones(): \Appwrite\Models\PhoneList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/countries/phones'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\PhoneList::from($response);

    }

    /**
     * List of all currencies, including currency symbol, name, plural, and
     * decimal digits for all major and minor currencies. You can use the locale
     * header to get the data in a supported language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\CurrencyList
     */
    public function listCurrencies(): \Appwrite\Models\CurrencyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/currencies'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\CurrencyList::from($response);

    }

    /**
     * List of all languages classified by ISO 639-1 including 2-letter code, name
     * in English, and name in the respective language.
     *
     * @throws AppwriteException
     * @return \Appwrite\Models\LanguageList
     */
    public function listLanguages(): \Appwrite\Models\LanguageList
    {
        $apiPath = str_replace(
            [],
            [],
            '/locale/languages'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LanguageList::from($response);

    }
}
