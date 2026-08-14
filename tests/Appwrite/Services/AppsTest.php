<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AppsTest extends TestCase
{
    private $client;
    private $apps;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->apps = new Apps($this->client);
    }

    public function testMethodList(): void
    {
        $data = array(
            "total" => 5,
            "apps" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Application",
                    "description" => "Connect your workspace to My Application.",
                    "clientUri" => "https://example.com",
                    "logoUri" => "https://example.com/logo.png",
                    "privacyPolicyUrl" => "https://example.com/privacy",
                    "termsUrl" => "https://example.com/terms",
                    "contacts" => array(),
                    "tagline" => "Automate your workspace.",
                    "tags" => array(),
                    "labels" => array(),
                    "images" => array(),
                    "supportUrl" => "https://example.com/support",
                    "dataDeletionUrl" => "https://example.com/data-deletion",
                    "redirectUris" => array(),
                    "postLogoutRedirectUris" => array(),
                    "enabled" => true,
                    "type" => "confidential",
                    "deviceFlow" => true,
                    "teamId" => "5e5ea5c16897e",
                    "userId" => "5e5ea5c16897e",
                    "installationScopes" => array(),
                    "installationRedirectUrl" => "https://example.com/setup",
                    "secrets" => array(
                        array(
                            "\$id" => "5e5ea5c16897e",
                            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                            "appId" => "5e5ea5c16897e",
                            "secret" => "[SECRET]",
                            "hint" => "f5c6c7",
                            "createdById" => "5e5ea5c16897e",
                            "createdByName" => "Walter White"
                        )
                    )
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->list();

        $this->assertInstanceOf(\Appwrite\Models\AppsList::class, $response);
    }

    public function testMethodCreate(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Application",
            "description" => "Connect your workspace to My Application.",
            "clientUri" => "https://example.com",
            "logoUri" => "https://example.com/logo.png",
            "privacyPolicyUrl" => "https://example.com/privacy",
            "termsUrl" => "https://example.com/terms",
            "contacts" => array(),
            "tagline" => "Automate your workspace.",
            "tags" => array(),
            "labels" => array(),
            "images" => array(),
            "supportUrl" => "https://example.com/support",
            "dataDeletionUrl" => "https://example.com/data-deletion",
            "redirectUris" => array(),
            "postLogoutRedirectUris" => array(),
            "enabled" => true,
            "type" => "confidential",
            "deviceFlow" => true,
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "installationScopes" => array(),
            "installationRedirectUrl" => "https://example.com/setup",
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->create(
            "<APP_ID>",
            "<NAME>",
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\App::class, $response);
    }

    public function testMethodListInstallationScopes(): void
    {
        $data = array(
            "total" => 5,
            "scopes" => array(
                array(
                    "value" => "organization:organization.read",
                    "description" => "Access to read the organization",
                    "type" => "organization",
                    "category" => "Organization",
                    "deprecated" => true
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->listInstallationScopes();

        $this->assertInstanceOf(\Appwrite\Models\AppScopeList::class, $response);
    }

    public function testMethodListOAuth2Scopes(): void
    {
        $data = array(
            "total" => 5,
            "scopes" => array(
                array(
                    "value" => "organization:organization.read",
                    "description" => "Access to read the organization",
                    "type" => "organization",
                    "category" => "Organization",
                    "deprecated" => true
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->listOAuth2Scopes();

        $this->assertInstanceOf(\Appwrite\Models\AppScopeList::class, $response);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Application",
            "description" => "Connect your workspace to My Application.",
            "clientUri" => "https://example.com",
            "logoUri" => "https://example.com/logo.png",
            "privacyPolicyUrl" => "https://example.com/privacy",
            "termsUrl" => "https://example.com/terms",
            "contacts" => array(),
            "tagline" => "Automate your workspace.",
            "tags" => array(),
            "labels" => array(),
            "images" => array(),
            "supportUrl" => "https://example.com/support",
            "dataDeletionUrl" => "https://example.com/data-deletion",
            "redirectUris" => array(),
            "postLogoutRedirectUris" => array(),
            "enabled" => true,
            "type" => "confidential",
            "deviceFlow" => true,
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "installationScopes" => array(),
            "installationRedirectUrl" => "https://example.com/setup",
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->get(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\App::class, $response);
    }

    public function testMethodUpdate(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Application",
            "description" => "Connect your workspace to My Application.",
            "clientUri" => "https://example.com",
            "logoUri" => "https://example.com/logo.png",
            "privacyPolicyUrl" => "https://example.com/privacy",
            "termsUrl" => "https://example.com/terms",
            "contacts" => array(),
            "tagline" => "Automate your workspace.",
            "tags" => array(),
            "labels" => array(),
            "images" => array(),
            "supportUrl" => "https://example.com/support",
            "dataDeletionUrl" => "https://example.com/data-deletion",
            "redirectUris" => array(),
            "postLogoutRedirectUris" => array(),
            "enabled" => true,
            "type" => "confidential",
            "deviceFlow" => true,
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "installationScopes" => array(),
            "installationRedirectUrl" => "https://example.com/setup",
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->update(
            "<APP_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\App::class, $response);
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

        $response = $this->apps->delete(
            "<APP_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListInstallations(): void
    {
        $data = array(
            "total" => 5,
            "installations" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "teamId" => "5e5ea5c16897e",
                    "scopes" => array(),
                    "authorizationDetails" => array(),
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->listInstallations(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppInstallationList::class, $response);
    }

    public function testMethodGetInstallation(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "teamId" => "5e5ea5c16897e",
            "scopes" => array(),
            "authorizationDetails" => array(),
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->getInstallation(
            "<APP_ID>",
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

        $response = $this->apps->deleteInstallation(
            "<APP_ID>",
            "<INSTALLATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateInstallationToken(): void
    {
        $data = array(
            "access_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...",
            "token_type" => "Bearer",
            "expires_in" => 3600,
            "refresh_token" => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
            "scope" => "openid email profile"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->createInstallationToken(
            "<APP_ID>",
            "<INSTALLATION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Oauth2Token::class, $response);
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
                    "appId" => "5e5ea5c16897e",
                    "secret" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->listKeys(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppKeyList::class, $response);
    }

    public function testMethodCreateKey(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "secret" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
            "hint" => "f5c6c7",
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->createKey(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppKey::class, $response);
    }

    public function testMethodGetKey(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "secret" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
            "hint" => "f5c6c7",
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->getKey(
            "<APP_ID>",
            "<KEY_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppKey::class, $response);
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

        $response = $this->apps->deleteKey(
            "<APP_ID>",
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
            "name" => "My Application",
            "description" => "Connect your workspace to My Application.",
            "clientUri" => "https://example.com",
            "logoUri" => "https://example.com/logo.png",
            "privacyPolicyUrl" => "https://example.com/privacy",
            "termsUrl" => "https://example.com/terms",
            "contacts" => array(),
            "tagline" => "Automate your workspace.",
            "tags" => array(),
            "labels" => array(),
            "images" => array(),
            "supportUrl" => "https://example.com/support",
            "dataDeletionUrl" => "https://example.com/data-deletion",
            "redirectUris" => array(),
            "postLogoutRedirectUris" => array(),
            "enabled" => true,
            "type" => "confidential",
            "deviceFlow" => true,
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "installationScopes" => array(),
            "installationRedirectUrl" => "https://example.com/setup",
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->updateLabels(
            "<APP_ID>",
            array()
        );

        $this->assertInstanceOf(\Appwrite\Models\App::class, $response);
    }

    public function testMethodListSecrets(): void
    {
        $data = array(
            "total" => 5,
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->listSecrets(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppSecretList::class, $response);
    }

    public function testMethodCreateSecret(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "secret" => "5f3c8d2a1b9e4f7a6c8b2d1e9f4a7b3c5d8e1f2a9b4c7d6e3f5a8b1c4d7e2f9a",
            "hint" => "f5c6c7",
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->createSecret(
            "<APP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppSecretPlaintext::class, $response);
    }

    public function testMethodGetSecret(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "appId" => "5e5ea5c16897e",
            "secret" => "[SECRET]",
            "hint" => "f5c6c7",
            "createdById" => "5e5ea5c16897e",
            "createdByName" => "Walter White"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->getSecret(
            "<APP_ID>",
            "<SECRET_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\AppSecret::class, $response);
    }

    public function testMethodDeleteSecret(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->deleteSecret(
            "<APP_ID>",
            "<SECRET_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateTeam(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Application",
            "description" => "Connect your workspace to My Application.",
            "clientUri" => "https://example.com",
            "logoUri" => "https://example.com/logo.png",
            "privacyPolicyUrl" => "https://example.com/privacy",
            "termsUrl" => "https://example.com/terms",
            "contacts" => array(),
            "tagline" => "Automate your workspace.",
            "tags" => array(),
            "labels" => array(),
            "images" => array(),
            "supportUrl" => "https://example.com/support",
            "dataDeletionUrl" => "https://example.com/data-deletion",
            "redirectUris" => array(),
            "postLogoutRedirectUris" => array(),
            "enabled" => true,
            "type" => "confidential",
            "deviceFlow" => true,
            "teamId" => "5e5ea5c16897e",
            "userId" => "5e5ea5c16897e",
            "installationScopes" => array(),
            "installationRedirectUrl" => "https://example.com/setup",
            "secrets" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "appId" => "5e5ea5c16897e",
                    "secret" => "[SECRET]",
                    "hint" => "f5c6c7",
                    "createdById" => "5e5ea5c16897e",
                    "createdByName" => "Walter White"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->updateTeam(
            "<APP_ID>",
            "<TEAM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\App::class, $response);
    }

    public function testMethodDeleteTokens(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->apps->deleteTokens(
            "<APP_ID>"
        );

        $this->assertSame($data, $response);
    }

}
