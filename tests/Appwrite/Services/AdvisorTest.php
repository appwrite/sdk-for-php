<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class AdvisorTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Advisor $advisor;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->advisor = new Advisor($this->client);
    }

    public function testMethodListReports(): void
    {
        $data = [
            "total" => 5,
            "reports" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "type" => "lighthouse",
                    "title" => "Lighthouse audit for https://appwrite.io/",
                    "summary" => "Performance score 78. 4 opportunities found.",
                    "targetType" => "urls",
                    "target" => "https://appwrite.io/",
                    "categories" => [],
                    "insights" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "reportId" => "5e5ea5c16897e",
                            "type" => "tablesDBIndex",
                            "severity" => "warning",
                            "status" => "active",
                            "resourceType" => "databases",
                            "resourceId" => "main",
                            "parentResourceType" => "tables",
                            "parentResourceId" => "orders",
                            "title" => "Missing index on collection orders",
                            "summary" => "Queries against `orders.status` are scanning the full collection.",
                            "ctas" => [
                                [
                                    "label" => "Create missing index",
                                    "service" => "tablesDB",
                                    "method" => "createIndex",
                                    "params" => []
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/reports',
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

        $response = $this->advisor->listReports(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ReportList::class, $response);
    }
    public function testMethodGetReport(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "type" => "lighthouse",
            "title" => "Lighthouse audit for https://appwrite.io/",
            "summary" => "Performance score 78. 4 opportunities found.",
            "targetType" => "urls",
            "target" => "https://appwrite.io/",
            "categories" => [],
            "insights" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "reportId" => "5e5ea5c16897e",
                    "type" => "tablesDBIndex",
                    "severity" => "warning",
                    "status" => "active",
                    "resourceType" => "databases",
                    "resourceId" => "main",
                    "parentResourceType" => "tables",
                    "parentResourceId" => "orders",
                    "title" => "Missing index on collection orders",
                    "summary" => "Queries against `orders.status` are scanning the full collection.",
                    "ctas" => [
                        [
                            "label" => "Create missing index",
                            "service" => "tablesDB",
                            "method" => "createIndex",
                            "params" => []
                        ]
                    ]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/reports/%3CREPORT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['reportId'], array_keys($params));
                    $expected = [
                        'reportId' => "<REPORT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->advisor->getReport(
            "<REPORT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Report::class, $response);
    }
    public function testMethodDeleteReport(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/reports/%3CREPORT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['reportId'], array_keys($params));
                    $expected = [
                        'reportId' => "<REPORT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->advisor->deleteReport(
            "<REPORT_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListInsights(): void
    {
        $data = [
            "total" => 5,
            "insights" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "reportId" => "5e5ea5c16897e",
                    "type" => "tablesDBIndex",
                    "severity" => "warning",
                    "status" => "active",
                    "resourceType" => "databases",
                    "resourceId" => "main",
                    "parentResourceType" => "tables",
                    "parentResourceId" => "orders",
                    "title" => "Missing index on collection orders",
                    "summary" => "Queries against `orders.status` are scanning the full collection.",
                    "ctas" => [
                        [
                            "label" => "Create missing index",
                            "service" => "tablesDB",
                            "method" => "createIndex",
                            "params" => []
                        ]
                    ]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/reports/%3CREPORT_ID%3E/insights',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['reportId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'reportId' => "<REPORT_ID>",
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

        $response = $this->advisor->listInsights(
            "<REPORT_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\InsightList::class, $response);
    }
    public function testMethodGetInsight(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "reportId" => "5e5ea5c16897e",
            "type" => "tablesDBIndex",
            "severity" => "warning",
            "status" => "active",
            "resourceType" => "databases",
            "resourceId" => "main",
            "parentResourceType" => "tables",
            "parentResourceId" => "orders",
            "title" => "Missing index on collection orders",
            "summary" => "Queries against `orders.status` are scanning the full collection.",
            "ctas" => [
                [
                    "label" => "Create missing index",
                    "service" => "tablesDB",
                    "method" => "createIndex",
                    "params" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/reports/%3CREPORT_ID%3E/insights/%3CINSIGHT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['reportId', 'insightId'], array_keys($params));
                    $expected = [
                        'reportId' => "<REPORT_ID>",
                        'insightId' => "<INSIGHT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->advisor->getInsight(
            "<REPORT_ID>",
            "<INSIGHT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Insight::class, $response);
    }
}
