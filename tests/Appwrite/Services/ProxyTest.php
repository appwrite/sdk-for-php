<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\StatusCode;
use Appwrite\Enums\ProxyResourceType;

final class ProxyTest extends TestCase
{
    private $client;
    private $proxy;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->proxy = new Proxy($this->client);
    }

    public function testMethodListRules(): void
    {
        $data = array(
            "total" => 5,
            "rules" => array(
                array(
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
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->listRules();

        $this->assertInstanceOf(\Appwrite\Models\ProxyRuleList::class, $response);
    }

    public function testMethodCreateAPIRule(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->createAPIRule(
            ""
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }

    public function testMethodCreateFunctionRule(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->createFunctionRule(
            "",
            "<FUNCTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }

    public function testMethodCreateRedirectRule(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->createRedirectRule(
            "",
            "https://example.com",
            StatusCode::MOVEDPERMANENTLY301(),
            "<RESOURCE_ID>",
            ProxyResourceType::SITE()
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }

    public function testMethodCreateSiteRule(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->createSiteRule(
            "",
            "<SITE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }

    public function testMethodGetRule(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

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

        $response = $this->proxy->deleteRule(
            "<RULE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateRuleStatus(): void
    {
        $data = array(
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
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->proxy->updateRuleStatus(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ProxyRule::class, $response);
    }

}
