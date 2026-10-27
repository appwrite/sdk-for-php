<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\DomainRegistrationType;

final class DomainsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Domains $domains;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->domains = new Domains($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "domains" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "domain" => "example.com",
                    "registrar" => "appwrite",
                    "nameservers" => "Appwrite",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "renewal" => "2020-10-15T06:38:00.000+00:00",
                    "autoRenewal" => true,
                    "renewalPrice" => 2599,
                    "teamId" => "5e5ea5c16897e",
                    "dnsRecords" => [
                        [
                            "\$id" => "5f40a6e10c65e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "type" => "A",
                            "name" => "mail",
                            "value" => "192.0.2.1",
                            "ttl" => 86400,
                            "priority" => 10,
                            "lock" => true,
                            "weight" => 10,
                            "port" => 443,
                            "comment" => "Mail server record"
                        ]
                    ]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'search' => "<SEARCH>",
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

        $response = $this->domains->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DomainsList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['teamId', 'domain'], array_keys($params));
                    $expected = [
                        'teamId' => "<TEAM_ID>",
                        'domain' => "example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->create(
            "<TEAM_ID>",
            "example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
    public function testMethodGetPrice(): void
    {
        $data = [
            "domain" => "example.com",
            "tld" => "com",
            "available" => true,
            "periodYears" => 1,
            "premium" => true,
            "renewalPeriodYears" => 1
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/price',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'periodYears', 'registrationType'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'periodYears' => 1,
                        'registrationType' => DomainRegistrationType::NEW(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPrice(
            "example.com",
            periodYears: 1,
            registrationType: DomainRegistrationType::NEW()
        );

        $this->assertInstanceOf(\Appwrite\Models\DomainPrice::class, $response);
    }
    public function testMethodListPrices(): void
    {
        $data = [
            "total" => 5,
            "prices" => [
                [
                    "domain" => "example.com",
                    "tld" => "com",
                    "available" => true,
                    "periodYears" => 1,
                    "premium" => true,
                    "renewalPeriodYears" => 1
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/prices',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domains', 'periodYears', 'registrationType'], array_keys($params));
                    $expected = [
                        'domains' => [],
                        'periodYears' => 1,
                        'registrationType' => DomainRegistrationType::NEW(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->listPrices(
            [],
            periodYears: 1,
            registrationType: DomainRegistrationType::NEW()
        );

        $this->assertInstanceOf(\Appwrite\Models\DomainPricesList::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->get(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/domains/%3CDOMAIN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->delete(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateNameservers(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/domains/%3CDOMAIN_ID%3E/nameservers',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'nameservers'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'nameservers' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateNameservers(
            "<DOMAIN_ID>",
            nameservers: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
    public function testMethodVerifyNameservers(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/domains/%3CDOMAIN_ID%3E/nameservers/verification',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->verifyNameservers(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
    public function testMethodGetPresetGoogleWorkspace(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/google-workspace',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetGoogleWorkspace(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetGoogleWorkspace(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/google-workspace',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetGoogleWorkspace(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodGetPresetICloud(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/icloud',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetICloud(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetICloud(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/icloud',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetICloud(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodGetPresetMailgun(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/mailgun',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetMailgun(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetMailgun(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/mailgun',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetMailgun(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodGetPresetOutlook(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/outlook',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetOutlook(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetOutlook(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/outlook',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetOutlook(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodGetPresetProtonMail(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/proton-mail',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetProtonMail(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetProtonMail(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/proton-mail',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetProtonMail(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodGetPresetZoho(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/presets/zoho',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getPresetZoho(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreatePresetZoho(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/presets/zoho',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createPresetZoho(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodListRecords(): void
    {
        $data = [
            "total" => 5,
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/records',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
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

        $response = $this->domains->listRecords(
            "<DOMAIN_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecordsList::class, $response);
    }
    public function testMethodCreateRecordA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/a',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordA(
            "<DOMAIN_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/a/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordAAAA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/aaaa',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordAAAA(
            "<DOMAIN_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordAAAA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/aaaa/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordAAAA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordAlias(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/alias',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordAlias(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordAlias(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/alias/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordAlias(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordCAA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/caa',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordCAA(
            "<DOMAIN_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordCAA(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/caa/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "value",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordCAA(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "value",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordCNAME(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/cname',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordCNAME(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordCNAME(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/cname/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordCNAME(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordHTTPS(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/https',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordHTTPS(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordHTTPS(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/https/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordHTTPS(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordMX(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/mx',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'priority', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'priority' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordMX(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordMX(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/mx/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'priority', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'priority' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordMX(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordNS(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/ns',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordNS(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordNS(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/ns/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordNS(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordSRV(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/srv',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'value', 'ttl', 'priority', 'weight', 'port', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'priority' => 1,
                        'weight' => 1,
                        'port' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordSRV(
            "<DOMAIN_ID>",
            "name",
            "<VALUE>",
            1,
            1,
            1,
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordSRV(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/srv/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'priority', 'weight', 'port', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'priority' => 1,
                        'weight' => 1,
                        'port' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordSRV(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            1,
            1,
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodCreateRecordTXT(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/domains/%3CDOMAIN_ID%3E/records/txt',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'name', 'ttl', 'value', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'name' => "name",
                        'ttl' => 1,
                        'value' => "<VALUE>",
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->createRecordTXT(
            "<DOMAIN_ID>",
            "name",
            1,
            value: "<VALUE>",
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodUpdateRecordTXT(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/records/txt/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId', 'name', 'value', 'ttl', 'comment'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                        'name' => "name",
                        'value' => "<VALUE>",
                        'ttl' => 1,
                        'comment' => "<COMMENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateRecordTXT(
            "<DOMAIN_ID>",
            "<RECORD_ID>",
            "name",
            "<VALUE>",
            1,
            comment: "<COMMENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodGetRecord(): void
    {
        $data = [
            "\$id" => "5f40a6e10c65e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "A",
            "name" => "mail",
            "value" => "192.0.2.1",
            "ttl" => 86400,
            "priority" => 10,
            "lock" => true,
            "weight" => 10,
            "port" => 443,
            "comment" => "Mail server record"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/records/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getRecord(
            "<DOMAIN_ID>",
            "<RECORD_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DnsRecord::class, $response);
    }
    public function testMethodDeleteRecord(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/domains/%3CDOMAIN_ID%3E/records/%3CRECORD_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'recordId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'recordId' => "<RECORD_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->deleteRecord(
            "<DOMAIN_ID>",
            "<RECORD_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateTeam(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/domains/%3CDOMAIN_ID%3E/team',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'teamId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'teamId' => "<TEAM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateTeam(
            "<DOMAIN_ID>",
            "<TEAM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
    public function testMethodGetTransferStatus(): void
    {
        $data = [
            "status" => "transferrable",
            "reason" => "Transfer in progress",
            "timestamp" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/transfers/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getTransferStatus(
            "<DOMAIN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\DomainTransferStatus::class, $response);
    }
    public function testMethodGetZone(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/domains/%3CDOMAIN_ID%3E/zone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->getZone(
            "<DOMAIN_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateZone(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "example.com",
            "registrar" => "appwrite",
            "nameservers" => "Appwrite",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "renewal" => "2020-10-15T06:38:00.000+00:00",
            "autoRenewal" => true,
            "renewalPrice" => 2599,
            "teamId" => "5e5ea5c16897e",
            "dnsRecords" => [
                [
                    "\$id" => "5f40a6e10c65e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "A",
                    "name" => "mail",
                    "value" => "192.0.2.1",
                    "ttl" => 86400,
                    "priority" => 10,
                    "lock" => true,
                    "weight" => 10,
                    "port" => 443,
                    "comment" => "Mail server record"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/domains/%3CDOMAIN_ID%3E/zone',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domainId', 'content'], array_keys($params));
                    $expected = [
                        'domainId' => "<DOMAIN_ID>",
                        'content' => "<CONTENT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->domains->updateZone(
            "<DOMAIN_ID>",
            "<CONTENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Domain::class, $response);
    }
}
