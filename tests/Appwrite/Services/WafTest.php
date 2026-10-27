<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class WafTest extends TestCase
{
    use MockeryPHPUnitIntegration;

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
            ->expects()->call(
                'GET',
                '/waf/rules',
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

        $response = $this->waf->listRules(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

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
            ->expects()->call(
                'POST',
                '/waf/rules/bypass',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'name', 'resourceId', 'description', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'name' => "<NAME>",
                        'resourceId' => "<RESOURCE_ID>",
                        'description' => "<DESCRIPTION>",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createBypassRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            resourceId: "<RESOURCE_ID>",
            description: "<DESCRIPTION>",
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'PATCH',
                '/waf/rules/bypass/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'resourceId', 'name', 'description', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'resourceId' => "<RESOURCE_ID>",
                        'name' => "<NAME>",
                        'description' => "<DESCRIPTION>",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateBypassRule(
            "<RULE_ID>",
            resourceType: "api",
            resourceId: "<RESOURCE_ID>",
            name: "<NAME>",
            description: "<DESCRIPTION>",
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'POST',
                '/waf/rules/challenge',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'name', 'resourceId', 'description', 'challengeType', 'priority', 'enabled', 'conditions', 'difficulty', 'ttl'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'name' => "<NAME>",
                        'resourceId' => "<RESOURCE_ID>",
                        'description' => "<DESCRIPTION>",
                        'challengeType' => "compute",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                        'difficulty' => 1,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createChallengeRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            resourceId: "<RESOURCE_ID>",
            description: "<DESCRIPTION>",
            challengeType: "compute",
            priority: 1,
            enabled: false,
            conditions: [],
            difficulty: 1,
            ttl: 1
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
            ->expects()->call(
                'PATCH',
                '/waf/rules/challenge/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'resourceId', 'name', 'description', 'challengeType', 'priority', 'enabled', 'conditions', 'difficulty', 'ttl'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'resourceId' => "<RESOURCE_ID>",
                        'name' => "<NAME>",
                        'description' => "<DESCRIPTION>",
                        'challengeType' => "compute",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                        'difficulty' => 1,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateChallengeRule(
            "<RULE_ID>",
            resourceType: "api",
            resourceId: "<RESOURCE_ID>",
            name: "<NAME>",
            description: "<DESCRIPTION>",
            challengeType: "compute",
            priority: 1,
            enabled: false,
            conditions: [],
            difficulty: 1,
            ttl: 1
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
            ->expects()->call(
                'POST',
                '/waf/rules/deny',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'name', 'resourceId', 'description', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'name' => "<NAME>",
                        'resourceId' => "<RESOURCE_ID>",
                        'description' => "<DESCRIPTION>",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createDenyRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            resourceId: "<RESOURCE_ID>",
            description: "<DESCRIPTION>",
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'PATCH',
                '/waf/rules/deny/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'resourceId', 'name', 'description', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'resourceId' => "<RESOURCE_ID>",
                        'name' => "<NAME>",
                        'description' => "<DESCRIPTION>",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateDenyRule(
            "<RULE_ID>",
            resourceType: "api",
            resourceId: "<RESOURCE_ID>",
            name: "<NAME>",
            description: "<DESCRIPTION>",
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'POST',
                '/waf/rules/rate-limit',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'name', 'limit', 'interval', 'resourceId', 'description', 'key', 'strategy', 'maxBucketSize', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'name' => "<NAME>",
                        'limit' => 1,
                        'interval' => 1,
                        'resourceId' => "<RESOURCE_ID>",
                        'description' => "<DESCRIPTION>",
                        'key' => "ip",
                        'strategy' => "fixedWindow",
                        'maxBucketSize' => 1,
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createRateLimitRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            1,
            1,
            resourceId: "<RESOURCE_ID>",
            description: "<DESCRIPTION>",
            key: "ip",
            strategy: "fixedWindow",
            maxBucketSize: 1,
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'PATCH',
                '/waf/rules/rate-limit/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'resourceId', 'name', 'description', 'limit', 'interval', 'key', 'maxBucketSize', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'resourceId' => "<RESOURCE_ID>",
                        'name' => "<NAME>",
                        'description' => "<DESCRIPTION>",
                        'limit' => 1,
                        'interval' => 1,
                        'key' => "ip",
                        'maxBucketSize' => 1,
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateRateLimitRule(
            "<RULE_ID>",
            resourceType: "api",
            resourceId: "<RESOURCE_ID>",
            name: "<NAME>",
            description: "<DESCRIPTION>",
            limit: 1,
            interval: 1,
            key: "ip",
            maxBucketSize: 1,
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'POST',
                '/waf/rules/redirect',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'name', 'location', 'statusCode', 'resourceId', 'description', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'name' => "<NAME>",
                        'location' => "<LOCATION>",
                        'statusCode' => 1,
                        'resourceId' => "<RESOURCE_ID>",
                        'description' => "<DESCRIPTION>",
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->createRedirectRule(
            "<RULE_ID>",
            "api",
            "<NAME>",
            "<LOCATION>",
            1,
            resourceId: "<RESOURCE_ID>",
            description: "<DESCRIPTION>",
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'PATCH',
                '/waf/rules/redirect/%3CRULE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['ruleId', 'resourceType', 'resourceId', 'name', 'description', 'location', 'statusCode', 'priority', 'enabled', 'conditions'], array_keys($params));
                    $expected = [
                        'ruleId' => "<RULE_ID>",
                        'resourceType' => "api",
                        'resourceId' => "<RESOURCE_ID>",
                        'name' => "<NAME>",
                        'description' => "<DESCRIPTION>",
                        'location' => "<LOCATION>",
                        'statusCode' => 1,
                        'priority' => 1,
                        'enabled' => false,
                        'conditions' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->waf->updateRedirectRule(
            "<RULE_ID>",
            resourceType: "api",
            resourceId: "<RESOURCE_ID>",
            name: "<NAME>",
            description: "<DESCRIPTION>",
            location: "<LOCATION>",
            statusCode: 1,
            priority: 1,
            enabled: false,
            conditions: []
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
            ->expects()->call(
                'GET',
                '/waf/rules/%3CRULE_ID%3E',
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

        $response = $this->waf->getRule(
            "<RULE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\WafRuleRedirect::class, $response);
    }
    public function testMethodDeleteRule(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/waf/rules/%3CRULE_ID%3E',
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

        $response = $this->waf->deleteRule(
            "<RULE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
