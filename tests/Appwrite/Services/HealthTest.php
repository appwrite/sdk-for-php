<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\HealthQueueName;

final class HealthTest extends TestCase
{
    private $client;
    private $health;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->health = new Health($this->client);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->get();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatus::class, $response);
    }

    public function testMethodGetAntivirus(): void
    {
        $data = array(
            "version" => "1.0.0",
            "status" => "disabled"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getAntivirus();

        $this->assertInstanceOf(\Appwrite\Models\HealthAntivirus::class, $response);
    }

    public function testMethodGetCache(): void
    {
        $data = array(
            "total" => 5,
            "statuses" => array(
                array(
                    "name" => "database",
                    "ping" => 128,
                    "status" => "pass"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getCache();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatusList::class, $response);
    }

    public function testMethodGetCertificate(): void
    {
        $data = array(
            "name" => "/CN=www.google.com",
            "subjectSN" => "[SUBJECTSN]",
            "issuerOrganisation" => "[ISSUERORGANISATION]",
            "validFrom" => "1704200998",
            "validTo" => "1711458597",
            "signatureTypeSN" => "RSA-SHA256"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getCertificate();

        $this->assertInstanceOf(\Appwrite\Models\HealthCertificate::class, $response);
    }

    public function testMethodGetConsolePausing(): void
    {
        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getConsolePausing();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatus::class, $response);
    }

    public function testMethodGetDB(): void
    {
        $data = array(
            "total" => 5,
            "statuses" => array(
                array(
                    "name" => "database",
                    "ping" => 128,
                    "status" => "pass"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getDB();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatusList::class, $response);
    }

    public function testMethodGetPubSub(): void
    {
        $data = array(
            "total" => 5,
            "statuses" => array(
                array(
                    "name" => "database",
                    "ping" => 128,
                    "status" => "pass"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getPubSub();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatusList::class, $response);
    }

    public function testMethodGetQueueAudits(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueAudits();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueBuilds(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueBuilds();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueCertificates(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueCertificates();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueDatabases(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueDatabases();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueDeletes(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueDeletes();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetFailedJobs(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getFailedJobs(
            HealthQueueName::V1DATABASE()
        );

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueFunctions(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueFunctions();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueLogs(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueLogs();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueMails(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMails();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueMessaging(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMessaging();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueMigrations(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMigrations();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueStatsResources(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueStatsResources();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueUsage(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueUsage();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetQueueWebhooks(): void
    {
        $data = array(
            "size" => 8
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueWebhooks();

        $this->assertInstanceOf(\Appwrite\Models\HealthQueue::class, $response);
    }

    public function testMethodGetStorage(): void
    {
        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getStorage();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatus::class, $response);
    }

    public function testMethodGetStorageLocal(): void
    {
        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getStorageLocal();

        $this->assertInstanceOf(\Appwrite\Models\HealthStatus::class, $response);
    }

    public function testMethodGetTime(): void
    {
        $data = array(
            "remoteTime" => 1639490751,
            "localTime" => 1639490844,
            "diff" => 93
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getTime();

        $this->assertInstanceOf(\Appwrite\Models\HealthTime::class, $response);
    }

}
