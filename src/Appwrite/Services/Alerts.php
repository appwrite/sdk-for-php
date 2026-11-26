<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Alerts extends Service
{
    /**
     * Get a list of the alerts the project's monitors raised, open and resolved.
     * An alert is created when a monitor starts firing and resolved when it
     * recovers. Use queries to filter by monitor, status, type or resource, order
     * by `$createdAt` for the latest first, and `Query.search('search', term)` to
     * search alert and monitor IDs, names and metrics.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?bool $total = null): \Appwrite\Models\AlertList
    {
        $apiPath = str_replace(
            [],
            [],
            '/alerts'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
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

        return \Appwrite\Models\AlertList::from($response);
    }

    /**
     * Get an alert by its unique ID: the monitor that raised it, when it fired
     * and resolved, and the readings while it fired.
     *
     * @throws AppwriteException
     */
    public function get(string $alertId): \Appwrite\Models\Alert
    {
        if ($alertId === '') {
            throw new AppwriteException('Missing required parameter: "alertId"');
        }

        $apiPath = str_replace(
            ['{alertId}'],
            [self::encodePath($alertId)],
            '/alerts/{alertId}'
        );

        $apiParams = [];
        $apiParams['alertId'] = $alertId;

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

        return \Appwrite\Models\Alert::from($response);
    }

    /**
     * Acknowledge a firing alert, or undo that. Everyone who can read the alert
     * sees who acknowledged it and when. The alert keeps firing until its monitor
     * recovers; a resolved alert keeps its acknowledgement and cannot be changed.
     *
     * @throws AppwriteException
     */
    public function update(string $alertId, bool $acknowledged): \Appwrite\Models\Alert
    {
        if ($alertId === '') {
            throw new AppwriteException('Missing required parameter: "alertId"');
        }

        $apiPath = str_replace(
            ['{alertId}'],
            [self::encodePath($alertId)],
            '/alerts/{alertId}'
        );

        $apiParams = [];
        $apiParams['alertId'] = $alertId;
        $apiParams['acknowledged'] = $acknowledged;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Alert::from($response);
    }
}
