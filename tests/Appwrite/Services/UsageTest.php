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
            "metric" => "executions",
            "interval" => "1d",
            "groups" => array(
                array(
                    "time" => "2026-04-09T12:00:00.000+00:00",
                    "value" => 5000
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->usage->listEvents(
            "<METRIC>"
        );

        $this->assertInstanceOf(\Appwrite\Models\UsageEventList::class, $response);
    }

    public function testMethodListGauges(): void
    {
        $data = array(
            "metric" => "files.storage",
            "interval" => "1d",
            "groups" => array(
                array(
                    "time" => "2026-04-09T12:00:00.000+00:00",
                    "value" => 5000
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->usage->listGauges(
            "<METRIC>"
        );

        $this->assertInstanceOf(\Appwrite\Models\UsageGaugeList::class, $response);
    }

}
