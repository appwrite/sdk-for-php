<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Project extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all project environment variables.
     *
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\VariableList
     */
    public function listVariables(?array $queries = null, ?bool $total = null): \Appwrite\Models\VariableList
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
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

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\VariableList::class]
        );

    }

    /**
     * Create a new project environment variable. These variables can be accessed
     * by all functions and sites in the project.
     *
     * @param string $variableId
     * @param string $key
     * @param string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function createVariable(string $variableId, string $key, string $value, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            [],
            [],
            '/project/variables'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;

        if (!is_null($secret)) {
            $apiParams['secret'] = $secret;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Get a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function getVariable(string $variableId): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Update variable by its unique ID.
     *
     * @param string $variableId
     * @param ?string $key
     * @param ?string $value
     * @param ?bool $secret
     * @throws AppwriteException
     * @return \Appwrite\Models\Variable
     */
    public function updateVariable(string $variableId, ?string $key = null, ?string $value = null, ?bool $secret = null): \Appwrite\Models\Variable
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;
        $apiParams['key'] = $key;
        $apiParams['value'] = $value;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Variable::class]
        );

    }

    /**
     * Delete a variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return string
     */
    public function deleteVariable(string $variableId): string
    {
        $apiPath = str_replace(
            ['{variableId}'],
            [$variableId],
            '/project/variables/{variableId}'
        );

        $apiParams = [];
        $apiParams['variableId'] = $variableId;

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
}
