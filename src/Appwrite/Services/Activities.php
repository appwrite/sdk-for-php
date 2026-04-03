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
     * @return \Appwrite\Models\ActivityEventList
     */
    public function listEvents(?string $queries = null): \Appwrite\Models\ActivityEventList
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\ActivityEventList::class]
        );

    }

    /**
     * Get event by ID.
     * 
     *
     * @param string $eventId
     * @throws AppwriteException
     * @return \Appwrite\Models\ActivityEvent
     */
    public function getEvent(string $eventId): \Appwrite\Models\ActivityEvent
    {
        $apiPath = str_replace(
            ['{eventId}'],
            [$eventId],
            '/activities/events/{eventId}'
        );

        $apiParams = [];
        $apiParams['eventId'] = $eventId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\ActivityEvent::class]
        );

    }
}
