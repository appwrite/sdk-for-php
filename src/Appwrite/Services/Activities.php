<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Activities extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * List all events for selected filters.
     *
     * @param ?string $queries
     * @throws AppwriteException
     * @return array
     */
    public function listEvents(?string $queries = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/activities/events'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get event by ID.
     * 
     *
     * @param string $eventId
     * @throws AppwriteException
     * @return array
     */
    public function getEvent(string $eventId): array
    {
        $apiPath = str_replace(
            ['{eventId}'],
            [$eventId],
            '/activities/events/{eventId}'
        );

        $apiParams = [];
        $apiParams['eventId'] = $eventId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}