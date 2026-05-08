<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

class Proxy extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the proxy rules. You can use the query params to filter
     * your results.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRuleList
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
     * @param string $domain
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
        $apiHeaders['content-type'] = 'application/json';

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
     * @param string $domain
     * @param string $functionId
     * @param ?string $branch
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
        $apiHeaders['content-type'] = 'application/json';

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
     * @param string $domain
     * @param string $url
     * @param StatusCode $statusCode
     * @param string $resourceId
     * @param ProxyResourceType $resourceType
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
        $apiHeaders['content-type'] = 'application/json';

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
     * @param string $domain
     * @param string $siteId
     * @param ?string $branch
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
        $apiHeaders['content-type'] = 'application/json';

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
     * @param string $ruleId
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
     * @param string $ruleId
     * @throws AppwriteException
     * @return string
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
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * If not succeeded yet, retry verification process of a proxy rule domain.
     * This endpoint triggers domain verification by checking DNS records. If
     * verification is successful, a TLS certificate will be automatically
     * provisioned for the domain asynchronously in the background.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return \Appwrite\Models\ProxyRule
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
        $apiHeaders['content-type'] = 'application/json';

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
