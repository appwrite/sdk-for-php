<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\MonitorRecord;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Enums\MonitorMethod;
use Appwrite\Enums\MonitorTlsMode;

final class MonitorsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Monitors $monitors;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->monitors = new Monitors($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "monitors" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Bandwidth spike",
                    "projectId" => "5e5ea5c16897e",
                    "rules" => [],
                    "type" => "usage",
                    "resourceType" => "project",
                    "resourceId" => "main",
                    "window" => 3600,
                    "cooldown" => 3600,
                    "enabled" => true,
                    "notify" => [],
                    "escalationId" => "5e5ea5c16897e",
                    "severity" => "info",
                    "status" => "ok",
                    "alertId" => "5e5ea5c16897e",
                    "interval" => 60,
                    "timeout" => 10,
                    "url" => "https://example.com/health",
                    "body" => "[BODY]",
                    "domain" => "example.com",
                    "resolver" => "1.1.1.1",
                    "host" => "mail.example.com",
                    "port" => 587
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/monitors',
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

        $response = $this->monitors->list(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MonitorList::class, $response);
    }
    public function testMethodCreateDnsMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/monitors/dns',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'domain', 'record', 'resolver', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'domain' => "example.com",
                        'record' => MonitorRecord::A(),
                        'resolver' => "1.1.1.1",
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->createDnsMonitor(
            "<MONITOR_ID>",
            "<NAME>",
            "example.com",
            record: MonitorRecord::A(),
            resolver: "1.1.1.1",
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodUpdateDnsMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/monitors/dns/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'domain', 'record', 'resolver', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'domain' => "example.com",
                        'record' => MonitorRecord::A(),
                        'resolver' => "1.1.1.1",
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->updateDnsMonitor(
            "<MONITOR_ID>",
            name: "<NAME>",
            domain: "example.com",
            record: MonitorRecord::A(),
            resolver: "1.1.1.1",
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodCreateHttpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/monitors/http',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'url', 'method', 'headers', 'body', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'url' => "https://api.example.com/health",
                        'method' => MonitorMethod::GET(),
                        'headers' => [],
                        'body' => "<BODY>",
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->createHttpMonitor(
            "<MONITOR_ID>",
            "<NAME>",
            "https://api.example.com/health",
            method: MonitorMethod::GET(),
            headers: [],
            body: "<BODY>",
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodUpdateHttpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/monitors/http/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'url', 'method', 'headers', 'body', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'url' => "https://api.example.com/health",
                        'method' => MonitorMethod::GET(),
                        'headers' => [],
                        'body' => "<BODY>",
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->updateHttpMonitor(
            "<MONITOR_ID>",
            name: "<NAME>",
            url: "https://api.example.com/health",
            method: MonitorMethod::GET(),
            headers: [],
            body: "<BODY>",
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodCreateSmtpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/monitors/smtp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'host', 'port', 'tlsMode', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'host' => "smtp.example.com",
                        'port' => 1,
                        'tlsMode' => MonitorTlsMode::NONE(),
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->createSmtpMonitor(
            "<MONITOR_ID>",
            "<NAME>",
            "smtp.example.com",
            1,
            tlsMode: MonitorTlsMode::NONE(),
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodUpdateSmtpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/monitors/smtp/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'host', 'port', 'tlsMode', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'host' => "smtp.example.com",
                        'port' => 1,
                        'tlsMode' => MonitorTlsMode::NONE(),
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->updateSmtpMonitor(
            "<MONITOR_ID>",
            name: "<NAME>",
            host: "smtp.example.com",
            port: 1,
            tlsMode: MonitorTlsMode::NONE(),
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodCreateTcpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/monitors/tcp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'host', 'port', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'host' => "db.example.com",
                        'port' => 1,
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->createTcpMonitor(
            "<MONITOR_ID>",
            "<NAME>",
            "db.example.com",
            1,
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodUpdateTcpMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/monitors/tcp/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'host', 'port', 'rules', 'interval', 'timeout', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'host' => "db.example.com",
                        'port' => 1,
                        'rules' => [],
                        'interval' => 1,
                        'timeout' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->updateTcpMonitor(
            "<MONITOR_ID>",
            name: "<NAME>",
            host: "db.example.com",
            port: 1,
            rules: [],
            interval: 1,
            timeout: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodCreateUsageMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/monitors/usage',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'rules', 'window', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'rules' => [],
                        'window' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->createUsageMonitor(
            "<MONITOR_ID>",
            "<NAME>",
            [],
            window: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodUpdateUsageMonitor(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/monitors/usage/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId', 'name', 'rules', 'window', 'cooldown', 'enabled', 'notify', 'severity', 'escalationId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                        'name' => "<NAME>",
                        'rules' => [],
                        'window' => 1,
                        'cooldown' => 1,
                        'enabled' => false,
                        'notify' => [],
                        'severity' => MonitorSeverity::INFO(),
                        'escalationId' => "<ESCALATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->updateUsageMonitor(
            "<MONITOR_ID>",
            name: "<NAME>",
            rules: [],
            window: 1,
            cooldown: 1,
            enabled: false,
            notify: [],
            severity: MonitorSeverity::INFO(),
            escalationId: "<ESCALATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Bandwidth spike",
            "projectId" => "5e5ea5c16897e",
            "rules" => [],
            "type" => "usage",
            "resourceType" => "project",
            "resourceId" => "main",
            "window" => 3600,
            "cooldown" => 3600,
            "enabled" => true,
            "notify" => [],
            "escalationId" => "5e5ea5c16897e",
            "severity" => "info",
            "status" => "ok",
            "alertId" => "5e5ea5c16897e",
            "interval" => 60,
            "timeout" => 10,
            "url" => "https://example.com/health",
            "body" => "[BODY]",
            "domain" => "example.com",
            "resolver" => "1.1.1.1",
            "host" => "mail.example.com",
            "port" => 587
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/monitors/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->get(
            "<MONITOR_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Monitor::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/monitors/%3CMONITOR_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['monitorId'], array_keys($params));
                    $expected = [
                        'monitorId' => "<MONITOR_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->monitors->delete(
            "<MONITOR_ID>"
        );

        $this->assertSame($data, $response);
    }
}
