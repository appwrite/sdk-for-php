<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Usage extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Aggregate usage event metrics. `metric` is required.
     * 
     * **Two response shapes**:
     * - Omit `interval` for a flat top-N table — one row per dimension
     * combination, no time axis. Useful for "top 10 paths by bandwidth in the
     * last 7 days".
     * - Pass `interval` (`1m`, `15m`, `30m`, `1h`, `1d`) for a time series —
     * one row per (time bucket × dimension combination).
     * 
     * `dimensions[]` breaks each row down by one or more attributes (service,
     * path, status, country, …). `resource` and `resourceId` filter the
     * underlying events. `orderBy=value`+`orderDir=desc`+`limit=N` returns the
     * top-N by aggregated value. When `startAt` is omitted, the default window
     * adapts to `interval` (or 7d when interval is omitted).
     *
     * @param string $metric
     * @param ?string $resource
     * @param ?string $resourceId
     * @param ?string $interval
     * @param ?array $dimensions
     * @param ?string $startAt
     * @param ?string $endAt
     * @param ?string $orderBy
     * @param ?string $orderDir
     * @param ?int $limit
     * @param ?int $offset
     * @throws AppwriteException
     * @return \Appwrite\Models\UsageEventList
     */
    public function listEvents(string $metric, ?string $resource = null, ?string $resourceId = null, ?string $interval = null, ?array $dimensions = null, ?string $startAt = null, ?string $endAt = null, ?string $orderBy = null, ?string $orderDir = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\UsageEventList
    {
        $apiPath = str_replace(
            [],
            [],
            '/usage/events'
        );

        $apiParams = [];
        $apiParams['metric'] = $metric;

        if (!is_null($resource)) {
            $apiParams['resource'] = $resource;
        }

        if (!is_null($resourceId)) {
            $apiParams['resourceId'] = $resourceId;
        }

        if (!is_null($interval)) {
            $apiParams['interval'] = $interval;
        }

        if (!is_null($dimensions)) {
            $apiParams['dimensions'] = $dimensions;
        }

        if (!is_null($startAt)) {
            $apiParams['startAt'] = $startAt;
        }

        if (!is_null($endAt)) {
            $apiParams['endAt'] = $endAt;
        }

        if (!is_null($orderBy)) {
            $apiParams['orderBy'] = $orderBy;
        }

        if (!is_null($orderDir)) {
            $apiParams['orderDir'] = $orderDir;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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

        return \Appwrite\Models\UsageEventList::from($response);

    }

    /**
     * Aggregate usage gauge snapshots. Gauges are point-in-time values (storage
     * totals, resource counts, …); each group carries the latest snapshot in
     * its interval via `argMax(value, time)`. `metric` is required.
     * 
     * **Two response shapes**:
     * - Omit `interval` for a flat top-N table — `argMax(value, time)` per
     * dimension combination over the whole window, no time axis. Useful for "top
     * 10 resources by current storage".
     * - Pass `interval` (`1m`, `15m`, `30m`, `1h`, `1d`) for a time series —
     * one snapshot per (time bucket × dimension combination).
     * 
     * `dimensions[]` breaks each row down further — only `resourceId` and
     * `teamId` are supported on gauges. `resourceId` and `teamId` parameters
     * filter the underlying rows. `orderBy=value`+`orderDir=desc`+`limit=N`
     * returns the top-N. When `startAt` is omitted, the default window adapts to
     * interval (or 7d when interval is omitted).
     *
     * @param string $metric
     * @param ?string $resourceId
     * @param ?string $teamId
     * @param ?string $interval
     * @param ?array $dimensions
     * @param ?string $startAt
     * @param ?string $endAt
     * @param ?string $orderBy
     * @param ?string $orderDir
     * @param ?int $limit
     * @param ?int $offset
     * @throws AppwriteException
     * @return \Appwrite\Models\UsageGaugeList
     */
    public function listGauges(string $metric, ?string $resourceId = null, ?string $teamId = null, ?string $interval = null, ?array $dimensions = null, ?string $startAt = null, ?string $endAt = null, ?string $orderBy = null, ?string $orderDir = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\UsageGaugeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/usage/gauges'
        );

        $apiParams = [];
        $apiParams['metric'] = $metric;

        if (!is_null($resourceId)) {
            $apiParams['resourceId'] = $resourceId;
        }

        if (!is_null($teamId)) {
            $apiParams['teamId'] = $teamId;
        }

        if (!is_null($interval)) {
            $apiParams['interval'] = $interval;
        }

        if (!is_null($dimensions)) {
            $apiParams['dimensions'] = $dimensions;
        }

        if (!is_null($startAt)) {
            $apiParams['startAt'] = $startAt;
        }

        if (!is_null($endAt)) {
            $apiParams['endAt'] = $endAt;
        }

        if (!is_null($orderBy)) {
            $apiParams['orderBy'] = $orderBy;
        }

        if (!is_null($orderDir)) {
            $apiParams['orderDir'] = $orderDir;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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

        return \Appwrite\Models\UsageGaugeList::from($response);

    }
}
