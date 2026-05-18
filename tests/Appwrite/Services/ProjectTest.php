<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\ProjectAuthMethodId;
use Appwrite\Enums\ProjectKeyScopes;
use Appwrite\Enums\ProjectOAuth2GooglePrompt;
use Appwrite\Enums\ProjectOAuthProviderId;
use Appwrite\Enums\ProjectPolicyId;
use Appwrite\Enums\ProjectProtocolId;
use Appwrite\Enums\ProjectServiceId;
use Appwrite\Enums\ProjectSMTPSecure;
use Appwrite\Enums\ProjectEmailTemplateId;
use Appwrite\Enums\ProjectEmailTemplateLocale;

final class ProjectTest extends TestCase
{
    private $client;
    private $project;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->project = new Project($this->client);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->get();

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->delete();

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateAuthMethod(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateAuthMethod(
            ProjectAuthMethodId::EMAILPASSWORD(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
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

        $response = $this->project->listKeys();

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

        $response = $this->project->createKey(
            "<KEY_ID>",
            "<NAME>",
            array(ProjectKeyScopes::PROJECTREAD())
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }

    public function testMethodCreateEphemeralKey(): void
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

        $response = $this->project->createEphemeralKey(
            array(ProjectKeyScopes::PROJECTREAD()),
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\EphemeralKey::class, $response);
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

        $response = $this->project->getKey(
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

        $response = $this->project->updateKey(
            "<KEY_ID>",
            "<NAME>",
            array(ProjectKeyScopes::PROJECTREAD())
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }

    public function testMethodDeleteKey(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->deleteKey(
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateLabels(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateLabels(
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodListMockPhones(): void
    {
        $data = array(
            "total" => 5,
            "mockNumbers" => array(
                array(
                    "number" => "+1612842323",
                    "otp" => "123456",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listMockPhones();

        $this->assertInstanceOf(\Appwrite\Models\MockNumberList::class, $response);
    }

    public function testMethodCreateMockPhone(): void
    {
        $data = array(
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createMockPhone(
            "+12065550100",
            "<OTP>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumber::class, $response);
    }

    public function testMethodGetMockPhone(): void
    {
        $data = array(
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getMockPhone(
            "+12065550100"
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumber::class, $response);
    }

    public function testMethodUpdateMockPhone(): void
    {
        $data = array(
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateMockPhone(
            "+12065550100",
            "<OTP>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumber::class, $response);
    }

    public function testMethodDeleteMockPhone(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->deleteMockPhone(
            "+12065550100"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListOAuth2Providers(): void
    {
        $data = array(
            "total" => 5,
            "providers" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listOAuth2Providers();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2ProviderList::class, $response);
    }

    public function testMethodUpdateOAuth2Amazon(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "amzn1.application-oa2-client.87400c00000000000000000000063d5b2",
            "clientSecret" => "79ffe4000000000000000000000000000000000000000000000000000002de55"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Amazon();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Amazon::class, $response);
    }

    public function testMethodUpdateOAuth2Apple(): void
    {
        $data = array(
            "\$id" => "apple",
            "enabled" => true,
            "serviceId" => "ip.appwrite.app.web",
            "keyId" => "P4000000N8",
            "teamId" => "D4000000R6",
            "p8File" => "-----BEGIN PRIVATE KEY-----MIGTAg...jy2Xbna-----END PRIVATE KEY-----"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Apple();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Apple::class, $response);
    }

    public function testMethodUpdateOAuth2Auth0(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "OaOkIA000000000000000000005KLSYq",
            "clientSecret" => "zXz0000-00000000000000000000000000000-00000000000000000000PJafnF",
            "endpoint" => "example.us.auth0.com"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Auth0();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Auth0::class, $response);
    }

    public function testMethodUpdateOAuth2Authentik(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "dTKOPa0000000000000000000000000000e7G8hv",
            "clientSecret" => "ntQadq000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000Hp5WK",
            "endpoint" => "example.authentik.com"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Authentik();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Authentik::class, $response);
    }

    public function testMethodUpdateOAuth2Autodesk(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "5zw90v00000000000000000000kVYXN7",
            "clientSecret" => "7I000000000000MW"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Autodesk();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Autodesk::class, $response);
    }

    public function testMethodUpdateOAuth2Bitbucket(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "key" => "Knt70000000000ByRc",
            "secret" => "NMfLZJ00000000000000000000TLQdDx"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Bitbucket();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Bitbucket::class, $response);
    }

    public function testMethodUpdateOAuth2Bitly(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "d95151000000000000000000000000000067af9b",
            "clientSecret" => "a13e250000000000000000000000000000d73095"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Bitly();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Bitly::class, $response);
    }

    public function testMethodUpdateOAuth2Box(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "deglcs00000000000000000000x2og6y",
            "clientSecret" => "OKM1f100000000000000000000eshEif"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Box();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Box::class, $response);
    }

    public function testMethodUpdateOAuth2Dailymotion(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "apiKey" => "07a9000000000000067f",
            "apiSecret" => "a399a90000000000000000000000000000d90639"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Dailymotion();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Dailymotion::class, $response);
    }

    public function testMethodUpdateOAuth2Discord(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "950722000000343754",
            "clientSecret" => "YmPXnM000000000000000000002zFg5D"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Discord();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Discord::class, $response);
    }

    public function testMethodUpdateOAuth2Disqus(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "publicKey" => "cgegH70000000000000000000000000000000000000000000000000000Hr1nYX",
            "secretKey" => "W7Bykj00000000000000000000000000000000000000000000000000003o43w9"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Disqus();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Disqus::class, $response);
    }

    public function testMethodUpdateOAuth2Dropbox(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "appKey" => "jl000000000009t",
            "appSecret" => "g200000000000vw"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Dropbox();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Dropbox::class, $response);
    }

    public function testMethodUpdateOAuth2Etsy(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "keyString" => "nsgzxh0000000000008j85a2",
            "sharedSecret" => "tp000000ru"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Etsy();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Etsy::class, $response);
    }

    public function testMethodUpdateOAuth2Facebook(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "appId" => "260600000007694",
            "appSecret" => "2d0b2800000000000000000000d38af4"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Facebook();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Facebook::class, $response);
    }

    public function testMethodUpdateOAuth2Figma(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "byay5H0000000000VtiI40",
            "clientSecret" => "yEpOYn0000000000000000004iIsU5"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Figma();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Figma::class, $response);
    }

    public function testMethodUpdateOAuth2FusionAuth(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "b2222c00-0000-0000-0000-000000862097",
            "clientSecret" => "Jx4s0C0000000000000000000000000000000wGqLsc",
            "endpoint" => "example.fusionauth.io"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2FusionAuth();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2FusionAuth::class, $response);
    }

    public function testMethodUpdateOAuth2GitHub(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "e4d87900000000540733",
            "clientSecret" => "5e07c00000000000000000000000000000198bcc"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2GitHub();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Github::class, $response);
    }

    public function testMethodUpdateOAuth2Gitlab(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "applicationId" => "d41ffe0000000000000000000000000000000000000000000000000000d5e252",
            "secret" => "gloas-838cfa0000000000000000000000000000000000000000000000000000ecbb38",
            "endpoint" => "https://gitlab.com"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Gitlab();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Gitlab::class, $response);
    }

    public function testMethodUpdateOAuth2Google(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "120000000095-92ifjb00000000000000000000g7ijfb.apps.googleusercontent.com",
            "clientSecret" => "GOCSPX-2k8gsR0000000000000000VNahJj",
            "prompt" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Google();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Google::class, $response);
    }

    public function testMethodUpdateOAuth2Keycloak(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "appwrite-o0000000st-app",
            "clientSecret" => "jdjrJd00000000000000000000HUsaZO",
            "endpoint" => "keycloak.example.com",
            "realmName" => "appwrite-realm"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Keycloak();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Keycloak::class, $response);
    }

    public function testMethodUpdateOAuth2Kick(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "01KQ7C00000000000001MFHS32",
            "clientSecret" => "34ac5600000000000000000000000000000000000000000000000000e830c8b"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Kick();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Kick::class, $response);
    }

    public function testMethodUpdateOAuth2Linkedin(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "770000000000dv",
            "primaryClientSecret" => "WPL_AP1.2Bf0000000000000./HtlYw=="
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Linkedin();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Linkedin::class, $response);
    }

    public function testMethodUpdateOAuth2Microsoft(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "applicationId" => "00001111-aaaa-2222-bbbb-3333cccc4444",
            "applicationSecret" => "A1bC2dE3fH4iJ5kL6mN7oP8qR9sT0u",
            "tenant" => "common"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Microsoft();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Microsoft::class, $response);
    }

    public function testMethodUpdateOAuth2Notion(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "oauthClientId" => "341d8700-0000-0000-0000-000000446ee3",
            "oauthClientSecret" => "secret_dLUr4b000000000000000000000000000000lFHAa9"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Notion();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Notion::class, $response);
    }

    public function testMethodUpdateOAuth2Oidc(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "qibI2x0000000000000000000000000006L2YFoG",
            "clientSecret" => "Ah68ed000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003qpcHV",
            "wellKnownURL" => "https://myoauth.com/.well-known/openid-configuration",
            "authorizationURL" => "https://myoauth.com/oauth2/authorize",
            "tokenURL" => "https://myoauth.com/oauth2/token",
            "userInfoURL" => "https://myoauth.com/oauth2/userinfo"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Oidc();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Oidc::class, $response);
    }

    public function testMethodUpdateOAuth2Okta(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "0oa00000000000000698",
            "clientSecret" => "Kiq0000000000000000000000000000000000000-00000000000H2L5-3SJ-vRV",
            "domain" => "trial-6400025.okta.com",
            "authorizationServerId" => "aus000000000000000h7z"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Okta();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Okta::class, $response);
    }

    public function testMethodUpdateOAuth2Paypal(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB",
            "secretKey" => "EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Paypal();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Paypal::class, $response);
    }

    public function testMethodUpdateOAuth2PaypalSandbox(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB",
            "secretKey" => "EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2PaypalSandbox();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Paypal::class, $response);
    }

    public function testMethodUpdateOAuth2Podio(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "appwrite-oauth-test-app",
            "clientSecret" => "Rn247T0000000000000000000000000000000000000000000000000000W2zWTN"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Podio();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Podio::class, $response);
    }

    public function testMethodUpdateOAuth2Salesforce(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "customerKey" => "3MVG9I0000000000000000000000000000000000000000000000000000000000000000000000000C5Aejq",
            "customerSecret" => "3w000000000000e2"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Salesforce();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Salesforce::class, $response);
    }

    public function testMethodUpdateOAuth2Slack(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "23000000089.15000000000023",
            "clientSecret" => "81656000000000000000000000f3d2fd"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Slack();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Slack::class, $response);
    }

    public function testMethodUpdateOAuth2Spotify(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "6ec271000000000000000000009beace",
            "clientSecret" => "db068a000000000000000000008b5b9f"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Spotify();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Spotify::class, $response);
    }

    public function testMethodUpdateOAuth2Stripe(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "ca_UKibXX0000000000000000000006byvR",
            "apiSecretKey" => "sk_51SfOd000000000000000000000000000000000000000000000000000000000000000000000000000000000000000QGWYfp"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Stripe();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Stripe::class, $response);
    }

    public function testMethodUpdateOAuth2Tradeshift(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "oauth2ClientId" => "appwrite-test-org.appwrite-test-app",
            "oauth2ClientSecret" => "7cb52700-0000-0000-0000-000000ca5b83"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Tradeshift();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Tradeshift::class, $response);
    }

    public function testMethodUpdateOAuth2TradeshiftSandbox(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "oauth2ClientId" => "appwrite-test-org.appwrite-test-app",
            "oauth2ClientSecret" => "7cb52700-0000-0000-0000-000000ca5b83"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2TradeshiftSandbox();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Tradeshift::class, $response);
    }

    public function testMethodUpdateOAuth2Twitch(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "vvi0in000000000000000000ikmt9p",
            "clientSecret" => "pmapue000000000000000000zylw3v"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Twitch();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Twitch::class, $response);
    }

    public function testMethodUpdateOAuth2WordPress(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "130005",
            "clientSecret" => "PlBfJS0000000000000000000000000000000000000000000000000000EdUZJk"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2WordPress();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2WordPress::class, $response);
    }

    public function testMethodUpdateOAuth2X(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "customerKey" => "slzZV0000000000000NFLaWT",
            "secretKey" => "tkEPkp00000000000000000000000000000000000000FTxbI9"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2X();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2X::class, $response);
    }

    public function testMethodUpdateOAuth2Yahoo(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "dj0yJm000000000000000000000000000000000000000000000000000000000000000000000000000000000000Z4PWRm",
            "clientSecret" => "cf978f0000000000000000000000000000c5e2e9"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Yahoo();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Yahoo::class, $response);
    }

    public function testMethodUpdateOAuth2Yandex(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "6a8a6a0000000000000000000091483c",
            "clientSecret" => "bbf98500000000000000000000c75a63"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Yandex();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Yandex::class, $response);
    }

    public function testMethodUpdateOAuth2Zoho(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "1000.83C178000000000000000000RPNX0B",
            "clientSecret" => "fb5cac000000000000000000000000000000a68f6e"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Zoho();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Zoho::class, $response);
    }

    public function testMethodUpdateOAuth2Zoom(): void
    {
        $data = array(
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "QMAC00000000000000w0AQ",
            "clientSecret" => "GAWsG4000000000000000000007U01ON"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateOAuth2Zoom();

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Zoom::class, $response);
    }

    public function testMethodGetOAuth2Provider(): void
    {
        $data = array_replace(
            array(
                "\$id" => "github",
                "enabled" => true,
                "applicationId" => "00001111-aaaa-2222-bbbb-3333cccc4444",
                "applicationSecret" => "A1bC2dE3fH4iJ5kL6mN7oP8qR9sT0u",
                "tenant" => "common"
            ),
            array(
                "\$id" => "microsoft"
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getOAuth2Provider(
            ProjectOAuthProviderId::AMAZON()
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Microsoft::class, $response);
    }

    public function testMethodListPlatforms(): void
    {
        $data = array(
            "total" => 5,
            "platforms" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listPlatforms();

        $this->assertInstanceOf(\Appwrite\Models\PlatformList::class, $response);
    }

    public function testMethodCreateAndroidPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "applicationId" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createAndroidPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<APPLICATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformAndroid::class, $response);
    }

    public function testMethodUpdateAndroidPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "applicationId" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateAndroidPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<APPLICATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformAndroid::class, $response);
    }

    public function testMethodCreateApplePlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "bundleIdentifier" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createApplePlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<BUNDLE_IDENTIFIER>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformApple::class, $response);
    }

    public function testMethodUpdateApplePlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "bundleIdentifier" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateApplePlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<BUNDLE_IDENTIFIER>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformApple::class, $response);
    }

    public function testMethodCreateLinuxPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageName" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createLinuxPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }

    public function testMethodUpdateLinuxPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageName" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateLinuxPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }

    public function testMethodCreateWebPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "hostname" => "app.example.com"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createWebPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "app.example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWeb::class, $response);
    }

    public function testMethodUpdateWebPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "hostname" => "app.example.com"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateWebPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "app.example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWeb::class, $response);
    }

    public function testMethodCreateWindowsPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageIdentifierName" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createWindowsPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_IDENTIFIER_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWindows::class, $response);
    }

    public function testMethodUpdateWindowsPlatform(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageIdentifierName" => "com.company.appname"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateWindowsPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_IDENTIFIER_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWindows::class, $response);
    }

    public function testMethodGetPlatform(): void
    {
        $data = array_replace(
            array(
                "\$id" => "5e5ea5c16897e",
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "name" => "My Web App",
                "type" => "windows",
                "packageName" => "com.company.appname"
            ),
            array(
                "type" => "linux"
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getPlatform(
            "<PLATFORM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }

    public function testMethodDeletePlatform(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->deletePlatform(
            "<PLATFORM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListPolicies(): void
    {
        $data = array(
            "total" => 9,
            "policies" => array()
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listPolicies();

        $this->assertInstanceOf(\Appwrite\Models\PolicyList::class, $response);
    }

    public function testMethodUpdateDenyAliasedEmailPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateDenyAliasedEmailPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateDenyDisposableEmailPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateDenyDisposableEmailPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateDenyFreeEmailPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateDenyFreeEmailPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateMembershipPrivacyPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateMembershipPrivacyPolicy();

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdatePasswordDictionaryPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updatePasswordDictionaryPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdatePasswordHistoryPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updatePasswordHistoryPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdatePasswordPersonalDataPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updatePasswordPersonalDataPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateSessionAlertPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateSessionAlertPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateSessionDurationPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateSessionDurationPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateSessionInvalidationPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateSessionInvalidationPolicy(
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateSessionLimitPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateSessionLimitPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateUserLimitPolicy(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateUserLimitPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodGetPolicy(): void
    {
        $data = array_replace(
            array(
                "\$id" => "password-dictionary",
                "userId" => true,
                "userEmail" => true,
                "userPhone" => true,
                "userName" => true,
                "userMFA" => true
            ),
            array(
                "\$id" => "membership-privacy"
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getPolicy(
            ProjectPolicyId::PASSWORDDICTIONARY()
        );

        $this->assertInstanceOf(\Appwrite\Models\PolicyMembershipPrivacy::class, $response);
    }

    public function testMethodUpdateProtocol(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateProtocol(
            ProjectProtocolId::REST(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateService(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateService(
            ProjectServiceId::ACCOUNT(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateSMTP(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "teamId" => "1592981250",
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
            "smtpPassword" => "[SMTPPASSWORD]",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
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
            "region" => "fra",
            "billingLimits" => array(
                "bandwidth" => 5,
                "storage" => 150,
                "users" => 200000,
                "executions" => 750000,
                "GBHours" => 100,
                "imageTransformations" => 100,
                "authPhone" => 10,
                "budgetLimit" => 100
            ),
            "blocks" => array(
                array(
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceType" => "project",
                    "resourceId" => "5e5ea5c16897e",
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

        $response = $this->project->updateSMTP();

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodCreateSMTPTest(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createSMTPTest(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListEmailTemplates(): void
    {
        $data = array(
            "total" => 5,
            "templates" => array(
                array(
                    "templateId" => "verification",
                    "locale" => "en_us",
                    "message" => "Click on the link to verify your account.",
                    "senderName" => "My User",
                    "senderEmail" => "mail@appwrite.io",
                    "replyToEmail" => "emails@appwrite.io",
                    "replyToName" => "Support Team",
                    "subject" => "Please verify your email address"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listEmailTemplates();

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplateList::class, $response);
    }

    public function testMethodUpdateEmailTemplate(): void
    {
        $data = array(
            "templateId" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyToEmail" => "emails@appwrite.io",
            "replyToName" => "Support Team",
            "subject" => "Please verify your email address"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateEmailTemplate(
            ProjectEmailTemplateId::VERIFICATION()
        );

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplate::class, $response);
    }

    public function testMethodGetEmailTemplate(): void
    {
        $data = array(
            "templateId" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyToEmail" => "emails@appwrite.io",
            "replyToName" => "Support Team",
            "subject" => "Please verify your email address"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getEmailTemplate(
            ProjectEmailTemplateId::VERIFICATION()
        );

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplate::class, $response);
    }

    public function testMethodListVariables(): void
    {
        $data = array(
            "total" => 5,
            "variables" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "API_KEY",
                    "value" => "myPa\$\$word1",
                    "secret" => true,
                    "resourceType" => "function",
                    "resourceId" => "myAwesomeFunction"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->listVariables();

        $this->assertInstanceOf(\Appwrite\Models\VariableList::class, $response);
    }

    public function testMethodCreateVariable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->createVariable(
            "<VARIABLE_ID>",
            "<KEY>",
            "<VALUE>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }

    public function testMethodGetVariable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->getVariable(
            "<VARIABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }

    public function testMethodUpdateVariable(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateVariable(
            "<VARIABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }

    public function testMethodDeleteVariable(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->deleteVariable(
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
