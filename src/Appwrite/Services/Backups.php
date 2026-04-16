<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\BackupServices;

class Backups extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * List all archives for a project.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupArchiveList
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
     * @param array $services
     * @param ?string $resourceId
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupArchive
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
        $apiHeaders['content-type'] = 'application/json';

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
     * Get a backup archive using it's ID.
     *
     * @param string $archiveId
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupArchive
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
     * @param string $archiveId
     * @throws AppwriteException
     * @return string
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
     * List all policies for a project.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupPolicyList
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
     * @param string $policyId
     * @param array $services
     * @param int $retention
     * @param string $schedule
     * @param ?string $name
     * @param ?string $resourceId
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupPolicy
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
        $apiHeaders['content-type'] = 'application/json';

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
     * Get a backup policy using it's ID.
     *
     * @param string $policyId
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupPolicy
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
     * Update an existing policy using it's ID.
     *
     * @param string $policyId
     * @param ?string $name
     * @param ?int $retention
     * @param ?string $schedule
     * @param ?bool $enabled
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupPolicy
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
        $apiHeaders['content-type'] = 'application/json';

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
     * Delete a policy using it's ID.
     *
     * @param string $policyId
     * @throws AppwriteException
     * @return string
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
     * Create and trigger a new restoration for a backup on a project.
     *
     * @param string $archiveId
     * @param array $services
     * @param ?string $newResourceId
     * @param ?string $newResourceName
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupRestoration
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
        $apiHeaders['content-type'] = 'application/json';

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
     * @param ?array $queries
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupRestorationList
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
     * @param string $restorationId
     * @throws AppwriteException
     * @return \Appwrite\Models\BackupRestoration
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
