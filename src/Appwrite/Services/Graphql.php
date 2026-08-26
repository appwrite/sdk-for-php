<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Graphql extends Service
{
    /**
     * Execute a GraphQL mutation.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['x-sdk-graphql'] = 'true';
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Execute a GraphQL mutation.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['x-sdk-graphql'] = 'true';
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
