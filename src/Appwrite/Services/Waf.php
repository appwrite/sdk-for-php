<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Waf extends Service
{
    /**
     * List WAF rules for the current project.
     *
     * @throws AppwriteException
     */
    public function listRules(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\WafRuleList
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules'
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

        return \Appwrite\Models\WafRuleList::from($response);
    }

    /**
     * Create a bypass WAF rule. Conditions can match request attributes including
     * `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`,
     * `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function createBypassRule(string $ruleId, string $resourceType, string $name, ?string $resourceId = null, ?string $description = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleBypass
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules/bypass'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['name'] = $name;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
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

        return \Appwrite\Models\WafRuleBypass::from($response);
    }

    /**
     * Update a bypass WAF rule. Conditions can match request attributes including
     * `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`,
     * `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function updateBypassRule(string $ruleId, ?string $resourceType = null, ?string $resourceId = null, ?string $name = null, ?string $description = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleBypass
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/bypass/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['priority'] = $priority;
        $apiParams['enabled'] = $enabled;
        $apiParams['conditions'] = $conditions;

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

        return \Appwrite\Models\WafRuleBypass::from($response);
    }

    /**
     * Create a challenge WAF rule. Use `difficulty` (1 easiest to 5 hardest) to
     * tune the client-side proof-of-work cost, and `ttl` to control how long, in
     * seconds, a visitor stays cleared after passing the challenge before being
     * challenged again. Conditions can match request attributes including `ip`
     * (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`,
     * `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`,
     * `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions
     * on `city` and `state` require the premium Geo DB addon.
     *
     * @throws AppwriteException
     */
    public function createChallengeRule(string $ruleId, string $resourceType, string $name, ?string $resourceId = null, ?string $description = null, ?string $challengeType = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null, ?int $difficulty = null, ?int $ttl = null): \Appwrite\Models\WafRuleChallenge
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules/challenge'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['name'] = $name;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($challengeType)) {
            $apiParams['challengeType'] = $challengeType;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
        }

        if (!is_null($difficulty)) {
            $apiParams['difficulty'] = $difficulty;
        }

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
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

        return \Appwrite\Models\WafRuleChallenge::from($response);
    }

    /**
     * Update a challenge WAF rule. Use `difficulty` (1 easiest to 5 hardest) to
     * tune the client-side proof-of-work cost, and `ttl` to control how long, in
     * seconds, a visitor stays cleared after passing the challenge before being
     * challenged again. Conditions can match request attributes including `ip`
     * (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`, `host`,
     * `country`, `continent`, `headers.<name>`, `query.<key>`, `queryKeys`,
     * `userAgent`, `os`, `osVersion`, `browser`, and `browserVersion`. Conditions
     * on `city` and `state` require the premium Geo DB addon.
     *
     * @throws AppwriteException
     */
    public function updateChallengeRule(string $ruleId, ?string $resourceType = null, ?string $resourceId = null, ?string $name = null, ?string $description = null, ?string $challengeType = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null, ?int $difficulty = null, ?int $ttl = null): \Appwrite\Models\WafRuleChallenge
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/challenge/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['challengeType'] = $challengeType;
        $apiParams['priority'] = $priority;
        $apiParams['enabled'] = $enabled;
        $apiParams['conditions'] = $conditions;
        $apiParams['difficulty'] = $difficulty;
        $apiParams['ttl'] = $ttl;

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

        return \Appwrite\Models\WafRuleChallenge::from($response);
    }

    /**
     * Create a deny WAF rule. Conditions can match request attributes including
     * `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`,
     * `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function createDenyRule(string $ruleId, string $resourceType, string $name, ?string $resourceId = null, ?string $description = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleDeny
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules/deny'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['name'] = $name;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
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

        return \Appwrite\Models\WafRuleDeny::from($response);
    }

    /**
     * Update a deny WAF rule. Conditions can match request attributes including
     * `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`, `path`,
     * `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function updateDenyRule(string $ruleId, ?string $resourceType = null, ?string $resourceId = null, ?string $name = null, ?string $description = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleDeny
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/deny/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['priority'] = $priority;
        $apiParams['enabled'] = $enabled;
        $apiParams['conditions'] = $conditions;

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

        return \Appwrite\Models\WafRuleDeny::from($response);
    }

    /**
     * Create a rate limit WAF rule. Use `key` to choose the counter: `ip` limits
     * per client IP, while `userId` limits per authenticated user (requests
     * without an authenticated user skip `userId` rules). Conditions can match
     * request attributes including `ip` (plain IPs or CIDR blocks like
     * `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`,
     * `headers.<name>`, `query.<key>`, `queryKeys`, `userAgent`, `os`,
     * `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and
     * `state` require the premium Geo DB addon.
     *
     * @throws AppwriteException
     */
    public function createRateLimitRule(string $ruleId, string $resourceType, string $name, int $limit, int $interval, ?string $resourceId = null, ?string $description = null, ?string $key = null, ?string $strategy = null, ?int $maxBucketSize = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleRateLimit
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules/rate-limit'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['name'] = $name;
        $apiParams['limit'] = $limit;
        $apiParams['interval'] = $interval;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($strategy)) {
            $apiParams['strategy'] = $strategy;
        }
        $apiParams['maxBucketSize'] = $maxBucketSize;

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
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

        return \Appwrite\Models\WafRuleRateLimit::from($response);
    }

    /**
     * Update a rate limit WAF rule. Use `key` to choose the counter: `ip` limits
     * per client IP, while `userId` limits per authenticated user (requests
     * without an authenticated user skip `userId` rules). Conditions can match
     * request attributes including `ip` (plain IPs or CIDR blocks like
     * `10.0.0.0/8`), `method`, `path`, `host`, `country`, `continent`,
     * `headers.<name>`, `query.<key>`, `queryKeys`, `userAgent`, `os`,
     * `osVersion`, `browser`, and `browserVersion`. Conditions on `city` and
     * `state` require the premium Geo DB addon.
     *
     * @throws AppwriteException
     */
    public function updateRateLimitRule(string $ruleId, ?string $resourceType = null, ?string $resourceId = null, ?string $name = null, ?string $description = null, ?int $limit = null, ?int $interval = null, ?string $key = null, ?int $maxBucketSize = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleRateLimit
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/rate-limit/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['limit'] = $limit;
        $apiParams['interval'] = $interval;
        $apiParams['key'] = $key;
        $apiParams['maxBucketSize'] = $maxBucketSize;
        $apiParams['priority'] = $priority;
        $apiParams['enabled'] = $enabled;
        $apiParams['conditions'] = $conditions;

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

        return \Appwrite\Models\WafRuleRateLimit::from($response);
    }

    /**
     * Create a redirect WAF rule. Conditions can match request attributes
     * including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`,
     * `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function createRedirectRule(string $ruleId, string $resourceType, string $name, string $location, int $statusCode, ?string $resourceId = null, ?string $description = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleRedirect
    {
        $apiPath = str_replace(
            [],
            [],
            '/waf/rules/redirect'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['name'] = $name;
        $apiParams['location'] = $location;
        $apiParams['statusCode'] = $statusCode;
        $apiParams['resourceId'] = $resourceId;

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($priority)) {
            $apiParams['priority'] = $priority;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($conditions)) {
            $apiParams['conditions'] = $conditions;
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

        return \Appwrite\Models\WafRuleRedirect::from($response);
    }

    /**
     * Update a redirect WAF rule. Conditions can match request attributes
     * including `ip` (plain IPs or CIDR blocks like `10.0.0.0/8`), `method`,
     * `path`, `host`, `country`, `continent`, `headers.<name>`, `query.<key>`,
     * `queryKeys`, `userAgent`, `os`, `osVersion`, `browser`, and
     * `browserVersion`. Conditions on `city` and `state` require the premium Geo
     * DB addon.
     *
     * @throws AppwriteException
     */
    public function updateRedirectRule(string $ruleId, ?string $resourceType = null, ?string $resourceId = null, ?string $name = null, ?string $description = null, ?string $location = null, ?int $statusCode = null, ?int $priority = null, ?bool $enabled = null, ?array $conditions = null): \Appwrite\Models\WafRuleRedirect
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/redirect/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;
        $apiParams['resourceType'] = $resourceType;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['name'] = $name;
        $apiParams['description'] = $description;
        $apiParams['location'] = $location;
        $apiParams['statusCode'] = $statusCode;
        $apiParams['priority'] = $priority;
        $apiParams['enabled'] = $enabled;
        $apiParams['conditions'] = $conditions;

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

        return \Appwrite\Models\WafRuleRedirect::from($response);
    }

    /**
     * Get a WAF rule by its ID.
     *
     * @throws AppwriteException
     */
    public function getRule(string $ruleId): \Appwrite\Models\WafRuleBypass|\Appwrite\Models\WafRuleDeny|\Appwrite\Models\WafRuleChallenge|\Appwrite\Models\WafRuleRateLimit|\Appwrite\Models\WafRuleRedirect
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

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

        if (($response['action'] ?? null) === 'bypass') {
            return \Appwrite\Models\WafRuleBypass::from($response);
        }

        if (($response['action'] ?? null) === 'deny') {
            return \Appwrite\Models\WafRuleDeny::from($response);
        }

        if (($response['action'] ?? null) === 'challenge') {
            return \Appwrite\Models\WafRuleChallenge::from($response);
        }

        if (($response['action'] ?? null) === 'rateLimit') {
            return \Appwrite\Models\WafRuleRateLimit::from($response);
        }

        if (($response['action'] ?? null) === 'redirect') {
            return \Appwrite\Models\WafRuleRedirect::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');
    }

    /**
     * Delete a WAF rule.
     *
     * @throws AppwriteException
     */
    public function deleteRule(string $ruleId): string
    {
        if ($ruleId === '') {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/waf/rules/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

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
}
