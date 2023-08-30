<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Proxy extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List Rules
     *
     * Get a list of all the proxy rules. You can use the query params to filter
     * your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listRules(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/proxy/rules');

        $params = [];
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Rule
     *
     * Create a new proxy rule.
     *
     * @param string $domain
     * @param string $resourceType
     * @param string $resourceId
     * @throws AppwriteException
     * @return array

     */
    public function createRule(string $domain, string $resourceType, string $resourceId = null): array
    {
        $apiPath = str_replace([], [], '/proxy/rules');

        $params = [];
        if (!isset($domain)) {
            throw new AppwriteException('Missing required parameter: "domain"');
        }
        if (!isset($resourceType)) {
            throw new AppwriteException('Missing required parameter: "resourceType"');
        }
        if (!is_null($domain)) {
            $params['domain'] = $domain;
        }

        if (!is_null($resourceType)) {
            $params['resourceType'] = $resourceType;
        }

        if (!is_null($resourceId)) {
            $params['resourceId'] = $resourceId;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Rule
     *
     * Get a proxy rule by its unique ID.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return array

     */
    public function getRule(string $ruleId): array
    {
        $apiPath = str_replace(['{ruleId}'], [$ruleId], '/proxy/rules/{ruleId}');

        $params = [];
        if (!isset($ruleId)) {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Rule
     *
     * Delete a proxy rule by its unique ID.
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return string

     */
    public function deleteRule(string $ruleId): string
    {
        $apiPath = str_replace(['{ruleId}'], [$ruleId], '/proxy/rules/{ruleId}');

        $params = [];
        if (!isset($ruleId)) {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Rule Verification Status
     *
     * @param string $ruleId
     * @throws AppwriteException
     * @return array

     */
    public function updateRuleVerification(string $ruleId): array
    {
        $apiPath = str_replace(['{ruleId}'], [$ruleId], '/proxy/rules/{ruleId}/verification');

        $params = [];
        if (!isset($ruleId)) {
            throw new AppwriteException('Missing required parameter: "ruleId"');
        }

        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }
}
