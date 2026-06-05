<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\BackupServices;

final class BackupsTest extends TestCase
{
    private $client;
    private $backups;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->backups = new Backups($this->client);
    }

    public function testMethodListArchives(): void
    {
        $data = array(
            "total" => 5,
            "archives" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "policyId" => "did8jx6ws45jana098ab7",
                    "size" => 100000,
                    "status" => "completed",
                    "startedAt" => "2020-10-15T06:38:00.000+00:00",
                    "migrationId" => "did8jx6ws45jana098ab7",
                    "services" => array(),
                    "resources" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->listArchives();

        $this->assertInstanceOf(\Appwrite\Models\BackupArchiveList::class, $response);
    }

    public function testMethodCreateArchive(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "policyId" => "did8jx6ws45jana098ab7",
            "size" => 100000,
            "status" => "completed",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "migrationId" => "did8jx6ws45jana098ab7",
            "services" => array(),
            "resources" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->createArchive(
            array(BackupServices::DATABASES())
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupArchive::class, $response);
    }

    public function testMethodGetArchive(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "policyId" => "did8jx6ws45jana098ab7",
            "size" => 100000,
            "status" => "completed",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "migrationId" => "did8jx6ws45jana098ab7",
            "services" => array(),
            "resources" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->getArchive(
            "<ARCHIVE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupArchive::class, $response);
    }

    public function testMethodDeleteArchive(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->deleteArchive(
            "<ARCHIVE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListPolicies(): void
    {
        $data = array(
            "total" => 5,
            "policies" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "name" => "Hourly backups",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "services" => array(),
                    "resources" => array(),
                    "retention" => 7,
                    "schedule" => "0 * * * *",
                    "enabled" => true
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->listPolicies();

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicyList::class, $response);
    }

    public function testMethodCreatePolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => array(),
            "resources" => array(),
            "retention" => 7,
            "schedule" => "0 * * * *",
            "enabled" => true
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->createPolicy(
            "<POLICY_ID>",
            array(BackupServices::DATABASES()),
            1,
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }

    public function testMethodGetPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => array(),
            "resources" => array(),
            "retention" => 7,
            "schedule" => "0 * * * *",
            "enabled" => true
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->getPolicy(
            "<POLICY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }

    public function testMethodUpdatePolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "name" => "Hourly backups",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "services" => array(),
            "resources" => array(),
            "retention" => 7,
            "schedule" => "0 * * * *",
            "enabled" => true
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->updatePolicy(
            "<POLICY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupPolicy::class, $response);
    }

    public function testMethodDeletePolicy(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->deletePolicy(
            "<POLICY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateRestoration(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "archiveId" => "did8jx6ws45jana098ab7",
            "policyId" => "did8jx6ws45jana098ab7",
            "status" => "completed",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "migrationId" => "did8jx6ws45jana098ab7",
            "services" => array(),
            "resources" => array(),
            "options" => "{databases.database[{oldId, newId, newName}]}"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->createRestoration(
            "<ARCHIVE_ID>",
            array(BackupServices::DATABASES())
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupRestoration::class, $response);
    }

    public function testMethodListRestorations(): void
    {
        $data = array(
            "total" => 5,
            "restorations" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "archiveId" => "did8jx6ws45jana098ab7",
                    "policyId" => "did8jx6ws45jana098ab7",
                    "status" => "completed",
                    "startedAt" => "2020-10-15T06:38:00.000+00:00",
                    "migrationId" => "did8jx6ws45jana098ab7",
                    "services" => array(),
                    "resources" => array(),
                    "options" => "{databases.database[{oldId, newId, newName}]}"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->listRestorations();

        $this->assertInstanceOf(\Appwrite\Models\BackupRestorationList::class, $response);
    }

    public function testMethodGetRestoration(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "archiveId" => "did8jx6ws45jana098ab7",
            "policyId" => "did8jx6ws45jana098ab7",
            "status" => "completed",
            "startedAt" => "2020-10-15T06:38:00.000+00:00",
            "migrationId" => "did8jx6ws45jana098ab7",
            "services" => array(),
            "resources" => array(),
            "options" => "{databases.database[{oldId, newId, newName}]}"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->backups->getRestoration(
            "<RESTORATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\BackupRestoration::class, $response);
    }

}
