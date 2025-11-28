<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\IndexType;

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
     * @return array
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): array
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
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List transactions across all databases.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listTransactions(?array $queries = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new transaction.
     *
     * @param ?int $ttl
     * @throws AppwriteException
     * @return array
     */
    public function createTransaction(?int $ttl = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a transaction by its unique ID.
     *
     * @param string $transactionId
     * @throws AppwriteException
     * @return array
     */
    public function getTransaction(string $transactionId): array
    {
        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/tablesdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a transaction, to either commit or roll back its operations.
     *
     * @param string $transactionId
     * @param ?bool $commit
     * @param ?bool $rollback
     * @throws AppwriteException
     * @return array
     */
    public function updateTransaction(string $transactionId, ?bool $commit = null, ?bool $rollback = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @param string $transactionId
     * @param ?array $operations
     * @throws AppwriteException
     * @return array
     */
    public function createOperations(string $transactionId, ?array $operations = null): array
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
     */
    public function get(string $databaseId): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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
     */
    public function update(string $databaseId, string $name, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @return array
     */
    public function listTables(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @throws AppwriteException
     * @return array
     */
    public function createTable(string $databaseId, string $tableId, string $name, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null): array
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
     * Get a table by its unique ID. This endpoint response returns a JSON object
     * with the table metadata.
     *
     * @param string $databaseId
     * @param string $tableId
     * @throws AppwriteException
     * @return array
     */
    public function getTable(string $databaseId, string $tableId): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update a table by its unique ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $name
     * @param ?array $permissions
     * @param ?bool $rowSecurity
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return array
     */
    public function updateTable(string $databaseId, string $tableId, string $name, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null): array
    {
        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List columns in the table.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return array
     */
    public function listColumns(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $min = null, ?float $max = null, ?float $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $xdefault, ?float $min = null, ?float $max = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createPointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updatePointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createPolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updatePolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createRelationshipColumn(string $databaseId, string $tableId, string $relatedTableId, RelationshipType $type, ?bool $twoWay = null, ?string $key = null, ?string $twoWayKey = null, ?RelationMutate $onDelete = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createStringColumn(string $databaseId, string $tableId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateStringColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get column by ID.
     *
     * @param string $databaseId
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return array
     */
    public function getColumn(string $databaseId, string $tableId, string $key): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @return array
     */
    public function updateRelationshipColumn(string $databaseId, string $tableId, string $key, ?RelationMutate $onDelete = null, ?string $newKey = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function listIndexes(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @param IndexType $type
     * @param array $columns
     * @param ?array $orders
     * @param ?array $lengths
     * @throws AppwriteException
     * @return array
     */
    public function createIndex(string $databaseId, string $tableId, string $key, IndexType $type, array $columns, ?array $orders = null, ?array $lengths = null): array
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
     * @param string $tableId
     * @param string $key
     * @throws AppwriteException
     * @return array
     */
    public function getIndex(string $databaseId, string $tableId, string $key): array
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @throws AppwriteException
     * @return array
     */
    public function listRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null): array
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

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createRow(string $databaseId, string $tableId, string $rowId, array $data, ?array $permissions = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function createRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function upsertRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateRows(string $databaseId, string $tableId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function deleteRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function getRow(string $databaseId, string $tableId, string $rowId, ?array $queries = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function upsertRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function updateRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @return array
     */
    public function decrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $min = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
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
     * @return array
     */
    public function incrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $max = null, ?string $transactionId = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}