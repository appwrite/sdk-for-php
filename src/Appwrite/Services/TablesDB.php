<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\TablesDBIndexType;

class TablesDB extends Service
{
    /**
     * Get a list of all databases from the current Appwrite project. You can use
     * the search parameter to filter your results.
     *
     * @throws AppwriteException
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
     */
    public function create(string $databaseId, string $name, ?bool $enabled = null, ?string $description = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null): \Appwrite\Models\Database
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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
        }

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        if (!is_null($replicas)) {
            $apiParams['replicas'] = $replicas;
        }
        $apiParams['syncMode'] = $syncMode;

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
     * List the dedicated database specifications available on the current plan.
     * Each specification reports its resource limits, its own prices and overage
     * rates, and whether it is enabled for the organization.
     *
     * @throws AppwriteException
     */
    public function listSpecifications(): \Appwrite\Models\DedicatedDatabaseSpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/tablesdb/specifications'
        );

        $apiParams = [];

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

        return \Appwrite\Models\DedicatedDatabaseSpecificationList::from($response);
    }

    /**
     * List transactions across all databases.
     *
     * @throws AppwriteException
     */
    public function listTransactions(?array $queries = null, ?bool $total = null): \Appwrite\Models\TransactionList
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

        return \Appwrite\Models\TransactionList::from($response);
    }

    /**
     * Create a new transaction.
     *
     * @throws AppwriteException
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
     */
    public function getTransaction(string $transactionId): \Appwrite\Models\Transaction
    {
        if ($transactionId === '') {
            throw new AppwriteException('Missing required parameter: "transactionId"');
        }

        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/tablesdb/transactions/{transactionId}'
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
     */
    public function updateTransaction(string $transactionId, ?bool $commit = null, ?bool $rollback = null): \Appwrite\Models\Transaction
    {
        if ($transactionId === '') {
            throw new AppwriteException('Missing required parameter: "transactionId"');
        }

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
     */
    public function deleteTransaction(string $transactionId): string
    {
        if ($transactionId === '') {
            throw new AppwriteException('Missing required parameter: "transactionId"');
        }

        $apiPath = str_replace(
            ['{transactionId}'],
            [$transactionId],
            '/tablesdb/transactions/{transactionId}'
        );

        $apiParams = [];
        $apiParams['transactionId'] = $transactionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     */
    public function createOperations(string $transactionId, ?array $operations = null): \Appwrite\Models\Transaction
    {
        if ($transactionId === '') {
            throw new AppwriteException('Missing required parameter: "transactionId"');
        }

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
     */
    public function get(string $databaseId): \Appwrite\Models\Database
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
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
     */
    public function update(string $databaseId, ?string $name = null, ?bool $enabled = null, ?string $description = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null): \Appwrite\Models\Database
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

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
        $apiParams['description'] = $description;
        $apiParams['specification'] = $specification;
        $apiParams['replicas'] = $replicas;
        $apiParams['syncMode'] = $syncMode;

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
     */
    public function delete(string $databaseId): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Trigger a manual failover for a dedicated database with high availability
     * enabled. Promotes a replica to primary. The failover runs asynchronously;
     * poll the database document for status updates. A database left
     * mid-operation also accepts this call as a repair once nothing is driving
     * the operation it is stuck in. Repairing a failover that did not finish, a
     * `failed` database, a stranded upgrade or migrate, or a stranded compute
     * resize additionally requires `targetReplicaId` to name the member to
     * promote, because the default target may be the member that operation
     * already promoted.
     *
     * @throws AppwriteException
     */
    public function createFailover(string $databaseId, ?string $targetReplicaId = null): \Appwrite\Models\DedicatedDatabase
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/failovers'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['targetReplicaId'] = $targetReplicaId;

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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * List the dedicated migrations for a TablesDB database. A database has at
     * most one in-flight migration.
     *
     * @throws AppwriteException
     */
    public function listMigrations(string $databaseId): \Appwrite\Models\DatabaseMigrationList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/migrations'
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

        return \Appwrite\Models\DatabaseMigrationList::from($response);
    }

    /**
     * Start migrating a serverless TablesDB database onto a dedicated MySQL
     * compute. Data is copied to the target while the source stays live. Reads
     * continue throughout. Row writes are held for up to a few seconds while
     * routing switches to the dedicated compute; a write the switch has not
     * absorbed within that hold is refused with `database_migration_cutover` and
     * can be retried. Schema changes (tables, columns, indexes) are refused from
     * creation until the cutover completes, and resume once the migration is
     * `soaking`.
     *
     * @throws AppwriteException
     */
    public function createMigration(string $databaseId, string $specification, ?bool $autoCutover = null): \Appwrite\Models\DatabaseMigration
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/migrations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['specification'] = $specification;

        if (!is_null($autoCutover)) {
            $apiParams['autoCutover'] = $autoCutover;
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

        return \Appwrite\Models\DatabaseMigration::from($response);
    }

    /**
     * Get a single dedicated migration for a TablesDB database by its ID.
     *
     * @throws AppwriteException
     */
    public function getMigration(string $databaseId, string $migrationId): \Appwrite\Models\DatabaseMigration
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{migrationId}'],
            [$databaseId, $migrationId],
            '/tablesdb/{databaseId}/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['migrationId'] = $migrationId;

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

        return \Appwrite\Models\DatabaseMigration::from($response);
    }

    /**
     * Abort an in-flight TablesDB dedicated migration. Only allowed before
     * cutover; once the migration has cut over it cannot be aborted.
     *
     * @throws AppwriteException
     */
    public function deleteMigration(string $databaseId, string $migrationId): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{migrationId}'],
            [$databaseId, $migrationId],
            '/tablesdb/{databaseId}/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['migrationId'] = $migrationId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Cut a verified TablesDB migration over to its dedicated compute. Only
     * applies to a migration created with `autoCutover` disabled, which waits at
     * `ready_to_cutover` until this is called. The routing flip happens shortly
     * after this returns. Reads are unaffected; row writes are held for up to a
     * few seconds while it lands, and a write the flip has not absorbed within
     * that hold is refused with `database_migration_cutover` and can be retried.
     * One call buys one attempt: a cutover that fails a check returns the
     * migration to `verifying` and parks it again, so call this once more to
     * retry.
     *
     * @throws AppwriteException
     */
    public function createCutover(string $databaseId, string $migrationId): \Appwrite\Models\DatabaseMigration
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{migrationId}'],
            [$databaseId, $migrationId],
            '/tablesdb/{databaseId}/migrations/{migrationId}/cutovers'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['migrationId'] = $migrationId;

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

        return \Appwrite\Models\DatabaseMigration::from($response);
    }

    /**
     * List the lifecycle operations recorded for a dedicated database, newest
     * first. Every provision, update, restore, backup and replication action is
     * recorded here with its outcome, including an attempt that was abandoned
     * because another worker took over the database.
     *
     * @throws AppwriteException
     */
    public function listOperations(string $databaseId, ?string $status = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\DedicatedDatabaseOperationList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/operations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($limit)) {
            $apiParams['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $apiParams['offset'] = $offset;
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

        return \Appwrite\Models\DedicatedDatabaseOperationList::from($response);
    }

    /**
     * Get high availability status for a dedicated database. Returns replica
     * statuses, replication lag, and sync mode.
     *
     * @throws AppwriteException
     */
    public function getReplicas(string $databaseId): \Appwrite\Models\DedicatedDatabaseReplicas
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/replicas'
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

        return \Appwrite\Models\DedicatedDatabaseReplicas::from($response);
    }

    /**
     * Get real-time health and status information for a dedicated database.
     * Returns health status, readiness, uptime, connection info, replica status,
     * and volume information.
     *
     * @throws AppwriteException
     */
    public function getStatus(string $databaseId): \Appwrite\Models\DatabaseStatus
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/tablesdb/{databaseId}/status'
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

        return \Appwrite\Models\DatabaseStatus::from($response);
    }

    /**
     * Get a list of all tables that belong to the provided databaseId. You can
     * use the search parameter to filter your results.
     *
     * @throws AppwriteException
     */
    public function listTables(string $databaseId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\TableList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

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

        return \Appwrite\Models\TableList::from($response);
    }

    /**
     * Create a new Table. Before using this route, you should create a new
     * database resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createTable(string $databaseId, string $tableId, string $name, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null, ?array $columns = null, ?array $indexes = null, ?string $description = null): \Appwrite\Models\Table
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\Table::from($response);
    }

    /**
     * Get a table by its unique ID. This endpoint response returns a JSON object
     * with the table metadata.
     *
     * @throws AppwriteException
     */
    public function getTable(string $databaseId, string $tableId): \Appwrite\Models\Table
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

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

        return \Appwrite\Models\Table::from($response);
    }

    /**
     * Update a table by its unique ID.
     *
     * @throws AppwriteException
     */
    public function updateTable(string $databaseId, string $tableId, ?string $name = null, ?array $permissions = null, ?bool $rowSecurity = null, ?bool $enabled = null, ?bool $purge = null, ?string $description = null): \Appwrite\Models\Table
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($purge)) {
            $apiParams['purge'] = $purge;
        }
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\Table::from($response);
    }

    /**
     * Delete a table by its unique ID. Only users with write permissions have
     * access to delete this resource.
     *
     * @throws AppwriteException
     */
    public function deleteTable(string $databaseId, string $tableId): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
     */
    public function listColumns(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ColumnList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\ColumnList::from($response);
    }

    /**
     * Create a bigint column. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
     */
    public function createBigIntColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnBigint
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/bigint'
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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnBigint::from($response);
    }

    /**
     * Update a bigint column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateBigIntColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnBigint
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/bigint/{key}'
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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnBigint::from($response);
    }

    /**
     * Create a boolean column.
     *
     * @throws AppwriteException
     */
    public function createBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnBoolean
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnBoolean::from($response);
    }

    /**
     * Update a boolean column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateBooleanColumn(string $databaseId, string $tableId, string $key, bool $required, ?bool $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnBoolean
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnBoolean::from($response);
    }

    /**
     * Create a date time column according to the ISO 8601 standard.
     *
     * @throws AppwriteException
     */
    public function createDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnDatetime
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnDatetime::from($response);
    }

    /**
     * Update a date time column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateDatetimeColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnDatetime
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnDatetime::from($response);
    }

    /**
     * Create an email column.
     *
     * @throws AppwriteException
     */
    public function createEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnEmail
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnEmail::from($response);
    }

    /**
     * Update an email column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateEmailColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnEmail
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnEmail::from($response);
    }

    /**
     * Create an enumeration column. The `elements` param acts as a white-list of
     * accepted values for this column.
     *
     * @throws AppwriteException
     */
    public function createEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnEnum
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnEnum::from($response);
    }

    /**
     * Update an enum column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateEnumColumn(string $databaseId, string $tableId, string $key, array $elements, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnEnum
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnEnum::from($response);
    }

    /**
     * Create a float column. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
     */
    public function createFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $min = null, ?float $max = null, ?float $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnFloat
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnFloat::from($response);
    }

    /**
     * Update a float column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateFloatColumn(string $databaseId, string $tableId, string $key, bool $required, ?float $xdefault, ?float $min = null, ?float $max = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnFloat
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnFloat::from($response);
    }

    /**
     * Create an integer column. Optionally, minimum and maximum values can be
     * provided.
     *
     * @throws AppwriteException
     */
    public function createIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $min = null, ?int $max = null, ?int $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnInteger
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnInteger::from($response);
    }

    /**
     * Update an integer column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateIntegerColumn(string $databaseId, string $tableId, string $key, bool $required, ?int $xdefault, ?int $min = null, ?int $max = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnInteger
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnInteger::from($response);
    }

    /**
     * Create IP address column.
     *
     * @throws AppwriteException
     */
    public function createIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnIp
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnIp::from($response);
    }

    /**
     * Update an ip column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateIpColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnIp
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnIp::from($response);
    }

    /**
     * Create a geometric line column.
     *
     * @throws AppwriteException
     */
    public function createLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $description = null): \Appwrite\Models\ColumnLine
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnLine::from($response);
    }

    /**
     * Update a line column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateLineColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnLine
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnLine::from($response);
    }

    /**
     * Create a longtext column.
     *
     * @throws AppwriteException
     */
    public function createLongtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null, ?string $description = null): \Appwrite\Models\ColumnLongtext
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnLongtext::from($response);
    }

    /**
     * Update a longtext column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateLongtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnLongtext
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnLongtext::from($response);
    }

    /**
     * Create a mediumtext column.
     *
     * @throws AppwriteException
     */
    public function createMediumtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null, ?string $description = null): \Appwrite\Models\ColumnMediumtext
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnMediumtext::from($response);
    }

    /**
     * Update a mediumtext column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateMediumtextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnMediumtext
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnMediumtext::from($response);
    }

    /**
     * Create a geometric point column.
     *
     * @throws AppwriteException
     */
    public function createPointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $description = null): \Appwrite\Models\ColumnPoint
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnPoint::from($response);
    }

    /**
     * Update a point column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updatePointColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnPoint
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnPoint::from($response);
    }

    /**
     * Create a geometric polygon column.
     *
     * @throws AppwriteException
     */
    public function createPolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $description = null): \Appwrite\Models\ColumnPolygon
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnPolygon::from($response);
    }

    /**
     * Update a polygon column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updatePolygonColumn(string $databaseId, string $tableId, string $key, bool $required, ?array $xdefault = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnPolygon
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnPolygon::from($response);
    }

    /**
     * Create relationship column. [Learn more about relationship
     * columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
     *
     * @throws AppwriteException
     */
    public function createRelationshipColumn(string $databaseId, string $tableId, string $relatedTableId, RelationshipType $type, ?bool $twoWay = null, ?string $key = null, ?string $twoWayKey = null, ?RelationMutate $onDelete = null, ?string $description = null): \Appwrite\Models\ColumnRelationship
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnRelationship::from($response);
    }

    /**
     * Update relationship column. [Learn more about relationship
     * columns](https://appwrite.io/docs/databases-relationships#relationship-columns).
     *
     * @throws AppwriteException
     */
    public function updateRelationshipColumn(string $databaseId, string $tableId, string $key, ?RelationMutate $onDelete = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnRelationship
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{key}'],
            [$databaseId, $tableId, $key],
            '/tablesdb/{databaseId}/tables/{tableId}/columns/relationship/{key}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['key'] = $key;
        $apiParams['onDelete'] = $onDelete;
        $apiParams['newKey'] = $newKey;
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnRelationship::from($response);
    }

    /**
     * Create a string column.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.9.0. Please use `createTextColumn` instead.
     * @see TablesDB::createTextColumn
     */
    public function createStringColumn(string $databaseId, string $tableId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null, ?string $description = null): \Appwrite\Models\ColumnString
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnString::from($response);
    }

    /**
     * Update a string column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     *
     * @deprecated This API has been deprecated since 1.8.0. Please use `updateTextColumn` instead.
     * @see TablesDB::updateTextColumn
     */
    public function updateStringColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnString
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnString::from($response);
    }

    /**
     * Create a text column.
     *
     * @throws AppwriteException
     */
    public function createTextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null, ?string $description = null): \Appwrite\Models\ColumnText
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnText::from($response);
    }

    /**
     * Update a text column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateTextColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnText
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnText::from($response);
    }

    /**
     * Create a URL column.
     *
     * @throws AppwriteException
     */
    public function createUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?string $description = null): \Appwrite\Models\ColumnUrl
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnUrl::from($response);
    }

    /**
     * Update an url column. Changing the `default` value will not update already
     * existing rows.
     *
     * @throws AppwriteException
     */
    public function updateUrlColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnUrl
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnUrl::from($response);
    }

    /**
     * Create a varchar column.
     *
     * @throws AppwriteException
     */
    public function createVarcharColumn(string $databaseId, string $tableId, string $key, int $size, bool $required, ?string $xdefault = null, ?bool $xarray = null, ?bool $encrypt = null, ?string $description = null): \Appwrite\Models\ColumnVarchar
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnVarchar::from($response);
    }

    /**
     * Update a varchar column. Changing the `default` value will not update
     * already existing rows.
     *
     * @throws AppwriteException
     */
    public function updateVarcharColumn(string $databaseId, string $tableId, string $key, bool $required, ?string $xdefault, ?int $size = null, ?string $newKey = null, ?string $description = null): \Appwrite\Models\ColumnVarchar
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiParams['description'] = $description;

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

        return \Appwrite\Models\ColumnVarchar::from($response);
    }

    /**
     * Get column by ID.
     *
     * @throws AppwriteException
     */
    public function getColumn(string $databaseId, string $tableId, string $key): \Appwrite\Models\ColumnBoolean|\Appwrite\Models\ColumnBigint|\Appwrite\Models\ColumnInteger|\Appwrite\Models\ColumnFloat|\Appwrite\Models\ColumnEmail|\Appwrite\Models\ColumnEnum|\Appwrite\Models\ColumnUrl|\Appwrite\Models\ColumnIp|\Appwrite\Models\ColumnDatetime|\Appwrite\Models\ColumnRelationship|\Appwrite\Models\ColumnPoint|\Appwrite\Models\ColumnLine|\Appwrite\Models\ColumnPolygon|\Appwrite\Models\ColumnVarchar|\Appwrite\Models\ColumnText|\Appwrite\Models\ColumnMediumtext|\Appwrite\Models\ColumnLongtext|\Appwrite\Models\ColumnString
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
            return \Appwrite\Models\ColumnEmail::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'enum') {
            return \Appwrite\Models\ColumnEnum::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'url') {
            return \Appwrite\Models\ColumnUrl::from($response);
        }

        if (($response['type'] ?? null) === 'string' && ($response['format'] ?? null) === 'ip') {
            return \Appwrite\Models\ColumnIp::from($response);
        }

        if (($response['type'] ?? null) === 'boolean') {
            return \Appwrite\Models\ColumnBoolean::from($response);
        }

        if (($response['type'] ?? null) === 'bigint') {
            return \Appwrite\Models\ColumnBigint::from($response);
        }

        if (($response['type'] ?? null) === 'integer') {
            return \Appwrite\Models\ColumnInteger::from($response);
        }

        if (($response['type'] ?? null) === 'double') {
            return \Appwrite\Models\ColumnFloat::from($response);
        }

        if (($response['type'] ?? null) === 'datetime') {
            return \Appwrite\Models\ColumnDatetime::from($response);
        }

        if (($response['type'] ?? null) === 'relationship') {
            return \Appwrite\Models\ColumnRelationship::from($response);
        }

        if (($response['type'] ?? null) === 'point') {
            return \Appwrite\Models\ColumnPoint::from($response);
        }

        if (($response['type'] ?? null) === 'linestring') {
            return \Appwrite\Models\ColumnLine::from($response);
        }

        if (($response['type'] ?? null) === 'polygon') {
            return \Appwrite\Models\ColumnPolygon::from($response);
        }

        if (($response['type'] ?? null) === 'varchar') {
            return \Appwrite\Models\ColumnVarchar::from($response);
        }

        if (($response['type'] ?? null) === 'text') {
            return \Appwrite\Models\ColumnText::from($response);
        }

        if (($response['type'] ?? null) === 'mediumtext') {
            return \Appwrite\Models\ColumnMediumtext::from($response);
        }

        if (($response['type'] ?? null) === 'longtext') {
            return \Appwrite\Models\ColumnLongtext::from($response);
        }

        if (($response['type'] ?? null) === 'string') {
            return \Appwrite\Models\ColumnString::from($response);
        }

        throw new \UnexpectedValueException('Unable to match response to any expected response model.');
    }

    /**
     * Deletes a column.
     *
     * @throws AppwriteException
     */
    public function deleteColumn(string $databaseId, string $tableId, string $key): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List indexes on the table.
     *
     * @throws AppwriteException
     */
    public function listIndexes(string $databaseId, string $tableId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\ColumnIndexList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\ColumnIndexList::from($response);
    }

    /**
     * Creates an index on the columns listed. Your index should include all the
     * columns you will query in a single request.
     * Type can be `key`, `fulltext`, `unique`, `spatial`, or `trigram`. `trigram`
     * is only available on PostgreSQL and lets `contains`, `startsWith`, and
     * `endsWith` queries on string columns use an index.
     *
     * @throws AppwriteException
     */
    public function createIndex(string $databaseId, string $tableId, string $key, TablesDBIndexType $type, array $columns, ?array $orders = null, ?array $lengths = null, ?string $description = null): \Appwrite\Models\ColumnIndex
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        if (!is_null($description)) {
            $apiParams['description'] = $description;
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

        return \Appwrite\Models\ColumnIndex::from($response);
    }

    /**
     * Get index by ID.
     *
     * @throws AppwriteException
     */
    public function getIndex(string $databaseId, string $tableId, string $key): \Appwrite\Models\ColumnIndex
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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

        return \Appwrite\Models\ColumnIndex::from($response);
    }

    /**
     * Delete an index.
     *
     * @throws AppwriteException
     */
    public function deleteIndex(string $databaseId, string $tableId, string $key): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($key === '') {
            throw new AppwriteException('Missing required parameter: "key"');
        }

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
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     * Rows returned by aggregate, groupBy or distinct queries hold only the
     * columns they select, group or aggregate, typed as a row types them, with a
     * joined column named by its join alias (`alias.column`). They have no `$id`,
     * `$sequence`, `$createdAt`, `$updatedAt`, `$permissions`, `$databaseId` or
     * `$tableId` unless they select or group it, and neither does a right or full
     * join row that no row of this table matched.
     *
     * @throws AppwriteException
     */
    public function listRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Create a new Row. Before using this route, you should create a new table
     * resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createRow(string $databaseId, string $tableId, string $rowId, array $data, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }

    /**
     * Create new Rows. Before using this route, you should create a new table
     * resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function createRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Create or update Rows. Before using this route, you should create a new
     * table resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function upsertRows(string $databaseId, string $tableId, array $rows, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Update all rows that match your queries, if no queries are submitted then
     * all rows are updated. You can pass only specific fields to be updated.
     *
     * @throws AppwriteException
     */
    public function updateRows(string $databaseId, string $tableId, ?array $data = null, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Bulk delete rows using queries, if no queries are passed then all rows are
     * deleted.
     *
     * @throws AppwriteException
     */
    public function deleteRows(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Get a list of all the user's rows in a given table using a POST request.
     * This behaves identically to the list rows endpoint but accepts the queries
     * in the request body, allowing much larger `queries` arrays than can fit in
     * a URL query string.
     *
     * @throws AppwriteException
     */
    public function createQuery(string $databaseId, string $tableId, ?array $queries = null, ?string $transactionId = null, ?bool $total = null, ?int $ttl = null): \Appwrite\Models\RowList
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}'],
            [$databaseId, $tableId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/query'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }
        $apiParams['transactionId'] = $transactionId;

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

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

        return \Appwrite\Models\RowList::from($response);
    }

    /**
     * Get a row by its unique ID. This endpoint response returns a JSON object
     * with the row data.
     *
     * @throws AppwriteException
     */
    public function getRow(string $databaseId, string $tableId, string $rowId, ?array $queries = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }

    /**
     * Create or update a Row. Before using this route, you should create a new
     * table resource using either a [server
     * integration](https://appwrite.io/docs/references/cloud/server-dart/tablesDB#createTable)
     * API or directly from your database console.
     *
     * @throws AppwriteException
     */
    public function upsertRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }

    /**
     * Update a row by its unique ID. Using the patch method you can pass only
     * specific fields that will get updated.
     *
     * @throws AppwriteException
     */
    public function updateRow(string $databaseId, string $tableId, string $rowId, ?array $data = null, ?array $permissions = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }

    /**
     * Delete a row by its unique ID.
     *
     * @throws AppwriteException
     */
    public function deleteRow(string $databaseId, string $tableId, string $rowId, ?string $transactionId = null): string
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

        $apiPath = str_replace(
            ['{databaseId}', '{tableId}', '{rowId}'],
            [$databaseId, $tableId, $rowId],
            '/tablesdb/{databaseId}/tables/{tableId}/rows/{rowId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['tableId'] = $tableId;
        $apiParams['rowId'] = $rowId;

        if (!is_null($transactionId)) {
            $apiParams['transactionId'] = $transactionId;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

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
     * @throws AppwriteException
     */
    public function decrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $min = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

        if ($column === '') {
            throw new AppwriteException('Missing required parameter: "column"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }

    /**
     * Increment a specific column of a row by a given value.
     *
     * @throws AppwriteException
     */
    public function incrementRowColumn(string $databaseId, string $tableId, string $rowId, string $column, ?float $value = null, ?float $max = null, ?string $transactionId = null): \Appwrite\Models\Row
    {
        if ($databaseId === '') {
            throw new AppwriteException('Missing required parameter: "databaseId"');
        }

        if ($tableId === '') {
            throw new AppwriteException('Missing required parameter: "tableId"');
        }

        if ($rowId === '') {
            throw new AppwriteException('Missing required parameter: "rowId"');
        }

        if ($column === '') {
            throw new AppwriteException('Missing required parameter: "column"');
        }

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

        return \Appwrite\Models\Row::from($response);
    }
}
