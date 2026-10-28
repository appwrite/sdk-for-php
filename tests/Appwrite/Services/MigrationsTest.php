<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\AppwriteMigrationResource;
use Appwrite\Enums\OnDuplicate;
use Appwrite\Enums\FirebaseMigrationResource;
use Appwrite\Enums\NHostMigrationResource;
use Appwrite\Enums\SupabaseMigrationResource;

final class MigrationsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Migrations $migrations;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->migrations = new Migrations($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "migrations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "status" => "pending",
                    "stage" => "init",
                    "source" => "Appwrite",
                    "destination" => "Appwrite",
                    "resources" => [],
                    "resourceId" => "collectionId",
                    "resourceInternalId" => "1",
                    "resourceType" => "collection",
                    "parentResourceId" => "databaseId",
                    "parentResourceInternalId" => "1",
                    "parentResourceType" => "database",
                    "destinationResourceId" => "databaseId",
                    "destinationResourceInternalId" => "1",
                    "destinationResourceType" => "database",
                    "statusCounters" => [],
                    "resourceData" => [],
                    "errors" => [],
                    "options" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/migrations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'search' => "<SEARCH>",
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MigrationList::class, $response);
    }
    public function testMethodCreateAppwriteMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/appwrite',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['resources', 'endpoint', 'projectId', 'apiKey', 'onDuplicate'], array_keys($params));
                    $expected = [
                        'resources' => [AppwriteMigrationResource::USER()],
                        'endpoint' => "https://example.com",
                        'projectId' => "<PROJECT_ID>",
                        'apiKey' => "<API_KEY>",
                        'onDuplicate' => OnDuplicate::FAIL(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createAppwriteMigration(
            [AppwriteMigrationResource::USER()],
            "https://example.com",
            "<PROJECT_ID>",
            "<API_KEY>",
            onDuplicate: OnDuplicate::FAIL()
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateCSVExport(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/csv/exports',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'filename', 'columns', 'queries', 'delimiter', 'enclosure', 'escape', 'header', 'notify'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'filename' => "<FILENAME>",
                        'columns' => [],
                        'queries' => [],
                        'delimiter' => "<DELIMITER>",
                        'enclosure' => "<ENCLOSURE>",
                        'escape' => "<ESCAPE>",
                        'header' => false,
                        'notify' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createCSVExport(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<FILENAME>",
            columns: [],
            queries: [],
            delimiter: "<DELIMITER>",
            enclosure: "<ENCLOSURE>",
            escape: "<ESCAPE>",
            header: false,
            notify: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateCSVImport(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/csv/imports',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'databaseId', 'collectionId', 'internalFile', 'onDuplicate'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'internalFile' => false,
                        'onDuplicate' => OnDuplicate::FAIL(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createCSVImport(
            "<BUCKET_ID>",
            "<FILE_ID>",
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            internalFile: false,
            onDuplicate: OnDuplicate::FAIL()
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateFirebaseMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/firebase',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['resources', 'serviceAccount'], array_keys($params));
                    $expected = [
                        'resources' => [FirebaseMigrationResource::USER()],
                        'serviceAccount' => "<SERVICE_ACCOUNT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createFirebaseMigration(
            [FirebaseMigrationResource::USER()],
            "<SERVICE_ACCOUNT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateJSONExport(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/json/exports',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'collectionId', 'filename', 'columns', 'queries', 'notify'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'filename' => "<FILENAME>",
                        'columns' => [],
                        'queries' => [],
                        'notify' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createJSONExport(
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            "<FILENAME>",
            columns: [],
            queries: [],
            notify: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateJSONImport(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/json/imports',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'databaseId', 'collectionId', 'internalFile', 'onDuplicate'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'databaseId' => "<DATABASE_ID>",
                        'collectionId' => "<COLLECTION_ID>",
                        'internalFile' => false,
                        'onDuplicate' => OnDuplicate::FAIL(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createJSONImport(
            "<BUCKET_ID>",
            "<FILE_ID>",
            "<DATABASE_ID>",
            "<COLLECTION_ID>",
            internalFile: false,
            onDuplicate: OnDuplicate::FAIL()
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateNHostMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/nhost',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['resources', 'subdomain', 'region', 'adminSecret', 'database', 'username', 'password', 'port'], array_keys($params));
                    $expected = [
                        'resources' => [NHostMigrationResource::USER()],
                        'subdomain' => "<SUBDOMAIN>",
                        'region' => "<REGION>",
                        'adminSecret' => "<ADMIN_SECRET>",
                        'database' => "<DATABASE>",
                        'username' => "<USERNAME>",
                        'password' => "password",
                        'port' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createNHostMigration(
            [NHostMigrationResource::USER()],
            "<SUBDOMAIN>",
            "<REGION>",
            "<ADMIN_SECRET>",
            "<DATABASE>",
            "<USERNAME>",
            "password",
            port: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodCreateSupabaseMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/migrations/supabase',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['resources', 'endpoint', 'apiKey', 'databaseHost', 'username', 'password', 'port'], array_keys($params));
                    $expected = [
                        'resources' => [SupabaseMigrationResource::USER()],
                        'endpoint' => "https://example.com",
                        'apiKey' => "<API_KEY>",
                        'databaseHost' => "<DATABASE_HOST>",
                        'username' => "<USERNAME>",
                        'password' => "password",
                        'port' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->createSupabaseMigration(
            [SupabaseMigrationResource::USER()],
            "https://example.com",
            "<API_KEY>",
            "<DATABASE_HOST>",
            "<USERNAME>",
            "password",
            port: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/migrations/%3CMIGRATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['migrationId'], array_keys($params));
                    $expected = [
                        'migrationId' => "<MIGRATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->get(
            "<MIGRATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodRetry(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "stage" => "init",
            "source" => "Appwrite",
            "destination" => "Appwrite",
            "resources" => [],
            "resourceId" => "collectionId",
            "resourceInternalId" => "1",
            "resourceType" => "collection",
            "parentResourceId" => "databaseId",
            "parentResourceInternalId" => "1",
            "parentResourceType" => "database",
            "destinationResourceId" => "databaseId",
            "destinationResourceInternalId" => "1",
            "destinationResourceType" => "database",
            "statusCounters" => [],
            "resourceData" => [],
            "errors" => [],
            "options" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/migrations/%3CMIGRATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['migrationId'], array_keys($params));
                    $expected = [
                        'migrationId' => "<MIGRATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->retry(
            "<MIGRATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Migration::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/migrations/%3CMIGRATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['migrationId'], array_keys($params));
                    $expected = [
                        'migrationId' => "<MIGRATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->migrations->delete(
            "<MIGRATION_ID>"
        );

        $this->assertSame($data, $response);
    }
}
