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
     * GraphQL Endpoint
     *
     * Execute a GraphQL mutation.
     *
     * @param array $query
     * @throws AppwriteException
     * @return array

     */
    public function query(array $query): array
    {
        $path   = str_replace([], [], '/graphql');

        $params = [];
        if (!isset($query)) {
            throw new AppwriteException('Missing required parameter: "query"');
        }
        if (!is_null($query)) {
            $params['query'] = $query;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'x-sdk-graphql' => 'true',
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * GraphQL Endpoint
     *
     * Execute a GraphQL mutation.
     *
     * @param array $query
     * @throws AppwriteException
     * @return array

     */
    public function mutation(array $query): array
    {
        $path   = str_replace([], [], '/graphql/mutation');

        $params = [];
        if (!isset($query)) {
            throw new AppwriteException('Missing required parameter: "query"');
        }
        if (!is_null($query)) {
            $params['query'] = $query;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'x-sdk-graphql' => 'true',
            'content-type' => 'application/json',
        ], $params);
    }
}
