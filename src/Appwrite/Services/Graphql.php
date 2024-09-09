<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Graphql extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * GraphQL endpoint
     *
     * Execute a GraphQL mutation.
     *
     * @param array $query
     * @throws AppwriteException
     * @return array
     */
    public function query(array $query): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/graphql'
        );

        $apiParams = [];
        $apiParams['query'] = $query;

        $apiHeaders = [];
        $apiHeaders['x-sdk-graphql'] = 'true';
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * GraphQL endpoint
     *
     * Execute a GraphQL mutation.
     *
     * @param array $query
     * @throws AppwriteException
     * @return array
     */
    public function mutation(array $query): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/graphql/mutation'
        );

        $apiParams = [];
        $apiParams['query'] = $query;

        $apiHeaders = [];
        $apiHeaders['x-sdk-graphql'] = 'true';
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}