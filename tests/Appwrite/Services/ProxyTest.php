<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\InvalidationType;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

final class ProxyTest extends TestCase
{
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createInvalidation(
            "",
            InvalidationType::TAG()
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
                    "renewAt" => "datetime"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->listRules();

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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createAPIRule(
            ""
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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createFunctionRule(
            "",
            "<FUNCTION_ID>"
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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createRedirectRule(
            "",
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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->proxy->createSiteRule(
            "",
            "<SITE_ID>"
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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "renewAt" => "datetime"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
