<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class WebhooksTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Webhooks $webhooks;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->webhooks = new Webhooks($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "webhooks" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Webhook",
                    "description" => "Notifies the billing service about new users.",
                    "url" => "https://example.com/webhook",
                    "events" => [],
                    "tls" => true,
                    "authUsername" => "username",
                    "authPassword" => "webhook-password",
                    "secret" => "ad3d581ca230e2b7059c545e5a",
                    "enabled" => true,
                    "logs" => "Failed to connect to remote server.",
                    "attempts" => 10
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/webhooks',
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

        $response = $this->webhooks->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\WebhookList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "description" => "Notifies the billing service about new users.",
            "url" => "https://example.com/webhook",
            "events" => [],
            "tls" => true,
            "authUsername" => "username",
            "authPassword" => "webhook-password",
            "secret" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/webhooks',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['webhookId', 'url', 'name', 'events', 'enabled', 'tls', 'authUsername', 'authPassword', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'webhookId' => "<WEBHOOK_ID>",
                        'url' => "https://example.com/webhook",
                        'name' => "<NAME>",
                        'events' => [],
                        'enabled' => false,
                        'tls' => false,
                        'authUsername' => "<AUTH_USERNAME>",
                        'authPassword' => "password",
                        'secret' => "<SECRET>",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->webhooks->create(
            "<WEBHOOK_ID>",
            "https://example.com/webhook",
            "<NAME>",
            [],
            enabled: false,
            tls: false,
            authUsername: "<AUTH_USERNAME>",
            authPassword: "password",
            secret: "<SECRET>",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Webhook::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "description" => "Notifies the billing service about new users.",
            "url" => "https://example.com/webhook",
            "events" => [],
            "tls" => true,
            "authUsername" => "username",
            "authPassword" => "webhook-password",
            "secret" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/webhooks/%3CWEBHOOK_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['webhookId'], array_keys($params));
                    $expected = [
                        'webhookId' => "<WEBHOOK_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->webhooks->get(
            "<WEBHOOK_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Webhook::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "description" => "Notifies the billing service about new users.",
            "url" => "https://example.com/webhook",
            "events" => [],
            "tls" => true,
            "authUsername" => "username",
            "authPassword" => "webhook-password",
            "secret" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/webhooks/%3CWEBHOOK_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['webhookId', 'name', 'url', 'events', 'enabled', 'tls', 'authUsername', 'authPassword', 'description'], array_keys($params));
                    $expected = [
                        'webhookId' => "<WEBHOOK_ID>",
                        'name' => "<NAME>",
                        'url' => "https://example.com/webhook",
                        'events' => [],
                        'enabled' => false,
                        'tls' => false,
                        'authUsername' => "<AUTH_USERNAME>",
                        'authPassword' => "password",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->webhooks->update(
            "<WEBHOOK_ID>",
            "<NAME>",
            "https://example.com/webhook",
            [],
            enabled: false,
            tls: false,
            authUsername: "<AUTH_USERNAME>",
            authPassword: "password",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Webhook::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/webhooks/%3CWEBHOOK_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['webhookId'], array_keys($params));
                    $expected = [
                        'webhookId' => "<WEBHOOK_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->webhooks->delete(
            "<WEBHOOK_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateSecret(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Webhook",
            "description" => "Notifies the billing service about new users.",
            "url" => "https://example.com/webhook",
            "events" => [],
            "tls" => true,
            "authUsername" => "username",
            "authPassword" => "webhook-password",
            "secret" => "ad3d581ca230e2b7059c545e5a",
            "enabled" => true,
            "logs" => "Failed to connect to remote server.",
            "attempts" => 10
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/webhooks/%3CWEBHOOK_ID%3E/secret',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['webhookId', 'secret'], array_keys($params));
                    $expected = [
                        'webhookId' => "<WEBHOOK_ID>",
                        'secret' => "<SECRET>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->webhooks->updateSecret(
            "<WEBHOOK_ID>",
            secret: "<SECRET>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Webhook::class, $response);
    }
}
