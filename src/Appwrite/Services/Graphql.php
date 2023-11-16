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
          $this->client = $client;
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
        $apiPath = str_replace([], [], '/graphql');

        $apiParams = [];
        if (!isset($query)) {
            throw new AppwriteException('Missing required parameter: "query"');
        }
        if (!is_null($query)) {
            $apiParams['query'] = $query;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'x-sdk-graphql' => 'true',
            'content-type' => 'application/json',
        ], $apiParams);
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
        $apiPath = str_replace([], [], '/graphql/mutation');

        $apiParams = [];
        if (!isset($query)) {
            throw new AppwriteException('Missing required parameter: "query"');
        }
        if (!is_null($query)) {
            $apiParams['query'] = $query;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'x-sdk-graphql' => 'true',
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
