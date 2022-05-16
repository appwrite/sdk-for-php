<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Database extends Service
{
    /**
     * List Collections
     *
     * Get a list of all the user collections. You can use the query params to
     * filter your results. On admin mode, this endpoint will return a list of all
     * of the project's collections. [Learn more about different API
     * modes](/docs/admin).
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
        $path   = str_replace([], [], '/database/collections');
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
     * Create a new Collection.
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

        $path   = str_replace([], [], '/database/collections');
        $params = [];

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
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @param string $collectionId
     * @throws AppwriteException
     * @return array
     */
    public function getCollection(string $collectionId): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Collection
     *
     * Update a collection by its unique ID.
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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }

        if (!isset($permission)) {
            throw new AppwriteException('Missing required parameter: "permission"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}');
        $params = [];

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
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
     * @param string $collectionId
     * @throws AppwriteException
     * @return array
     */
    public function deleteCollection(string $collectionId): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/boolean');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/email');
        $params = [];

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

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/enum');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/float');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/integer');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/ip');
        $params = [];

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

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/string');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        if (!isset($required)) {
            throw new AppwriteException('Missing required parameter: "required"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/attributes/url');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $path   = str_replace(['{collectionId}', '{key}'], [$collectionId, $key], '/database/collections/{collectionId}/attributes/{key}');
        $params = [];

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
     * @return array
     */
    public function deleteAttribute(string $collectionId, string $key): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $path   = str_replace(['{collectionId}', '{key}'], [$collectionId, $key], '/database/collections/{collectionId}/attributes/{key}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Documents
     *
     * Get a list of all the user documents. You can use the query params to
     * filter your results. On admin mode, this endpoint will return a list of all
     * of the project's documents. [Learn more about different API
     * modes](/docs/admin).
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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/documents');
        $params = [];

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
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](/docs/server/database#databaseCreateCollection) API or
     * directly from your database console.
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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        if (!isset($data)) {
            throw new AppwriteException('Missing required parameter: "data"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/documents');
        $params = [];

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
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return array
     */
    public function getDocument(string $collectionId, string $documentId): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        $path   = str_replace(['{collectionId}', '{documentId}'], [$collectionId, $documentId], '/database/collections/{collectionId}/documents/{documentId}');
        $params = [];

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
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param array $read
     * @param array $write
     * @throws AppwriteException
     * @return array
     */
    public function updateDocument(string $collectionId, string $documentId, array $data, array $read = null, array $write = null): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        if (!isset($data)) {
            throw new AppwriteException('Missing required parameter: "data"');
        }

        $path   = str_replace(['{collectionId}', '{documentId}'], [$collectionId, $documentId], '/database/collections/{collectionId}/documents/{documentId}');
        $params = [];

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
     * Delete a document by its unique ID.
     *
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return array
     */
    public function deleteDocument(string $collectionId, string $documentId): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($documentId)) {
            throw new AppwriteException('Missing required parameter: "documentId"');
        }

        $path   = str_replace(['{collectionId}', '{documentId}'], [$collectionId, $documentId], '/database/collections/{collectionId}/documents/{documentId}');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/indexes');
        $params = [];

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

        $path   = str_replace(['{collectionId}'], [$collectionId], '/database/collections/{collectionId}/indexes');
        $params = [];

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
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $path   = str_replace(['{collectionId}', '{key}'], [$collectionId, $key], '/database/collections/{collectionId}/indexes/{key}');
        $params = [];

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
     * @return array
     */
    public function deleteIndex(string $collectionId, string $key): array
    {
        if (!isset($collectionId)) {
            throw new AppwriteException('Missing required parameter: "collectionId"');
        }

        if (!isset($key)) {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $path   = str_replace(['{collectionId}', '{key}'], [$collectionId, $key], '/database/collections/{collectionId}/indexes/{key}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
