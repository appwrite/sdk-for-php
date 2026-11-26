<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class AlertsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Alerts $alerts;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->alerts = new Alerts($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "alerts" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "monitorId" => "5e5ea5c16897e",
                    "projectId" => "5e5ea5c16897e",
                    "name" => "Bandwidth spike",
                    "status" => "firing",
                    "acknowledgedBy" => "5e5ea5c16897e",
                    "acknowledgedByName" => "Jane Doe",
                    "escalationId" => "5e5ea5c16897e",
                    "escalationStep" => 1,
                    "escalationRound" => 0,
                    "rules" => [],
                    "severity" => "info",
                    "threshold" => 5000000,
                    "value" => 7250000,
                    "peak" => 9100000,
                    "type" => "usage",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "notifications" => 1
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/alerts',
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

        $response = $this->alerts->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AlertList::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "monitorId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "name" => "Bandwidth spike",
            "status" => "firing",
            "acknowledgedBy" => "5e5ea5c16897e",
            "acknowledgedByName" => "Jane Doe",
            "escalationId" => "5e5ea5c16897e",
            "escalationStep" => 1,
            "escalationRound" => 0,
            "rules" => [],
            "severity" => "info",
            "threshold" => 5000000,
            "value" => 7250000,
            "peak" => 9100000,
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "5e5ea5c16897e",
            "notifications" => 1
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/alerts/%3CALERT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['alertId'], array_keys($params));
                    $expected = [
                        'alertId' => "<ALERT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->alerts->get(
            "<ALERT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Alert::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "monitorId" => "5e5ea5c16897e",
            "projectId" => "5e5ea5c16897e",
            "name" => "Bandwidth spike",
            "status" => "firing",
            "acknowledgedBy" => "5e5ea5c16897e",
            "acknowledgedByName" => "Jane Doe",
            "escalationId" => "5e5ea5c16897e",
            "escalationStep" => 1,
            "escalationRound" => 0,
            "rules" => [],
            "severity" => "info",
            "threshold" => 5000000,
            "value" => 7250000,
            "peak" => 9100000,
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "5e5ea5c16897e",
            "notifications" => 1
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/alerts/%3CALERT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['alertId', 'acknowledged'], array_keys($params));
                    $expected = [
                        'alertId' => "<ALERT_ID>",
                        'acknowledged' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->alerts->update(
            "<ALERT_ID>",
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Alert::class, $response);
    }
}
