<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Scopes;
use Appwrite\Enums\ProtocolId;
use Appwrite\Enums\ServiceId;

final class ProjectTest extends TestCase
{
    private $client;
    private $project;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->project = new Project($this->client);
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
            array(Scopes::SESSIONSWRITE())
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
            array(Scopes::SESSIONSWRITE())
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
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authDisposableEmails" => true,
            "authCanonicalEmails" => true,
            "authFreeEmails" => true,
            "authMockNumbers" => array(
                array(
                    "phone" => "+1612842323",
                    "otp" => "123456"
                )
            ),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(
                array(
                    "key" => "github",
                    "name" => "GitHub",
                    "appId" => "259125845563242502",
                    "secret" => "Bpw_g9c2TGXxfgLshDbSaL8tsCcqgczQ",
                    "enabled" => true
                )
            ),
            "platforms" => array(),
            "webhooks" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Webhook",
                    "url" => "https://example.com/webhook",
                    "events" => array(),
                    "tls" => true,
                    "authUsername" => "username",
                    "authPassword" => "password",
                    "secret" => "ad3d581ca230e2b7059c545e5a",
                    "enabled" => true,
                    "logs" => "Failed to connect to remote server.",
                    "attempts" => 10
                )
            ),
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
            ),
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
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForProject" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForVcs" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForProxy" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMigrations" => true,
            "serviceStatusForMessaging" => true,
            "protocolStatusForRest" => true,
            "protocolStatusForGraphql" => true,
            "protocolStatusForWebsocket" => true,
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
                    "resourceId" => "5e5ea5c16897e"
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

    public function testMethodUpdateProtocolStatus(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authDisposableEmails" => true,
            "authCanonicalEmails" => true,
            "authFreeEmails" => true,
            "authMockNumbers" => array(
                array(
                    "phone" => "+1612842323",
                    "otp" => "123456"
                )
            ),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(
                array(
                    "key" => "github",
                    "name" => "GitHub",
                    "appId" => "259125845563242502",
                    "secret" => "Bpw_g9c2TGXxfgLshDbSaL8tsCcqgczQ",
                    "enabled" => true
                )
            ),
            "platforms" => array(),
            "webhooks" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Webhook",
                    "url" => "https://example.com/webhook",
                    "events" => array(),
                    "tls" => true,
                    "authUsername" => "username",
                    "authPassword" => "password",
                    "secret" => "ad3d581ca230e2b7059c545e5a",
                    "enabled" => true,
                    "logs" => "Failed to connect to remote server.",
                    "attempts" => 10
                )
            ),
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
            ),
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
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForProject" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForVcs" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForProxy" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMigrations" => true,
            "serviceStatusForMessaging" => true,
            "protocolStatusForRest" => true,
            "protocolStatusForGraphql" => true,
            "protocolStatusForWebsocket" => true,
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
                    "resourceId" => "5e5ea5c16897e"
                )
            ),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateProtocolStatus(
            ProtocolId::REST(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }

    public function testMethodUpdateServiceStatus(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "New Project",
            "description" => "This is a new project.",
            "teamId" => "1592981250",
            "logo" => "5f5c451b403cb",
            "url" => "5f5c451b403cb",
            "legalName" => "Company LTD.",
            "legalCountry" => "US",
            "legalState" => "New York",
            "legalCity" => "New York City.",
            "legalAddress" => "620 Eighth Avenue, New York, NY 10018",
            "legalTaxId" => "131102020",
            "authDuration" => 60,
            "authLimit" => 100,
            "authSessionsLimit" => 10,
            "authPasswordHistory" => 5,
            "authPasswordDictionary" => true,
            "authPersonalDataCheck" => true,
            "authDisposableEmails" => true,
            "authCanonicalEmails" => true,
            "authFreeEmails" => true,
            "authMockNumbers" => array(
                array(
                    "phone" => "+1612842323",
                    "otp" => "123456"
                )
            ),
            "authSessionAlerts" => true,
            "authMembershipsUserName" => true,
            "authMembershipsUserEmail" => true,
            "authMembershipsMfa" => true,
            "authInvalidateSessions" => true,
            "oAuthProviders" => array(
                array(
                    "key" => "github",
                    "name" => "GitHub",
                    "appId" => "259125845563242502",
                    "secret" => "Bpw_g9c2TGXxfgLshDbSaL8tsCcqgczQ",
                    "enabled" => true
                )
            ),
            "platforms" => array(),
            "webhooks" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Webhook",
                    "url" => "https://example.com/webhook",
                    "events" => array(),
                    "tls" => true,
                    "authUsername" => "username",
                    "authPassword" => "password",
                    "secret" => "ad3d581ca230e2b7059c545e5a",
                    "enabled" => true,
                    "logs" => "Failed to connect to remote server.",
                    "attempts" => 10
                )
            ),
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
            ),
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
            "smtpReplyTo" => "support@appwrite.io",
            "smtpHost" => "mail.appwrite.io",
            "smtpPort" => 25,
            "smtpUsername" => "emailuser",
            "smtpPassword" => "securepassword",
            "smtpSecure" => "tls",
            "pingCount" => 1,
            "pingedAt" => "2020-10-15T06:38:00.000+00:00",
            "labels" => array(),
            "status" => "active",
            "authEmailPassword" => true,
            "authUsersAuthMagicURL" => true,
            "authEmailOtp" => true,
            "authAnonymous" => true,
            "authInvites" => true,
            "authJWT" => true,
            "authPhone" => true,
            "serviceStatusForAccount" => true,
            "serviceStatusForAvatars" => true,
            "serviceStatusForDatabases" => true,
            "serviceStatusForTablesdb" => true,
            "serviceStatusForLocale" => true,
            "serviceStatusForHealth" => true,
            "serviceStatusForProject" => true,
            "serviceStatusForStorage" => true,
            "serviceStatusForTeams" => true,
            "serviceStatusForUsers" => true,
            "serviceStatusForVcs" => true,
            "serviceStatusForSites" => true,
            "serviceStatusForFunctions" => true,
            "serviceStatusForProxy" => true,
            "serviceStatusForGraphql" => true,
            "serviceStatusForMigrations" => true,
            "serviceStatusForMessaging" => true,
            "protocolStatusForRest" => true,
            "protocolStatusForGraphql" => true,
            "protocolStatusForWebsocket" => true,
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
                    "resourceId" => "5e5ea5c16897e"
                )
            ),
            "consoleAccessedAt" => "2020-10-15T06:38:00.000+00:00"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->project->updateServiceStatus(
            ServiceId::ACCOUNT(),
            true
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
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
