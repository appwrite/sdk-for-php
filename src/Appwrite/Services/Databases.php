<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Databases extends Service
{
     protected string  $databaseId;

     public function setDatabaseId(string $databaseId): void
     {
          $this->databaseId = $databaseId;
     }

     public function getDatabaseId(string $databaseId): string 
     {
          return $this->databaseId;
     }

     public function __construct(Client $client,  string $databaseId)
     {
          $this->client = $client;
          $this->databaseId = $databaseId;
     }

    /**
     * List Databases
     *
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array

     */
    public function list(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace([], [], '/databases');

        $params = [];
        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Database
     *
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function create(string $name): array
    {
        $path   = str_replace([], [], '/databases');

        $params = [];
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($this->databaseId)) {
            $params['databaseId'] = $this->databaseId;
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
     * @throws AppwriteException
     * @return array

     */
    public function get(): array
    {
        $path   = str_replace(['{databaseId}'], [$this->databaseId], '/databases/{databaseId}');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Database
     *
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function update(string $name): array
    {
        $path   = str_replace(['{databaseId}'], [$this->databaseId], '/databases/{databaseId}');

        $params = [];
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
     * @throws AppwriteException
     * @return string

     */
    public function delete(): string
    {
        $path   = str_replace(['{databaseId}'], [$this->databaseId], '/databases/{databaseId}');

        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Collections
     *
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array

     */
    public function listCollections(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace(['{databaseId}'], [$this->databaseId], '/databases/{databaseId}/collections');

        $params = [];
        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Collection
     *
     * @param string $collectionId
     * @param string $name
     * @param string $permission
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array

     */
    public function createCollection(string $collectionId, string $name, string $permission, array $read, array $write): array
    {
        $path   = str_replace(['{databaseId}'], [$this->databaseId], '/databases/{databaseId}/collections');

        $params = [];
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!isset($permission)) {
            throw new AppwriteException('Missing required parameter: "permission"');
        }
        if (!isset($read)) {
            throw new AppwriteException('Missing required parameter: "read"');
        }
        if (!isset($write)) {
            throw new AppwriteException('Missing required parameter: "write"');
        }
        if (!is_null($collectionId)) {
            $params['collectionId'] = $collectionId;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($permission)) {
            $params['permission'] = $permission;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Collection
     *
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function getCollection(string $collectionId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
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
     * @param string $collectionId
     * @param string $name
     * @param string $permission
     * @param array $read
     * @param array $write
     * @param bool $enabled
     * @throws AppwriteException
     * @return array

     */
    public function updateCollection(string $collectionId, string $name, string $permission, array $read = null, array $write = null, bool $enabled = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!isset($permission)) {
            throw new AppwriteException('Missing required parameter: "permission"');
        }
        if (!is_null($name)) {
            $params['name'] = $name;
        }

        if (!is_null($permission)) {
            $params['permission'] = $permission;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
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
     * @param string $collectionId
     * @throws AppwriteException
     * @return string

     */
    public function deleteCollection(string $collectionId): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}');

        $params = [];
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
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function listAttributes(string $collectionId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param bool $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createBooleanAttribute(string $collectionId, string $key, bool $required, bool $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/boolean');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createEmailAttribute(string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/email');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createEnumAttribute(string $collectionId, string $key, array $elements, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/enum');

        $params = [];
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
    public function createFloatAttribute(string $collectionId, string $key, bool $required, int $min = null, int $max = null, int $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/float');

        $params = [];
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
    public function createIntegerAttribute(string $collectionId, string $key, bool $required, int $min = null, int $max = null, int $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/integer');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createIpAttribute(string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/ip');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param int $size
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createStringAttribute(string $collectionId, string $key, int $size, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/string');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param string $xdefault
     * @param bool $xarray
     * @throws AppwriteException
     * @return array

     */
    public function createUrlAttribute(string $collectionId, string $key, bool $required, string $xdefault = null, bool $xarray = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/attributes/url');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getAttribute(string $collectionId, string $key): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$this->databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteAttribute(string $collectionId, string $key): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$this->databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/attributes/{key}');

        $params = [];
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
     * @param string $collectionId
     * @param array $queries
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param array $orderAttributes
     * @param array $orderTypes
     * @throws AppwriteException
     * @return array

     */
    public function listDocuments(string $collectionId, array $queries = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, array $orderAttributes = null, array $orderTypes = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $params = [];
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderAttributes)) {
            $params['orderAttributes'] = $orderAttributes;
        }

        if (!is_null($orderTypes)) {
            $params['orderTypes'] = $orderTypes;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Document
     *
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array

     */
    public function createDocument(string $collectionId, string $documentId, array $data, array $read = null, array $write = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/documents');

        $params = [];
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

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Document
     *
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return array

     */
    public function getDocument(string $collectionId, string $documentId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$this->databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
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
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array

     */
    public function updateDocument(string $collectionId, string $documentId, array $data = null, array $read = null, array $write = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$this->databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }
        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }
        if (!is_null($data)) {
            $params['data'] = $data;
        }

        if (!is_null($read)) {
            $params['read'] = $read;
        }

        if (!is_null($write)) {
            $params['write'] = $write;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Document
     *
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return string

     */
    public function deleteDocument(string $collectionId, string $documentId): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{documentId}'], [$this->databaseId, $collectionId, $documentId], '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}');

        $params = [];
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
     * @param string $collectionId
     * @throws AppwriteException
     * @return array

     */
    public function listIndexes(string $collectionId): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @param string $type
     * @param array $attributes
     * @param array $orders
     * @throws AppwriteException
     * @return array

     */
    public function createIndex(string $collectionId, string $key, string $type, array $attributes, array $orders = null): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}'], [$this->databaseId, $collectionId], '/databases/{databaseId}/collections/{collectionId}/indexes');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array

     */
    public function getIndex(string $collectionId, string $key): array
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$this->databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $params = [];
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
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string

     */
    public function deleteIndex(string $collectionId, string $key): string
    {
        $path   = str_replace(['{databaseId}', '{collectionId}', '{key}'], [$this->databaseId, $collectionId, $key], '/databases/{databaseId}/collections/{collectionId}/indexes/{key}');

        $params = [];
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
