<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\OrganizationKeyScopes;

final class OrganizationTest extends TestCase
{
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
                "usage" => [
                    "bandwidth" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "executions" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "realtime" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "realtimeMessages" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "storage" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "users" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "GBHours" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "imageTransformations" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ]
                ],
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
                "databasesAllowEncrypt" => true,
                "group" => "starter",
                "databaseComputeCredit" => 10
            ],
            "billingEmail" => "billing@org.example",
            "billingStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingCurrentInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingNextInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialDays" => 14,
            "billingAggregationId" => "adbc3de4rddfsd",
            "billingInvoiceId" => "adbc3de4rddfsd",
            "paymentMethodId" => "adbc3de4rddfsd",
            "status" => "active",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
                "usage" => [
                    "bandwidth" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "executions" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "realtime" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "realtimeMessages" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "storage" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "users" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "GBHours" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ],
                    "imageTransformations" => [
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ]
                ],
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
                "databasesAllowEncrypt" => true,
                "group" => "starter",
                "databaseComputeCredit" => 10
            ],
            "billingEmail" => "billing@org.example",
            "billingStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingCurrentInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingNextInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialDays" => 14,
            "billingAggregationId" => "adbc3de4rddfsd",
            "billingInvoiceId" => "adbc3de4rddfsd",
            "paymentMethodId" => "adbc3de4rddfsd",
            "status" => "active",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->listInstallations();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createInstallation(
            "<APP_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallation::class, $response);
    }
    public function testMethodDeleteInstallation(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteInstallation(
            "<INSTALLATION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListKeys(): void
    {
        $data = [
            "total" => 5,
            "keys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "scopes" => [],
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => []
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->listKeys();

        $this->assertInstanceOf(\Appwrite\Models\KeyList::class, $response);
    }
    public function testMethodCreateKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createKey(
            "<KEY_ID>",
            "<NAME>",
            [OrganizationKeyScopes::PROJECTSREAD()]
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodGetKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->getKey(
            "<KEY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodUpdateKey(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => [],
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => []
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateKey(
            "<KEY_ID>",
            "<NAME>",
            [OrganizationKeyScopes::PROJECTSREAD()]
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodDeleteKey(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteKey(
            "<KEY_ID>"
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->listMemberships();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createMembership(
            []
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
                    "devKeys" => [
                        [
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "name" => "Dev API Key",
                            "expire" => "2020-10-15T06:38:00.000+00:00",
                            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                            "sdks" => []
                        ]
                    ],
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
                            "mode" => "readOnly",
                            "projectName" => "My Project",
                            "region" => "fra",
                            "organizationName" => "Acme Inc.",
                            "organizationId" => "5e5ea5c16897e",
                            "billingPlan" => "pro"
                        ]
                    ],
                    "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->listProjects();

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
            "devKeys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => []
                ]
            ],
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
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createProject(
            "",
            "<NAME>"
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
            "devKeys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => []
                ]
            ],
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
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            "devKeys" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => []
                ]
            ],
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
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                ]
            ],
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->deleteProject(
            "<PROJECT_ID>"
        );

        $this->assertSame($data, $response);
    }
}
