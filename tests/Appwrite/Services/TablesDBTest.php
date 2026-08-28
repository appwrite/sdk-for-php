<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\RelationshipType;
use Appwrite\Enums\TablesDBIndexType;

final class TablesDBTest extends TestCase
{
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
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "enabled" => true,
                    "type" => "legacy"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->list();

        $this->assertInstanceOf(\Appwrite\Models\DatabaseList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->create(
            "<DATABASE_ID>",
            "<NAME>"
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
                    "cpu" => 2000,
                    "memory" => 2048,
                    "maxConnections" => 200,
                    "includedStorage" => 25,
                    "includedBandwidth" => 200,
                    "enabled" => true
                ]
            ],
            "total" => 9,
            "pricing" => [
                "storageOverageRate" => 0.125,
                "bandwidthOverageRate" => 0.08,
                "replicaRate" => 1,
                "pitrRate" => 0.2
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listTransactions();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTransaction();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTransaction(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodDeleteTransaction(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createOperations(
            "<TRANSACTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Transaction::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "My Database",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "enabled" => true,
            "type" => "legacy"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->update(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Database::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
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
            "storageAutoscalingMaxGb" => 500,
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createFailover(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createMigration(
            "<DATABASE_ID>",
            "s-1vcpu-1gb"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
    public function testMethodCutoverMigration(): void
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->cutoverMigration(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listOperations(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "connections" => [
                "current" => 12,
                "max" => 100
            ],
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
                    "enabled" => true,
                    "rowSecurity" => true,
                    "columns" => [],
                    "indexes" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listTables(
            "<DATABASE_ID>"
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
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTable(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<NAME>"
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
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "enabled" => true,
            "rowSecurity" => true,
            "columns" => [],
            "indexes" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "index1",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTable(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Table::class, $response);
    }
    public function testMethodDeleteTable(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listColumns(
            "<DATABASE_ID>",
            "<TABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnList::class, $response);
    }
    public function testMethodCreateBigIntColumn(): void
    {
        $data = [
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }
    public function testMethodUpdateBigIntColumn(): void
    {
        $data = [
            "key" => "count",
            "type" => "bigint",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateBigIntColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBigint::class, $response);
    }
    public function testMethodCreateBooleanColumn(): void
    {
        $data = [
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }
    public function testMethodUpdateBooleanColumn(): void
    {
        $data = [
            "key" => "isEnabled",
            "type" => "boolean",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateBooleanColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnBoolean::class, $response);
    }
    public function testMethodCreateDatetimeColumn(): void
    {
        $data = [
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }
    public function testMethodUpdateDatetimeColumn(): void
    {
        $data = [
            "key" => "birthDay",
            "type" => "datetime",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateDatetimeColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnDatetime::class, $response);
    }
    public function testMethodCreateEmailColumn(): void
    {
        $data = [
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }
    public function testMethodUpdateEmailColumn(): void
    {
        $data = [
            "key" => "userEmail",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "email"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateEmailColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "email@example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEmail::class, $response);
    }
    public function testMethodCreateEnumColumn(): void
    {
        $data = [
            "key" => "status",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            [],
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }
    public function testMethodUpdateEnumColumn(): void
    {
        $data = [
            "key" => "status",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateEnumColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            [],
            true,
            "active"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnEnum::class, $response);
    }
    public function testMethodCreateFloatColumn(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }
    public function testMethodUpdateFloatColumn(): void
    {
        $data = [
            "key" => "percentageCompleted",
            "type" => "double",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateFloatColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            1.0
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnFloat::class, $response);
    }
    public function testMethodCreateIntegerColumn(): void
    {
        $data = [
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }
    public function testMethodUpdateIntegerColumn(): void
    {
        $data = [
            "key" => "count",
            "type" => "integer",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateIntegerColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnInteger::class, $response);
    }
    public function testMethodCreateIpColumn(): void
    {
        $data = [
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }
    public function testMethodUpdateIpColumn(): void
    {
        $data = [
            "key" => "ipAddress",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "ip"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateIpColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "192.0.2.0"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnIp::class, $response);
    }
    public function testMethodCreateLineColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }
    public function testMethodUpdateLineColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateLineColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLine::class, $response);
    }
    public function testMethodCreateLongtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }
    public function testMethodUpdateLongtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateLongtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnLongtext::class, $response);
    }
    public function testMethodCreateMediumtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }
    public function testMethodUpdateMediumtextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateMediumtextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnMediumtext::class, $response);
    }
    public function testMethodCreatePointColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createPointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }
    public function testMethodUpdatePointColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updatePointColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPoint::class, $response);
    }
    public function testMethodCreatePolygonColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createPolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }
    public function testMethodUpdatePolygonColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updatePolygonColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnPolygon::class, $response);
    }
    public function testMethodCreateRelationshipColumn(): void
    {
        $data = [
            "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<RELATED_TABLE_ID>",
            RelationshipType::ONETOONE()
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
    }
    public function testMethodCreateStringColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }
    public function testMethodUpdateStringColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateStringColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnString::class, $response);
    }
    public function testMethodCreateTextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }
    public function testMethodUpdateTextColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateTextColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnText::class, $response);
    }
    public function testMethodCreateUrlColumn(): void
    {
        $data = [
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }
    public function testMethodUpdateUrlColumn(): void
    {
        $data = [
            "key" => "githubUrl",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "format" => "url"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateUrlColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnUrl::class, $response);
    }
    public function testMethodCreateVarcharColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            1,
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }
    public function testMethodUpdateVarcharColumn(): void
    {
        $data = [
            "key" => "fullName",
            "type" => "string",
            "status" => "available",
            "error" => "string",
            "required" => true,
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "size" => 128
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateVarcharColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            true,
            "Hello World"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnVarchar::class, $response);
    }
    public function testMethodGetColumn(): void
    {
        $data = array_replace(
            [
                "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
    public function testMethodUpdateRelationshipColumn(): void
    {
        $data = [
            "key" => "fullName",
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRelationshipColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ColumnRelationship::class, $response);
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
                    "type" => "primary",
                    "status" => "available",
                    "error" => "string",
                    "columns" => [],
                    "lengths" => []
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listIndexes(
            "<DATABASE_ID>",
            "<TABLE_ID>"
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
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => [],
            "lengths" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createIndex(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<KEY>",
            TablesDBIndexType::KEY(),
            []
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
            "type" => "primary",
            "status" => "available",
            "error" => "string",
            "columns" => [],
            "lengths" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->listRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->createRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->upsertRows(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteRows(
            "<DATABASE_ID>",
            "<TABLE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->getRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->upsertRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->updateRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
    public function testMethodDeleteRow(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->deleteRow(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->decrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            "<COLUMN>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tablesDB->incrementRowColumn(
            "<DATABASE_ID>",
            "<TABLE_ID>",
            "<ROW_ID>",
            "<COLUMN>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Row::class, $response);
    }
}
