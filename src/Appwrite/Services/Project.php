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
          $this->client = $client;
     }

    /**
     * List Variables
     *
     * Get a list of all project variables. These variables will be accessible in
     * all Appwrite Functions at runtime.
     *
     * @throws AppwriteException
     * @return array

     */
    public function listVariables(): array
    {
        $apiPath = str_replace([], [], '/project/variables');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Variable
     *
     * Create a new project variable. This variable will be accessible in all
     * Appwrite Functions at runtime.
     *
     * @param string $key
     * @param string $value
     * @throws AppwriteException
     * @return array

     */
    public function createVariable(string $key, string $value): array
    {
        $apiPath = str_replace([], [], '/project/variables');

        $params = [];
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($value)) {
            throw new AppwriteException('Missing required parameter: "value"');
        }
        if (!is_null($key)) {
            $params['key'] = $key;
        }

        if (!is_null($value)) {
            $params['value'] = $value;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Variable
     *
     * Get a project variable by its unique ID.
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return array

     */
    public function getVariable(string $variableId): array
    {
        $apiPath = str_replace(['{variableId}'], [$variableId], '/project/variables/{variableId}');

        $params = [];
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Variable
     *
     * Update project variable by its unique ID. This variable will be accessible
     * in all Appwrite Functions at runtime.
     *
     * @param string $variableId
     * @param string $key
     * @param string $value
     * @throws AppwriteException
     * @return array

     */
    public function updateVariable(string $variableId, string $key, string $value = null): array
    {
        $apiPath = str_replace(['{variableId}'], [$variableId], '/project/variables/{variableId}');

        $params = [];
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!is_null($key)) {
            $params['key'] = $key;
        }

        if (!is_null($value)) {
            $params['value'] = $value;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Variable
     *
     * Delete a project variable by its unique ID. 
     *
     * @param string $variableId
     * @throws AppwriteException
     * @return string

     */
    public function deleteVariable(string $variableId): string
    {
        $apiPath = str_replace(['{variableId}'], [$variableId], '/project/variables/{variableId}');

        $params = [];
        if (!isset($variableId)) {
            throw new AppwriteException('Missing required parameter: "variableId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $params);
    }
}
