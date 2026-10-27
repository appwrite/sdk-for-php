<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\RelationMutate;
use Appwrite\Enums\TablesDBIndexType;
use Appwrite\Enums\OrderBy;

final class TablesDBTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private TablesDB $tablesDB;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->tablesDB = new TablesDB($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "databases" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "name" => "My Database",
                    "description" => "Customer orders and invoices.",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "enabled" => true,
                    "type" => "legacy"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb',
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

        $response = $this->tablesDB->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description', 'specification', 'replicas', 'syncMode'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'description' => "<DESCRIPTION>",
                        'specification' => "serverless",
                        'replicas' => 1,
                        'syncMode' => "async",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->create(
            "<DATABASE_ID>",
            "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>",
            specification: "serverless",
            replicas: 1,
            syncMode: "async"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodListSpecifications(): void
    {
        $data = [
            "specifications" => [
                [
                    "slug" => "s-2vcpu-2gb",
                    "name" => "Standard",
                    "price" => 20,
                    "storageOverageRate" => 0.125,
                    "bandwidthOverageRate" => 0.08,
                    "replicaRate" => 1,
                    "pitrRate" => 0.2,
                    "cpu" => 2000,
                    "memory" => 2048,
                    "maxConnections" => 200,
                    "includedStorage" => 25,
                    "includedBandwidth" => 200,
                    "enabled" => true
                ]
            ],
            "total" => 9
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/specifications',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listSpecifications();

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseSpecificationList::class, $response);
    }
    public function testMethodListTransactions(): void
    {
        $data = [
            "total" => 5,
            "transactions" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "status" => "pending",
                    "operations" => 5,
                    "expiresAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/transactions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
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

        $response = $this->tablesDB->listTransactions(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TransactionList::class, $response);
    }
    public function testMethodCreateTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/transactions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ttl'], array_keys($params));
                    $expected = [
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTransaction(
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGetTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodUpdateTransaction(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId', 'commit', 'rollback'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                        'commit' => false,
                        'rollback' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTransaction(
            "<TRANSACTION_ID>",
            commit: false,
            rollback: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodDeleteTransaction(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/transactions/%3CTRANSACTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateOperations(): void
    {
        $data = [
            "\$id" => "259125845563242502",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "status" => "pending",
            "operations" => 5,
            "expiresAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/transactions/%3CTRANSACTION_ID%3E/operations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['transactionId', 'operations'], array_keys($params));
                    $expected = [
                        'transactionId' => "<TRANSACTION_ID>",
                        'operations' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createOperations(
            "<TRANSACTION_ID>",
            operations: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->get(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "description" => "Customer orders and invoices.",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/tablesdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'enabled', 'description', 'specification', 'replicas', 'syncMode'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'enabled' => false,
                        'description' => "<DESCRIPTION>",
                        'specification' => "serverless",
                        'replicas' => 1,
                        'syncMode' => "async",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->update(
            "<DATABASE_ID>",
            name: "<NAME>",
            enabled: false,
            description: "<DESCRIPTION>",
            specification: "serverless",
            replicas: 1,
            syncMode: "async"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateFailover(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "name" => "My Production Database",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "connectionString" => "postgresql://user:pass@db-myproject-mydb.fra.appwrite.center:5432/postgres?sslmode=require",
            "ssl" => true,
            "status" => "ready",
            "containerStatus" => "active",
            "lifecycleState" => "active",
            "idleTimeoutMinutes" => 15,
            "cpu" => 2000,
            "memory" => 4096,
            "storage" => 100,
            "storageStatus" => "resizing",
            "storageTargetGb" => 120,
            "storageClass" => "ssd",
            "storageMaxGb" => 100,
            "nodePool" => "db-pool-4vcpu-8gb",
            "replicas" => 2,
            "syncMode" => "async",
            "networkMaxConnections" => 500,
            "networkIdleTimeoutSeconds" => 900,
            "networkIPAllowlist" => [],
            "backupEnabled" => true,
            "pitr" => true,
            "pitrRetentionDays" => 14,
            "storageAutoscaling" => true,
            "storageAutoscalingThresholdPercent" => 85,
            "storageAutoscalingMaxGb" => 30,
            "maintenanceWindowDay" => "sun",
            "maintenanceWindowHourUtc" => 3,
            "metricsEnabled" => true,
            "sqlApiEnabled" => true,
            "sqlApiAllowedStatements" => [],
            "sqlApiMaxRows" => 10000,
            "sqlApiMaxBytes" => 10485760,
            "sqlApiTimeoutSeconds" => 30,
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/failovers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'targetReplicaId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'targetReplicaId' => "<TARGET_REPLICA_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createFailover(
            "<DATABASE_ID>",
            targetReplicaId: "<TARGET_REPLICA_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodListMigrations(): void
    {
        $data = [
            "total" => 5,
            "migrations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "projectId" => "5e5ea5c16897e",
                    "databaseId" => "5e5ea5c16897e",
                    "specification" => "s-2vcpu-4gb",
                    "phase" => "pending",
                    "attempt" => 0,
                    "lastError" => "[LASTERROR]",
                    "lagDocuments" => 0,
                    "changelogWatermark" => 0,
                    "verifiedAt" => "2020-10-15T06:38:00.000+00:00",
                    "cutoverAt" => "2020-10-15T06:38:00.000+00:00",
                    "soakUntil" => "2020-10-15T06:38:00.000+00:00",
                    "autoCutover" => true,
                    "cutoverRequested" => true,
                    "paused" => true
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/migrations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listMigrations(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseMigrationList::class, $response);
    }
    public function testMethodCreateMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "databaseId" => "5e5ea5c16897e",
            "specification" => "s-2vcpu-4gb",
            "phase" => "pending",
            "attempt" => 0,
            "lastError" => "[LASTERROR]",
            "lagDocuments" => 0,
            "changelogWatermark" => 0,
            "verifiedAt" => "2020-10-15T06:38:00.000+00:00",
            "cutoverAt" => "2020-10-15T06:38:00.000+00:00",
            "soakUntil" => "2020-10-15T06:38:00.000+00:00",
            "autoCutover" => true,
            "cutoverRequested" => true,
            "paused" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/migrations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'specification', 'autoCutover'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'specification' => "s-1vcpu-1gb",
                        'autoCutover' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createMigration(
            "<DATABASE_ID>",
            "s-1vcpu-1gb",
            autoCutover: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseMigration::class, $response);
    }
    public function testMethodGetMigration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "databaseId" => "5e5ea5c16897e",
            "specification" => "s-2vcpu-4gb",
            "phase" => "pending",
            "attempt" => 0,
            "lastError" => "[LASTERROR]",
            "lagDocuments" => 0,
            "changelogWatermark" => 0,
            "verifiedAt" => "2020-10-15T06:38:00.000+00:00",
            "cutoverAt" => "2020-10-15T06:38:00.000+00:00",
            "soakUntil" => "2020-10-15T06:38:00.000+00:00",
            "autoCutover" => true,
            "cutoverRequested" => true,
            "paused" => true
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/migrations/%3CMIGRATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'migrationId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->tablesDB->getMigration(
            "<DATABASE_ID>",
            "<MIGRATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseMigration::class, $response);
    }
    public function testMethodDeleteMigration(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/migrations/%3CMIGRATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'migrationId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->tablesDB->deleteMigration(
            "<DATABASE_ID>",
            "<MIGRATION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateCutover(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "5e5ea5c16897e",
            "databaseId" => "5e5ea5c16897e",
            "specification" => "s-2vcpu-4gb",
            "phase" => "pending",
            "attempt" => 0,
            "lastError" => "[LASTERROR]",
            "lagDocuments" => 0,
            "changelogWatermark" => 0,
            "verifiedAt" => "2020-10-15T06:38:00.000+00:00",
            "cutoverAt" => "2020-10-15T06:38:00.000+00:00",
            "soakUntil" => "2020-10-15T06:38:00.000+00:00",
            "autoCutover" => true,
            "cutoverRequested" => true,
            "paused" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/migrations/%3CMIGRATION_ID%3E/cutovers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'migrationId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->tablesDB->createCutover(
            "<DATABASE_ID>",
            "<MIGRATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseMigration::class, $response);
    }
    public function testMethodListOperations(): void
    {
        $data = [
            "total" => 5,
            "operations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "databaseId" => "5e5ea5c16897e",
                    "type" => "update",
                    "status" => "completed",
                    "attempts" => 1,
                    "errorCode" => "Interrupted",
                    "errorMessage" => "[ERRORMESSAGE]"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/operations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'status', 'limit', 'offset'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'status' => "queued",
                        'limit' => 1,
                        'offset' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listOperations(
            "<DATABASE_ID>",
            status: "queued",
            limit: 1,
            offset: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseOperationList::class, $response);
    }
    public function testMethodGetReplicas(): void
    {
        $data = [
            "replicas" => 2,
            "syncMode" => "async",
            "syncDegraded" => true,
            "syncAcknowledgements" => 1,
            "syncStandbyCount" => 2,
            "members" => [
                [
                    "\$id" => "1",
                    "role" => "replica",
                    "status" => "active"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/replicas',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getReplicas(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseReplicas::class, $response);
    }
    public function testMethodGetStatus(): void
    {
        $data = [
            "health" => "healthy",
            "ready" => true,
            "engine" => "postgresql",
            "version" => "17",
            "uptime" => 86400,
            "syncMode" => "async",
            "syncDegraded" => true,
            "syncAcknowledgements" => 1,
            "syncStandbyCount" => 2,
            "replicas" => [
                [
                    "index" => 0,
                    "role" => "primary",
                    "healthy" => true
                ]
            ],
            "volumes" => [
                [
                    "path" => "/var/lib/postgresql/data",
                    "usedPercent" => "45%",
                    "available" => "55GB",
                    "mounted" => true
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getStatus(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseStatus::class, $response);
    }
    public function testMethodListTables(): void
    {
        $data = [
            "total" => 5,
            "tables" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "databaseId" => "5e5ea5c16897e",
                    "name" => "My Table",
                    "description" => "Movies available in the catalog.",
                    "enabled" => true,
                    "rowSecurity" => true,
                    "columns" => [],
                    "indexes" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
                            "description" => "Speeds up lookups by email.",
                            "type" => "primary",
                            "status" => "available",
                            "error" => "string",
                            "columns" => [],
                            "lengths" => []
                        ]
                    ],
                    "bytesMax" => 65535,
                    "bytesUsed" => 1500
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->tablesDB->listTables(
            "<DATABASE_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\TableList::class, $response);
    }
    public function testMethodCreateTable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'name', 'permissions', 'rowSecurity', 'enabled', 'columns', 'indexes', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'rowSecurity' => false,
                        'enabled' => false,
                        'columns' => [],
                        'indexes' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<NAME>",
            permissions: [],
            rowSecurity: false,
            enabled: false,
            columns: [],
            indexes: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }
    public function testMethodGetTable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }
    public function testMethodUpdateTable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "databaseId" => "5e5ea5c16897e",
            "name" => "My Table",
            "description" => "Movies available in the catalog.",
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => [],
                    "lengths" => []
                ]
            ],
            "bytesMax" => 65535,
            "bytesUsed" => 1500
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'name', 'permissions', 'rowSecurity', 'enabled', 'purge', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'name' => "<NAME>",
                        'permissions' => [],
                        'rowSecurity' => false,
                        'enabled' => false,
                        'purge' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            name: "<NAME>",
            permissions: [],
            rowSecurity: false,
            enabled: false,
            purge: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }
    public function testMethodDeleteTable(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListColumns(): void
    {
        $data = [
            "total" => 5,
            "columns" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'queries' => [],
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

        $response = $this->tablesDB->listColumns(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnList::class, $response);
    }
    public function testMethodCreateBigIntColumn(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/bigint',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1,
                        'max' => 1,
                        'default' => 1,
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            min: 1,
            max: 1,
            xdefault: 1,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }
    public function testMethodUpdateBigIntColumn(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/bigint/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1,
                        'min' => 1,
                        'max' => 1,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            1,
            min: 1,
            max: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }
    public function testMethodCreateBooleanColumn(): void
    {
        $data = [
            "key" => "isEnabled",
            "description" => "Name shown on the public profile.",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/boolean',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => false,
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: false,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }
    public function testMethodUpdateBooleanColumn(): void
    {
        $data = [
            "key" => "isEnabled",
            "description" => "Name shown on the public profile.",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/boolean/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => false,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            false,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }
    public function testMethodCreateDatetimeColumn(): void
    {
        $data = [
            "key" => "birthDay",
            "description" => "Name shown on the public profile.",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/datetime',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "2020-10-15T06:38:00.000+00:00",
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "2020-10-15T06:38:00.000+00:00",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }
    public function testMethodUpdateDatetimeColumn(): void
    {
        $data = [
            "key" => "birthDay",
            "description" => "Name shown on the public profile.",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/datetime/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "2020-10-15T06:38:00.000+00:00",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "2020-10-15T06:38:00.000+00:00",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }
    public function testMethodCreateEmailColumn(): void
    {
        $data = [
            "key" => "userEmail",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "email@example.com",
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "email@example.com",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }
    public function testMethodUpdateEmailColumn(): void
    {
        $data = [
            "key" => "userEmail",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/email/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "email@example.com",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "email@example.com",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }
    public function testMethodCreateEnumColumn(): void
    {
        $data = [
            "key" => "status",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => [],
            "format" => "enum"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/enum',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'elements', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'elements' => [],
                        'required' => false,
                        'default' => "active",
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            [],
            false,
            xdefault: "active",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }
    public function testMethodUpdateEnumColumn(): void
    {
        $data = [
            "key" => "status",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "elements" => [],
            "format" => "enum"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/enum/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'elements', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'elements' => [],
                        'required' => false,
                        'default' => "active",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            [],
            false,
            "active",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }
    public function testMethodCreateFloatColumn(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "description" => "Name shown on the public profile.",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/float',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1.0,
                        'max' => 1.0,
                        'default' => 1.0,
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            min: 1.0,
            max: 1.0,
            xdefault: 1.0,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }
    public function testMethodUpdateFloatColumn(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "description" => "Name shown on the public profile.",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/float/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1.0,
                        'min' => 1.0,
                        'max' => 1.0,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            1.0,
            min: 1.0,
            max: 1.0,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }
    public function testMethodCreateIntegerColumn(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/integer',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'min', 'max', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'min' => 1,
                        'max' => 1,
                        'default' => 1,
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            min: 1,
            max: 1,
            xdefault: 1,
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }
    public function testMethodUpdateIntegerColumn(): void
    {
        $data = [
            "key" => "count",
            "description" => "Name shown on the public profile.",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/integer/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'min', 'max', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => 1,
                        'min' => 1,
                        'max' => 1,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            1,
            min: 1,
            max: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }
    public function testMethodCreateIpColumn(): void
    {
        $data = [
            "key" => "ipAddress",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/ip',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "192.0.2.0",
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "192.0.2.0",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }
    public function testMethodUpdateIpColumn(): void
    {
        $data = [
            "key" => "ipAddress",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/ip/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "192.0.2.0",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "192.0.2.0",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }
    public function testMethodCreateLineColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/line',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }
    public function testMethodUpdateLineColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/line/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }
    public function testMethodCreateLongtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/longtext',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }
    public function testMethodUpdateLongtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/longtext/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }
    public function testMethodCreateMediumtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/mediumtext',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }
    public function testMethodUpdateMediumtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/mediumtext/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }
    public function testMethodCreatePointColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/point',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createPointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }
    public function testMethodUpdatePointColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/point/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updatePointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }
    public function testMethodCreatePolygonColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/polygon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createPolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }
    public function testMethodUpdatePolygonColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/polygon/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => [],
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updatePolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: [],
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }
    public function testMethodCreateRelationshipColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedTable" => "table",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/relationship',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'relatedTableId', 'type', 'twoWay', 'key', 'twoWayKey', 'onDelete', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'relatedTableId' => "<RELATED_TABLE_ID>",
                        'type' => RelationshipType::ONETOONE(),
                        'twoWay' => false,
                        'key' => "<KEY>",
                        'twoWayKey' => "<TWO_WAY_KEY>",
                        'onDelete' => RelationMutate::CASCADE(),
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<RELATED_TABLE_ID>",
            RelationshipType::ONETOONE(),
            twoWay: false,
            key: "<KEY>",
            twoWayKey: "<TWO_WAY_KEY>",
            onDelete: RelationMutate::CASCADE(),
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
    }
    public function testMethodUpdateRelationshipColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "relatedTable" => "table",
            "relationType" => "oneToOne|oneToMany|manyToOne|manyToMany",
            "twoWay" => true,
            "twoWayKey" => "string",
            "onDelete" => "restrict|cascade|setNull",
            "side" => "parent|child"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/relationship/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'onDelete', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'onDelete' => RelationMutate::CASCADE(),
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            onDelete: RelationMutate::CASCADE(),
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
    }
    public function testMethodCreateStringColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/string',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'size', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'size' => 1,
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            1,
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }
    public function testMethodUpdateStringColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/string/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'size', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'size' => 1,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "Hello World",
            size: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }
    public function testMethodCreateTextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/text',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }
    public function testMethodUpdateTextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/text/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "Hello World",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }
    public function testMethodCreateUrlColumn(): void
    {
        $data = [
            "key" => "githubUrl",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/url',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'array', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "https://example.com",
                        'array' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            xdefault: "https://example.com",
            xarray: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }
    public function testMethodUpdateUrlColumn(): void
    {
        $data = [
            "key" => "githubUrl",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/url/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "https://example.com",
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "https://example.com",
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }
    public function testMethodCreateVarcharColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/varchar',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'size', 'required', 'default', 'array', 'encrypt', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'size' => 1,
                        'required' => false,
                        'default' => "Hello World",
                        'array' => false,
                        'encrypt' => false,
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            1,
            false,
            xdefault: "Hello World",
            xarray: false,
            encrypt: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }
    public function testMethodUpdateVarcharColumn(): void
    {
        $data = [
            "key" => "fullName",
            "description" => "Name shown on the public profile.",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/varchar/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'required', 'default', 'size', 'newKey', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'required' => false,
                        'default' => "Hello World",
                        'size' => 1,
                        'newKey' => "<NEW_KEY>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            false,
            "Hello World",
            size: 1,
            newKey: "<NEW_KEY>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }
    public function testMethodGetColumn(): void
    {
        $data = array_replace(
            [
                "key" => "fullName",
                "description" => "Name shown on the public profile.",
                "type" => "string",
                "status" => "available",
                "error" => "string",
                "required" => true,
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "size" => 128
            ],
            [
                "type" => "string"
            ]
        );

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }
    public function testMethodDeleteColumn(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/columns/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListIndexes(): void
    {
        $data = [
            "total" => 5,
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
                    "description" => "Speeds up lookups by email.",
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => [],
                    "lengths" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/indexes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'queries' => [],
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

        $response = $this->tablesDB->listIndexes(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndexList::class, $response);
    }
    public function testMethodCreateIndex(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "description" => "Speeds up lookups by email.",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => [],
            "lengths" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/indexes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key', 'type', 'columns', 'orders', 'lengths', 'description'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                        'type' => TablesDBIndexType::KEY(),
                        'columns' => [],
                        'orders' => [OrderBy::ASC()],
                        'lengths' => [],
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            TablesDBIndexType::KEY(),
            [],
            orders: [OrderBy::ASC()],
            lengths: [],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndex::class, $response);
    }
    public function testMethodGetIndex(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "index1",
            "description" => "Speeds up lookups by email.",
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => [],
            "lengths" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/indexes/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIndex::class, $response);
    }
    public function testMethodDeleteIndex(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/indexes/%3CKEY%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'key'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'key' => "<KEY>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListRows(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'queries', 'transactionId', 'total', 'ttl'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                        'total' => false,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>",
            total: false,
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodCreateRow(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodCreateRows(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rows', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rows' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodUpsertRows(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rows', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rows' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->upsertRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodUpdateRows(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'data', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'data' => [],
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            data: [],
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodDeleteRows(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodCreateQuery(): void
    {
        $data = [
            "total" => 5,
            "rows" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$tableId" => "5e5ea5c15117e",
                    "\$databaseId" => "5e5ea5c15117e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/query',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'queries', 'transactionId', 'total', 'ttl'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                        'total' => false,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createQuery(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>",
            total: false,
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\RowList::class, $response);
    }
    public function testMethodGetRow(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'queries', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'queries' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            queries: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodUpsertRow(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->upsertRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            data: [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodUpdateRow(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'data', 'permissions', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'data' => [],
                        'permissions' => [],
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            data: [],
            permissions: [],
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodDeleteRow(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodDecrementRowColumn(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E/%3CCOLUMN%3E/decrement',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'column', 'value', 'min', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'column' => "<COLUMN>",
                        'value' => 1.0,
                        'min' => 1.0,
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->decrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            "<COLUMN>",
            value: 1.0,
            min: 1.0,
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodIncrementRowColumn(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$tableId" => "5e5ea5c15117e",
            "\$databaseId" => "5e5ea5c15117e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tablesdb/%3CDATABASE_ID%3E/tables/%3CTABLE_ID%3E/rows/%3CROW_ID%3E/%3CCOLUMN%3E/increment',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'tableId', 'rowId', 'column', 'value', 'max', 'transactionId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'tableId' => "<TABLE_ID>",
                        'rowId' => "<ROW_ID>",
                        'column' => "<COLUMN>",
                        'value' => 1.0,
                        'max' => 1.0,
                        'transactionId' => "<TRANSACTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->incrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            "<COLUMN>",
            value: 1.0,
            max: 1.0,
            transactionId: "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
}
