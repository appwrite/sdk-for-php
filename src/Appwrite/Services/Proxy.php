<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\InvalidationType;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

class Proxy extends Service
{
    /**
     * Create a new CDN cache invalidation for a domain. Executes a hard purge of
     * cached content.
     *
     * Depending on type, the invalidation purges a single cache tag, a single URL
     * path, or all cached content for the domain.
     *
     * @throws AppwriteException
     */
    public function createInvalidation(string $domain, InvalidationType $type, ?string $reference = null): \Appwrite\Models\ProxyInvalidation
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/invalidations'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['type'] = $type;

        if (!is_null($reference)) {
            $apiParams['reference'] = $reference;
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

        return \Appwrite\Models\ProxyInvalidation::from($response);
    }

    /**
     * Get a list of all the proxy rules. You can use the query params to filter
     * your results.
     *
     * @throws AppwriteException
     */
    public function listRules(?array $queries = null, ?bool $total = null): \Appwrite\Models\ProxyRuleList
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules'
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

        return \Appwrite\Models\ProxyRuleList::from($response);
    }

    /**
     * Create a new proxy rule for serving Appwrite's API on custom domain.
     *
     * Rule ID is automatically generated as MD5 hash of a rule domain for
     * performance purposes.
     *
     * @throws AppwriteException
     */
    public function createAPIRule(string $domain): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/api'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;

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

        return \Appwrite\Models\ProxyRule::from($response);
    }

    /**
     * Create a new proxy rule for executing Appwrite Function on custom domain.
     *
     * Rule ID is automatically generated as MD5 hash of a rule domain for
     * performance purposes.
     *
     * @throws AppwriteException
     */
    public function createFunctionRule(string $domain, string $functionId, ?string $branch = null): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/function'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['functionId'] = $functionId;

        if (!is_null($branch)) {
            $apiParams['branch'] = $branch;
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

        return \Appwrite\Models\ProxyRule::from($response);
    }

    /**
     * Create a new proxy rule for to redirect from custom domain to another
     * domain.
     *
     * Rule ID is automatically generated as MD5 hash of a rule domain for
     * performance purposes.
     *
     * @throws AppwriteException
     */
    public function createRedirectRule(string $domain, string $url, StatusCode $statusCode, string $resourceId, ProxyResourceType $resourceType): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/redirect'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['url'] = $url;
        $apiParams['statusCode'] = $statusCode;
        $apiParams['resourceId'] = $resourceId;
        $apiParams['resourceType'] = $resourceType;

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

        return \Appwrite\Models\ProxyRule::from($response);
    }

    /**
     * Create a new proxy rule for serving Appwrite Site on custom domain.
     *
     * Rule ID is automatically generated as MD5 hash of a rule domain for
     * performance purposes.
     *
     * @throws AppwriteException
     */
    public function createSiteRule(string $domain, string $siteId, ?string $branch = null): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            [],
            [],
            '/proxy/rules/site'
        );

        $apiParams = [];
        $apiParams['domain'] = $domain;
        $apiParams['siteId'] = $siteId;

        if (!is_null($branch)) {
            $apiParams['branch'] = $branch;
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

        return \Appwrite\Models\ProxyRule::from($response);
    }

    /**
     * Get a proxy rule by its unique ID.
     *
     * @throws AppwriteException
     */
    public function getRule(string $ruleId): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}'
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

        return \Appwrite\Models\ProxyRule::from($response);
    }

    /**
     * Delete a proxy rule by its unique ID.
     *
     * @throws AppwriteException
     */
    public function deleteRule(string $ruleId): string
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * If not succeeded yet, retry verification process of a proxy rule domain.
     * This endpoint triggers domain verification by checking DNS records. If
     * verification is successful, a TLS certificate will be automatically
     * provisioned for the domain asynchronously in the background.
     *
     * @throws AppwriteException
     */
    public function updateRuleStatus(string $ruleId): \Appwrite\Models\ProxyRule
    {
        $apiPath = str_replace(
            ['{ruleId}'],
            [$ruleId],
            '/proxy/rules/{ruleId}/status'
        );

        $apiParams = [];
        $apiParams['ruleId'] = $ruleId;

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

        return \Appwrite\Models\ProxyRule::from($response);
    }
}
