<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\IndexType;

class Databases extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `list` instead.
     * @see TablesDB::list
     */
    public function list(?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/databases'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Database.
     * 
     *
     * @param string $databaseId
     * @param string $name
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `create` instead.
     * @see TablesDB::create
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/databases'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `get` instead.
     * @see TablesDB::get
     */
    public function get(string $databaseId): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a database by its unique ID.
     *
     * @param string $databaseId
     * @param string $name
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `update` instead.
     * @see TablesDB::update
     */
    public function update(string $databaseId, string $name, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a database by its unique ID. Only API keys with with databases.write
     * scope can delete a database.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `delete` instead.
     * @see TablesDB::delete
     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all collections that belong to the provided databaseId. You
     * can use the search parameter to filter your results.
     *
     * @param string $databaseId
     * @param ?array $queries
     * @param ?string $search
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listTables` instead.
     * @see TablesDB::listTables
     */
    public function listCollections(string $databaseId, ?array $queries = null, ?string $search = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}/collections'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createTable` instead.
     * @see TablesDB::createTable
     */
    public function createCollection(string $databaseId, string $collectionId, string $name, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}/collections'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getTable` instead.
     * @see TablesDB::getTable
     */
    public function getCollection(string $databaseId, string $collectionId): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a collection by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTable` instead.
     * @see TablesDB::updateTable
     */
    public function updateCollection(string $databaseId, string $collectionId, string $name, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['name'] = $name;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteTable` instead.
     * @see TablesDB::deleteTable
     */
    public function deleteCollection(string $databaseId, string $collectionId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List attributes in the collection.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listColumns` instead.
     * @see TablesDB::listColumns
     */
    public function listAttributes(string $databaseId, string $collectionId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a boolean attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?bool $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createBooleanColumn` instead.
     * @see TablesDB::createBooleanColumn
     */
    public function createBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?bool $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/boolean'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a boolean attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?bool $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateBooleanColumn` instead.
     * @see TablesDB::updateBooleanColumn
     */
    public function updateBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?bool $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/boolean/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a date time attribute according to the ISO 8601 standard.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createDatetimeColumn` instead.
     * @see TablesDB::createDatetimeColumn
     */
    public function createDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/datetime'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a date time attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateDatetimeColumn` instead.
     * @see TablesDB::updateDatetimeColumn
     */
    public function updateDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/datetime/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create an email attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createEmailColumn` instead.
     * @see TablesDB::createEmailColumn
     */
    public function createEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/email'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an email attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateEmailColumn` instead.
     * @see TablesDB::updateEmailColumn
     */
    public function updateEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/email/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create an enum attribute. The `elements` param acts as a white-list of
     * accepted values for this attribute. 
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createEnumColumn` instead.
     * @see TablesDB::createEnumColumn
     */
    public function createEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/enum'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['elements'] = $elements;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an enum attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateEnumColumn` instead.
     * @see TablesDB::updateEnumColumn
     */
    public function updateEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, ?string $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/enum/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['elements'] = $elements;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a float attribute. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?float $min
     * @param ?float $max
     * @param ?float $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createFloatColumn` instead.
     * @see TablesDB::createFloatColumn
     */
    public function createFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?float $min = null, ?float $max = null, ?float $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/float'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

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

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a float attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?float $xdefault
     * @param ?float $min
     * @param ?float $max
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateFloatColumn` instead.
     * @see TablesDB::updateFloatColumn
     */
    public function updateFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?float $xdefault, ?float $min = null, ?float $max = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/float/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create an integer attribute. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?int $min
     * @param ?int $max
     * @param ?int $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIntegerColumn` instead.
     * @see TablesDB::createIntegerColumn
     */
    public function createIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/integer'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

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

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an integer attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?int $xdefault
     * @param ?int $min
     * @param ?int $max
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateIntegerColumn` instead.
     * @see TablesDB::updateIntegerColumn
     */
    public function updateIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/integer/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create IP address attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIpColumn` instead.
     * @see TablesDB::createIpColumn
     */
    public function createIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/ip'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an ip attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateIpColumn` instead.
     * @see TablesDB::updateIpColumn
     */
    public function updateIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/ip/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a geometric line attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createLineColumn` instead.
     * @see TablesDB::createLineColumn
     */
    public function createLineAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/line'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a line attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateLineColumn` instead.
     * @see TablesDB::updateLineColumn
     */
    public function updateLineAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/line/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a geometric point attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createPointColumn` instead.
     * @see TablesDB::createPointColumn
     */
    public function createPointAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/point'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a point attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updatePointColumn` instead.
     * @see TablesDB::updatePointColumn
     */
    public function updatePointAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/point/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a geometric polygon attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createPolygonColumn` instead.
     * @see TablesDB::createPolygonColumn
     */
    public function createPolygonAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/polygon'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a polygon attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updatePolygonColumn` instead.
     * @see TablesDB::updatePolygonColumn
     */
    public function updatePolygonAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/polygon/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $relatedCollectionId
     * @param RelationshipType $type
     * @param ?bool $twoWay
     * @param ?string $key
     * @param ?string $twoWayKey
     * @param ?RelationMutate $onDelete
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRelationshipColumn` instead.
     * @see TablesDB::createRelationshipColumn
     */
    public function createRelationshipAttribute(string $databaseId, string $collectionId, string $relatedCollectionId, RelationshipType $type, ?bool $twoWay = null, ?string $key = null, ?string $twoWayKey = null, ?RelationMutate $onDelete = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/relationship'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['relatedCollectionId'] = $relatedCollectionId;
        $apiParams['type'] = $type;

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

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a string attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param int $size
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createStringColumn` instead.
     * @see TablesDB::createStringColumn
     */
    public function createStringAttribute(string $databaseId, string $collectionId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/string'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['size'] = $size;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a string attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?int $size
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateStringColumn` instead.
     * @see TablesDB::updateStringColumn
     */
    public function updateStringAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/string/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($size)) {
            $apiParams['size'] = $size;
        }

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a URL attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createUrlColumn` instead.
     * @see TablesDB::createUrlColumn
     */
    public function createUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/url'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;

        if (!is_null($xdefault)) {
            $apiParams['default'] = $xdefault;
        }

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update an url attribute. Changing the `default` value will not update
     * already existing documents.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateUrlColumn` instead.
     * @see TablesDB::updateUrlColumn
     */
    public function updateUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/url/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get attribute by ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getColumn` instead.
     * @see TablesDB::getColumn
     */
    public function getAttribute(string $databaseId, string $collectionId, string $key): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Deletes an attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteColumn` instead.
     * @see TablesDB::deleteColumn
     */
    public function deleteAttribute(string $databaseId, string $collectionId, string $key): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param ?RelationMutate $onDelete
     * @param ?string $newKey
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRelationshipColumn` instead.
     * @see TablesDB::updateRelationshipColumn
     */
    public function updateRelationshipAttribute(string $databaseId, string $collectionId, string $key, ?RelationMutate $onDelete = null, ?string $newKey = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/{key}/relationship'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        if (!is_null($onDelete)) {
            $apiParams['onDelete'] = $onDelete;
        }

        if (!is_null($newKey)) {
            $apiParams['newKey'] = $newKey;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listRows` instead.
     * @see TablesDB::listRows
     */
    public function listDocuments(string $databaseId, string $collectionId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param ?array $permissions
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRow` instead.
     * @see TablesDB::createRow
     */
    public function createDocument(string $databaseId, string $collectionId, string $documentId, array $data, ?array $permissions = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['data'] = $data;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create new Documents. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $documents
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRows` instead.
     * @see TablesDB::createRows
     */
    public function createDocuments(string $databaseId, string $collectionId, array $documents): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documents'] = $documents;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create or update Documents. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param array $documents
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `upsertRows` instead.
     * @see TablesDB::upsertRows
     */
    public function upsertDocuments(string $databaseId, string $collectionId, array $documents): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documents'] = $documents;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update all documents that match your queries, if no queries are submitted
     * then all documents are updated. You can pass only specific fields to be
     * updated.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $data
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRows` instead.
     * @see TablesDB::updateRows
     */
    public function updateDocuments(string $databaseId, string $collectionId, ?array $data = null, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Bulk delete documents using queries, if no queries are passed then all
     * documents are deleted.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteRows` instead.
     * @see TablesDB::deleteRows
     */
    public function deleteDocuments(string $databaseId, string $collectionId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/documents'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getRow` instead.
     * @see TablesDB::getRow
     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create or update a Document. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param array $data
     * @param ?array $permissions
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `upsertRow` instead.
     * @see TablesDB::upsertRow
     */
    public function upsertDocument(string $databaseId, string $collectionId, string $documentId, array $data, ?array $permissions = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['data'] = $data;

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a document by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?array $data
     * @param ?array $permissions
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRow` instead.
     * @see TablesDB::updateRow
     */
    public function updateDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        if (!is_null($data)) {
            $apiParams['data'] = $data;
        }

        if (!is_null($permissions)) {
            $apiParams['permissions'] = $permissions;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete a document by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteRow` instead.
     * @see TablesDB::deleteRow
     */
    public function deleteDocument(string $databaseId, string $collectionId, string $documentId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}'],
            [$databaseId, $collectionId, $documentId],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Decrement a specific attribute of a document by a given value.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param string $attribute
     * @param ?float $value
     * @param ?float $min
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `decrementRowColumn` instead.
     * @see TablesDB::decrementRowColumn
     */
    public function decrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $min = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}', '{attribute}'],
            [$databaseId, $collectionId, $documentId, $attribute],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/decrement'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['attribute'] = $attribute;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($min)) {
            $apiParams['min'] = $min;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Increment a specific attribute of a document by a given value.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param string $attribute
     * @param ?float $value
     * @param ?float $max
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `incrementRowColumn` instead.
     * @see TablesDB::incrementRowColumn
     */
    public function incrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $max = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{documentId}', '{attribute}'],
            [$databaseId, $collectionId, $documentId, $attribute],
            '/databases/{databaseId}/collections/{collectionId}/documents/{documentId}/{attribute}/increment'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['documentId'] = $documentId;
        $apiParams['attribute'] = $attribute;

        if (!is_null($value)) {
            $apiParams['value'] = $value;
        }

        if (!is_null($max)) {
            $apiParams['max'] = $max;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List indexes in the collection.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listIndexes` instead.
     * @see TablesDB::listIndexes
     */
    public function listIndexes(string $databaseId, string $collectionId, ?array $queries = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Creates an index on the attributes listed. Your index should include all
     * the attributes you will query in a single request.
     * Attributes can be `key`, `fulltext`, and `unique`.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param IndexType $type
     * @param array $attributes
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIndex` instead.
     * @see TablesDB::createIndex
     */
    public function createIndex(string $databaseId, string $collectionId, string $key, IndexType $type, array $attributes, ?array $orders = null, ?array $lengths = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['type'] = $type;
        $apiParams['attributes'] = $attributes;

        if (!is_null($orders)) {
            $apiParams['orders'] = $orders;
        }

        if (!is_null($lengths)) {
            $apiParams['lengths'] = $lengths;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get index by ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return array
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getIndex` instead.
     * @see TablesDB::getIndex
     */
    public function getIndex(string $databaseId, string $collectionId, string $key): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete an index.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteIndex` instead.
     * @see TablesDB::deleteIndex
     */
    public function deleteIndex(string $databaseId, string $collectionId, string $key): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}