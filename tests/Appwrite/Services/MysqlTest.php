<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class MysqlTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Mysql $mysql;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->mysql = new Mysql($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "databases" => [
                [
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
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql',
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

        $response = $this->mysql->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseList::class, $response);
    }
    public function testMethodCreate(): void
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
                '/mysql',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'version', 'specification', 'replicas', 'syncMode', 'networkIdleTimeoutSeconds', 'networkIPAllowlist', 'idleTimeoutMinutes', 'pitr', 'pitrRetentionDays', 'storageAutoscaling', 'storageAutoscalingThresholdPercent', 'storageAutoscalingMaxGb'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'version' => "17",
                        'specification' => "<SPECIFICATION>",
                        'replicas' => 1,
                        'syncMode' => "async",
                        'networkIdleTimeoutSeconds' => 1,
                        'networkIPAllowlist' => [],
                        'idleTimeoutMinutes' => 1,
                        'pitr' => false,
                        'pitrRetentionDays' => 1,
                        'storageAutoscaling' => false,
                        'storageAutoscalingThresholdPercent' => 1,
                        'storageAutoscalingMaxGb' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->create(
            "<DATABASE_ID>",
            "<NAME>",
            version: "17",
            specification: "<SPECIFICATION>",
            replicas: 1,
            syncMode: "async",
            networkIdleTimeoutSeconds: 1,
            networkIPAllowlist: [],
            idleTimeoutMinutes: 1,
            pitr: false,
            pitrRetentionDays: 1,
            storageAutoscaling: false,
            storageAutoscalingThresholdPercent: 1,
            storageAutoscalingMaxGb: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
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
                '/mysql/specifications',
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

        $response = $this->mysql->listSpecifications();

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseSpecificationList::class, $response);
    }
    public function testMethodGet(): void
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
                'GET',
                '/mysql/%3CDATABASE_ID%3E',
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

        $response = $this->mysql->get(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodUpdate(): void
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
                'PATCH',
                '/mysql/%3CDATABASE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'name', 'status', 'specification', 'replicas', 'syncMode', 'networkIdleTimeoutSeconds', 'networkIPAllowlist', 'idleTimeoutMinutes', 'pitr', 'pitrRetentionDays', 'storageAutoscaling', 'storageAutoscalingThresholdPercent', 'storageAutoscalingMaxGb', 'metricsTraceSampleRate', 'metricsSlowQueryLogThresholdMs', 'sqlApiEnabled', 'sqlApiAllowedStatements', 'sqlApiMaxRows', 'sqlApiMaxBytes', 'sqlApiTimeoutSeconds'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'name' => "<NAME>",
                        'status' => "ready",
                        'specification' => "<SPECIFICATION>",
                        'replicas' => 1,
                        'syncMode' => "async",
                        'networkIdleTimeoutSeconds' => 1,
                        'networkIPAllowlist' => [],
                        'idleTimeoutMinutes' => 1,
                        'pitr' => false,
                        'pitrRetentionDays' => 1,
                        'storageAutoscaling' => false,
                        'storageAutoscalingThresholdPercent' => 1,
                        'storageAutoscalingMaxGb' => 1,
                        'metricsTraceSampleRate' => 1.0,
                        'metricsSlowQueryLogThresholdMs' => 1,
                        'sqlApiEnabled' => false,
                        'sqlApiAllowedStatements' => [],
                        'sqlApiMaxRows' => 1,
                        'sqlApiMaxBytes' => 1,
                        'sqlApiTimeoutSeconds' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->update(
            "<DATABASE_ID>",
            name: "<NAME>",
            status: "ready",
            specification: "<SPECIFICATION>",
            replicas: 1,
            syncMode: "async",
            networkIdleTimeoutSeconds: 1,
            networkIPAllowlist: [],
            idleTimeoutMinutes: 1,
            pitr: false,
            pitrRetentionDays: 1,
            storageAutoscaling: false,
            storageAutoscalingThresholdPercent: 1,
            storageAutoscalingMaxGb: 1,
            metricsTraceSampleRate: 1.0,
            metricsSlowQueryLogThresholdMs: 1,
            sqlApiEnabled: false,
            sqlApiAllowedStatements: [],
            sqlApiMaxRows: 1,
            sqlApiMaxBytes: 1,
            sqlApiTimeoutSeconds: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/mysql/%3CDATABASE_ID%3E',
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

        $response = $this->mysql->delete(
            "<DATABASE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListBackups(): void
    {
        $data = [
            "total" => 5,
            "backups" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "databaseId" => "5e5ea5c16897e",
                    "projectId" => "5e5ea5c16897e",
                    "policyId" => "5e5ea5c16897e",
                    "trigger" => "schedule",
                    "type" => "full",
                    "requestedType" => "incremental",
                    "fallbackReason" => "PostgreSQL incremental backups are not offered because they cannot be restored: archived WAL is physical and cannot replay onto a logically-restored base. A full backup was taken instead; use a point-in-time restore (targetTime) to recover to a moment between fulls.",
                    "status" => "completed",
                    "sizeBytes" => 1073741824,
                    "error" => "[ERROR]"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/backups',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->mysql->listBackups(
            "<DATABASE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBackupList::class, $response);
    }
    public function testMethodCreateBackup(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "policyId" => "5e5ea5c16897e",
            "trigger" => "schedule",
            "type" => "full",
            "requestedType" => "incremental",
            "fallbackReason" => "PostgreSQL incremental backups are not offered because they cannot be restored: archived WAL is physical and cannot replay onto a logically-restored base. A full backup was taken instead; use a point-in-time restore (targetTime) to recover to a moment between fulls.",
            "status" => "completed",
            "sizeBytes" => 1073741824,
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/mysql/%3CDATABASE_ID%3E/backups',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'type'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'type' => "full",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createBackup(
            "<DATABASE_ID>",
            type: "full"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBackup::class, $response);
    }
    public function testMethodListBackupPolicies(): void
    {
        $data = [
            "total" => 5,
            "policies" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "name" => "Hourly backups",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "services" => [],
                    "resources" => [],
                    "retention" => 7,
                    "schedule" => "0 * * * *",
                    "type" => "full",
                    "enabled" => true
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/backups/policies',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
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

        $response = $this->mysql->listBackupPolicies(
            "<DATABASE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicyList::class, $response);
    }
    public function testMethodCreateBackupPolicy(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => [],
            "resources" => [],
            "retention" => 7,
            "schedule" => "0 * * * *",
            "type" => "full",
            "enabled" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/mysql/%3CDATABASE_ID%3E/backups/policies',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'policyId', 'name', 'schedule', 'retention', 'type', 'enabled'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'policyId' => "<POLICY_ID>",
                        'name' => "<NAME>",
                        'schedule' => "schedule",
                        'retention' => 1,
                        'type' => "full",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>",
            "<NAME>",
            "schedule",
            1,
            type: "full",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }
    public function testMethodGetBackupPolicy(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => [],
            "resources" => [],
            "retention" => 7,
            "schedule" => "0 * * * *",
            "type" => "full",
            "enabled" => true
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/backups/policies/%3CPOLICY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'policyId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'policyId' => "<POLICY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->getBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }
    public function testMethodUpdateBackupPolicy(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => [],
            "resources" => [],
            "retention" => 7,
            "schedule" => "0 * * * *",
            "type" => "full",
            "enabled" => true
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/mysql/%3CDATABASE_ID%3E/backups/policies/%3CPOLICY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'policyId', 'name', 'schedule', 'retention', 'enabled'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'policyId' => "<POLICY_ID>",
                        'name' => "<NAME>",
                        'schedule' => "schedule",
                        'retention' => 1,
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->updateBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>",
            name: "<NAME>",
            schedule: "schedule",
            retention: 1,
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }
    public function testMethodDeleteBackupPolicy(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/mysql/%3CDATABASE_ID%3E/backups/policies/%3CPOLICY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'policyId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'policyId' => "<POLICY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->deleteBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateBackupStorage(): void
    {
        $data = [
            "provider" => "s3",
            "bucket" => "my-backup-bucket",
            "region" => "us-east-1",
            "prefix" => "backups/",
            "endpoint" => "https://minio.example.com"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/mysql/%3CDATABASE_ID%3E/backups/storage',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'provider', 'bucket', 'accessKey', 'secretKey', 'region', 'prefix', 'endpoint'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'provider' => "s3",
                        'bucket' => "<BUCKET>",
                        'accessKey' => "<ACCESS_KEY>",
                        'secretKey' => "<SECRET_KEY>",
                        'region' => "<REGION>",
                        'prefix' => "<PREFIX>",
                        'endpoint' => "https://example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->updateBackupStorage(
            "<DATABASE_ID>",
            "s3",
            "<BUCKET>",
            "<ACCESS_KEY>",
            "<SECRET_KEY>",
            region: "<REGION>",
            prefix: "<PREFIX>",
            endpoint: "https://example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBackupStorage::class, $response);
    }
    public function testMethodGetBackup(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "policyId" => "5e5ea5c16897e",
            "trigger" => "schedule",
            "type" => "full",
            "requestedType" => "incremental",
            "fallbackReason" => "PostgreSQL incremental backups are not offered because they cannot be restored: archived WAL is physical and cannot replay onto a logically-restored base. A full backup was taken instead; use a point-in-time restore (targetTime) to recover to a moment between fulls.",
            "status" => "completed",
            "sizeBytes" => 1073741824,
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/backups/%3CBACKUP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'backupId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'backupId' => "<BACKUP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->getBackup(
            "<DATABASE_ID>",
            "<BACKUP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBackup::class, $response);
    }
    public function testMethodDeleteBackup(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/mysql/%3CDATABASE_ID%3E/backups/%3CBACKUP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'backupId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'backupId' => "<BACKUP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->deleteBackup(
            "<DATABASE_ID>",
            "<BACKUP_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListBranches(): void
    {
        $data = [
            "total" => 2,
            "branches" => [
                [
                    "branchId" => "a1b2c3d4",
                    "branchName" => "branch-a1b2c3d4",
                    "namespace" => "db-myproject-mydb-branch-a1b2c3d4",
                    "expiresAt" => 1711411200,
                    "host" => "db-myproject-mydb-a1b2c3d4.fra.appwrite.center",
                    "database" => "db-myproject-mydb-a1b2c3d4",
                    "username" => "appwrite",
                    "password" => "********",
                    "ssl" => true,
                    "engine" => "postgresql",
                    "connectionString" => "postgresql://appwrite:****@db-myproject-mydb-a1b2c3d4.fra.appwrite.center:5432/db-myproject-mydb-a1b2c3d4?sslmode=require"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/branches',
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

        $response = $this->mysql->listBranches(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBranchList::class, $response);
    }
    public function testMethodCreateBranch(): void
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
                '/mysql/%3CDATABASE_ID%3E/branches',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'branchId', 'ttl'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'branchId' => "<BRANCH_ID>",
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

        $response = $this->mysql->createBranch(
            "<DATABASE_ID>",
            branchId: "<BRANCH_ID>",
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodDeleteBranch(): void
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
                'DELETE',
                '/mysql/%3CDATABASE_ID%3E/branches/%3CBRANCH_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'branchId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'branchId' => "<BRANCH_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->deleteBranch(
            "<DATABASE_ID>",
            "<BRANCH_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodUpdateCredentials(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "type" => "update",
            "status" => "completed",
            "attempts" => 1,
            "errorCode" => "Interrupted",
            "errorMessage" => "[ERRORMESSAGE]"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/mysql/%3CDATABASE_ID%3E/credentials',
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

        $response = $this->mysql->updateCredentials(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseOperation::class, $response);
    }
    public function testMethodCreateExecution(): void
    {
        $data = [
            "rows" => [],
            "rowCount" => 1,
            "columns" => [
                [
                    "name" => "id",
                    "type" => "int4"
                ]
            ],
            "durationMs" => 12,
            "truncated" => true,
            "bytes" => 1024
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/mysql/%3CDATABASE_ID%3E/executions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'sql', 'bindings', 'timeoutSeconds'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'sql' => "<SQL>",
                        'bindings' => [],
                        'timeoutSeconds' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createExecution(
            "<DATABASE_ID>",
            "<SQL>",
            bindings: [],
            timeoutSeconds: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseExecution::class, $response);
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
                '/mysql/%3CDATABASE_ID%3E/failovers',
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

        $response = $this->mysql->createFailover(
            "<DATABASE_ID>",
            targetReplicaId: "<TARGET_REPLICA_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodUpdateMaintenance(): void
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
                'PATCH',
                '/mysql/%3CDATABASE_ID%3E/maintenance',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'day', 'hourUtc'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'day' => "sun",
                        'hourUtc' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->updateMaintenance(
            "<DATABASE_ID>",
            "sun",
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodCreateMigration(): void
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
                '/mysql/%3CDATABASE_ID%3E/migrations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'targetType', 'specification'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'targetType' => "shared",
                        'specification' => "<SPECIFICATION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createMigration(
            "<DATABASE_ID>",
            "shared",
            specification: "<SPECIFICATION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
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
                '/mysql/%3CDATABASE_ID%3E/operations',
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

        $response = $this->mysql->listOperations(
            "<DATABASE_ID>",
            status: "queued",
            limit: 1,
            offset: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseOperationList::class, $response);
    }
    public function testMethodGetPitr(): void
    {
        $data = [
            "earliest" => "2020-10-15T06:38:00.000+00:00",
            "latest" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/pitr',
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

        $response = $this->mysql->getPitr(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabasePITRWindows::class, $response);
    }
    public function testMethodGetPooler(): void
    {
        $data = [
            "enabled" => true,
            "mode" => "transaction",
            "maxConnections" => 200,
            "defaultPoolSize" => 25,
            "port" => 6432,
            "readWriteSplitting" => true,
            "poolerCpuRequest" => "100m",
            "poolerCpuLimit" => "200m",
            "poolerMemoryRequest" => "64Mi",
            "poolerMemoryLimit" => "128Mi"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/pooler',
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

        $response = $this->mysql->getPooler(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabasePooler::class, $response);
    }
    public function testMethodUpdatePooler(): void
    {
        $data = [
            "enabled" => true,
            "mode" => "transaction",
            "maxConnections" => 200,
            "defaultPoolSize" => 25,
            "port" => 6432,
            "readWriteSplitting" => true,
            "poolerCpuRequest" => "100m",
            "poolerCpuLimit" => "200m",
            "poolerMemoryRequest" => "64Mi",
            "poolerMemoryLimit" => "128Mi"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/mysql/%3CDATABASE_ID%3E/pooler',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'mode', 'maxConnections', 'defaultPoolSize', 'readWriteSplitting', 'poolerCpuRequest', 'poolerCpuLimit', 'poolerMemoryRequest', 'poolerMemoryLimit'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'mode' => "transaction",
                        'maxConnections' => 1,
                        'defaultPoolSize' => 1,
                        'readWriteSplitting' => false,
                        'poolerCpuRequest' => "<POOLER_CPU_REQUEST>",
                        'poolerCpuLimit' => "<POOLER_CPU_LIMIT>",
                        'poolerMemoryRequest' => "<POOLER_MEMORY_REQUEST>",
                        'poolerMemoryLimit' => "<POOLER_MEMORY_LIMIT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->updatePooler(
            "<DATABASE_ID>",
            mode: "transaction",
            maxConnections: 1,
            defaultPoolSize: 1,
            readWriteSplitting: false,
            poolerCpuRequest: "<POOLER_CPU_REQUEST>",
            poolerCpuLimit: "<POOLER_CPU_LIMIT>",
            poolerMemoryRequest: "<POOLER_MEMORY_REQUEST>",
            poolerMemoryLimit: "<POOLER_MEMORY_LIMIT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabasePooler::class, $response);
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
                '/mysql/%3CDATABASE_ID%3E/replicas',
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

        $response = $this->mysql->getReplicas(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseReplicas::class, $response);
    }
    public function testMethodListRestorations(): void
    {
        $data = [
            "total" => 5,
            "restorations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "databaseId" => "5e5ea5c16897e",
                    "projectId" => "5e5ea5c16897e",
                    "type" => "backup",
                    "restoreMode" => "clone",
                    "status" => "completed",
                    "error" => "[ERROR]"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/restorations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'status', 'type', 'limit', 'offset'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'status' => "pending",
                        'type' => "backup",
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

        $response = $this->mysql->listRestorations(
            "<DATABASE_ID>",
            status: "pending",
            type: "backup",
            limit: 1,
            offset: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestorationList::class, $response);
    }
    public function testMethodCreateRestoration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "type" => "backup",
            "restoreMode" => "clone",
            "status" => "completed",
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/mysql/%3CDATABASE_ID%3E/restorations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'type', 'backupId', 'targetDatabaseId', 'targetTime', 'restoreMode', 'targetName', 'autoPromote'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'type' => "backup",
                        'backupId' => "<BACKUP_ID>",
                        'targetDatabaseId' => "<TARGET_DATABASE_ID>",
                        'targetTime' => "2020-10-15T06:38:00.000+00:00",
                        'restoreMode' => "in_place",
                        'targetName' => "<TARGET_NAME>",
                        'autoPromote' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createRestoration(
            "<DATABASE_ID>",
            type: "backup",
            backupId: "<BACKUP_ID>",
            targetDatabaseId: "<TARGET_DATABASE_ID>",
            targetTime: "2020-10-15T06:38:00.000+00:00",
            restoreMode: "in_place",
            targetName: "<TARGET_NAME>",
            autoPromote: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestoration::class, $response);
    }
    public function testMethodGetRestoration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "type" => "backup",
            "restoreMode" => "clone",
            "status" => "completed",
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/mysql/%3CDATABASE_ID%3E/restorations/%3CRESTORATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'restorationId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'restorationId' => "<RESTORATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->getRestoration(
            "<DATABASE_ID>",
            "<RESTORATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestoration::class, $response);
    }
    public function testMethodPromoteRestoration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "type" => "backup",
            "restoreMode" => "clone",
            "status" => "completed",
            "error" => "[ERROR]"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/mysql/%3CDATABASE_ID%3E/restorations/%3CRESTORATION_ID%3E/promotions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'restorationId'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'restorationId' => "<RESTORATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->promoteRestoration(
            "<DATABASE_ID>",
            "<RESTORATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestoration::class, $response);
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
                '/mysql/%3CDATABASE_ID%3E/status',
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

        $response = $this->mysql->getStatus(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DatabaseStatus::class, $response);
    }
    public function testMethodCreateUpgrade(): void
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
                '/mysql/%3CDATABASE_ID%3E/upgrades',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['databaseId', 'targetVersion'], array_keys($params));
                    $expected = [
                        'databaseId' => "<DATABASE_ID>",
                        'targetVersion' => "<TARGET_VERSION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->mysql->createUpgrade(
            "<DATABASE_ID>",
            "<TARGET_VERSION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
}
