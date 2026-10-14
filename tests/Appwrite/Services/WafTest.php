<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class WafTest extends TestCase
{
    private Client&MockInterface $client;
    private Waf $waf;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->waf = new Waf($this->client);
    }

    public function testMethodListRules(): void
    {
        $data = [
            "total" => 5,
            "rules" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->listRules();

        $this->assertInstanceOf(\Appwrite\Models\WafRuleList::class, $response);
    }
    public function testMethodCreateBypassRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createBypassRule(
            "<RULE_ID>",
            "api",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleBypass::class, $response);
    }
    public function testMethodUpdateBypassRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateBypassRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleBypass::class, $response);
    }
    public function testMethodCreateChallengeRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "challengeType" => "compute",
            "difficulty" => 3,
            "ttl" => 1800
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createChallengeRule(
            "<RULE_ID>",
            "api",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleChallenge::class, $response);
    }
    public function testMethodUpdateChallengeRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "challengeType" => "compute",
            "difficulty" => 3,
            "ttl" => 1800
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateChallengeRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleChallenge::class, $response);
    }
    public function testMethodCreateDenyRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createDenyRule(
            "<RULE_ID>",
            "api",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleDeny::class, $response);
    }
    public function testMethodUpdateDenyRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateDenyRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleDeny::class, $response);
    }
    public function testMethodCreateRateLimitRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "limit" => 1000,
            "interval" => 60,
            "key" => "userId",
            "strategy" => "slidingWindow",
            "maxBucketSize" => 200
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createRateLimitRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            1,
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRateLimit::class, $response);
    }
    public function testMethodUpdateRateLimitRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "limit" => 1000,
            "interval" => 60,
            "key" => "userId",
            "strategy" => "slidingWindow",
            "maxBucketSize" => 200
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateRateLimitRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRateLimit::class, $response);
    }
    public function testMethodCreateRedirectRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "location" => "/maintenance",
            "statusCode" => 301
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createRedirectRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            "<LOCATION>",
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRedirect::class, $response);
    }
    public function testMethodUpdateRedirectRule(): void
    {
        $data = [
            "\$id" => "wafRule1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "Block anonymous POST traffic",
            "description" => "Blocks anonymous POST calls to /v1/graphql",
            "teamId" => "5e5ea5c16897e",
            "projectId" => "cloudConsole",
            "resourceType" => "functions",
            "resourceId" => "functionId",
            "action" => "bypass",
            "priority" => 100,
            "enabled" => true,
            "conditions" => [],
            "config" => [],
            "location" => "/maintenance",
            "statusCode" => 301
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateRedirectRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRedirect::class, $response);
    }
    public function testMethodGetRule(): void
    {
        $data = array_replace(
            [
                "\$id" => "wafRule1",
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "name" => "Block anonymous POST traffic",
                "description" => "Blocks anonymous POST calls to /v1/graphql",
                "teamId" => "5e5ea5c16897e",
                "projectId" => "cloudConsole",
                "resourceType" => "functions",
                "resourceId" => "functionId",
                "action" => "bypass",
                "priority" => 100,
                "enabled" => true,
                "conditions" => [],
                "config" => [],
                "location" => "/maintenance",
                "statusCode" => 301
            ],
            [
                "action" => "redirect"
            ]
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->getRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRedirect::class, $response);
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

        $response = $this->waf->deleteRule(
            "<RULE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
