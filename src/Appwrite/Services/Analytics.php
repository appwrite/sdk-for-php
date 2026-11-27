<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\AnalyticsPropertyType;
use Appwrite\Enums\AnalyticsInterval;

class Analytics extends Service
{
    /**
     * List analytics properties for the current project.
     *
     * @throws AppwriteException
     */
    public function listProperties(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\AnalyticsPropertyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/analytics/properties'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
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

        return \Appwrite\Models\AnalyticsPropertyList::from($response);
    }

    /**
     * Create a new analytics property to track a website or application.
     *
     * @throws AppwriteException
     */
    public function createProperty(string $propertyId, string $name, ?string $domain = null, ?bool $enabled = null, ?array $allowedOrigins = null, ?bool $identifyUsers = null, ?AnalyticsPropertyType $type = null): \Appwrite\Models\AnalyticsProperty
    {
        $apiPath = str_replace(
            [],
            [],
            '/analytics/properties'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['name'] = $name;

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($allowedOrigins)) {
            $apiParams['allowedOrigins'] = $allowedOrigins;
        }

        if (!is_null($identifyUsers)) {
            $apiParams['identifyUsers'] = $identifyUsers;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AnalyticsProperty::from($response);
    }

    /**
     * Get an analytics property by ID.
     *
     * @throws AppwriteException
     */
    public function getProperty(string $propertyId): \Appwrite\Models\AnalyticsProperty
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;

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

        return \Appwrite\Models\AnalyticsProperty::from($response);
    }

    /**
     * Update an analytics property. Only the attributes you pass are changed;
     * omitted attributes keep their current value.
     *
     * @throws AppwriteException
     */
    public function updateProperty(string $propertyId, ?string $name = null, ?string $domain = null, ?bool $enabled = null, ?array $allowedOrigins = null, ?bool $identifyUsers = null, ?AnalyticsPropertyType $type = null): \Appwrite\Models\AnalyticsProperty
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['name'] = $name;
        $apiParams['domain'] = $domain;
        $apiParams['enabled'] = $enabled;
        $apiParams['allowedOrigins'] = $allowedOrigins;
        $apiParams['identifyUsers'] = $identifyUsers;
        $apiParams['type'] = $type;

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

        return \Appwrite\Models\AnalyticsProperty::from($response);
    }

    /**
     * Delete an analytics property along with every event and session collected
     * for it. This cannot be undone.
     *
     * @throws AppwriteException
     */
    public function deleteProperty(string $propertyId): string
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List the annotations of an analytics property. Filter on `date` to fetch
     * the annotations inside a chart's time range.
     *
     * @throws AppwriteException
     */
    public function listAnnotations(string $propertyId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AnalyticsAnnotationList
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}/annotations'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;

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

        return \Appwrite\Models\AnalyticsAnnotationList::from($response);
    }

    /**
     * Create an annotation that marks a point in time on an analytics property's
     * charts.
     *
     * @throws AppwriteException
     */
    public function createAnnotation(string $propertyId, string $annotationId, string $date, string $content): \Appwrite\Models\AnalyticsAnnotation
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}/annotations'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['annotationId'] = $annotationId;
        $apiParams['date'] = $date;
        $apiParams['content'] = $content;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AnalyticsAnnotation::from($response);
    }

    /**
     * Get an analytics annotation by ID.
     *
     * @throws AppwriteException
     */
    public function getAnnotation(string $propertyId, string $annotationId): \Appwrite\Models\AnalyticsAnnotation
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        if ($annotationId === '') {
            throw new AppwriteException('Missing required parameter: "annotationId"');
        }

        $apiPath = str_replace(
            ['{propertyId}', '{annotationId}'],
            [self::encodePath($propertyId), self::encodePath($annotationId)],
            '/analytics/properties/{propertyId}/annotations/{annotationId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['annotationId'] = $annotationId;

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

        return \Appwrite\Models\AnalyticsAnnotation::from($response);
    }

    /**
     * Update an analytics annotation. Only the attributes you pass are changed;
     * omitted attributes keep their current value.
     *
     * @throws AppwriteException
     */
    public function updateAnnotation(string $propertyId, string $annotationId, ?string $date = null, ?string $content = null): \Appwrite\Models\AnalyticsAnnotation
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        if ($annotationId === '') {
            throw new AppwriteException('Missing required parameter: "annotationId"');
        }

        $apiPath = str_replace(
            ['{propertyId}', '{annotationId}'],
            [self::encodePath($propertyId), self::encodePath($annotationId)],
            '/analytics/properties/{propertyId}/annotations/{annotationId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['annotationId'] = $annotationId;
        $apiParams['date'] = $date;
        $apiParams['content'] = $content;

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

        return \Appwrite\Models\AnalyticsAnnotation::from($response);
    }

    /**
     * Delete an analytics annotation.
     *
     * @throws AppwriteException
     */
    public function deleteAnnotation(string $propertyId, string $annotationId): string
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        if ($annotationId === '') {
            throw new AppwriteException('Missing required parameter: "annotationId"');
        }

        $apiPath = str_replace(
            ['{propertyId}', '{annotationId}'],
            [self::encodePath($propertyId), self::encodePath($annotationId)],
            '/analytics/properties/{propertyId}/annotations/{annotationId}'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['annotationId'] = $annotationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Send a tracking event from a browser, native app, or server-side SDK.
     *
     * @throws AppwriteException
     */
    public function createEvent(string $propertyId, string $name, string $url, ?string $domain = null, ?string $referrer = null, ?int $screenWidth = null, ?string $sessionHash = null, ?int $scrollDepth = null, ?int $engagementTime = null, ?array $props = null, ?string $userId = null, ?string $ip = null, ?string $userAgent = null, ?bool $interactive = null): array
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}/events'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;
        $apiParams['name'] = $name;
        $apiParams['url'] = $url;

        if (!is_null($domain)) {
            $apiParams['domain'] = $domain;
        }

        if (!is_null($referrer)) {
            $apiParams['referrer'] = $referrer;
        }

        if (!is_null($screenWidth)) {
            $apiParams['screenWidth'] = $screenWidth;
        }

        if (!is_null($sessionHash)) {
            $apiParams['sessionHash'] = $sessionHash;
        }

        if (!is_null($scrollDepth)) {
            $apiParams['scrollDepth'] = $scrollDepth;
        }

        if (!is_null($engagementTime)) {
            $apiParams['engagementTime'] = $engagementTime;
        }

        if (!is_null($props)) {
            $apiParams['props'] = $props;
        }

        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($ip)) {
            $apiParams['ip'] = $ip;
        }

        if (!is_null($userAgent)) {
            $apiParams['userAgent'] = $userAgent;
        }
        $apiParams['interactive'] = $interactive;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
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
     * Read analytics metrics (visitors, sessions, pageviews, events, bounceRate,
     * …) for a property over a date range.
     *
     * **Three response shapes**, chosen by `dimensions[]` and `interval`:
     * - Neither: one row aggregating the whole window, with `value` and `date`
     * null. Only this shape carries `visits`, `bounceRate`, `visitDuration`,
     * `viewsPerVisit`, `scrollDepth` and `engagementTime`.
     * - `dimensions[]`: one row per dimension value, ranked by visitors, with
     * `value` set and `date` null.
     * - `interval`: one row per time bucket in chronological order, with `date`
     * set and `value` null.
     *
     * `pageviews` is carried by the flat aggregate and by `interval`, but not by
     * a breakdown.
     *
     * `userId` and `users` cover identified traffic only: events sent with an API
     * key's `userId`, or from a signed-in session on a property with
     * `identifyUsers` on. A `userId` breakdown leaves out anonymous events;
     * returned values are the project's user IDs.
     *
     * Custom event props: `dimensions[]=props` ranks the prop keys seen in the
     * window, and adding `propKey` ranks the values of that one key. `queries[]`
     * filters on a prop's value with the `props.<key>` attribute, e.g.
     * `equal("props.plan", ["pro"])`.
     *
     * Combining `dimensions[]` with `interval` is not supported yet. `queries[]`
     * filters the underlying events using standard Utopia query syntax.
     *
     * @throws AppwriteException
     */
    public function listMetrics(string $propertyId, ?array $queries = null, ?AnalyticsInterval $interval = null, ?array $dimensions = null, ?string $propKey = null, ?string $dateRange = null, ?string $startAt = null, ?string $endAt = null, ?int $limit = null, ?bool $total = null): \Appwrite\Models\AnalyticsMetricList
    {
        if ($propertyId === '') {
            throw new AppwriteException('Missing required parameter: "propertyId"');
        }

        $apiPath = str_replace(
            ['{propertyId}'],
            [self::encodePath($propertyId)],
            '/analytics/properties/{propertyId}/metrics'
        );

        $apiParams = [];
        $apiParams['propertyId'] = $propertyId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($interval)) {
            $apiParams['interval'] = $interval;
        }

        if (!is_null($dimensions)) {
            $apiParams['dimensions'] = $dimensions;
        }

        if (!is_null($propKey)) {
            $apiParams['propKey'] = $propKey;
        }

        if (!is_null($dateRange)) {
            $apiParams['dateRange'] = $dateRange;
        }

        if (!is_null($startAt)) {
            $apiParams['startAt'] = $startAt;
        }

        if (!is_null($endAt)) {
            $apiParams['endAt'] = $endAt;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
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

        return \Appwrite\Models\AnalyticsMetricList::from($response);
    }
}
