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
