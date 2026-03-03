<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ActivitiesTest extends TestCase {
    private $client;
    private $activities;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->activities = new Activities($this->client);
    }

    public function testMethodListEvents(): void {

        $data = array(
            "total" => 5,
            "events" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->activities->listEvents(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetEvent(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "userType" => "user",
            "userId" => "610fc2f985ee0",
            "userEmail" => "john@appwrite.io",
            "userName" => "John Doe",
            "resourceParent" => "database/ID",
            "resourceType" => "collection",
            "resourceId" => "610fc2f985ee0",
            "resource" => "collections/610fc2f985ee0",
            "event" => "account.sessions.create",
            "userAgent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36",
            "ip" => "127.0.0.1",
            "mode" => "admin",
            "country" => "US",
            "time" => "2020-10-15T06:38:00.000+00:00",
            "projectId" => "610fc2f985ee0",
            "teamId" => "610fc2f985ee0",
            "hostname" => "appwrite.io",
            "osCode" => "Mac",
            "osName" => "Mac",
            "osVersion" => "Mac",
            "clientType" => "browser",
            "clientCode" => "CM",
            "clientName" => "Chrome Mobile iOS",
            "clientVersion" => "84.0",
            "clientEngine" => "WebKit",
            "clientEngineVersion" => "605.1.15",
            "deviceName" => "smartphone",
            "deviceBrand" => "Google",
            "deviceModel" => "Nexus 5",
            "countryCode" => "US",
            "countryName" => "United States");

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->activities->getEvent(
            "<EVENT_ID>"
        );

        $this->assertSame($data, $response);
    }

}
