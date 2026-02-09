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
     * @return array
     */
    public function listArchives(?array $queries = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create a new archive asynchronously for a project.
     *
     * @param array $services
     * @param ?string $resourceId
     * @throws AppwriteException
     * @return array
     */
    public function createArchive(array $services, ?string $resourceId = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a backup archive using it's ID.
     *
     * @param string $archiveId
     * @throws AppwriteException
     * @return array
     */
    public function getArchive(string $archiveId): array
    {
        $apiPath = str_replace(
            ['{archiveId}'],
            [$archiveId],
            '/backups/archives/{archiveId}'
        );

        $apiParams = [];
        $apiParams['archiveId'] = $archiveId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listPolicies(?array $queries = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @return array
     */
    public function createPolicy(string $policyId, array $services, int $retention, string $schedule, ?string $name = null, ?string $resourceId = null, ?bool $enabled = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get a backup policy using it's ID.
     *
     * @param string $policyId
     * @throws AppwriteException
     * @return array
     */
    public function getPolicy(string $policyId): array
    {
        $apiPath = str_replace(
            ['{policyId}'],
            [$policyId],
            '/backups/policies/{policyId}'
        );

        $apiParams = [];
        $apiParams['policyId'] = $policyId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @return array
     */
    public function updatePolicy(string $policyId, ?string $name = null, ?int $retention = null, ?string $schedule = null, ?bool $enabled = null): array
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

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
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
     * @param string $archiveId
     * @param array $services
     * @param ?string $newResourceId
     * @param ?string $newResourceName
     * @throws AppwriteException
     * @return array
     */
    public function createRestoration(string $archiveId, array $services, ?string $newResourceId = null, ?string $newResourceName = null): array
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

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List all backup restorations for a project.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listRestorations(?array $queries = null): array
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

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get the current status of a backup restoration.
     *
     * @param string $restorationId
     * @throws AppwriteException
     * @return array
     */
    public function getRestoration(string $restorationId): array
    {
        $apiPath = str_replace(
            ['{restorationId}'],
            [$restorationId],
            '/backups/restorations/{restorationId}'
        );

        $apiParams = [];
        $apiParams['restorationId'] = $restorationId;

        $apiHeaders = [];

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}