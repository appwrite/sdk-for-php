<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\Enums\OnDuplicate;

class Migrations extends Service
{
    /**
     * List all migrations in the current project. This endpoint returns a list of
     * all migrations including their status, progress, and any errors that
     * occurred during the migration process.
     *
     * @throws AppwriteException
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\MigrationList
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations'
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

        return \Appwrite\Models\MigrationList::from($response);
    }

    /**
     * Migrate data from another Appwrite project to your current project. This
     * endpoint allows you to migrate resources like databases, collections,
     * documents, users, and files from an existing Appwrite project.
     *
     * @throws AppwriteException
     */
    public function createAppwriteMigration(array $resources, string $endpoint, string $projectId, string $apiKey, ?OnDuplicate $onDuplicate = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/appwrite'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['projectId'] = $projectId;
        $apiParams['apiKey'] = $apiKey;

        if (!is_null($onDuplicate)) {
            $apiParams['onDuplicate'] = $onDuplicate;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Export documents to a CSV file from your Appwrite database. This endpoint
     * allows you to export documents to a CSV file stored in a secure internal
     * bucket. You'll receive an email with a download link when the export is
     * complete.
     *
     * @throws AppwriteException
     */
    public function createCSVExport(string $databaseId, string $collectionId, string $filename, ?array $columns = null, ?array $queries = null, ?string $delimiter = null, ?string $enclosure = null, ?string $escape = null, ?bool $header = null, ?bool $notify = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/csv/exports'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['filename'] = $filename;

        if (!is_null($columns)) {
            $apiParams['columns'] = $columns;
        }

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($delimiter)) {
            $apiParams['delimiter'] = $delimiter;
        }

        if (!is_null($enclosure)) {
            $apiParams['enclosure'] = $enclosure;
        }

        if (!is_null($escape)) {
            $apiParams['escape'] = $escape;
        }

        if (!is_null($header)) {
            $apiParams['header'] = $header;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Import documents from a CSV file into your Appwrite database. This endpoint
     * allows you to import documents from a CSV file uploaded to Appwrite Storage
     * bucket.
     *
     * @throws AppwriteException
     */
    public function createCSVImport(string $bucketId, string $fileId, string $databaseId, string $collectionId, ?bool $internalFile = null, ?OnDuplicate $onDuplicate = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/csv/imports'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($internalFile)) {
            $apiParams['internalFile'] = $internalFile;
        }

        if (!is_null($onDuplicate)) {
            $apiParams['onDuplicate'] = $onDuplicate;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Migrate data from a Firebase project to your Appwrite project. This
     * endpoint allows you to migrate resources like authentication and other
     * supported services from a Firebase project.
     *
     * @throws AppwriteException
     */
    public function createFirebaseMigration(array $resources, string $serviceAccount): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/firebase'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['serviceAccount'] = $serviceAccount;

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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Generate a report of the data in a Firebase project before migrating. This
     * endpoint analyzes the source project and returns information about the
     * resources that can be migrated.
     *
     * @throws AppwriteException
     */
    public function getFirebaseReport(array $resources, string $serviceAccount): \Appwrite\Models\MigrationReport
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/firebase/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['serviceAccount'] = $serviceAccount;

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

        return \Appwrite\Models\MigrationReport::from($response);
    }

    /**
     * Export documents to a JSON file from your Appwrite database. This endpoint
     * allows you to export documents to a JSON file stored in a secure internal
     * bucket. You'll receive an email with a download link when the export is
     * complete.
     *
     * @throws AppwriteException
     */
    public function createJSONExport(string $databaseId, string $collectionId, string $filename, ?array $columns = null, ?array $queries = null, ?bool $notify = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/json/exports'
        );

        $apiParams = [];
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;
        $apiParams['filename'] = $filename;

        if (!is_null($columns)) {
            $apiParams['columns'] = $columns;
        }

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($notify)) {
            $apiParams['notify'] = $notify;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Import documents from a JSON file into your Appwrite database. This
     * endpoint allows you to import documents from a JSON file uploaded to
     * Appwrite Storage bucket.
     *
     * @throws AppwriteException
     */
    public function createJSONImport(string $bucketId, string $fileId, string $databaseId, string $collectionId, ?bool $internalFile = null, ?OnDuplicate $onDuplicate = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/json/imports'
        );

        $apiParams = [];
        $apiParams['bucketId'] = $bucketId;
        $apiParams['fileId'] = $fileId;
        $apiParams['databaseId'] = $databaseId;
        $apiParams['collectionId'] = $collectionId;

        if (!is_null($internalFile)) {
            $apiParams['internalFile'] = $internalFile;
        }

        if (!is_null($onDuplicate)) {
            $apiParams['onDuplicate'] = $onDuplicate;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Migrate data from an NHost project to your Appwrite project. This endpoint
     * allows you to migrate resources like authentication, databases, and other
     * supported services from an NHost project.
     *
     * @throws AppwriteException
     */
    public function createNHostMigration(array $resources, string $subdomain, string $region, string $adminSecret, string $database, string $username, string $password, ?int $port = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/nhost'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['subdomain'] = $subdomain;
        $apiParams['region'] = $region;
        $apiParams['adminSecret'] = $adminSecret;
        $apiParams['database'] = $database;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Generate a detailed report of the data in an NHost project before
     * migrating. This endpoint analyzes the source project and returns
     * information about the resources that can be migrated.
     *
     * @throws AppwriteException
     */
    public function getNHostReport(array $resources, string $subdomain, string $region, string $adminSecret, string $database, string $username, string $password, ?int $port = null): \Appwrite\Models\MigrationReport
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/nhost/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['subdomain'] = $subdomain;
        $apiParams['region'] = $region;
        $apiParams['adminSecret'] = $adminSecret;
        $apiParams['database'] = $database;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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

        return \Appwrite\Models\MigrationReport::from($response);
    }

    /**
     * Migrate data from a Supabase project to your Appwrite project. This
     * endpoint allows you to migrate resources like authentication, databases,
     * and other supported services from a Supabase project.
     *
     * @throws AppwriteException
     */
    public function createSupabaseMigration(array $resources, string $endpoint, string $apiKey, string $databaseHost, string $username, string $password, ?int $port = null): \Appwrite\Models\Migration
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/supabase'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['apiKey'] = $apiKey;
        $apiParams['databaseHost'] = $databaseHost;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Generate a report of the data in a Supabase project before migrating. This
     * endpoint analyzes the source project and returns information about the
     * resources that can be migrated.
     *
     * @throws AppwriteException
     */
    public function getSupabaseReport(array $resources, string $endpoint, string $apiKey, string $databaseHost, string $username, string $password, ?int $port = null): \Appwrite\Models\MigrationReport
    {
        $apiPath = str_replace(
            [],
            [],
            '/migrations/supabase/report'
        );

        $apiParams = [];
        $apiParams['resources'] = $resources;
        $apiParams['endpoint'] = $endpoint;
        $apiParams['apiKey'] = $apiKey;
        $apiParams['databaseHost'] = $databaseHost;
        $apiParams['username'] = $username;
        $apiParams['password'] = $password;

        if (!is_null($port)) {
            $apiParams['port'] = $port;
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

        return \Appwrite\Models\MigrationReport::from($response);
    }

    /**
     * Get a migration by its unique ID. This endpoint returns detailed
     * information about a specific migration including its current status,
     * progress, and any errors that occurred during the migration process.
     *
     * @throws AppwriteException
     */
    public function get(string $migrationId): \Appwrite\Models\Migration
    {
        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{migrationId}'],
            [self::encodePath($migrationId)],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Retry a failed migration. This endpoint allows you to retry a migration
     * that has previously failed.
     *
     * @throws AppwriteException
     */
    public function retry(string $migrationId): \Appwrite\Models\Migration
    {
        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{migrationId}'],
            [self::encodePath($migrationId)],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
        $apiParams['migrationId'] = $migrationId;

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

        return \Appwrite\Models\Migration::from($response);
    }

    /**
     * Delete a migration by its unique ID. This endpoint allows you to remove a
     * migration from your project's migration history.
     *
     * @throws AppwriteException
     */
    public function delete(string $migrationId): string
    {
        if ($migrationId === '') {
            throw new AppwriteException('Missing required parameter: "migrationId"');
        }

        $apiPath = str_replace(
            ['{migrationId}'],
            [self::encodePath($migrationId)],
            '/migrations/{migrationId}'
        );

        $apiParams = [];
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
}
