<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\TablesDBIndexType;
use Appwrite\Enums\OrderBy;

class TablesDB extends Service
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
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\DatabaseList
    {
        $apiPath = str_replace(
            [],
            [],
            '/tablesdb'
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
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            [],
            [],
            '/tablesdb'
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
            '/tablesdb/transactions'
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
            '/tablesdb/transactions'
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
            '/tablesdb/transactions/{transactionId}'
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
            '/tablesdb/transactions/{transactionId}'
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
            '/tablesdb/transactions/{transactionId}'
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
            '/tablesdb/transactions/{transactionId}/operations'
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
     */
    public function get(string $databaseId): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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
     */
    public function update(string $databaseId, ?string $name = null, ?bool $enabled = null): \Appwrite\Models\Database
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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
     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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
     * Get a list of all tables that belong to the provided databaseId. You can
     * use the search parameter to filter your results.
     *
     * @param string $databaseId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\TableList
     */
    public function listTables(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\TableList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/tables'
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
            [\Appwrite\Models\TableList::class]
        );

    }

    /**
     * Create a new Table. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $rowSecurity
     * @param ?bool $enabled
     * @param ?array $columns
     * @param ?array $indexes
     * @throws AppwriteException
     * @return \Appwrite\Models\Table
     */
    public function createTable(string $databaseId, string $tableId, string $name, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null, ?array $columns = null, ?array $indexes = null): \Appwrite\Models\Table
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/tables'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['name'] = $name;
        $apiParams['permissions'] = $permissions;

        if (!is_null($rowSecurity)) {
            $apiParams['rowSecurity'] = $rowSecurity;
        }

        if (!is_null($enabled)) {
            $apiParams['enabled'] = $enabled;
        }

        if (!is_null($columns)) {
            $apiParams['columns'] = $columns;
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
            [\Appwrite\Models\Table::class]
        );

    }

    /**
     * Get a table by its unique ID. This endpoint response returns a JSON object
     * with the table metadata.
     *
     * @param string $databaseId
     * @param string $tableId
     * @throws AppwriteException
     * @return \Appwrite\Models\Table
     */
    public function getTable(string $databaseId, string $tableId): \Appwrite\Models\Table
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        $apiHeaders = [];

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $this->parseResponse(
            $response,
            [\Appwrite\Models\Table::class]
        );

    }

    /**
     * Update a table by its unique ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?string $name
     * @param ?array $permissions
     * @param ?bool $rowSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\Table
     */
    public function updateTable(string $databaseId, string $tableId, ?string $name = null, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null): \Appwrite\Models\Table
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['permissions'] = $permissions;

        if (!is_null($rowSecurity)) {
            $apiParams['rowSecurity'] = $rowSecurity;
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
            [\Appwrite\Models\Table::class]
        );

    }

    /**
     * Delete a table by its unique ID. Only users with write permissions have
     * access to delete this resource.
     *
     * @param string $databaseId
     * @param string $tableId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTable(string $databaseId, string $tableId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
     * List columns in the table.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnList
     */
    public function listColumns(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ColumnList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
            [\Appwrite\Models\ColumnList::class]
        );

    }

    /**
     * Create a boolean column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?bool $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnBoolean
     */
    public function createBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnBoolean
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/boolean'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnBoolean::class]
        );

    }

    /**
     * Update a boolean column. Changing the `default` value will not update
     * already existing rows.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?bool $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnBoolean
     */
    public function updateBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnBoolean
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/boolean/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnBoolean::class]
        );

    }

    /**
     * Create a date time column according to the ISO 8601 standard.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnDatetime
     */
    public function createDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnDatetime
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/datetime'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnDatetime::class]
        );

    }

    /**
     * Update a date time column. Changing the `default` value will not update
     * already existing rows.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnDatetime
     */
    public function updateDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnDatetime
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/datetime/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnDatetime::class]
        );

    }

    /**
     * Create an email column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnEmail
     */
    public function createEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnEmail
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/email'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnEmail::class]
        );

    }

    /**
     * Update an email column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnEmail
     */
    public function updateEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnEmail
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/email/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnEmail::class]
        );

    }

    /**
     * Create an enumeration column. The `elements` param acts as a white-list of
     * accepted values for this column.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnEnum
     */
    public function createEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnEnum
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/enum'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnEnum::class]
        );

    }

    /**
     * Update an enum column. Changing the `default` value will not update already
     * existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param array $elements
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnEnum
     */
    public function updateEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnEnum
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/enum/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnEnum::class]
        );

    }

    /**
     * Create a float column. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?float $min
     * @param ?float $max
     * @param ?float $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnFloat
     */
    public function createFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $min = null, ?float $max = null, ?float $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnFloat
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/float'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnFloat::class]
        );

    }

    /**
     * Update a float column. Changing the `default` value will not update already
     * existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?float $xdefault
     * @param ?float $min
     * @param ?float $max
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnFloat
     */
    public function updateFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $xdefault, ?float $min = null, ?float $max = null, ?string $newKey = null): \Appwrite\Models\ColumnFloat
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/float/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnFloat::class]
        );

    }

    /**
     * Create an integer column. Optionally, minimum and maximum values can be
     * provided.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?int $min
     * @param ?int $max
     * @param ?int $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnInteger
     */
    public function createIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnInteger
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/integer'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnInteger::class]
        );

    }

    /**
     * Update an integer column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?int $xdefault
     * @param ?int $min
     * @param ?int $max
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnInteger
     */
    public function updateIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null): \Appwrite\Models\ColumnInteger
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/integer/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnInteger::class]
        );

    }

    /**
     * Create IP address column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnIp
     */
    public function createIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnIp
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/ip'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnIp::class]
        );

    }

    /**
     * Update an ip column. Changing the `default` value will not update already
     * existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnIp
     */
    public function updateIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnIp
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/ip/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnIp::class]
        );

    }

    /**
     * Create a geometric line column.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnLine
     */
    public function createLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\ColumnLine
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/line'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnLine::class]
        );

    }

    /**
     * Update a line column. Changing the `default` value will not update already
     * existing rows.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnLine
     */
    public function updateLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\ColumnLine
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/line/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnLine::class]
        );

    }

    /**
     * Create a longtext column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnLongtext
     */
    public function createLongtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\ColumnLongtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/longtext'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnLongtext::class]
        );

    }

    /**
     * Update a longtext column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnLongtext
     */
    public function updateLongtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnLongtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/longtext/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnLongtext::class]
        );

    }

    /**
     * Create a mediumtext column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnMediumtext
     */
    public function createMediumtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\ColumnMediumtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/mediumtext'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnMediumtext::class]
        );

    }

    /**
     * Update a mediumtext column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnMediumtext
     */
    public function updateMediumtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnMediumtext
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/mediumtext/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnMediumtext::class]
        );

    }

    /**
     * Create a geometric point column.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnPoint
     */
    public function createPointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\ColumnPoint
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/point'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnPoint::class]
        );

    }

    /**
     * Update a point column. Changing the `default` value will not update already
     * existing rows.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnPoint
     */
    public function updatePointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\ColumnPoint
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/point/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnPoint::class]
        );

    }

    /**
     * Create a geometric polygon column.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnPolygon
     */
    public function createPolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): \Appwrite\Models\ColumnPolygon
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/polygon'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnPolygon::class]
        );

    }

    /**
     * Update a polygon column. Changing the `default` value will not update
     * already existing rows.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?array $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnPolygon
     */
    public function updatePolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): \Appwrite\Models\ColumnPolygon
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/polygon/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnPolygon::class]
        );

    }

    /**
     * Create relationship column. [Learn more about relationship
     * columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $relatedTableId
     * @param RelationshipType $type
     * @param ?bool $twoWay
     * @param ?string $key
     * @param ?string $twoWayKey
     * @param ?RelationMutate $onDelete
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnRelationship
     */
    public function createRelationshipColumn(string $databaseId, string $tableId, string $relatedTableId, RelationshipType $type, ?bool $twoWay = null, ?string $key = null, ?string $twoWayKey = null, ?RelationMutate $onDelete = null): \Appwrite\Models\ColumnRelationship
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/relationship'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['relatedTableId'] = $relatedTableId;
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
            [\Appwrite\Models\ColumnRelationship::class]
        );

    }

    /**
     * Create a string column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param int $size
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnString
     *
     * @deprecated This API has been deprecated since 1.9.0. Please use `createTextColumn` instead.
     * @see TablesDB::createTextColumn
     */
    public function createStringColumn(string $databaseId, string $tableId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\ColumnString
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/string'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnString::class]
        );

    }

    /**
     * Update a string column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?int $size
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnString
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTextColumn` instead.
     * @see TablesDB::updateTextColumn
     */
    public function updateStringColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): \Appwrite\Models\ColumnString
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/string/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnString::class]
        );

    }

    /**
     * Create a text column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnText
     */
    public function createTextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\ColumnText
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/text'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnText::class]
        );

    }

    /**
     * Update a text column. Changing the `default` value will not update already
     * existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnText
     */
    public function updateTextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnText
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/text/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnText::class]
        );

    }

    /**
     * Create a URL column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnUrl
     */
    public function createUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): \Appwrite\Models\ColumnUrl
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/url'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnUrl::class]
        );

    }

    /**
     * Update an url column. Changing the `default` value will not update already
     * existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnUrl
     */
    public function updateUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): \Appwrite\Models\ColumnUrl
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/url/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnUrl::class]
        );

    }

    /**
     * Create a varchar column.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param int $size
     * @param bool $required
     * @param ?string $xdefault
     * @param ?bool $xarray
     * @param ?bool $encrypt
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnVarchar
     */
    public function createVarcharColumn(string $databaseId, string $tableId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): \Appwrite\Models\ColumnVarchar
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/varchar'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnVarchar::class]
        );

    }

    /**
     * Update a varchar column. Changing the `default` value will not update
     * already existing rows.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param bool $required
     * @param ?string $xdefault
     * @param ?int $size
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnVarchar
     */
    public function updateVarcharColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): \Appwrite\Models\ColumnVarchar
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/varchar/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnVarchar::class]
        );

    }

    /**
     * Get column by ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnBoolean|\Appwrite\Models\ColumnInteger|\Appwrite\Models\ColumnFloat|\Appwrite\Models\ColumnEmail|\Appwrite\Models\ColumnEnum|\Appwrite\Models\ColumnUrl|\Appwrite\Models\ColumnIp|\Appwrite\Models\ColumnDatetime|\Appwrite\Models\ColumnRelationship|\Appwrite\Models\ColumnString
     */
    public function getColumn(string $databaseId, string $tableId, string $key): \Appwrite\Models\ColumnBoolean|\Appwrite\Models\ColumnInteger|\Appwrite\Models\ColumnFloat|\Appwrite\Models\ColumnEmail|\Appwrite\Models\ColumnEnum|\Appwrite\Models\ColumnUrl|\Appwrite\Models\ColumnIp|\Appwrite\Models\ColumnDatetime|\Appwrite\Models\ColumnRelationship|\Appwrite\Models\ColumnString
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnBoolean::class, \Appwrite\Models\ColumnInteger::class, \Appwrite\Models\ColumnFloat::class, \Appwrite\Models\ColumnEmail::class, \Appwrite\Models\ColumnEnum::class, \Appwrite\Models\ColumnUrl::class, \Appwrite\Models\ColumnIp::class, \Appwrite\Models\ColumnDatetime::class, \Appwrite\Models\ColumnRelationship::class, \Appwrite\Models\ColumnString::class]
,
            [
                \Appwrite\Models\ColumnBoolean::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'default'],
                ],
                \Appwrite\Models\ColumnInteger::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'min', 'max', 'default'],
                ],
                \Appwrite\Models\ColumnFloat::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'min', 'max', 'default'],
                ],
                \Appwrite\Models\ColumnEmail::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\ColumnEnum::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'elements', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'elements', 'format', 'default'],
                ],
                \Appwrite\Models\ColumnUrl::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\ColumnIp::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\ColumnDatetime::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'format', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'format', 'default'],
                ],
                \Appwrite\Models\ColumnRelationship::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'relatedTable', 'relationType', 'twoWay', 'twoWayKey', 'onDelete', 'side'],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'relatedTable', 'relationType', 'twoWay', 'twoWayKey', 'onDelete', 'side'],
                ],
                \Appwrite\Models\ColumnString::class => [
                    'required' => ['key', 'type', 'status', 'error', 'required', '$createdAt', '$updatedAt', 'size', ],
                    'all' => ['key', 'type', 'status', 'error', 'required', 'array', '$createdAt', '$updatedAt', 'size', 'default', 'encrypt'],
                ]
            ]
        );

    }

    /**
     * Deletes a column.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return string
     */
    public function deleteColumn(string $databaseId, string $tableId, string $key): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
     * Update relationship column. [Learn more about relationship
     * columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param ?RelationMutate $onDelete
     * @param ?string $newKey
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnRelationship
     */
    public function updateRelationshipColumn(string $databaseId, string $tableId, string $key, ?RelationMutate $onDelete = null, ?string $newKey = null): \Appwrite\Models\ColumnRelationship
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/{key}/relationship'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['key'] = $key;
        $apiParams['onDelete'] = $onDelete;
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
            [\Appwrite\Models\ColumnRelationship::class]
        );

    }

    /**
     * List indexes on the table.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnIndexList
     */
    public function listIndexes(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ColumnIndexList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
            [\Appwrite\Models\ColumnIndexList::class]
        );

    }

    /**
     * Creates an index on the columns listed. Your index should include all the
     * columns you will query in a single request.
     * Type can be `key`, `fulltext`, or `unique`.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @param TablesDBIndexType $type
     * @param array $columns
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnIndex
     */
    public function createIndex(string $databaseId, string $tableId, string $key, TablesDBIndexType $type, array $columns, ?array $orders = null, ?array $lengths = null): \Appwrite\Models\ColumnIndex
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/indexes'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['key'] = $key;
        $apiParams['type'] = $type;
        $apiParams['columns'] = $columns;

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
            [\Appwrite\Models\ColumnIndex::class]
        );

    }

    /**
     * Get index by ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return \Appwrite\Models\ColumnIndex
     */
    public function getIndex(string $databaseId, string $tableId, string $key): \Appwrite\Models\ColumnIndex
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
            [\Appwrite\Models\ColumnIndex::class]
        );

    }

    /**
     * Delete an index.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return string
     */
    public function deleteIndex(string $databaseId, string $tableId, string $key): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/indexes/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
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
     * Get a list of all the user's rows in a given table. You can use the query
     * params to filter your results.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $queries
     * @param ?string $transactionId
     * @param ?bool $total
     * @param ?int $ttl
     * @throws AppwriteException
     * @return \Appwrite\Models\RowList
     */
    public function listRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\RowList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
            [\Appwrite\Models\RowList::class]
        );

    }

    /**
     * Create a new Row. Before using this route, you should create a new table
     * resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function createRow(string $databaseId, string $tableId, string $rowId, array $data, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;
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
            [\Appwrite\Models\Row::class]
        );

    }

    /**
     * Create new Rows. Before using this route, you should create a new table
     * resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param array $rows
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\RowList
     */
    public function createRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rows'] = $rows;
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
            [\Appwrite\Models\RowList::class]
        );

    }

    /**
     * Create or update Rows. Before using this route, you should create a new
     * table resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     * 
     *
     * @param string $databaseId
     * @param string $tableId
     * @param array $rows
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\RowList
     */
    public function upsertRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rows'] = $rows;
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
            [\Appwrite\Models\RowList::class]
        );

    }

    /**
     * Update all rows that match your queries, if no queries are submitted then
     * all rows are updated. You can pass only specific fields to be updated.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $data
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\RowList
     */
    public function updateRows(string $databaseId, string $tableId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
            [\Appwrite\Models\RowList::class]
        );

    }

    /**
     * Bulk delete rows using queries, if no queries are passed then all rows are
     * deleted.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\RowList
     */
    public function deleteRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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
            [\Appwrite\Models\RowList::class]
        );

    }

    /**
     * Get a row by its unique ID. This endpoint response returns a JSON object
     * with the row data.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param ?array $queries
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function getRow(string $databaseId, string $tableId, string $rowId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}'],
            [$databaseId, $tableId, $rowId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;

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
            [\Appwrite\Models\Row::class]
        );

    }

    /**
     * Create or update a Row. Before using this route, you should create a new
     * table resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param ?array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function upsertRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}'],
            [$databaseId, $tableId, $rowId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;

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
            [\Appwrite\Models\Row::class]
        );

    }

    /**
     * Update a row by its unique ID. Using the patch method you can pass only
     * specific fields that will get updated.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param ?array $data
     * @param ?array $permissions
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function updateRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}'],
            [$databaseId, $tableId, $rowId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;

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
            [\Appwrite\Models\Row::class]
        );

    }

    /**
     * Delete a row by its unique ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteRow(string $databaseId, string $tableId, string $rowId, ?string $transactionId = null): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}'],
            [$databaseId, $tableId, $rowId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;
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
     * Decrement a specific column of a row by a given value.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param string $column
     * @param ?float $value
     * @param ?float $min
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function decrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $min = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}', '{column}'],
            [$databaseId, $tableId, $rowId, $column],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}/{column}/decrement'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;
        $apiParams['column'] = $column;

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
            [\Appwrite\Models\Row::class]
        );

    }

    /**
     * Increment a specific column of a row by a given value.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $rowId
     * @param string $column
     * @param ?float $value
     * @param ?float $max
     * @param ?string $transactionId
     * @throws AppwriteException
     * @return \Appwrite\Models\Row
     */
    public function incrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $max = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}', '{column}'],
            [$databaseId, $tableId, $rowId, $column],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}/{column}/increment'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;
        $apiParams['column'] = $column;

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
            [\Appwrite\Models\Row::class]
        );

    }
}
