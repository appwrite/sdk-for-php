<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class WebhooksTest extends TestCase {
    private $client;
    private $webhooks;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->webhooks = new Webhooks($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "webhooks" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->create(
            "<WEBHOOK_ID>",
            "",
            "<NAME>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->get(
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->update(
            "<WEBHOOK_ID>",
            "<NAME>",
            "",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->delete(
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSignature(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "url" => "https://example.com/webhook",
            "events" => array(),
            "security" => true,
            "httpUser" => "username",
            "httpPass" => "password",
            "signatureKey" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10);

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->webhooks->updateSignature(
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }

}
