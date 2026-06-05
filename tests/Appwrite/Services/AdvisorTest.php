<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AdvisorTest extends TestCase
{
    private $client;
    private $advisor;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->advisor = new Advisor($this->client);
    }

    public function testMethodListReports(): void
    {
        $data = array(
            "total" => 5,
            "reports" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "type" => "lighthouse",
                    "title" => "Lighthouse audit for https://appwrite.io/",
                    "summary" => "Performance score 78. 4 opportunities found.",
                    "targetType" => "urls",
                    "target" => "https://appwrite.io/",
                    "categories" => array(),
                    "insights" => array(
                        array(
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
                            "ctas" => array(
                                array(
                                    "label" => "Create missing index",
                                    "service" => "tablesDB",
                                    "method" => "createIndex",
                                    "params" => array()
                                )
                            )
                        )
                    )
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->advisor->listReports();

        $this->assertInstanceOf(\Appwrite\Models\ReportList::class, $response);
    }

    public function testMethodGetReport(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "type" => "lighthouse",
            "title" => "Lighthouse audit for https://appwrite.io/",
            "summary" => "Performance score 78. 4 opportunities found.",
            "targetType" => "urls",
            "target" => "https://appwrite.io/",
            "categories" => array(),
            "insights" => array(
                array(
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
                    "ctas" => array(
                        array(
                            "label" => "Create missing index",
                            "service" => "tablesDB",
                            "method" => "createIndex",
                            "params" => array()
                        )
                    )
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
        $data = array(
            "total" => 5,
            "insights" => array(
                array(
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
                    "ctas" => array(
                        array(
                            "label" => "Create missing index",
                            "service" => "tablesDB",
                            "method" => "createIndex",
                            "params" => array()
                        )
                    )
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->advisor->listInsights(
            "<REPORT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\InsightList::class, $response);
    }

    public function testMethodGetInsight(): void
    {
        $data = array(
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
            "ctas" => array(
                array(
                    "label" => "Create missing index",
                    "service" => "tablesDB",
                    "method" => "createIndex",
                    "params" => array()
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
