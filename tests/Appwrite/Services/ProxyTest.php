<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\InvalidationType;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

final class ProxyTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Proxy $proxy;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->proxy = new Proxy($this->client);
    }

    public function testMethodCreateInvalidation(): void
    {
        $data = [
            "domain" => "appwrite.company.com",
            "type" => "tag",
            "reference" => "products",
            "status" => "success"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/invalidations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'type', 'reference'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'type' => InvalidationType::TAG(),
                        'reference' => "<REFERENCE>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createInvalidation(
            "example.com",
            InvalidationType::TAG(),
            reference: "<REFERENCE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyInvalidation::class, $response);
    }
    public function testMethodListRules(): void
    {
        $data = [
            "total" => 5,
            "rules" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "domain" => "appwrite.company.com",
                    "type" => "deployment",
                    "trigger" => "manual",
                    "redirectUrl" => "https://appwrite.io/docs",
                    "redirectStatusCode" => 301,
                    "deploymentId" => "n3u9feiwmf",
                    "deploymentResourceId" => "n3u9feiwmf",
                    "deploymentVcsProviderBranch" => "main",
                    "status" => "unverified",
                    "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
                    "renewAt" => "datetime",
                    "protocol" => "http"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/proxy/rules',
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

        $response = $this->proxy->listRules(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRuleList::class, $response);
    }
    public function testMethodCreateAPIRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/rules/api',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain'], array_keys($params));
                    $expected = [
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

        $response = $this->proxy->createAPIRule(
            "example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodCreateFunctionRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/rules/function',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'functionId', 'branch'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'functionId' => "<FUNCTION_ID>",
                        'branch' => "<BRANCH>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createFunctionRule(
            "example.com",
            "<FUNCTION_ID>",
            branch: "<BRANCH>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodCreateRedirectRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/rules/redirect',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'url', 'statusCode', 'resourceId', 'resourceType'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'url' => "https://example.com",
                        'statusCode' => StatusCode::MOVEDPERMANENTLY(),
                        'resourceId' => "<RESOURCE_ID>",
                        'resourceType' => ProxyResourceType::SITE(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createRedirectRule(
            "example.com",
            "https://example.com",
            StatusCode::MOVEDPERMANENTLY(),
            "<RESOURCE_ID>",
            ProxyResourceType::SITE()
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodCreateSiteRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/rules/site',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'siteId', 'branch'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'siteId' => "<SITE_ID>",
                        'branch' => "<BRANCH>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createSiteRule(
            "example.com",
            "<SITE_ID>",
            branch: "<BRANCH>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodCreateSMTPRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/proxy/rules/smtp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['domain', 'functionId', 'branch'], array_keys($params));
                    $expected = [
                        'domain' => "example.com",
                        'functionId' => "<FUNCTION_ID>",
                        'branch' => "<BRANCH>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createSMTPRule(
            "example.com",
            "<FUNCTION_ID>",
            branch: "<BRANCH>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodGetRule(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/proxy/rules/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->getRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
    public function testMethodDeleteRule(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/proxy/rules/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->deleteRule(
            "<RULE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateRuleStatus(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "domain" => "appwrite.company.com",
            "type" => "deployment",
            "trigger" => "manual",
            "redirectUrl" => "https://appwrite.io/docs",
            "redirectStatusCode" => 301,
            "deploymentId" => "n3u9feiwmf",
            "deploymentResourceId" => "n3u9feiwmf",
            "deploymentVcsProviderBranch" => "main",
            "status" => "unverified",
            "logs" => "Verification of DNS records failed with DNS resolver 8.8.8.8. Domain stage.myapp.com does not have DNS record.",
            "renewAt" => "datetime",
            "protocol" => "http"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/proxy/rules/%3CRULE_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->updateRuleStatus(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }
}
