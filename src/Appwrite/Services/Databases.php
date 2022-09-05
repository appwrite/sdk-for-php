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
     * List Databases
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
        $path   = str_replace([], [], '/databases');

        $params = [];
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Database
     *
     * Create a new Database.
     * 
     *
     * @param string $databaseId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function create(string $databaseId, string $name): array
    {
        $path   = str_replace([], [], '/databases');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($databaseId)) {
            $params['databaseId'] = $databaseId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Database
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
        $path   = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Database
     *
     * Update a database by its unique ID.
     *
     * @param string $databaseId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function update(string $databaseId, string $name): array
    {
        $path   = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Database
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
        $path   = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Collections
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
        $path   = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}/collections');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($search)) {
            $params['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Collection
     *
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](/docs/server/databases#databasesCreateCollection) API or
     * directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param array $permissions
     * @param bool $documentSecurity
     * @throws AppwriteException
     * @return array

     */
    public function createCollection(string $databaseId, string $collectionId, string $name, array $permissions = null, bool $documentSecurity = null): array
    {
        $path   = str_replace(['{databaseId}'], [$databaseId], '/databases/{databaseId}/collections');

        $params = [];
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
            $params['collectionId'] = $collectionId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($permissions)) {
            $params['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $params['documentSecurity'] = $documentSecurity;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Collection
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Collection
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
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
            $params['name'] = $name;
        }

        if (!is_null($permissions)) {
            $params['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $params['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $params['enabled'] = $enabled;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Collection
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Attributes
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function listAttributes(string $databaseId, string $collectionId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Boolean Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/boolean');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create DateTime Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/datetime');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Email Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/email');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Enum Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/enum');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($elements)) {
            $params['elements'] = $elements;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Float Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/float');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($min)) {
            $params['min'] = $min;
        }

        if (!is_null($max)) {
            $params['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Integer Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/integer');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($min)) {
            $params['min'] = $min;
        }

        if (!is_null($max)) {
            $params['max'] = $max;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create IP Address Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/ip');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create String Attribute
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
     * @throws AppwriteException
     * @return array

     */
    public function createStringAttribute(string $databaseId, string $collectionId, string $key, int $size, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/string');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($size)) {
            $params['size'] = $size;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create URL Attribute
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/url');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($required)) {
            $params['required'] = $required;
        }

        if (!is_null($xdefault)) {
            $params['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $params['array'] = $xarray;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getAttribute(string $databaseId, string $collectionId, string $key): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Attribute
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteAttribute(string $databaseId, string $collectionId, string $key): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Documents
     *
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results. On admin mode, this endpoint will
     * return a list of all of documents belonging to the provided collectionId.
     * [Learn more about different API modes](/docs/admin).
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listDocuments(string $databaseId, string $collectionId, array $queries = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Document
     *
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](/docs/server/databases#databasesCreateCollection) API or
     * directly from your database console.
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $params = [];
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
            $params['documentId'] = $documentId;
        }

        if (!is_null($data)) {
            $params['data'] = $data;
        }

        if (!is_null($permissions)) {
            $params['permissions'] = $permissions;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Document
     *
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return array

     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Document
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
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
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
            $params['data'] = $data;
        }

        if (!is_null($permissions)) {
            $params['permissions'] = $permissions;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Document
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
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Indexes
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function listIndexes(string $databaseId, string $collectionId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Index
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
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $params = [];
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
            $params['key'] = $key;
        }

        if (!is_null($type)) {
            $params['type'] = $type;
        }

        if (!is_null($attributes)) {
            $params['attributes'] = $attributes;
        }

        if (!is_null($orders)) {
            $params['orders'] = $orders;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Index
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getIndex(string $databaseId, string $collectionId, string $key): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Index
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteIndex(string $databaseId, string $collectionId, string $key): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $params = [];
        if (!isset($databaseId)) {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
