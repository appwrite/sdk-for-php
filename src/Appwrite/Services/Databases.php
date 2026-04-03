<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\DatabasesIndexType;
use Appwrite\Enums\OrderBy;

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
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\DatabaseList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `list` instead.
     * @see TablesDB::list
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\DatabaseList
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
            [\Appwrite\Models\DatabaseList::class]
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
     * @return \Appwrite\Models\Database
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `create` instead.
     * @see TablesDB::create
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null): \Appwrite\Models\Database
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

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Database::class]
        );

    }

    /**
     * List transactions across all databases.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return \Appwrite\Models\TransactionList
     */
    public function listTransactions(?array $queries = null): \Appwrite\Models\TransactionList
    {
        $apiPath = str_replace(
            [],
            [],
            '/databases/transactions'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
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
            [\Appwrite\Models\TransactionList::class]
        );

    }

    /**
     * Create a new transaction.
     *
     * @param ?int $ttl
     * @throws AppwriteException
     * @return \Appwrite\Models\Transaction
     */
    public function createTransaction(?int $ttl = null): \Appwrite\Models\Transaction
    {
        $apiPath = str_replace(
            [],
            [],
            '/databases/transactions'
        );

        $apiParams = [];

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
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
            [\Appwrite\Models\Transaction::class]
        );

    }

    /**
     * Get a transaction by its unique ID.
     *
     * @param string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Transaction
     */
    public function getTransaction(string $transactionId): \Appwrite\Models\Transaction
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/databases/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Transaction::class]
        );

    }

    /**
     * Update a transaction, to either commit or roll back its operations.
     *
     * @param string $transactionId
     * @param ?bool $commit
     * @param ?bool $rollback
     * @throws AppwriteException
     * @return \Appwrite\Models\Transaction
     */
    public function updateTransaction(string $transactionId, ?bool $commit = null, ?bool $rollback = null): \Appwrite\Models\Transaction
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/databases/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        if (!is_null($commit)) {
            $apiParams['commit'] = $commit;
        }

        if (!is_null($rollback)) {
            $apiParams['rollback'] = $rollback;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Transaction::class]
        );

    }

    /**
     * Delete a transaction by its unique ID.
     *
     * @param string $transactionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTransaction(string $transactionId): string
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/databases/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

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
     * Create multiple operations in a single transaction.
     *
     * @param string $transactionId
     * @param ?array $operations
     * @throws AppwriteException
     * @return \Appwrite\Models\Transaction
     */
    public function createOperations(string $transactionId, ?array $operations = null): \Appwrite\Models\Transaction
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/databases/transactions/{transactionId}/operations'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        if (!is_null($operations)) {
            $apiParams['operations'] = $operations;
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
            [\Appwrite\Models\Transaction::class]
        );

    }

    /**
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @param string $databaseId
     * @throws AppwriteException
     * @return \Appwrite\Models\Database
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `get` instead.
     * @see TablesDB::get
     */
    public function get(string $databaseId): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Database::class]
        );

    }

    /**
     * Update a database by its unique ID.
     *
     * @param string $databaseId
     * @param ?string $name
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Database
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `update` instead.
     * @see TablesDB::update
     */
    public function update(string $databaseId, ?string $name = null, ?bool $enabled = null): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/databases/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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
            [\Appwrite\Models\Database::class]
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

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all collections that belong to the provided databaseId. You
     * can use the search parameter to filter your results.
     *
     * @param string $databaseId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\CollectionList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listTables` instead.
     * @see TablesDB::listTables
     */
    public function listCollections(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\CollectionList
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
            [\Appwrite\Models\CollectionList::class]
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
     * @param ?array $attributes
     * @param ?array $indexes
     * @throws AppwriteException
     * @return \Appwrite\Models\Collection
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createTable` instead.
     * @see TablesDB::createTable
     */
    public function createCollection(string $databaseId, string $collectionId, string $name, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null, ?array $attributes = null, ?array $indexes = null): \Appwrite\Models\Collection
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
        $apiParams['permissions'] = $permissions;

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($attributes)) {
            $apiParams['attributes'] = $attributes;
        }

        if (!is_null($indexes)) {
            $apiParams['indexes'] = $indexes;
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
            [\Appwrite\Models\Collection::class]
        );

    }

    /**
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Collection
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getTable` instead.
     * @see TablesDB::getTable
     */
    public function getCollection(string $databaseId, string $collectionId): \Appwrite\Models\Collection
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Collection::class]
        );

    }

    /**
     * Update a collection by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?string $name
     * @param ?array $permissions
     * @param ?bool $documentSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Collection
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTable` instead.
     * @see TablesDB::updateTable
     */
    public function updateCollection(string $databaseId, string $collectionId, ?string $name = null, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null): \Appwrite\Models\Collection
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['permissions'] = $permissions;

        if (!is_null($documentSecurity)) {
            $apiParams['documentSecurity'] = $documentSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

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
            [\Appwrite\Models\Collection::class]
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

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * List attributes in the collection.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listColumns` instead.
     * @see TablesDB::listColumns
     */
    public function listAttributes(string $databaseId, string $collectionId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\AttributeList
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
            [\Appwrite\Models\AttributeList::class]
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
     * @return \Appwrite\Models\AttributeBoolean
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createBooleanColumn` instead.
     * @see TablesDB::createBooleanColumn
     */
    public function createBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?bool $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeBoolean
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeBoolean::class]
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
     * @return \Appwrite\Models\AttributeBoolean
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateBooleanColumn` instead.
     * @see TablesDB::updateBooleanColumn
     */
    public function updateBooleanAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?bool $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeBoolean
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeBoolean::class]
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
     * @return \Appwrite\Models\AttributeDatetime
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createDatetimeColumn` instead.
     * @see TablesDB::createDatetimeColumn
     */
    public function createDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeDatetime
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeDatetime::class]
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
     * @return \Appwrite\Models\AttributeDatetime
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateDatetimeColumn` instead.
     * @see TablesDB::updateDatetimeColumn
     */
    public function updateDatetimeAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeDatetime
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeDatetime::class]
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
     * @return \Appwrite\Models\AttributeEmail
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createEmailColumn` instead.
     * @see TablesDB::createEmailColumn
     */
    public function createEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeEmail
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeEmail::class]
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
     * @return \Appwrite\Models\AttributeEmail
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateEmailColumn` instead.
     * @see TablesDB::updateEmailColumn
     */
    public function updateEmailAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeEmail
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeEmail::class]
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
     * @return \Appwrite\Models\AttributeEnum
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createEnumColumn` instead.
     * @see TablesDB::createEnumColumn
     */
    public function createEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeEnum
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeEnum::class]
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
     * @return \Appwrite\Models\AttributeEnum
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateEnumColumn` instead.
     * @see TablesDB::updateEnumColumn
     */
    public function updateEnumAttribute(string $databaseId, string $collectionId, string $key, array $elements, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeEnum
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeEnum::class]
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
     * @return \Appwrite\Models\AttributeFloat
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createFloatColumn` instead.
     * @see TablesDB::createFloatColumn
     */
    public function createFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?float $min = null, ?float $max = null, ?float $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeFloat
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
        $apiParams['min'] = $min;
        $apiParams['max'] = $max;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeFloat::class]
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
     * @return \Appwrite\Models\AttributeFloat
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateFloatColumn` instead.
     * @see TablesDB::updateFloatColumn
     */
    public function updateFloatAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?float $xdefault, ?float $min = null, ?float $max = null, ?string $newKey = null): \Appwrite\Models\AttributeFloat
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
        $apiParams['min'] = $min;
        $apiParams['max'] = $max;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeFloat::class]
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
     * @return \Appwrite\Models\AttributeInteger
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIntegerColumn` instead.
     * @see TablesDB::createIntegerColumn
     */
    public function createIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeInteger
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
        $apiParams['min'] = $min;
        $apiParams['max'] = $max;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeInteger::class]
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
     * @return \Appwrite\Models\AttributeInteger
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateIntegerColumn` instead.
     * @see TablesDB::updateIntegerColumn
     */
    public function updateIntegerAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null): \Appwrite\Models\AttributeInteger
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
        $apiParams['min'] = $min;
        $apiParams['max'] = $max;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeInteger::class]
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
     * @return \Appwrite\Models\AttributeIp
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIpColumn` instead.
     * @see TablesDB::createIpColumn
     */
    public function createIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeIp
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeIp::class]
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
     * @return \Appwrite\Models\AttributeIp
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateIpColumn` instead.
     * @see TablesDB::updateIpColumn
     */
    public function updateIpAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeIp
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeIp::class]
        );

    }

    /**
     * Create a geometric line attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeLine
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createLineColumn` instead.
     * @see TablesDB::createLineColumn
     */
    public function createLineAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\AttributeLine
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

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeLine::class]
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
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeLine
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateLineColumn` instead.
     * @see TablesDB::updateLineColumn
     */
    public function updateLineAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\AttributeLine
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeLine::class]
        );

    }

    /**
     * Create a longtext attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeLongtext
     */
    public function createLongtextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\AttributeLongtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/longtext'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
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
            [\Appwrite\Models\AttributeLongtext::class]
        );

    }

    /**
     * Update a longtext attribute. Changing the `default` value will not update
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
     * @return \Appwrite\Models\AttributeLongtext
     */
    public function updateLongtextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeLongtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/longtext/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeLongtext::class]
        );

    }

    /**
     * Create a mediumtext attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeMediumtext
     */
    public function createMediumtextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\AttributeMediumtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/mediumtext'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
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
            [\Appwrite\Models\AttributeMediumtext::class]
        );

    }

    /**
     * Update a mediumtext attribute. Changing the `default` value will not update
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
     * @return \Appwrite\Models\AttributeMediumtext
     */
    public function updateMediumtextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeMediumtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/mediumtext/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeMediumtext::class]
        );

    }

    /**
     * Create a geometric point attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributePoint
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createPointColumn` instead.
     * @see TablesDB::createPointColumn
     */
    public function createPointAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\AttributePoint
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

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributePoint::class]
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
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributePoint
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updatePointColumn` instead.
     * @see TablesDB::updatePointColumn
     */
    public function updatePointAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\AttributePoint
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributePoint::class]
        );

    }

    /**
     * Create a geometric polygon attribute.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributePolygon
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createPolygonColumn` instead.
     * @see TablesDB::createPolygonColumn
     */
    public function createPolygonAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\AttributePolygon
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

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributePolygon::class]
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
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributePolygon
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updatePolygonColumn` instead.
     * @see TablesDB::updatePolygonColumn
     */
    public function updatePolygonAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\AttributePolygon
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributePolygon::class]
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
     * @return \Appwrite\Models\AttributeRelationship
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRelationshipColumn` instead.
     * @see TablesDB::createRelationshipColumn
     */
    public function createRelationshipAttribute(string $databaseId, string $collectionId, string $relatedCollectionId, RelationshipType $type, ?bool $twoWay = null, ?string $key = null, ?string $twoWayKey = null, ?RelationMutate $onDelete = null): \Appwrite\Models\AttributeRelationship
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
        $apiParams['key'] = $key;
        $apiParams['twoWayKey'] = $twoWayKey;

        if (!is_null($onDelete)) {
            $apiParams['onDelete'] = $onDelete;
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
            [\Appwrite\Models\AttributeRelationship::class]
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
     * @return \Appwrite\Models\AttributeRelationship
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRelationshipColumn` instead.
     * @see TablesDB::updateRelationshipColumn
     */
    public function updateRelationshipAttribute(string $databaseId, string $collectionId, string $key, ?RelationMutate $onDelete = null, ?string $newKey = null): \Appwrite\Models\AttributeRelationship
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/relationship/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;

        if (!is_null($onDelete)) {
            $apiParams['onDelete'] = $onDelete;
        }
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeRelationship::class]
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
     * @return \Appwrite\Models\AttributeString
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createStringColumn` instead.
     * @see TablesDB::createStringColumn
     */
    public function createStringAttribute(string $databaseId, string $collectionId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\AttributeString
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
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
            [\Appwrite\Models\AttributeString::class]
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
     * @return \Appwrite\Models\AttributeString
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateStringColumn` instead.
     * @see TablesDB::updateStringColumn
     */
    public function updateStringAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): \Appwrite\Models\AttributeString
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
        $apiParams['size'] = $size;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeString::class]
        );

    }

    /**
     * Create a text attribute.
     * 
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeText
     */
    public function createTextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\AttributeText
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/text'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
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
            [\Appwrite\Models\AttributeText::class]
        );

    }

    /**
     * Update a text attribute. Changing the `default` value will not update
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
     * @return \Appwrite\Models\AttributeText
     */
    public function updateTextAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeText
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/text/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeText::class]
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
     * @return \Appwrite\Models\AttributeUrl
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createUrlColumn` instead.
     * @see TablesDB::createUrlColumn
     */
    public function createUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeUrl
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
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
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
            [\Appwrite\Models\AttributeUrl::class]
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
     * @return \Appwrite\Models\AttributeUrl
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateUrlColumn` instead.
     * @see TablesDB::updateUrlColumn
     */
    public function updateUrlAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\AttributeUrl
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
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeUrl::class]
        );

    }

    /**
     * Create a varchar attribute.
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
     * @return \Appwrite\Models\AttributeVarchar
     */
    public function createVarcharAttribute(string $databaseId, string $collectionId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\AttributeVarchar
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/varchar'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['size'] = $size;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;

        if (!is_null($xarray)) {
            $apiParams['array'] = $xarray;
        }

        if (!is_null($encrypt)) {
            $apiParams['encrypt'] = $encrypt;
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
            [\Appwrite\Models\AttributeVarchar::class]
        );

    }

    /**
     * Update a varchar attribute. Changing the `default` value will not update
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
     * @return \Appwrite\Models\AttributeVarchar
     */
    public function updateVarcharAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): \Appwrite\Models\AttributeVarchar
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/varchar/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['key'] = $key;
        $apiParams['required'] = $required;
        $apiParams['default'] = $xdefault;
        $apiParams['size'] = $size;
        $apiParams['newKey'] = $newKey;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeVarchar::class]
        );

    }

    /**
     * Get attribute by ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return \Appwrite\Models\AttributeBoolean|\Appwrite\Models\AttributeInteger|\Appwrite\Models\AttributeFloat|\Appwrite\Models\AttributeEmail|\Appwrite\Models\AttributeEnum|\Appwrite\Models\AttributeUrl|\Appwrite\Models\AttributeIp|\Appwrite\Models\AttributeDatetime|\Appwrite\Models\AttributeRelationship|\Appwrite\Models\AttributeString
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getColumn` instead.
     * @see TablesDB::getColumn
     */
    public function getAttribute(string $databaseId, string $collectionId, string $key): \Appwrite\Models\AttributeBoolean|\Appwrite\Models\AttributeInteger|\Appwrite\Models\AttributeFloat|\Appwrite\Models\AttributeEmail|\Appwrite\Models\AttributeEnum|\Appwrite\Models\AttributeUrl|\Appwrite\Models\AttributeIp|\Appwrite\Models\AttributeDatetime|\Appwrite\Models\AttributeRelationship|\Appwrite\Models\AttributeString
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\AttributeBoolean::class, \Appwrite\Models\AttributeInteger::class, \Appwrite\Models\AttributeFloat::class, \Appwrite\Models\AttributeEmail::class, \Appwrite\Models\AttributeEnum::class, \Appwrite\Models\AttributeUrl::class, \Appwrite\Models\AttributeIp::class, \Appwrite\Models\AttributeDatetime::class, \Appwrite\Models\AttributeRelationship::class, \Appwrite\Models\AttributeString::class]
,
            [
                \Appwrite\Models\AttributeBoolean::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'default'],
                ],
                \Appwrite\Models\AttributeInteger::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'min', 'max', 'default'],
                ],
                \Appwrite\Models\AttributeFloat::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'min', 'max', 'default'],
                ],
                \Appwrite\Models\AttributeEmail::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\AttributeEnum::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'elements', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'elements', 'format', 'default'],
                ],
                \Appwrite\Models\AttributeUrl::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\AttributeIp::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\AttributeDatetime::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\AttributeRelationship::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'relatedCollection', 'relationType', 'twoWay', 'twoWayKey', 'onDelete', 'side'],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'relatedCollection', 'relationType', 'twoWay', 'twoWayKey', 'onDelete', 'side'],
                ],
                \Appwrite\Models\AttributeString::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'size', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'size', 'default', 'encrypt'],
                ]
            ]
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

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Get a list of all the user's documents in a given collection. You can use
     * the query params to filter your results.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?string $transactionId
     * @param ?bool $total
     * @param ?int $ttl
     * @throws AppwriteException
     * @return \Appwrite\Models\DocumentList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listRows` instead.
     * @see TablesDB::listRows
     */
    public function listDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\DocumentList
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

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        if (!is_null($ttl)) {
            $apiParams['ttl'] = $ttl;
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
            [\Appwrite\Models\DocumentList::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRow` instead.
     * @see TablesDB::createRow
     */
    public function createDocument(string $databaseId, string $collectionId, string $documentId, array $data, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Document
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
        $apiParams['permissions'] = $permissions;
        $apiParams['transactionId'] = $transactionId;

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
            [\Appwrite\Models\Document::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\DocumentList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createRows` instead.
     * @see TablesDB::createRows
     */
    public function createDocuments(string $databaseId, string $collectionId, array $documents, ?string $transactionId = null): \Appwrite\Models\DocumentList
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
        $apiParams['transactionId'] = $transactionId;

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
            [\Appwrite\Models\DocumentList::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\DocumentList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `upsertRows` instead.
     * @see TablesDB::upsertRows
     */
    public function upsertDocuments(string $databaseId, string $collectionId, array $documents, ?string $transactionId = null): \Appwrite\Models\DocumentList
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
        $apiParams['transactionId'] = $transactionId;

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
            [\Appwrite\Models\DocumentList::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\DocumentList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRows` instead.
     * @see TablesDB::updateRows
     */
    public function updateDocuments(string $databaseId, string $collectionId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\DocumentList
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
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\DocumentList::class]
        );

    }

    /**
     * Bulk delete documents using queries, if no queries are passed then all
     * documents are deleted.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\DocumentList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteRows` instead.
     * @see TablesDB::deleteRows
     */
    public function deleteDocuments(string $databaseId, string $collectionId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\DocumentList
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
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\DocumentList::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getRow` instead.
     * @see TablesDB::getRow
     */
    public function getDocument(string $databaseId, string $collectionId, string $documentId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\Document
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

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
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
            [\Appwrite\Models\Document::class]
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
     * @param ?array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `upsertRow` instead.
     * @see TablesDB::upsertRow
     */
    public function upsertDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Document
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
        $apiParams['permissions'] = $permissions;
        $apiParams['transactionId'] = $transactionId;

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
            [\Appwrite\Models\Document::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateRow` instead.
     * @see TablesDB::updateRow
     */
    public function updateDocument(string $databaseId, string $collectionId, string $documentId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Document
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
        $apiParams['permissions'] = $permissions;
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Document::class]
        );

    }

    /**
     * Delete a document by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return string
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteRow` instead.
     * @see TablesDB::deleteRow
     */
    public function deleteDocument(string $databaseId, string $collectionId, string $documentId, ?string $transactionId = null): string
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
        $apiParams['transactionId'] = $transactionId;

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
     * Decrement a specific attribute of a document by a given value.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $documentId
     * @param string $attribute
     * @param ?float $value
     * @param ?float $min
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `decrementRowColumn` instead.
     * @see TablesDB::decrementRowColumn
     */
    public function decrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $min = null, ?string $transactionId = null): \Appwrite\Models\Document
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
        $apiParams['min'] = $min;
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Document::class]
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
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Document
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `incrementRowColumn` instead.
     * @see TablesDB::incrementRowColumn
     */
    public function incrementDocumentAttribute(string $databaseId, string $collectionId, string $documentId, string $attribute, ?float $value = null, ?float $max = null, ?string $transactionId = null): \Appwrite\Models\Document
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
        $apiParams['max'] = $max;
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Document::class]
        );

    }

    /**
     * List indexes in the collection.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\IndexList
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listIndexes` instead.
     * @see TablesDB::listIndexes
     */
    public function listIndexes(string $databaseId, string $collectionId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\IndexList
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
            [\Appwrite\Models\IndexList::class]
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
     * @param DatabasesIndexType $type
     * @param array $attributes
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return \Appwrite\Models\Index
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createIndex` instead.
     * @see TablesDB::createIndex
     */
    public function createIndex(string $databaseId, string $collectionId, string $key, DatabasesIndexType $type, array $attributes, ?array $orders = null, ?array $lengths = null): \Appwrite\Models\Index
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

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Index::class]
        );

    }

    /**
     * Get an index by its unique ID.
     *
     * @param string $databaseId
     * @param string $collectionId
     * @param string $key
     * @throws AppwriteException
     * @return \Appwrite\Models\Index
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getIndex` instead.
     * @see TablesDB::getIndex
     */
    public function getIndex(string $databaseId, string $collectionId, string $key): \Appwrite\Models\Index
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

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Index::class]
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

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }
}
