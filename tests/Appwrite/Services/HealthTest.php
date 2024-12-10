<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class HealthTest extends TestCase {
    private $client;
    private $health;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->health = new Health($this->client);
    }

    public function testMethodGet(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->get(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetAntivirus(): void {

        $data = array(
            "version" => "1.0.0",
            "status" => "online",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getAntivirus(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCache(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getCache(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCertificate(): void {

        $data = array(
            "name" => "/CN=www.google.com",
            "subjectSN" => "",
            "issuerOrganisation" => "",
            "validFrom" => "1704200998",
            "validTo" => "1711458597",
            "signatureTypeSN" => "RSA-SHA256",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getCertificate(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDB(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getDB(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPubSub(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getPubSub(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueue(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueue(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueBuilds(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueBuilds(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueCertificates(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueCertificates(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueDatabases(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueDatabases(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueDeletes(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueDeletes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFailedJobs(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getFailedJobs(
            "v1-database"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueFunctions(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueFunctions(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueLogs(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueLogs(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueMails(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMails(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueMessaging(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMessaging(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueMigrations(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueMigrations(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueUsage(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueUsage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueUsageDump(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueUsageDump(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQueueWebhooks(): void {

        $data = array(
            "size" => 8,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getQueueWebhooks(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetStorage(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getStorage(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetStorageLocal(): void {

        $data = array(
            "name" => "database",
            "ping" => 128,
            "status" => "pass",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getStorageLocal(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetTime(): void {

        $data = array(
            "remoteTime" => 1639490751,
            "localTime" => 1639490844,
            "diff" => 93,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->health->getTime(
        );

        $this->assertSame($data, $response);
    }

}
