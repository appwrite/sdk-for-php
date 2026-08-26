<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

class Backups extends Service
{
    /**
     * List all archives for a project.
     *
     * @throws AppwriteException
     */
    public function listArchives(?array $queries = null): \Appwrite\Models\BackupArchiveList
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/archives'
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

        return \Appwrite\Models\BackupArchiveList::from($response);
    }

    /**
     * Create a new archive asynchronously for a project.
     *
     * @throws AppwriteException
     */
    public function createArchive(array $services, ?string $resourceId = null): \Appwrite\Models\BackupArchive
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/archives'
        );

        $apiParams = [];
        $apiParams['services'] = $services;
        $apiParams['resourceId'] = $resourceId;

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

        return \Appwrite\Models\BackupArchive::from($response);
    }

    /**
     * Get a backup archive using it&#039;s ID.
     *
     * @throws AppwriteException
     */
    public function getArchive(string $archiveId): \Appwrite\Models\BackupArchive
    {
        $apiPath = str_replace(
            ['{archiveId}'],
            [$archiveId],
            '/backups/archives/{archiveId}'
        );

        $apiParams = [];
        $apiParams['archiveId'] = $archiveId;

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

        return \Appwrite\Models\BackupArchive::from($response);
    }

    /**
     * Delete an existing archive for a project.
     *
     * @throws AppwriteException
     */
    public function deleteArchive(string $archiveId): string
    {
        $apiPath = str_replace(
            ['{archiveId}'],
            [$archiveId],
            '/backups/archives/{archiveId}'
        );

        $apiParams = [];
        $apiParams['archiveId'] = $archiveId;

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
     * List all policies for a project.
     *
     * @throws AppwriteException
     */
    public function listPolicies(?array $queries = null): \Appwrite\Models\BackupPolicyList
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/policies'
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

        return \Appwrite\Models\BackupPolicyList::from($response);
    }

    /**
     * Create a new backup policy.
     *
     * @throws AppwriteException
     */
    public function createPolicy(string $policyId, array $services, int $retention, string $schedule, ?string $name = null, ?string $resourceId = null, ?bool $enabled = null): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/policies'
        );

        $apiParams = [];
        $apiParams['policyId'] = $policyId;
        $apiParams['services'] = $services;
        $apiParams['retention'] = $retention;
        $apiParams['schedule'] = $schedule;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }
        $apiParams['resourceId'] = $resourceId;

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
     * Get a backup policy using it&#039;s ID.
     *
     * @throws AppwriteException
     */
    public function getPolicy(string $policyId): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            ['{policyId}'],
            [$policyId],
            '/backups/policies/{policyId}'
        );

        $apiParams = [];
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
     * Update an existing policy using it&#039;s ID.
     *
     * @throws AppwriteException
     */
    public function updatePolicy(string $policyId, ?string $name = null, ?int $retention = null, ?string $schedule = null, ?bool $enabled = null): \Appwrite\Models\BackupPolicy
    {
        $apiPath = str_replace(
            ['{policyId}'],
            [$policyId],
            '/backups/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['policyId'] = $policyId;
        $apiParams['name'] = $name;
        $apiParams['retention'] = $retention;

        if (!is_null($schedule)) {
            $apiParams['schedule'] = $schedule;
        }
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
     * Delete a policy using it&#039;s ID.
     *
     * @throws AppwriteException
     */
    public function deletePolicy(string $policyId): string
    {
        $apiPath = str_replace(
            ['{policyId}'],
            [$policyId],
            '/backups/policies/{policyId}'
        );

        $apiParams = [];
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
     * Create and trigger a new restoration for a backup on a project.
     *
     * For a backup of one database, the restoration resolves its destination
     * before it is queued. When `newResourceId` is omitted, the archived database
     * is restored in place and its own ID is returned in `options`. Pass a
     * different `newResourceId` to restore alongside it as a new database
     * instead.
     *
     * The restoration migration records the archived database in `resourceId` and
     * `resourceType`, and the resolved database in `destinationResourceId` and
     * `destinationResourceType`. Database types are stored canonically as
     * `database`, `documentsdb`, or `vectorsdb`. Project-wide restorations leave
     * these fields empty because they do not have a single source or destination
     * database.
     *
     * To list every migration related to one database, use its canonical type in
     * a nested `OR(AND(...), AND(...), AND(...))` across the root, parent, and
     * destination relation pairs: `(resourceType, resourceId)`,
     * `(parentResourceType, parentResourceId)`, and `(destinationResourceType,
     * destinationResourceId)`. Legacy and TablesDB databases use `database`; the
     * operational `resourceType` of a table migration is not rewritten to
     * `tablesdb`.
     *
     * When restoring a DocumentsDB or VectorsDB database from a dedicated source,
     * the restore provisions a fresh dedicated backing database at the source
     * database&#039;s own specification and lands the data there. An in-place restore
     * swaps the database onto that backing only once the restore has succeeded,
     * and retires the backing it displaced only once that swap is confirmed, so
     * the source keeps serving its own data until the restored data is in place
     * and any failure leaves it untouched. A serverless source has no dedicated
     * backing to clone and restores onto the archived database instead.
     *
     * @throws AppwriteException
     */
    public function createRestoration(string $archiveId, array $services, ?string $newResourceId = null, ?string $newResourceName = null): \Appwrite\Models\BackupRestoration
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/restoration'
        );

        $apiParams = [];
        $apiParams['archiveId'] = $archiveId;
        $apiParams['services'] = $services;

        if (!is_null($newResourceId)) {
            $apiParams['newResourceId'] = $newResourceId;
        }

        if (!is_null($newResourceName)) {
            $apiParams['newResourceName'] = $newResourceName;
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

        return \Appwrite\Models\BackupRestoration::from($response);
    }

    /**
     * List all backup restorations for a project.
     *
     * @throws AppwriteException
     */
    public function listRestorations(?array $queries = null): \Appwrite\Models\BackupRestorationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/backups/restorations'
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

        return \Appwrite\Models\BackupRestorationList::from($response);
    }

    /**
     * Get the current status of a backup restoration.
     *
     * @throws AppwriteException
     */
    public function getRestoration(string $restorationId): \Appwrite\Models\BackupRestoration
    {
        $apiPath = str_replace(
            ['{restorationId}'],
            [$restorationId],
            '/backups/restorations/{restorationId}'
        );

        $apiParams = [];
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

        return \Appwrite\Models\BackupRestoration::from($response);
    }
}
