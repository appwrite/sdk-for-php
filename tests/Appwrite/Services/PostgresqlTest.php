<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class PostgresqlTest extends TestCase
{
    private Client&MockInterface $client;
    private Postgresql $postgresql;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->postgresql = new Postgresql($this->client);
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
                    "api" => "postgresql",
                    "engine" => "postgresql",
                    "version" => "16",
                    "specification" => "s-2vcpu-2gb",
                    "backend" => "edge",
                    "hostname" => "db-myproject-mydb.fra.appwrite.center",
                    "connectionPort" => 5432,
                    "connectionUser" => "appwrite_user",
                    "connectionPassword" => "••••••••",
                    "credentialGeneration" => 1,
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
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->list();

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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->create(
            "<DATABASE_ID>",
            "<NAME>"
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

        $response = $this->postgresql->listSpecifications();

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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->get(
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->update(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
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

        $response = $this->postgresql->delete(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listBackups(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->createBackup(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listBackupPolicies(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->createBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>",
            "<NAME>",
            "",
            1
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getBackupPolicy(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->updateBackupPolicy(
            "<DATABASE_ID>",
            "<POLICY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }
    public function testMethodDeleteBackupPolicy(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->deleteBackupPolicy(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->updateBackupStorage(
            "<DATABASE_ID>",
            "s3",
            "<BUCKET>",
            "<ACCESS_KEY>",
            "<SECRET_KEY>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getBackup(
            "<DATABASE_ID>",
            "<BACKUP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseBackup::class, $response);
    }
    public function testMethodDeleteBackup(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->deleteBackup(
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
                    "port" => 5432,
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listBranches(
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->createBranch(
            "<DATABASE_ID>"
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->deleteBranch(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->updateCredentials(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->createExecution(
            "<DATABASE_ID>",
            "<SQL>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseExecution::class, $response);
    }
    public function testMethodListExtensions(): void
    {
        $data = [
            "installed" => [],
            "available" => [],
            "metadata" => [
                [
                    "key" => "vector",
                    "name" => "pgvector",
                    "description" => "Vector data type and similarity search for embeddings.",
                    "category" => "search"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listExtensions(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseExtensions::class, $response);
    }
    public function testMethodCreateExtension(): void
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
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->createExtension(
            "<DATABASE_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
    public function testMethodDeleteExtension(): void
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
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->deleteExtension(
            "<DATABASE_ID>",
            "<EXTENSION_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
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
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->createFailover(
            "<DATABASE_ID>"
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->updateMaintenance(
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->createMigration(
            "<DATABASE_ID>",
            "shared"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listOperations(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getPitr(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getPooler(
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->updatePooler(
            "<DATABASE_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getReplicas(
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
                    "sourceDatabaseId" => "5e5ea5c16897e",
                    "projectId" => "5e5ea5c16897e",
                    "backupId" => "5e5ea5c16897e",
                    "type" => "backup",
                    "status" => "completed",
                    "targetTime" => "2020-10-15T06:38:00.000+00:00",
                    "startedAt" => "2020-10-15T06:38:00.000+00:00",
                    "completedAt" => "2020-10-15T06:38:00.000+00:00",
                    "error" => "[ERROR]"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->listRestorations(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestorationList::class, $response);
    }
    public function testMethodCreateRestoration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "sourceDatabaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "backupId" => "5e5ea5c16897e",
            "type" => "backup",
            "status" => "completed",
            "targetTime" => "2020-10-15T06:38:00.000+00:00",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "completedAt" => "2020-10-15T06:38:00.000+00:00",
            "error" => "[ERROR]"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->createRestoration(
            "<DATABASE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabaseRestoration::class, $response);
    }
    public function testMethodGetRestoration(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "databaseId" => "5e5ea5c16897e",
            "sourceDatabaseId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "backupId" => "5e5ea5c16897e",
            "type" => "backup",
            "status" => "completed",
            "targetTime" => "2020-10-15T06:38:00.000+00:00",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "completedAt" => "2020-10-15T06:38:00.000+00:00",
            "error" => "[ERROR]"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->postgresql->getRestoration(
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

        $response = $this->postgresql->getStatus(
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
            "api" => "postgresql",
            "engine" => "postgresql",
            "version" => "16",
            "specification" => "s-2vcpu-2gb",
            "backend" => "edge",
            "hostname" => "db-myproject-mydb.fra.appwrite.center",
            "connectionPort" => 5432,
            "connectionUser" => "appwrite_user",
            "connectionPassword" => "••••••••",
            "credentialGeneration" => 1,
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

        $response = $this->postgresql->createUpgrade(
            "<DATABASE_ID>",
            "<TARGET_VERSION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DedicatedDatabase::class, $response);
    }
}
