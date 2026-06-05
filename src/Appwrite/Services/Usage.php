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
     * Query usage event metrics from the usage database. Returns individual event
     * rows with full metadata. Pass Query objects as JSON strings to filter,
     * paginate, and order results. Supported query methods: equal,
     * greaterThanEqual, lessThanEqual, orderAsc, orderDesc, limit, offset.
     * Supported filter attributes: metric, path, method, status, resource,
     * resourceId, country, userAgent, time (these match the underlying column
     * names — note that the response surfaces `resource` as `resourceType` and
     * `country` as `countryCode`). When no time filter is supplied the endpoint
     * defaults to the last 7 days. Default `limit(100)` is applied if none is
     * given; user-supplied limits are capped at 500. The `total` field is capped
     * at 5000 to keep counts predictable — pass `total=false` to skip the count
     * entirely.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\UsageEventList
     */
    public function listEvents(?array $queries = null, ?bool $total = null): \Appwrite\Models\UsageEventList
    {
        $apiPath = str_replace(
            [],
            [],
            '/usage/events'
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
     * Query usage gauge metrics (point-in-time resource snapshots) from the usage
     * database. Returns individual gauge snapshots with metric, value, timestamp,
     * resourceType, and resourceId. Pass Query objects as JSON strings to filter,
     * paginate, and order results. Supported query methods: equal,
     * greaterThanEqual, lessThanEqual, orderAsc, orderDesc, limit, offset.
     * Supported filter attributes: metric, time. Use `orderDesc("time"),
     * limit(1)` to fetch the most recent snapshot. When no time filter is
     * supplied the endpoint defaults to the last 7 days. Default `limit(100)` is
     * applied if none is given; user-supplied limits are capped at 500. The
     * `total` field is capped at 5000 to keep counts predictable — pass
     * `total=false` to skip the count entirely.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\UsageGaugeList
     */
    public function listGauges(?array $queries = null, ?bool $total = null): \Appwrite\Models\UsageGaugeList
    {
        $apiPath = str_replace(
            [],
            [],
            '/usage/gauges'
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
