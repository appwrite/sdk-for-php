<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Region;
use Appwrite\Enums\ProjectKeyScopes;

final class OrganizationTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Organization $organization;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->organization = new Organization($this->client);
    }

    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => [],
            "budgetAlerts" => [],
            "billingPlan" => "tier-1",
            "billingPlanId" => "tier-1",
            "billingPlanDetails" => [
                "\$id" => "tier-0",
                "name" => "Hobby",
                "desc" => "Hobby plan",
                "order" => 0,
                "price" => 25,
                "trial" => 14,
                "bandwidth" => 25,
                "storage" => 25,
                "imageTransformations" => 100,
                "screenshotsGenerated" => 50,
                "webhooks" => 25,
                "wafRules" => 2,
                "environments" => 5,
                "projects" => 2,
                "platforms" => 3,
                "users" => 25,
                "teams" => 25,
                "databases" => 25,
                "databasesReads" => 500000,
                "databasesWrites" => 250000,
                "databasesBatchSize" => 100,
                "buckets" => 25,
                "fileSize" => 25,
                "functions" => 25,
                "sites" => 1,
                "executions" => 25,
                "executionsRetentionCount" => 10000,
                "GBHours" => 100,
                "realtime" => 25,
                "realtimeMessages" => 100000,
                "messages" => 1000,
                "topics" => 1,
                "authPhone" => 10,
                "domains" => 5,
                "usageLogs" => 30,
                "projectInactivityDays" => 7,
                "alertLimit" => 80,
                "addons" => [],
                "budgetCapEnabled" => true,
                "customSmtp" => true,
                "emailBranding" => true,
                "requiresPaymentMethod" => true,
                "requiresBillingAddress" => true,
                "isAvailable" => true,
                "selfService" => true,
                "premiumSupport" => true,
                "budgeting" => true,
                "supportsMockNumbers" => true,
                "supportsOrganizationRoles" => true,
                "supportsCredits" => true,
                "supportsDedicatedDatabases" => true,
                "supportsDisposableEmailValidation" => true,
                "supportsCanonicalEmailValidation" => true,
                "supportsFreeEmailValidation" => true,
                "supportsCorporateEmailValidation" => true,
                "supportsProjectSpecificRoles" => true,
                "usagePerProject" => true,
                "supportedAddons" => [
                    "baa" => true,
                    "premiumGeoDB" => true,
                    "premiumGeoDBOrg" => true
                ],
                "deploymentSize" => 30,
                "buildSize" => 2000,
                "functionsIntervalMinimum" => 60,
                "functionsAllowCron" => true,
                "databasesAllowEncrypt" => true,
                "group" => "free",
                "databaseComputeCredit" => 10
            ],
            "billingEmail" => "billing@org.example",
            "status" => "active",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->get();

        $this->assertInstanceOf(\Appwrite\Models\Organization::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => [],
            "budgetAlerts" => [],
            "billingPlan" => "tier-1",
            "billingPlanId" => "tier-1",
            "billingPlanDetails" => [
                "\$id" => "tier-0",
                "name" => "Hobby",
                "desc" => "Hobby plan",
                "order" => 0,
                "price" => 25,
                "trial" => 14,
                "bandwidth" => 25,
                "storage" => 25,
                "imageTransformations" => 100,
                "screenshotsGenerated" => 50,
                "webhooks" => 25,
                "wafRules" => 2,
                "environments" => 5,
                "projects" => 2,
                "platforms" => 3,
                "users" => 25,
                "teams" => 25,
                "databases" => 25,
                "databasesReads" => 500000,
                "databasesWrites" => 250000,
                "databasesBatchSize" => 100,
                "buckets" => 25,
                "fileSize" => 25,
                "functions" => 25,
                "sites" => 1,
                "executions" => 25,
                "executionsRetentionCount" => 10000,
                "GBHours" => 100,
                "realtime" => 25,
                "realtimeMessages" => 100000,
                "messages" => 1000,
                "topics" => 1,
                "authPhone" => 10,
                "domains" => 5,
                "usageLogs" => 30,
                "projectInactivityDays" => 7,
                "alertLimit" => 80,
                "addons" => [],
                "budgetCapEnabled" => true,
                "customSmtp" => true,
                "emailBranding" => true,
                "requiresPaymentMethod" => true,
                "requiresBillingAddress" => true,
                "isAvailable" => true,
                "selfService" => true,
                "premiumSupport" => true,
                "budgeting" => true,
                "supportsMockNumbers" => true,
                "supportsOrganizationRoles" => true,
                "supportsCredits" => true,
                "supportsDedicatedDatabases" => true,
                "supportsDisposableEmailValidation" => true,
                "supportsCanonicalEmailValidation" => true,
                "supportsFreeEmailValidation" => true,
                "supportsCorporateEmailValidation" => true,
                "supportsProjectSpecificRoles" => true,
                "usagePerProject" => true,
                "supportedAddons" => [
                    "baa" => true,
                    "premiumGeoDB" => true,
                    "premiumGeoDBOrg" => true
                ],
                "deploymentSize" => 30,
                "buildSize" => 2000,
                "functionsIntervalMinimum" => 60,
                "functionsAllowCron" => true,
                "databasesAllowEncrypt" => true,
                "group" => "free",
                "databaseComputeCredit" => 10
            ],
            "billingEmail" => "billing@org.example",
            "status" => "active",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/organization',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['name'], array_keys($params));
                    $expected = [
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->update(
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Organization::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/organization',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->delete();

        $this->assertSame($data, $response);
    }
    public function testMethodListInstallations(): void
    {
        $data = [
            "total" => 5,
            "installations" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "teamId" => "5e5ea5c16897e",
                    "scopes" => [],
                    "authorizationDetails" => [],
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/installations',
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

        $response = $this->organization->listInstallations(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallationList::class, $response);
    }
    public function testMethodCreateInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/organization/installations',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['appId', 'authorizationDetails'], array_keys($params));
                    $expected = [
                        'appId' => "<APP_ID>",
                        'authorizationDetails' => "<AUTHORIZATION_DETAILS>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createInstallation(
            "<APP_ID>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodGetInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['installationId'], array_keys($params));
                    $expected = [
                        'installationId' => "<INSTALLATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->getInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodUpdateInstallation(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => [],
            "authorizationDetails" => [],
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/organization/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['installationId', 'authorizationDetails'], array_keys($params));
                    $expected = [
                        'installationId' => "<INSTALLATION_ID>",
                        'authorizationDetails' => "<AUTHORIZATION_DETAILS>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateInstallation(
            "<INSTALLATION_ID>",
            authorizationDetails: "<AUTHORIZATION_DETAILS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodDeleteInstallation(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/organization/installations/%3CINSTALLATION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['installationId'], array_keys($params));
                    $expected = [
                        'installationId' => "<INSTALLATION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListMemberships(): void
    {
        $data = [
            "total" => 5,
            "memberships" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "userId" => "5e5ea5c16897e",
                    "userName" => "John Doe",
                    "userEmail" => "john@appwrite.io",
                    "userPhone" => "+1 555 555 5555",
                    "teamId" => "5e5ea5c16897e",
                    "teamName" => "VIP",
                    "invited" => "2020-10-15T06:38:00.000+00:00",
                    "joined" => "2020-10-15T06:38:00.000+00:00",
                    "confirm" => true,
                    "mfa" => true,
                    "userAccessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "roles" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/memberships',
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

        $response = $this->organization->listMemberships(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MembershipList::class, $response);
    }
    public function testMethodCreateMembership(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "userPhone" => "+1 555 555 5555",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "userAccessedAt" => "2020-10-15T06:38:00.000+00:00",
            "roles" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/organization/memberships',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['roles', 'email', 'userId', 'phone', 'url', 'name'], array_keys($params));
                    $expected = [
                        'roles' => [],
                        'email' => "email@example.com",
                        'userId' => "<USER_ID>",
                        'phone' => "+12065550100",
                        'url' => "https://example.com",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createMembership(
            [],
            email: "email@example.com",
            userId: "<USER_ID>",
            phone: "+12065550100",
            url: "https://example.com",
            name: "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodGetMembership(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "userPhone" => "+1 555 555 5555",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "userAccessedAt" => "2020-10-15T06:38:00.000+00:00",
            "roles" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['membershipId'], array_keys($params));
                    $expected = [
                        'membershipId' => "<MEMBERSHIP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->getMembership(
            "<MEMBERSHIP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodUpdateMembership(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "userPhone" => "+1 555 555 5555",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "userAccessedAt" => "2020-10-15T06:38:00.000+00:00",
            "roles" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/organization/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['membershipId', 'roles'], array_keys($params));
                    $expected = [
                        'membershipId' => "<MEMBERSHIP_ID>",
                        'roles' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateMembership(
            "<MEMBERSHIP_ID>",
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }
    public function testMethodDeleteMembership(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/organization/memberships/%3CMEMBERSHIP_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['membershipId'], array_keys($params));
                    $expected = [
                        'membershipId' => "<MEMBERSHIP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteMembership(
            "<MEMBERSHIP_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListProjects(): void
    {
        $data = [
            "total" => 5,
            "projects" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "New Project",
                    "teamId" => "1592981250",
                    "region" => "fra",
                    "smtpEnabled" => true,
                    "smtpSenderName" => "John Appwrite",
                    "smtpSenderEmail" => "john@appwrite.io",
                    "smtpReplyToName" => "Support Team",
                    "smtpReplyToEmail" => "support@appwrite.io",
                    "smtpHost" => "mail.appwrite.io",
                    "smtpPort" => 25,
                    "smtpUsername" => "emailuser",
                    "smtpPassword" => "smtp-password",
                    "smtpSecure" => "tls",
                    "pingCount" => 1,
                    "pingedAt" => "2020-10-15T06:38:00.000+00:00",
                    "labels" => [],
                    "status" => "active",
                    "onboarding" => [],
                    "authMethods" => [
                        [
                            "\$id" => "email-password",
                            "enabled" => true
                        ]
                    ],
                    "services" => [
                        [
                            "\$id" => "account",
                            "enabled" => true
                        ]
                    ],
                    "protocols" => [
                        [
                            "\$id" => "rest",
                            "enabled" => true
                        ]
                    ],
                    "blocks" => [
                        [
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "resourceType" => "project",
                            "resourceId" => "5e5ea5c16897e",
                            "mode" => "readOnly"
                        ]
                    ],
                    "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/projects',
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

        $response = $this->organization->listProjects(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ProjectList::class, $response);
    }
    public function testMethodCreateProject(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyToName" => "Support Team",
            "smtpReplyToEmail" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "smtp-password",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => [],
            "status" => "active",
            "onboarding" => [],
            "authMethods" => [
                [
                    "\$id" => "email-password",
                    "enabled" => true
                ]
            ],
            "services" => [
                [
                    "\$id" => "account",
                    "enabled" => true
                ]
            ],
            "protocols" => [
                [
                    "\$id" => "rest",
                    "enabled" => true
                ]
            ],
            "blocks" => [
                [
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/organization/projects',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'name', 'region'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'name' => "<NAME>",
                        'region' => Region::FRA(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createProject(
            "<PROJECT_ID>",
            "<NAME>",
            region: Region::FRA()
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodGetProject(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyToName" => "Support Team",
            "smtpReplyToEmail" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "smtp-password",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => [],
            "status" => "active",
            "onboarding" => [],
            "authMethods" => [
                [
                    "\$id" => "email-password",
                    "enabled" => true
                ]
            ],
            "services" => [
                [
                    "\$id" => "account",
                    "enabled" => true
                ]
            ],
            "protocols" => [
                [
                    "\$id" => "rest",
                    "enabled" => true
                ]
            ],
            "blocks" => [
                [
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/projects/%3CPROJECT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->getProject(
            "<PROJECT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateProject(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "smtpEnabled" => true,
            "smtpSenderName" => "John Appwrite",
            "smtpSenderEmail" => "john@appwrite.io",
            "smtpReplyToName" => "Support Team",
            "smtpReplyToEmail" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "smtp-password",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => [],
            "status" => "active",
            "onboarding" => [],
            "authMethods" => [
                [
                    "\$id" => "email-password",
                    "enabled" => true
                ]
            ],
            "services" => [
                [
                    "\$id" => "account",
                    "enabled" => true
                ]
            ],
            "protocols" => [
                [
                    "\$id" => "rest",
                    "enabled" => true
                ]
            ],
            "blocks" => [
                [
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/organization/projects/%3CPROJECT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'name'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateProject(
            "<PROJECT_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodDeleteProject(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/organization/projects/%3CPROJECT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteProject(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListProjectKeys(): void
    {
        $data = [
            "total" => 5,
            "keys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My API Key",
                    "description" => "Used by the nightly backup job.",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "scopes" => [],
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/projects/%3CPROJECT_ID%3E/keys',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
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

        $response = $this->organization->listProjectKeys(
            "<PROJECT_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\KeyList::class, $response);
    }
    public function testMethodCreateEphemeralProjectKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "description" => "Used by the nightly backup job.",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/organization/projects/%3CPROJECT_ID%3E/keys/ephemeral',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'scopes', 'duration'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
                        'duration' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createEphemeralProjectKey(
            "<PROJECT_ID>",
            [ProjectKeyScopes::PROJECTREAD()],
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\EphemeralKey::class, $response);
    }
    public function testMethodGetProjectKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "description" => "Used by the nightly backup job.",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/organization/projects/%3CPROJECT_ID%3E/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'keyId'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'keyId' => "<KEY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->getProjectKey(
            "<PROJECT_ID>",
            "<KEY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodUpdateProjectKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "description" => "Used by the nightly backup job.",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/organization/projects/%3CPROJECT_ID%3E/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'keyId', 'name', 'scopes', 'expire', 'description'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'keyId' => "<KEY_ID>",
                        'name' => "<NAME>",
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
                        'expire' => "2020-10-15T06:38:00.000+00:00",
                        'description' => "<DESCRIPTION>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateProjectKey(
            "<PROJECT_ID>",
            "<KEY_ID>",
            "<NAME>",
            [ProjectKeyScopes::PROJECTREAD()],
            expire: "2020-10-15T06:38:00.000+00:00",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodDeleteProjectKey(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/organization/projects/%3CPROJECT_ID%3E/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['projectId', 'keyId'], array_keys($params));
                    $expected = [
                        'projectId' => "<PROJECT_ID>",
                        'keyId' => "<KEY_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteProjectKey(
            "<PROJECT_ID>",
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }
}
