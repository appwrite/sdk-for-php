<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Databases extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List databases
     *
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function list(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/databases');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create database
     *
     * Create a new Database.
     * 
     *
     * @param string $databaseId
     * @param string $name
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function create(string $databaseId, string $name, bool $enabled = null): array
    {
        $apiPath = str_replace([], [], '/databases');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($databaseId)) {
            $apiParams['databaseId'] = $databaseId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get database
     *
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return array

     */
    public function get(string $databaseId): array
    {
        $apiPath = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update database
     *
     * Update a database by its unique ID.
     *
     * @param string $databaseId
     * @param string $name
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function update(string $databaseId, string $name, bool $enabled = null): array
    {
        $apiPath = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete database
     *
     * Delete a database by its unique ID. Only API keys with with databases.write
     * scope can delete a database.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return string

     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List collections
     *
     * Get a list of all collections that belong to the provided databaseId. You
     * can use the search parameter to filter your results.
     *
     * @param string $databaseId
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listCollections(string $databaseId, array $queries = null, string $search = null): array
    {
        $apiPath = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}/collections');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create collection
     *
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param array $permissions
     * @param bool $documentSecurity
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function createCollection(string $databaseId, string $collectionId, string $name, array $permissions = null, bool $documentSecurity = null, bool $enabled = null): array
    {
        $apiPath = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}/collections');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($collectionId)) {
            $apiParams['collectionId'] = $collectionId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get collection
     *
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function getCollection(string $databaseId, string $collectionId): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update collection
     *
     * Update a collection by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param array $permissions
     * @param bool $documentSecurity
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function updateCollection(string $databaseId, string $collectionId, string $name, array $permissions = null, bool $documentSecurity = null, bool $enabled = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete collection
     *
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return string

     */
    public function deleteCollection(string $databaseId, string $collectionId): string
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List attributes
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listAttributes(string $databaseId, string $collectionId, array $queries = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create boolean attribute
     *
     * Create a boolean attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param bool $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, bool $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/boolean');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update boolean attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param bool $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, bool $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/boolean/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create datetime attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/datetime');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update dateTime attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/datetime/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create email attribute
     *
     * Create an email attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/email');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update email attribute
     *
     * Update an email attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/email/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create enum attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/enum');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($elements)) {
            throw new AppwriteException('Missing required parameter: "elements"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($elements)) {
            $apiParams['elements'] = $elements;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update enum attribute
     *
     * Update an enum attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/enum/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($elements)) {
            throw new AppwriteException('Missing required parameter: "elements"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($elements)) {
            $apiParams['elements'] = $elements;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create float attribute
     *
     * Create a float attribute. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param int $min
     * @param int $max
     * @param int $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, int $min = null, int $max = null, int $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/float');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update float attribute
     *
     * Update a float attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param int $min
     * @param int $max
     * @param int $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, int $min, int $max, int $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/float/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!isset($min)) {
            throw new AppwriteException('Missing required parameter: "min"');
        }
        if (!isset($max)) {
            throw new AppwriteException('Missing required parameter: "max"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create integer attribute
     *
     * Create an integer attribute. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param int $min
     * @param int $max
     * @param int $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, int $min = null, int $max = null, int $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/integer');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update integer attribute
     *
     * Update an integer attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param int $min
     * @param int $max
     * @param int $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, int $min, int $max, int $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/integer/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!isset($min)) {
            throw new AppwriteException('Missing required parameter: "min"');
        }
        if (!isset($max)) {
            throw new AppwriteException('Missing required parameter: "max"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create IP address attribute
     *
     * Create IP address attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/ip');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update IP address attribute
     *
     * Update an ip attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/ip/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create relationship attribute
     *
     * Create relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $relatedCollectionId
     * @param string $type
     * @param bool $twoWay
     * @param string $key
     * @param string $twoWayKey
     * @param string $onDelete
     * @throws AppwriteException
     * @return array

     */
    public function createRelationshipAttribute(string $databaseId, string $collectionId, string $relatedCollectionId, string $type, bool $twoWay = null, string $key = null, string $twoWayKey = null, string $onDelete = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/relationship');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($relatedCollectionId)) {
            throw new AppwriteException('Missing required parameter: "relatedCollectionId"');
        }
        if (!isset($type)) {
            throw new AppwriteException('Missing required parameter: "type"');
        }
        if (!is_null($relatedCollectionId)) {
            $apiParams['relatedCollectionId'] = $relatedCollectionId;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($twoWay)) {
            $apiParams['twoWay'] = $twoWay;
        }

        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($twoWayKey)) {
            $apiParams['twoWayKey'] = $twoWayKey;
        }

        if (!is_null($onDelete)) {
            $apiParams['onDelete'] = $onDelete;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create string attribute
     *
     * Create a string attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param int $size
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @param bool $encrypt
     * @throws AppwriteException
     * @return array

     */
    public function createStringAttribute(string $databaseId, string $collectionId, string $key, int $size, bool $required, string $xdefault = null, bool $xarray = null, bool $encrypt = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/string');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($size)) {
            throw new AppwriteException('Missing required parameter: "size"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($size)) {
            $apiParams['size'] = $size;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update string attribute
     *
     * Update a string attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateStringAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/string/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create URL attribute
     *
     * Create a URL attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/url');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update URL attribute
     *
     * Update an url attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @throws AppwriteException
     * @return array

     */
    public function updateUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, string $xdefault): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/url/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }
        if (!is_null($required)) {
            $apiParams['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getAttribute(string $databaseId, string $collectionId, string $key): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteAttribute(string $databaseId, string $collectionId, string $key): string
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update relationship attribute
     *
     * Update relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param string $onDelete
     * @throws AppwriteException
     * @return array

     */
    public function updateRelationshipAttribute(string $databaseId, string $collectionId, string $key, string $onDelete = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}/relationship');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!is_null($onDelete)) {
            $apiParams['onDelete'] = $onDelete;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List documents
     *
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listDocuments(string $databaseId, string $collectionId, array $queries = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create document
     *
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param array $permissions
     * @throws AppwriteException
     * @return array

     */
    public function createDocument(string $databaseId, string $collectionId, string $documentId, array $data, array $permissions = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }
        if (!isset($data)) {
            throw new AppwriteException('Missing required parameter: "data"');
        }
        if (!is_null($documentId)) {
            $apiParams['documentId'] = $documentId;
        }

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get document
     *
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId, array $queries = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update document
     *
     * Update a document by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param array $permissions
     * @throws AppwriteException
     * @return array

     */
    public function updateDocument(string $databaseId, string $collectionId, string $documentId, array $data = null, array $permissions = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }
        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete document
     *
     * Delete a document by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return string

     */
    public function deleteDocument(string $databaseId, string $collectionId, string $documentId): string
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List indexes
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listIndexes(string $databaseId, string $collectionId, array $queries = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create index
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param string $type
     * @param array $attributes
     * @param array $orders
     * @throws AppwriteException
     * @return array

     */
    public function createIndex(string $databaseId, string $collectionId, string $key, string $type, array $attributes, array $orders = null): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }
        if (!isset($type)) {
            throw new AppwriteException('Missing required parameter: "type"');
        }
        if (!isset($attributes)) {
            throw new AppwriteException('Missing required parameter: "attributes"');
        }
        if (!is_null($key)) {
            $apiParams['key'] = $key;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

        if (!is_null($attributes)) {
            $apiParams['attributes'] = $attributes;
        }

        if (!is_null($orders)) {
            $apiParams['orders'] = $orders;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get index
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getIndex(string $databaseId, string $collectionId, string $key): array
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete index
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteIndex(string $databaseId, string $collectionId, string $key): string
    {
        $apiPath = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $apiParams = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
