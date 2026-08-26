<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\DatabasesIndexType;

class Databases extends Service
{
    /**
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DatabaseList::from($response);
    }

    /**
     * Create a new Database.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * List transactions across all databases.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `listTransactions` instead.
     * @see TablesDB::listTransactions
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\TransactionList::from($response);
    }

    /**
     * Create a new transaction.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createTransaction` instead.
     * @see TablesDB::createTransaction
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Get a transaction by its unique ID.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `getTransaction` instead.
     * @see TablesDB::getTransaction
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Update a transaction, to either commit or roll back its operations.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTransaction` instead.
     * @see TablesDB::updateTransaction
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Delete a transaction by its unique ID.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `deleteTransaction` instead.
     * @see TablesDB::deleteTransaction
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create multiple operations in a single transaction.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createOperations` instead.
     * @see TablesDB::createOperations
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Transaction::from($response);
    }

    /**
     * Get a database by its unique ID. This endpoint response returns a JSON
     * object with the database metadata.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * Update a database by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Database::from($response);
    }

    /**
     * Delete a database by its unique ID. Only API keys with with databases.write
     * scope can delete a database.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\CollectionList::from($response);
    }

    /**
     * Create a new Collection. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Collection::from($response);
    }

    /**
     * Get a collection by its unique ID. This endpoint response returns a JSON
     * object with the collection metadata.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Collection::from($response);
    }

    /**
     * Update a collection by its unique ID.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTable` instead.
     * @see TablesDB::updateTable
     */
    public function updateCollection(string $databaseId, string $collectionId, ?string $name = null, ?array $permissions = null, ?bool $documentSecurity = null, ?bool $enabled = null, ?bool $purge = null): \Appwrite\Models\Collection
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

        if (!is_null($purge)) {
            $apiParams['purge'] = $purge;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Collection::from($response);
    }

    /**
     * Delete a collection by its unique ID. Only users with write permissions
     * have access to delete this resource.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeList::from($response);
    }

    /**
     * Create a bigint attribute. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createBigIntColumn` instead.
     * @see TablesDB::createBigIntColumn
     */
    public function createBigIntAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null): \Appwrite\Models\AttributeBigint
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}'],
            [$databaseId, $collectionId],
            '/databases/{databaseId}/collections/{collectionId}/attributes/bigint'
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeBigint::from($response);
    }

    /**
     * Update a bigint attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateBigIntColumn` instead.
     * @see TablesDB::updateBigIntColumn
     */
    public function updateBigIntAttribute(string $databaseId, string $collectionId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null): \Appwrite\Models\AttributeBigint
    {
        $apiPath = str_replace(
            ['{databaseId}', '{collectionId}', '{key}'],
            [$databaseId, $collectionId, $key],
            '/databases/{databaseId}/collections/{collectionId}/attributes/bigint/{key}'
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeBigint::from($response);
    }

    /**
     * Create a boolean attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeBoolean::from($response);
    }

    /**
     * Update a boolean attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeBoolean::from($response);
    }

    /**
     * Create a date time attribute according to the ISO 8601 standard.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeDatetime::from($response);
    }

    /**
     * Update a date time attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeDatetime::from($response);
    }

    /**
     * Create an email attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeEmail::from($response);
    }

    /**
     * Update an email attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeEmail::from($response);
    }

    /**
     * Create an enum attribute. The `elements` param acts as a white-list of
     * accepted values for this attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeEnum::from($response);
    }

    /**
     * Update an enum attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeEnum::from($response);
    }

    /**
     * Create a float attribute. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeFloat::from($response);
    }

    /**
     * Update a float attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeFloat::from($response);
    }

    /**
     * Create an integer attribute. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeInteger::from($response);
    }

    /**
     * Update an integer attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeInteger::from($response);
    }

    /**
     * Create IP address attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeIp::from($response);
    }

    /**
     * Update an ip attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeIp::from($response);
    }

    /**
     * Create a geometric line attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeLine::from($response);
    }

    /**
     * Update a line attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeLine::from($response);
    }

    /**
     * Create a longtext attribute.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createLongtextColumn` instead.
     * @see TablesDB::createLongtextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeLongtext::from($response);
    }

    /**
     * Update a longtext attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateLongtextColumn` instead.
     * @see TablesDB::updateLongtextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeLongtext::from($response);
    }

    /**
     * Create a mediumtext attribute.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createMediumtextColumn` instead.
     * @see TablesDB::createMediumtextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeMediumtext::from($response);
    }

    /**
     * Update a mediumtext attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateMediumtextColumn` instead.
     * @see TablesDB::updateMediumtextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeMediumtext::from($response);
    }

    /**
     * Create a geometric point attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributePoint::from($response);
    }

    /**
     * Update a point attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributePoint::from($response);
    }

    /**
     * Create a geometric polygon attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributePolygon::from($response);
    }

    /**
     * Update a polygon attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributePolygon::from($response);
    }

    /**
     * Create relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeRelationship::from($response);
    }

    /**
     * Update relationship attribute. [Learn more about relationship
     * attributes](https://appwrite.io/docs/databases-relationships#relationship-attributes).
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeRelationship::from($response);
    }

    /**
     * Create a string attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeString::from($response);
    }

    /**
     * Update a string attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeString::from($response);
    }

    /**
     * Create a text attribute.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createTextColumn` instead.
     * @see TablesDB::createTextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeText::from($response);
    }

    /**
     * Update a text attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTextColumn` instead.
     * @see TablesDB::updateTextColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeText::from($response);
    }

    /**
     * Create a URL attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeUrl::from($response);
    }

    /**
     * Update an url attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeUrl::from($response);
    }

    /**
     * Create a varchar attribute.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `createVarcharColumn` instead.
     * @see TablesDB::createVarcharColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeVarchar::from($response);
    }

    /**
     * Update a varchar attribute. Changing the `default` value will not update
     * already existing documents.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateVarcharColumn` instead.
     * @see TablesDB::updateVarcharColumn
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\AttributeVarchar::from($response);
    }

    /**
     * Get attribute by ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'email') {
            return \Appwrite\Models\AttributeEmail::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'enum') {
            return \Appwrite\Models\AttributeEnum::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'url') {
            return \Appwrite\Models\AttributeUrl::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'ip') {
            return \Appwrite\Models\AttributeIp::from($response);
        }

        if (($response['type'] ?? null) === 'boolean') {
            return \Appwrite\Models\AttributeBoolean::from($response);
        }

        if (($response['type'] ?? null) === 'integer') {
            return \Appwrite\Models\AttributeInteger::from($response);
        }

        if (($response['type'] ?? null) === 'double') {
            return \Appwrite\Models\AttributeFloat::from($response);
        }

        if (($response['type'] ?? null) === 'datetime') {
            return \Appwrite\Models\AttributeDatetime::from($response);
        }

        if (($response['type'] ?? null) === 'relationship') {
            return \Appwrite\Models\AttributeRelationship::from($response);
        }

        if (($response['type'] ?? null) === 'string') {
            return \Appwrite\Models\AttributeString::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');
    }

    /**
     * Deletes an attribute.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a list of all the user&#039;s documents in a given collection. You can use
     * the query params to filter your results.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Create a new Document. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Create new Documents. Before using this route, you should create a new
     * collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Create or update Documents. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Update all documents that match your queries, if no queries are submitted
     * then all documents are updated. You can pass only specific fields to be
     * updated.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Bulk delete documents using queries, if no queries are passed then all
     * documents are deleted.
     *
     * @throws AppwriteException
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

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\DocumentList::from($response);
    }

    /**
     * Get a document by its unique ID. This endpoint response returns a JSON
     * object with the document data.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Create or update a Document. Before using this route, you should create a
     * new collection resource using either a [server
     * integration](https://appwrite.io/docs/server/databases#databasesCreateCollection)
     * API or directly from your database console.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Update a document by its unique ID. Using the patch method you can pass
     * only specific fields that will get updated.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Delete a document by its unique ID.
     *
     * @throws AppwriteException
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

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
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
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * Increment a specific attribute of a document by a given value.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Document::from($response);
    }

    /**
     * List indexes in the collection.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\IndexList::from($response);
    }

    /**
     * Creates an index on the attributes listed. Your index should include all
     * the attributes you will query in a single request.
     * Attributes can be `key`, `fulltext`, and `unique`.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Index::from($response);
    }

    /**
     * Get an index by its unique ID.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Index::from($response);
    }

    /**
     * Delete an index.
     *
     * @throws AppwriteException
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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}
