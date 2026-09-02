<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Mongo extends Service
{
    /**
     * List all dedicated databases. Results support pagination.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null): \Appwrite\Models\DedicatedDatabaseList
    {
        $apiPath = str_replace(
            [],
            [],
            '/mongo'
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

        return \Appwrite\Models\DedicatedDatabaseList::from($response);
    }

    /**
     * Create a new dedicated database with the chosen engine and configuration.
     * Status will be 'provisioning' until the database is ready.
     *
     * @throws AppwriteException
     */
    public function create(string $databaseId, string $name, ?string $version = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null, ?int $networkIdleTimeoutSeconds = null, ?array $networkIPAllowlist = null, ?int $idleTimeoutMinutes = null, ?bool $pitr = null, ?int $pitrRetentionDays = null, ?bool $storageAutoscaling = null, ?int $storageAutoscalingThresholdPercent = null, ?int $storageAutoscalingMaxGb = null): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            [],
            [],
            '/mongo'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;
        $apiParams['version'] = $version;

        if (!is_null($specification)) {
            $apiParams['specification'] = $specification;
        }

        if (!is_null($replicas)) {
            $apiParams['replicas'] = $replicas;
        }
        $apiParams['syncMode'] = $syncMode;

        if (!is_null($networkIdleTimeoutSeconds)) {
            $apiParams['networkIdleTimeoutSeconds'] = $networkIdleTimeoutSeconds;
        }
        $apiParams['networkIPAllowlist'] = $networkIPAllowlist;

        if (!is_null($idleTimeoutMinutes)) {
            $apiParams['idleTimeoutMinutes'] = $idleTimeoutMinutes;
        }

        if (!is_null($pitr)) {
            $apiParams['pitr'] = $pitr;
        }

        if (!is_null($pitrRetentionDays)) {
            $apiParams['pitrRetentionDays'] = $pitrRetentionDays;
        }

        if (!is_null($storageAutoscaling)) {
            $apiParams['storageAutoscaling'] = $storageAutoscaling;
        }

        if (!is_null($storageAutoscalingThresholdPercent)) {
            $apiParams['storageAutoscalingThresholdPercent'] = $storageAutoscalingThresholdPercent;
        }

        if (!is_null($storageAutoscalingMaxGb)) {
            $apiParams['storageAutoscalingMaxGb'] = $storageAutoscalingMaxGb;
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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * List the dedicated database specifications available on the current plan.
     * Each specification reports its resource limits, pricing, and whether it is
     * enabled for the organization.
     *
     * @throws AppwriteException
     */
    public function listSpecifications(): \Appwrite\Models\DedicatedDatabaseSpecificationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/mongo/specifications'
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
     * Get a dedicated database by its unique ID. Returns the database
     * configuration and current status.
     *
     * @throws AppwriteException
     */
    public function get(string $databaseId): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}'
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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * Update a dedicated database configuration. All changes are applied with
     * zero downtime. Specification changes (cpu, memory, storage) are handled via
     * rolling cutover. Storage expansion is done online. All other settings are
     * applied in-place.
     *
     * @throws AppwriteException
     */
    public function update(string $databaseId, ?string $name = null, ?string $status = null, ?string $specification = null, ?int $replicas = null, ?string $syncMode = null, ?int $networkIdleTimeoutSeconds = null, ?array $networkIPAllowlist = null, ?int $idleTimeoutMinutes = null, ?bool $pitr = null, ?int $pitrRetentionDays = null, ?bool $storageAutoscaling = null, ?int $storageAutoscalingThresholdPercent = null, ?int $storageAutoscalingMaxGb = null, ?float $metricsTraceSampleRate = null, ?int $metricsSlowQueryLogThresholdMs = null, ?bool $sqlApiEnabled = null, ?array $sqlApiAllowedStatements = null, ?int $sqlApiMaxRows = null, ?int $sqlApiMaxBytes = null, ?int $sqlApiTimeoutSeconds = null): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['name'] = $name;
        $apiParams['status'] = $status;
        $apiParams['specification'] = $specification;
        $apiParams['replicas'] = $replicas;
        $apiParams['syncMode'] = $syncMode;
        $apiParams['networkIdleTimeoutSeconds'] = $networkIdleTimeoutSeconds;
        $apiParams['networkIPAllowlist'] = $networkIPAllowlist;
        $apiParams['idleTimeoutMinutes'] = $idleTimeoutMinutes;
        $apiParams['pitr'] = $pitr;
        $apiParams['pitrRetentionDays'] = $pitrRetentionDays;
        $apiParams['storageAutoscaling'] = $storageAutoscaling;
        $apiParams['storageAutoscalingThresholdPercent'] = $storageAutoscalingThresholdPercent;
        $apiParams['storageAutoscalingMaxGb'] = $storageAutoscalingMaxGb;
        $apiParams['metricsTraceSampleRate'] = $metricsTraceSampleRate;
        $apiParams['metricsSlowQueryLogThresholdMs'] = $metricsSlowQueryLogThresholdMs;
        $apiParams['sqlApiEnabled'] = $sqlApiEnabled;
        $apiParams['sqlApiAllowedStatements'] = $sqlApiAllowedStatements;
        $apiParams['sqlApiMaxRows'] = $sqlApiMaxRows;
        $apiParams['sqlApiMaxBytes'] = $sqlApiMaxBytes;
        $apiParams['sqlApiTimeoutSeconds'] = $sqlApiTimeoutSeconds;

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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * Delete a dedicated database. This action is irreversible. The database
     * status will be set to 'deleting' and all resources will be cleaned up.
     * Deletion is allowed from any state, and repeating the call re-dispatches
     * the cleanup.
     *
     * @throws AppwriteException
     */
    public function delete(string $databaseId): string
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}'
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
     * List all backups for a dedicated database. Results can be filtered by
     * status and type.
     *
     * @throws AppwriteException
     */
    public function listBackups(string $databaseId, ?array $queries = null): \Appwrite\Models\DedicatedDatabaseBackupList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/backups'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\DedicatedDatabaseBackupList::from($response);
    }

    /**
     * Create a manual backup of a dedicated database. The backup will be created
     * asynchronously and its status can be checked via the get backup endpoint.
     *
     * @throws AppwriteException
     */
    public function createBackup(string $databaseId, ?string $type = null): \Appwrite\Models\DedicatedDatabaseBackup
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/backups'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
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

        return \Appwrite\Models\DedicatedDatabaseBackup::from($response);
    }

    /**
     * List scheduled backup policies for a dedicated database.
     *
     * @throws AppwriteException
     */
    public function listBackupPolicies(string $databaseId, ?array $queries = null): \Appwrite\Models\BackupPolicyList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/backups/policies'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\BackupPolicyList::from($response);
    }

    /**
     * Create a scheduled backup policy for a dedicated database.
     *
     * @throws AppwriteException
     */
    public function createBackupPolicy(string $databaseId, string $policyId, string $name, string $schedule, int $retention, ?string $type = null, ?bool $enabled = null): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/backups/policies'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['policyId'] = $policyId;
        $apiParams['name'] = $name;
        $apiParams['schedule'] = $schedule;
        $apiParams['retention'] = $retention;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }

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

        return \Appwrite\Models\BackupPolicy::from($response);
    }

    /**
     * Get a scheduled backup policy for a dedicated database.
     *
     * @throws AppwriteException
     */
    public function getBackupPolicy(string $databaseId, string $policyId): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            ['{databaseId}', '{policyId}'],
            [$databaseId, $policyId],
            '/mongo/{databaseId}/backups/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['policyId'] = $policyId;

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

        return \Appwrite\Models\BackupPolicy::from($response);
    }

    /**
     * Update a scheduled backup policy for a dedicated database.
     *
     * @throws AppwriteException
     */
    public function updateBackupPolicy(string $databaseId, string $policyId, ?string $name = null, ?string $schedule = null, ?int $retention = null, ?bool $enabled = null): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            ['{databaseId}', '{policyId}'],
            [$databaseId, $policyId],
            '/mongo/{databaseId}/backups/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['policyId'] = $policyId;
        $apiParams['name'] = $name;

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }
        $apiParams['retention'] = $retention;
        $apiParams['enabled'] = $enabled;

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

        return \Appwrite\Models\BackupPolicy::from($response);
    }

    /**
     * Delete a scheduled backup policy for a dedicated database. Backups already
     * taken by the policy are kept until their retention expires.
     *
     * @throws AppwriteException
     */
    public function deleteBackupPolicy(string $databaseId, string $policyId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{policyId}'],
            [$databaseId, $policyId],
            '/mongo/{databaseId}/backups/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['policyId'] = $policyId;

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
     * Configure off-cluster backup storage for a dedicated database. Supports S3,
     * GCS, and Azure Blob Storage destinations. Backups will be stored to the
     * configured destination in addition to on-cluster storage.
     *
     * @throws AppwriteException
     */
    public function updateBackupStorage(string $databaseId, string $provider, string $bucket, string $accessKey, string $secretKey, ?string $region = null, ?string $prefix = null, ?string $endpoint = null): \Appwrite\Models\DedicatedDatabaseBackupStorage
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/backups/storage'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['provider'] = $provider;
        $apiParams['bucket'] = $bucket;
        $apiParams['accessKey'] = $accessKey;
        $apiParams['secretKey'] = $secretKey;

        if (!is_null($region)) {
            $apiParams['region'] = $region;
        }

        if (!is_null($prefix)) {
            $apiParams['prefix'] = $prefix;
        }

        if (!is_null($endpoint)) {
            $apiParams['endpoint'] = $endpoint;
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

        return \Appwrite\Models\DedicatedDatabaseBackupStorage::from($response);
    }

    /**
     * Get details of a specific database backup including its status, size, and
     * timestamps.
     *
     * @throws AppwriteException
     */
    public function getBackup(string $databaseId, string $backupId): \Appwrite\Models\DedicatedDatabaseBackup
    {
        $apiPath = str_replace(
            ['{databaseId}', '{backupId}'],
            [$databaseId, $backupId],
            '/mongo/{databaseId}/backups/{backupId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['backupId'] = $backupId;

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

        return \Appwrite\Models\DedicatedDatabaseBackup::from($response);
    }

    /**
     * Delete a database backup. This will permanently remove the backup from
     * storage and cannot be undone.
     *
     * @throws AppwriteException
     */
    public function deleteBackup(string $databaseId, string $backupId): string
    {
        $apiPath = str_replace(
            ['{databaseId}', '{backupId}'],
            [$databaseId, $backupId],
            '/mongo/{databaseId}/backups/{backupId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['backupId'] = $backupId;

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
     * List all ephemeral branches for a dedicated database. Returns branch
     * metadata including ID, name, namespace, and expiration time.
     *
     * @throws AppwriteException
     */
    public function listBranches(string $databaseId): \Appwrite\Models\DedicatedDatabaseBranchList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/branches'
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

        return \Appwrite\Models\DedicatedDatabaseBranchList::from($response);
    }

    /**
     * Create an ephemeral database branch from the primary via PVC snapshot. The
     * branch is a full copy of the database at the current point in time, useful
     * for testing schema migrations or running experiments without affecting
     * production data. Branches expire after the configured TTL (default 24
     * hours). The branch is created asynchronously.
     *
     * @throws AppwriteException
     */
    public function createBranch(string $databaseId, ?string $branchId = null, ?int $ttl = null): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/branches'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($branchId)) {
            $apiParams['branchId'] = $branchId;
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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * Delete an ephemeral database branch. This removes the branch namespace, its
     * PVC, and the associated VolumeSnapshot. The deletion runs asynchronously
     * and is irreversible.
     *
     * @throws AppwriteException
     */
    public function deleteBranch(string $databaseId, string $branchId): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}', '{branchId}'],
            [$databaseId, $branchId],
            '/mongo/{databaseId}/branches/{branchId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['branchId'] = $branchId;

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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * Queue a rotation of the primary connection credentials for a dedicated
     * database. A hibernated database is woken by the worker before rotation.
     * List database operations until the returned operation reaches a terminal
     * status, then fetch the database again for the refreshed connection string.
     *
     * @throws AppwriteException
     */
    public function updateCredentials(string $databaseId): \Appwrite\Models\DedicatedDatabaseOperation
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/credentials'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

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

        return \Appwrite\Models\DedicatedDatabaseOperation::from($response);
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
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/failovers'
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
     * Update the maintenance window for a dedicated database. Maintenance
     * operations like minor version upgrades will be performed during this
     * window.
     *
     * @throws AppwriteException
     */
    public function updateMaintenance(string $databaseId, string $day, int $hourUtc): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/maintenance'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['day'] = $day;
        $apiParams['hourUtc'] = $hourUtc;

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

        return \Appwrite\Models\DedicatedDatabase::from($response);
    }

    /**
     * Migrate a database between shared and dedicated types. Shared to dedicated
     * provisions an always-on dedicated instance; dedicated to shared converts to
     * a serverless instance that scales to zero when idle. Data is copied to the
     * target with a brief read-only window during cutover.
     *
     * @throws AppwriteException
     */
    public function createMigration(string $databaseId, string $targetType, ?string $specification = null): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/migrations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['targetType'] = $targetType;
        $apiParams['specification'] = $specification;

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
     * List the lifecycle operations recorded for a dedicated database, newest
     * first. Every provision, update, restore, backup and replication action is
     * recorded here with its outcome, including an attempt that was abandoned
     * because another worker took over the database.
     *
     * @throws AppwriteException
     */
    public function listOperations(string $databaseId, ?string $status = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\DedicatedDatabaseOperationList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/operations'
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
     * Get available point-in-time recovery windows for a dedicated database.
     * Returns the earliest and latest recovery points.
     *
     * @throws AppwriteException
     */
    public function getPitr(string $databaseId): \Appwrite\Models\DedicatedDatabasePITRWindows
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/pitr'
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

        return \Appwrite\Models\DedicatedDatabasePITRWindows::from($response);
    }

    /**
     * Get high availability status for a dedicated database. Returns replica
     * statuses, replication lag, and sync mode.
     *
     * @throws AppwriteException
     */
    public function getReplicas(string $databaseId): \Appwrite\Models\DedicatedDatabaseReplicas
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/replicas'
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
     * List all restorations for a dedicated database. Results can be filtered by
     * status and type.
     *
     * @throws AppwriteException
     */
    public function listRestorations(string $databaseId, ?string $status = null, ?string $type = null, ?int $limit = null, ?int $offset = null): \Appwrite\Models\DedicatedDatabaseRestorationList
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/restorations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }

        if (!is_null($type)) {
            $apiParams['type'] = $type;
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

        return \Appwrite\Models\DedicatedDatabaseRestorationList::from($response);
    }

    /**
     * Restore a database from a backup or to a specific point in time (PITR). For
     * backup restoration, provide a backupId. For PITR, provide a targetTime as
     * an ISO 8601 datetime. PITR requires the database to have PITR enabled and
     * is only available for enterprise databases.
     *
     * @throws AppwriteException
     */
    public function createRestoration(string $databaseId, ?string $type = null, ?string $backupId = null, ?string $targetDatabaseId = null, ?string $targetTime = null): \Appwrite\Models\DedicatedDatabaseRestoration
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/restorations'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;

        if (!is_null($type)) {
            $apiParams['type'] = $type;
        }
        $apiParams['backupId'] = $backupId;
        $apiParams['targetDatabaseId'] = $targetDatabaseId;
        $apiParams['targetTime'] = $targetTime;

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

        return \Appwrite\Models\DedicatedDatabaseRestoration::from($response);
    }

    /**
     * Get details of a specific database restoration including its status, type,
     * and timestamps.
     *
     * @throws AppwriteException
     */
    public function getRestoration(string $databaseId, string $restorationId): \Appwrite\Models\DedicatedDatabaseRestoration
    {
        $apiPath = str_replace(
            ['{databaseId}', '{restorationId}'],
            [$databaseId, $restorationId],
            '/mongo/{databaseId}/restorations/{restorationId}'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['restorationId'] = $restorationId;

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

        return \Appwrite\Models\DedicatedDatabaseRestoration::from($response);
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
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/status'
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
     * Upgrade a dedicated database to a new engine version. Uses blue-green
     * deployment for zero-downtime cutover.
     *
     * @throws AppwriteException
     */
    public function createUpgrade(string $databaseId, string $targetVersion): \Appwrite\Models\DedicatedDatabase
    {
        $apiPath = str_replace(
            ['{databaseId}'],
            [$databaseId],
            '/mongo/{databaseId}/upgrades'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['targetVersion'] = $targetVersion;

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
}
