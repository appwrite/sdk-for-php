<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\OrganizationKeyScopes;
use Appwrite\Enums\Region;

final class OrganizationTest extends TestCase
{
    private $client;
    private $organization;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->organization = new Organization($this->client);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),
            "billingBudget" => 50,
            "budgetAlerts" => array(),
            "billingPlan" => "tier-1",
            "billingPlanId" => "tier-1",
            "billingPlanDetails" => array(
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
                "members" => 25,
                "webhooks" => 25,
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
                "activityLogs" => 7,
                "usageLogs" => 30,
                "projectInactivityDays" => 7,
                "alertLimit" => 80,
                "usage" => array(
                    "bandwidth" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "executions" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "member" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtime" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtimeMessages" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtimeBandwidth" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "storage" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "users" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "GBHours" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "imageTransformations" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "credits" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    )
                ),
                "addons" => array(
                    "seats" => array(
                        "supported" => true,
                        "planIncluded" => 1,
                        "limit" => 5,
                        "type" => "numeric",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "projects" => array(
                        "supported" => true,
                        "planIncluded" => 1,
                        "limit" => 5,
                        "type" => "numeric",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    )
                ),
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
                "supportsDisposableEmailValidation" => true,
                "supportsCanonicalEmailValidation" => true,
                "supportsFreeEmailValidation" => true,
                "supportsCorporateEmailValidation" => true,
                "supportsProjectSpecificRoles" => true,
                "backupsEnabled" => true,
                "usagePerProject" => true,
                "supportedAddons" => array(
                    "baa" => true,
                    "premiumGeoDB" => true,
                    "premiumGeoDBOrg" => true
                ),
                "backupPolicies" => true,
                "deploymentSize" => 30,
                "buildSize" => 2000,
                "databasesAllowEncrypt" => true,
                "group" => "starter"
            ),
            "billingEmail" => "billing@org.example",
            "billingStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingCurrentInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingNextInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialDays" => 14,
            "billingAggregationId" => "adbc3de4rddfsd",
            "billingInvoiceId" => "adbc3de4rddfsd",
            "paymentMethodId" => "adbc3de4rddfsd",
            "billingAddressId" => "adbc3de4rddfsd",
            "backupPaymentMethodId" => "adbc3de4rddfsd",
            "status" => "active",
            "remarks" => "Pending initial payment",
            "agreementBAA" => "[AGREEMENTBAA]",
            "programManagerName" => "[PROGRAMMANAGERNAME]",
            "programManagerCalendar" => "[PROGRAMMANAGERCALENDAR]",
            "programDiscordChannelName" => "[PROGRAMDISCORDCHANNELNAME]",
            "programDiscordChannelUrl" => "[PROGRAMDISCORDCHANNELURL]",
            "billingPlanDowngrade" => "tier-1",
            "billingTaxId" => "[BILLINGTAXID]",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => array()
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),
            "billingBudget" => 50,
            "budgetAlerts" => array(),
            "billingPlan" => "tier-1",
            "billingPlanId" => "tier-1",
            "billingPlanDetails" => array(
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
                "members" => 25,
                "webhooks" => 25,
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
                "activityLogs" => 7,
                "usageLogs" => 30,
                "projectInactivityDays" => 7,
                "alertLimit" => 80,
                "usage" => array(
                    "bandwidth" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "executions" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "member" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtime" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtimeMessages" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "realtimeBandwidth" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "storage" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "users" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "GBHours" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "imageTransformations" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "credits" => array(
                        "name" => "[NAME]",
                        "unit" => "GB",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    )
                ),
                "addons" => array(
                    "seats" => array(
                        "supported" => true,
                        "planIncluded" => 1,
                        "limit" => 5,
                        "type" => "numeric",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    ),
                    "projects" => array(
                        "supported" => true,
                        "planIncluded" => 1,
                        "limit" => 5,
                        "type" => "numeric",
                        "currency" => "USD",
                        "price" => 5,
                        "value" => 25,
                        "invoiceDesc" => "[INVOICEDESC]"
                    )
                ),
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
                "supportsDisposableEmailValidation" => true,
                "supportsCanonicalEmailValidation" => true,
                "supportsFreeEmailValidation" => true,
                "supportsCorporateEmailValidation" => true,
                "supportsProjectSpecificRoles" => true,
                "backupsEnabled" => true,
                "usagePerProject" => true,
                "supportedAddons" => array(
                    "baa" => true,
                    "premiumGeoDB" => true,
                    "premiumGeoDBOrg" => true
                ),
                "backupPolicies" => true,
                "deploymentSize" => 30,
                "buildSize" => 2000,
                "databasesAllowEncrypt" => true,
                "group" => "starter"
            ),
            "billingEmail" => "billing@org.example",
            "billingStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingCurrentInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingNextInvoiceDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialStartDate" => "2020-10-15T06:38:00.000+00:00",
            "billingTrialDays" => 14,
            "billingAggregationId" => "adbc3de4rddfsd",
            "billingInvoiceId" => "adbc3de4rddfsd",
            "paymentMethodId" => "adbc3de4rddfsd",
            "billingAddressId" => "adbc3de4rddfsd",
            "backupPaymentMethodId" => "adbc3de4rddfsd",
            "status" => "active",
            "remarks" => "Pending initial payment",
            "agreementBAA" => "[AGREEMENTBAA]",
            "programManagerName" => "[PROGRAMMANAGERNAME]",
            "programManagerCalendar" => "[PROGRAMMANAGERCALENDAR]",
            "programDiscordChannelName" => "[PROGRAMDISCORDCHANNELNAME]",
            "programDiscordChannelUrl" => "[PROGRAMDISCORDCHANNELURL]",
            "billingPlanDowngrade" => "tier-1",
            "billingTaxId" => "[BILLINGTAXID]",
            "markedForDeletion" => true,
            "platform" => "imagine",
            "projects" => array()
        );

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

    public function testMethodListKeys(): void
    {
        $data = array(
            "total" => 5,
            "keys" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "scopes" => array(),
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => array()
                )
            )
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createKey(
            "<KEY_ID>",
            "<NAME>",
            array(OrganizationKeyScopes::PROJECTSREAD())
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }

    public function testMethodGetKey(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array()
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My API Key",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "scopes" => array(),
            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
            "sdks" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateKey(
            "<KEY_ID>",
            "<NAME>",
            array(OrganizationKeyScopes::PROJECTSREAD())
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
        $data = array(
            "total" => 5,
            "memberships" => array(
                array(
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
                    "roles" => array()
                )
            )
        );

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
        $data = array(
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
            "roles" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->createMembership(
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\Membership::class, $response);
    }

    public function testMethodGetMembership(): void
    {
        $data = array(
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
            "roles" => array()
        );

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
        $data = array(
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
            "roles" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->organization->updateMembership(
            "<MEMBERSHIP_ID>",
            array()
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
        $data = array(
            "total" => 5,
            "projects" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "New Project",
                    "teamId" => "1592981250",
                    "region" => "fra",
                    "devKeys" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "name" => "Dev API Key",
                            "expire" => "2020-10-15T06:38:00.000+00:00",
                            "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                            "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                            "sdks" => array()
                        )
                    ),
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
                    "labels" => array(),
                    "status" => "active",
                    "onboarding" => array(),
                    "authMethods" => array(
                        array(
                            "\$id" => "email-password",
                            "enabled" => true
                        )
                    ),
                    "services" => array(
                        array(
                            "\$id" => "account",
                            "enabled" => true
                        )
                    ),
                    "protocols" => array(
                        array(
                            "\$id" => "rest",
                            "enabled" => true
                        )
                    ),
                    "blocks" => array(
                        array(
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "resourceType" => "project",
                            "resourceId" => "5e5ea5c16897e",
                            "mode" => "readOnly",
                            "projectName" => "My Project",
                            "region" => "fra",
                            "organizationName" => "Acme Inc.",
                            "organizationId" => "5e5ea5c16897e",
                            "billingPlan" => "pro"
                        )
                    ),
                    "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
                )
            )
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "devKeys" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => array()
                )
            ),
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
            "labels" => array(),
            "status" => "active",
            "onboarding" => array(),
            "authMethods" => array(
                array(
                    "\$id" => "email-password",
                    "enabled" => true
                )
            ),
            "services" => array(
                array(
                    "\$id" => "account",
                    "enabled" => true
                )
            ),
            "protocols" => array(
                array(
                    "\$id" => "rest",
                    "enabled" => true
                )
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                )
            ),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "devKeys" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => array()
                )
            ),
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
            "labels" => array(),
            "status" => "active",
            "onboarding" => array(),
            "authMethods" => array(
                array(
                    "\$id" => "email-password",
                    "enabled" => true
                )
            ),
            "services" => array(
                array(
                    "\$id" => "account",
                    "enabled" => true
                )
            ),
            "protocols" => array(
                array(
                    "\$id" => "rest",
                    "enabled" => true
                )
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                )
            ),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        );

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
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
            "region" => "fra",
            "devKeys" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Dev API Key",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "919c2d18fb5d4...a2ae413da83346ad2",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00",
                    "sdks" => array()
                )
            ),
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
            "labels" => array(),
            "status" => "active",
            "onboarding" => array(),
            "authMethods" => array(
                array(
                    "\$id" => "email-password",
                    "enabled" => true
                )
            ),
            "services" => array(
                array(
                    "\$id" => "account",
                    "enabled" => true
                )
            ),
            "protocols" => array(
                array(
                    "\$id" => "rest",
                    "enabled" => true
                )
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
                    "mode" => "readOnly",
                    "projectName" => "My Project",
                    "region" => "fra",
                    "organizationName" => "Acme Inc.",
                    "organizationId" => "5e5ea5c16897e",
                    "billingPlan" => "pro"
                )
            ),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        );

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
