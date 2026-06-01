<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class UsageTest extends TestCase
{
    private $client;
    private $usage;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->usage = new Usage($this->client);
    }

    public function testMethodListEvents(): void
    {
        $data = array(
            "total" => 5,
            "events" => array(
                array(
                    "metric" => "bandwidth",
                    "value" => 5000,
                    "time" => "2026-04-09T12:00:00.000+00:00",
                    "path" => "/v1/storage/files",
                    "method" => "POST",
                    "status" => "201",
                    "resourceType" => "bucket",
                    "resourceId" => "abc123",
                    "countryCode" => "US",
                    "userAgent" => "AppwriteSDK/1.0"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->usage->listEvents();

        $this->assertInstanceOf(\Appwrite\Models\UsageEventList::class, $response);
    }

    public function testMethodListGauges(): void
    {
        $data = array(
            "total" => 5,
            "gauges" => array(
                array(
                    "metric" => "users",
                    "value" => 1500,
                    "time" => "2026-04-09T12:00:00.000+00:00",
                    "resourceType" => "dedicatedDatabases",
                    "resourceId" => "production"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->usage->listGauges();

        $this->assertInstanceOf(\Appwrite\Models\UsageGaugeList::class, $response);
    }

}
