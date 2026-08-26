<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Activities extends Service
{
    /**
     * List all events for selected filters.
     *
     * @throws AppwriteException
     */
    public function listEvents(?array $queries = null): \Appwrite\Models\ActivityEventList
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ActivityEventList::from($response);
    }

    /**
     * Get event by ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\ActivityEvent::from($response);
    }
}
