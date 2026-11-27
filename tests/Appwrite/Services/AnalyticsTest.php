<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\AnalyticsPropertyType;
use Appwrite\Enums\AnalyticsInterval;
use Appwrite\Enums\AnalyticsDimension;

final class AnalyticsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Analytics $analytics;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->analytics = new Analytics($this->client);
    }

    public function testMethodListProperties(): void
    {
        $data = [
            "total" => 5,
            "properties" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Website",
                    "domain" => "example.com",
                    "enabled" => true,
                    "allowedOrigins" => [],
                    "type" => "web",
                    "identifyUsers" => true,
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "firstAccessedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/analytics/properties',
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

        $response = $this->analytics->listProperties(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsPropertyList::class, $response);
    }
    public function testMethodCreateProperty(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Website",
            "domain" => "example.com",
            "enabled" => true,
            "allowedOrigins" => [],
            "type" => "web",
            "identifyUsers" => true,
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "firstAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/analytics/properties',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'name', 'domain', 'enabled', 'allowedOrigins', 'identifyUsers', 'type'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'name' => "<NAME>",
                        'domain' => "<DOMAIN>",
                        'enabled' => false,
                        'allowedOrigins' => [],
                        'identifyUsers' => false,
                        'type' => AnalyticsPropertyType::WEB(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->createProperty(
            "<PROPERTY_ID>",
            "<NAME>",
            domain: "<DOMAIN>",
            enabled: false,
            allowedOrigins: [],
            identifyUsers: false,
            type: AnalyticsPropertyType::WEB()
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsProperty::class, $response);
    }
    public function testMethodGetProperty(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Website",
            "domain" => "example.com",
            "enabled" => true,
            "allowedOrigins" => [],
            "type" => "web",
            "identifyUsers" => true,
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "firstAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/analytics/properties/%3CPROPERTY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->getProperty(
            "<PROPERTY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsProperty::class, $response);
    }
    public function testMethodUpdateProperty(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Website",
            "domain" => "example.com",
            "enabled" => true,
            "allowedOrigins" => [],
            "type" => "web",
            "identifyUsers" => true,
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "firstAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/analytics/properties/%3CPROPERTY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'name', 'domain', 'enabled', 'allowedOrigins', 'identifyUsers', 'type'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'name' => "<NAME>",
                        'domain' => "<DOMAIN>",
                        'enabled' => false,
                        'allowedOrigins' => [],
                        'identifyUsers' => false,
                        'type' => AnalyticsPropertyType::WEB(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->updateProperty(
            "<PROPERTY_ID>",
            name: "<NAME>",
            domain: "<DOMAIN>",
            enabled: false,
            allowedOrigins: [],
            identifyUsers: false,
            type: AnalyticsPropertyType::WEB()
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsProperty::class, $response);
    }
    public function testMethodDeleteProperty(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/analytics/properties/%3CPROPERTY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->deleteProperty(
            "<PROPERTY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListAnnotations(): void
    {
        $data = [
            "total" => 5,
            "annotations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "propertyId" => "5e5ea5c16897e",
                    "date" => "2020-10-15T06:38:00.000+00:00",
                    "content" => "Launched the new pricing page",
                    "userId" => "5e5ea5c16897e"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/analytics/properties/%3CPROPERTY_ID%3E/annotations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
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

        $response = $this->analytics->listAnnotations(
            "<PROPERTY_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsAnnotationList::class, $response);
    }
    public function testMethodCreateAnnotation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "propertyId" => "5e5ea5c16897e",
            "date" => "2020-10-15T06:38:00.000+00:00",
            "content" => "Launched the new pricing page",
            "userId" => "5e5ea5c16897e"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/analytics/properties/%3CPROPERTY_ID%3E/annotations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'annotationId', 'date', 'content'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'annotationId' => "<ANNOTATION_ID>",
                        'date' => "2020-10-15T06:38:00.000+00:00",
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

        $response = $this->analytics->createAnnotation(
            "<PROPERTY_ID>",
            "<ANNOTATION_ID>",
            "2020-10-15T06:38:00.000+00:00",
            "<CONTENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsAnnotation::class, $response);
    }
    public function testMethodGetAnnotation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "propertyId" => "5e5ea5c16897e",
            "date" => "2020-10-15T06:38:00.000+00:00",
            "content" => "Launched the new pricing page",
            "userId" => "5e5ea5c16897e"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/analytics/properties/%3CPROPERTY_ID%3E/annotations/%3CANNOTATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'annotationId'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'annotationId' => "<ANNOTATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->getAnnotation(
            "<PROPERTY_ID>",
            "<ANNOTATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsAnnotation::class, $response);
    }
    public function testMethodUpdateAnnotation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "propertyId" => "5e5ea5c16897e",
            "date" => "2020-10-15T06:38:00.000+00:00",
            "content" => "Launched the new pricing page",
            "userId" => "5e5ea5c16897e"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/analytics/properties/%3CPROPERTY_ID%3E/annotations/%3CANNOTATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'annotationId', 'date', 'content'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'annotationId' => "<ANNOTATION_ID>",
                        'date' => "2020-10-15T06:38:00.000+00:00",
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

        $response = $this->analytics->updateAnnotation(
            "<PROPERTY_ID>",
            "<ANNOTATION_ID>",
            date: "2020-10-15T06:38:00.000+00:00",
            content: "<CONTENT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsAnnotation::class, $response);
    }
    public function testMethodDeleteAnnotation(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/analytics/properties/%3CPROPERTY_ID%3E/annotations/%3CANNOTATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'annotationId'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'annotationId' => "<ANNOTATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->deleteAnnotation(
            "<PROPERTY_ID>",
            "<ANNOTATION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodCreateEvent(): void
    {
        $data = [];

        $this->client
            ->expects()->call(
                'POST',
                '/analytics/properties/%3CPROPERTY_ID%3E/events',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'name', 'url', 'domain', 'referrer', 'screenWidth', 'sessionHash', 'scrollDepth', 'engagementTime', 'props', 'userId', 'ip', 'userAgent', 'interactive'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'name' => "<NAME>",
                        'url' => "https://example.com",
                        'domain' => "<DOMAIN>",
                        'referrer' => "<REFERRER>",
                        'screenWidth' => 1,
                        'sessionHash' => "<SESSION_HASH>",
                        'scrollDepth' => 1,
                        'engagementTime' => 1,
                        'props' => [],
                        'userId' => "<USER_ID>",
                        'ip' => "<IP>",
                        'userAgent' => "<USER_AGENT>",
                        'interactive' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->analytics->createEvent(
            "<PROPERTY_ID>",
            "<NAME>",
            "https://example.com",
            domain: "<DOMAIN>",
            referrer: "<REFERRER>",
            screenWidth: 1,
            sessionHash: "<SESSION_HASH>",
            scrollDepth: 1,
            engagementTime: 1,
            props: [],
            userId: "<USER_ID>",
            ip: "<IP>",
            userAgent: "<USER_AGENT>",
            interactive: false
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListMetrics(): void
    {
        $data = [
            "total" => 30,
            "metrics" => [
                [
                    "visitors" => 1234,
                    "sessions" => 4567,
                    "events" => 8910
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/analytics/properties/%3CPROPERTY_ID%3E/metrics',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['propertyId', 'queries', 'interval', 'dimensions', 'propKey', 'dateRange', 'startAt', 'endAt', 'limit', 'total'], array_keys($params));
                    $expected = [
                        'propertyId' => "<PROPERTY_ID>",
                        'queries' => [],
                        'interval' => AnalyticsInterval::ONEHOUR(),
                        'dimensions' => [AnalyticsDimension::COUNTRY()],
                        'propKey' => "<PROP_KEY>",
                        'dateRange' => "<DATE_RANGE>",
                        'startAt' => "2020-10-15T06:38:00.000+00:00",
                        'endAt' => "2020-10-15T06:38:00.000+00:00",
                        'limit' => 1,
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

        $response = $this->analytics->listMetrics(
            "<PROPERTY_ID>",
            queries: [],
            interval: AnalyticsInterval::ONEHOUR(),
            dimensions: [AnalyticsDimension::COUNTRY()],
            propKey: "<PROP_KEY>",
            dateRange: "<DATE_RANGE>",
            startAt: "2020-10-15T06:38:00.000+00:00",
            endAt: "2020-10-15T06:38:00.000+00:00",
            limit: 1,
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AnalyticsMetricList::class, $response);
    }
}
