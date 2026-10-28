<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\ProjectAuthMethodId;
use Appwrite\Enums\EnvironmentResource;
use Appwrite\Enums\ProjectKeyScopes;
use Appwrite\Enums\ProjectOAuth2Auth0Prompt;
use Appwrite\Enums\ProjectOAuth2DiscordPrompt;
use Appwrite\Enums\ProjectOAuth2GitHubPrompt;
use Appwrite\Enums\ProjectOAuth2GooglePrompt;
use Appwrite\Enums\ProjectOAuth2KakaoPrompt;
use Appwrite\Enums\ProjectOAuth2MicrosoftPrompt;
use Appwrite\Enums\ProjectOAuth2OidcPrompt;
use Appwrite\Enums\ProjectOAuth2OktaPrompt;
use Appwrite\Enums\ProjectOAuth2SalesforcePrompt;
use Appwrite\Enums\ProjectOAuth2ZohoPrompt;
use Appwrite\Enums\ProjectOAuthProviderId;
use Appwrite\Enums\ProjectPolicyId;
use Appwrite\Enums\ProjectProtocolId;
use Appwrite\Enums\ProjectServiceId;
use Appwrite\Enums\ProjectSMTPSecure;
use Appwrite\Enums\ProjectEmailTemplateId;
use Appwrite\Enums\ProjectEmailTemplateLocale;

final class ProjectTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Project $project;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->project = new Project($this->client);
    }

    public function testMethodGet(): void
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
                '/project',
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

        $response = $this->project->get();

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project',
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

        $response = $this->project->delete();

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateAuthMethod(): void
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
                '/project/auth-methods/email-password',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['methodId', 'enabled'], array_keys($params));
                    $expected = [
                        'methodId' => ProjectAuthMethodId::EMAILPASSWORD(),
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateAuthMethod(
            ProjectAuthMethodId::EMAILPASSWORD(),
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodListEnvironments(): void
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
                '/project/environments',
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

        $response = $this->project->listEnvironments(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ProjectList::class, $response);
    }
    public function testMethodCreateEnvironment(): void
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
                '/project/environments',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['environmentId', 'name', 'resources'], array_keys($params));
                    $expected = [
                        'environmentId' => "<ENVIRONMENT_ID>",
                        'name' => "<NAME>",
                        'resources' => [EnvironmentResource::USER()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createEnvironment(
            "<ENVIRONMENT_ID>",
            "<NAME>",
            resources: [EnvironmentResource::USER()]
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodGetEnvironment(): void
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
                '/project/environments/%3CENVIRONMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['environmentId'], array_keys($params));
                    $expected = [
                        'environmentId' => "<ENVIRONMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getEnvironment(
            "<ENVIRONMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateEnvironment(): void
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
                '/project/environments/%3CENVIRONMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['environmentId', 'name'], array_keys($params));
                    $expected = [
                        'environmentId' => "<ENVIRONMENT_ID>",
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

        $response = $this->project->updateEnvironment(
            "<ENVIRONMENT_ID>",
            "<NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodDeleteEnvironment(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project/environments/%3CENVIRONMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['environmentId'], array_keys($params));
                    $expected = [
                        'environmentId' => "<ENVIRONMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->deleteEnvironment(
            "<ENVIRONMENT_ID>"
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
                '/project/keys',
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

        $response = $this->project->listKeys(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\KeyList::class, $response);
    }
    public function testMethodCreateEphemeralKey(): void
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
                '/project/keys/ephemeral',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['scopes', 'duration'], array_keys($params));
                    $expected = [
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

        $response = $this->project->createEphemeralKey(
            [ProjectKeyScopes::PROJECTREAD()],
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\EphemeralKey::class, $response);
    }
    public function testMethodGetKey(): void
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
                '/project/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['keyId'], array_keys($params));
                    $expected = [
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

        $response = $this->project->getKey(
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
                '/project/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['keyId', 'name', 'scopes', 'expire', 'description'], array_keys($params));
                    $expected = [
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

        $response = $this->project->updateKey(
            "<KEY_ID>",
            "<NAME>",
            [ProjectKeyScopes::PROJECTREAD()],
            expire: "2020-10-15T06:38:00.000+00:00",
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Key::class, $response);
    }
    public function testMethodDeleteKey(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project/keys/%3CKEY_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['keyId'], array_keys($params));
                    $expected = [
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

        $response = $this->project->deleteKey(
            "<KEY_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateLabels(): void
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
                'PUT',
                '/project/labels',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['labels'], array_keys($params));
                    $expected = [
                        'labels' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateLabels(
            []
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodListMockPhones(): void
    {
        $data = [
            "total" => 5,
            "mockNumbers" => [
                [
                    "number" => "+1612842323",
                    "otp" => "123456",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/mock-phones',
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

        $response = $this->project->listMockPhones(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumberList::class, $response);
    }
    public function testMethodCreateMockPhone(): void
    {
        $data = [
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/mock-phones',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['number', 'otp'], array_keys($params));
                    $expected = [
                        'number' => "+12065550100",
                        'otp' => "<OTP>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createMockPhone(
            "+12065550100",
            "<OTP>"
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumber::class, $response);
    }
    public function testMethodGetMockPhone(): void
    {
        $data = [
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/mock-phones/%2B12065550100',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['number'], array_keys($params));
                    $expected = [
                        'number' => "+12065550100",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getMockPhone(
            "+12065550100"
        );

        $this->assertInstanceOf(\Appwrite\Models\MockNumber::class, $response);
    }
    public function testMethodUpdateMockPhone(): void
    {
        $data = [
            "number" => "+1612842323",
            "otp" => "123456",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/mock-phones/%2B12065550100',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['number', 'otp'], array_keys($params));
                    $expected = [
                        'number' => "+12065550100",
                        'otp' => "<OTP>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

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
            ->expects()->call(
                'DELETE',
                '/project/mock-phones/%2B12065550100',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['number'], array_keys($params));
                    $expected = [
                        'number' => "+12065550100",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->deleteMockPhone(
            "+12065550100"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListOAuth2Providers(): void
    {
        $data = [
            "total" => 5,
            "providers" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/oauth2',
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

        $response = $this->project->listOAuth2Providers(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2ProviderList::class, $response);
    }
    public function testMethodUpdateOAuth2Server(): void
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
                'PUT',
                '/project/oauth2-server',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled', 'authorizationUrl', 'scopes', 'authorizationDetailsTypes', 'accessTokenDuration', 'refreshTokenDuration', 'publicAccessTokenDuration', 'publicRefreshTokenDuration', 'installationAccessTokenDuration', 'confidentialPkce', 'verificationUrl', 'userCodeLength', 'userCodeFormat', 'deviceCodeDuration', 'defaultScopes', 'installationScopes'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                        'authorizationUrl' => "https://example.com",
                        'scopes' => [],
                        'authorizationDetailsTypes' => [],
                        'accessTokenDuration' => 1,
                        'refreshTokenDuration' => 1,
                        'publicAccessTokenDuration' => 1,
                        'publicRefreshTokenDuration' => 1,
                        'installationAccessTokenDuration' => 1,
                        'confidentialPkce' => false,
                        'verificationUrl' => "https://example.com",
                        'userCodeLength' => 1,
                        'userCodeFormat' => "numeric",
                        'deviceCodeDuration' => 1,
                        'defaultScopes' => [],
                        'installationScopes' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Server(
            false,
            "https://example.com",
            scopes: [],
            authorizationDetailsTypes: [],
            accessTokenDuration: 1,
            refreshTokenDuration: 1,
            publicAccessTokenDuration: 1,
            publicRefreshTokenDuration: 1,
            installationAccessTokenDuration: 1,
            confidentialPkce: false,
            verificationUrl: "https://example.com",
            userCodeLength: 1,
            userCodeFormat: "numeric",
            deviceCodeDuration: 1,
            defaultScopes: [],
            installationScopes: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateOAuth2Amazon(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "amzn1.application-oa2-client.87400c00000000000000000000063d5b2",
            "clientSecret" => "79ffe4000000000000000000000000000000000000000000000000000002de55"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/amazon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Amazon(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Amazon::class, $response);
    }
    public function testMethodUpdateOAuth2Apple(): void
    {
        $data = [
            "\$id" => "apple",
            "enabled" => true,
            "serviceId" => "ip.appwrite.app.web",
            "keyId" => "P4000000N8",
            "teamId" => "D4000000R6",
            "p8File" => "-----BEGIN PRIVATE KEY-----MIGTAg...jy2Xbna-----END PRIVATE KEY-----",
            "nativeEnabled" => true,
            "nativeClientIds" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/apple',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['serviceId', 'keyId', 'teamId', 'p8File', 'enabled', 'nativeClientIds', 'nativeEnabled'], array_keys($params));
                    $expected = [
                        'serviceId' => "<SERVICE_ID>",
                        'keyId' => "<KEY_ID>",
                        'teamId' => "<TEAM_ID>",
                        'p8File' => "<P8_FILE>",
                        'enabled' => false,
                        'nativeClientIds' => [],
                        'nativeEnabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Apple(
            serviceId: "<SERVICE_ID>",
            keyId: "<KEY_ID>",
            teamId: "<TEAM_ID>",
            p8File: "<P8_FILE>",
            enabled: false,
            nativeClientIds: [],
            nativeEnabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Apple::class, $response);
    }
    public function testMethodUpdateOAuth2Appwrite(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "6a42000000000000b5a0",
            "clientSecret" => "b86afd000000000000000000000000000000000000000000000000000ced5f93"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/appwrite',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Appwrite(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Appwrite::class, $response);
    }
    public function testMethodUpdateOAuth2Auth0(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "OaOkIA000000000000000000005KLSYq",
            "clientSecret" => "zXz0000-00000000000000000000000000000-00000000000000000000PJafnF",
            "prompt" => ["none"],
            "endpoint" => "example.us.auth0.com"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/auth0',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'endpoint', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'endpoint' => "<ENDPOINT>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2Auth0Prompt::NONE()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Auth0(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            endpoint: "<ENDPOINT>",
            enabled: false,
            prompt: [ProjectOAuth2Auth0Prompt::NONE()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Auth0::class, $response);
    }
    public function testMethodUpdateOAuth2Authentik(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "dTKOPa0000000000000000000000000000e7G8hv",
            "clientSecret" => "ntQadq000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000Hp5WK",
            "endpoint" => "example.authentik.com"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/authentik',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'endpoint', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'endpoint' => "<ENDPOINT>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Authentik(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            endpoint: "<ENDPOINT>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Authentik::class, $response);
    }
    public function testMethodUpdateOAuth2Autodesk(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "5zw90v00000000000000000000kVYXN7",
            "clientSecret" => "7I000000000000MW"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/autodesk',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Autodesk(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Autodesk::class, $response);
    }
    public function testMethodUpdateOAuth2Bitbucket(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "key" => "Knt70000000000ByRc",
            "secret" => "NMfLZJ00000000000000000000TLQdDx"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/bitbucket',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['key', 'secret', 'enabled'], array_keys($params));
                    $expected = [
                        'key' => "<KEY>",
                        'secret' => "<SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Bitbucket(
            key: "<KEY>",
            secret: "<SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Bitbucket::class, $response);
    }
    public function testMethodUpdateOAuth2Bitly(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "d95151000000000000000000000000000067af9b",
            "clientSecret" => "a13e250000000000000000000000000000d73095"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/bitly',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Bitly(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Bitly::class, $response);
    }
    public function testMethodUpdateOAuth2Box(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "deglcs00000000000000000000x2og6y",
            "clientSecret" => "OKM1f100000000000000000000eshEif"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/box',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Box(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Box::class, $response);
    }
    public function testMethodUpdateOAuth2Cloudflare(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "4b866000000000000000000000c9e4e2",
            "clientSecret" => "cfoc_5Q6YRl0000000000000000000000000000000000003d214f"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/cloudflare',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Cloudflare(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Cloudflare::class, $response);
    }
    public function testMethodUpdateOAuth2Dailymotion(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "apiKey" => "07a9000000000000067f",
            "apiSecret" => "a399a90000000000000000000000000000d90639"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/dailymotion',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['apiKey', 'apiSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'apiKey' => "<API_KEY>",
                        'apiSecret' => "<API_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Dailymotion(
            apiKey: "<API_KEY>",
            apiSecret: "<API_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Dailymotion::class, $response);
    }
    public function testMethodUpdateOAuth2Discord(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "950722000000343754",
            "clientSecret" => "YmPXnM000000000000000000002zFg5D",
            "prompt" => ["none"]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/discord',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2DiscordPrompt::NONE()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Discord(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false,
            prompt: [ProjectOAuth2DiscordPrompt::NONE()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Discord::class, $response);
    }
    public function testMethodUpdateOAuth2Disqus(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "publicKey" => "cgegH70000000000000000000000000000000000000000000000000000Hr1nYX",
            "secretKey" => "W7Bykj00000000000000000000000000000000000000000000000000003o43w9"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/disqus',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['publicKey', 'secretKey', 'enabled'], array_keys($params));
                    $expected = [
                        'publicKey' => "<PUBLIC_KEY>",
                        'secretKey' => "<SECRET_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Disqus(
            publicKey: "<PUBLIC_KEY>",
            secretKey: "<SECRET_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Disqus::class, $response);
    }
    public function testMethodUpdateOAuth2Dropbox(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "appKey" => "jl000000000009t",
            "appSecret" => "g200000000000vw"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/dropbox',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['appKey', 'appSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'appKey' => "<APP_KEY>",
                        'appSecret' => "<APP_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Dropbox(
            appKey: "<APP_KEY>",
            appSecret: "<APP_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Dropbox::class, $response);
    }
    public function testMethodUpdateOAuth2Etsy(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "keyString" => "nsgzxh0000000000008j85a2",
            "sharedSecret" => "tp000000ru"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/etsy',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['keyString', 'sharedSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'keyString' => "<KEY_STRING>",
                        'sharedSecret' => "<SHARED_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Etsy(
            keyString: "<KEY_STRING>",
            sharedSecret: "<SHARED_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Etsy::class, $response);
    }
    public function testMethodUpdateOAuth2Facebook(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "appId" => "260600000007694",
            "appSecret" => "2d0b2800000000000000000000d38af4"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/facebook',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['appId', 'appSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'appId' => "<APP_ID>",
                        'appSecret' => "<APP_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Facebook(
            appId: "<APP_ID>",
            appSecret: "<APP_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Facebook::class, $response);
    }
    public function testMethodUpdateOAuth2Figma(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "byay5H0000000000VtiI40",
            "clientSecret" => "yEpOYn0000000000000000004iIsU5"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/figma',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Figma(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Figma::class, $response);
    }
    public function testMethodUpdateOAuth2FusionAuth(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "b2222c00-0000-0000-0000-000000862097",
            "clientSecret" => "Jx4s0C0000000000000000000000000000000wGqLsc",
            "endpoint" => "example.fusionauth.io"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/fusionauth',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'endpoint', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'endpoint' => "<ENDPOINT>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2FusionAuth(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            endpoint: "<ENDPOINT>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2FusionAuth::class, $response);
    }
    public function testMethodUpdateOAuth2GitHub(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "e4d87900000000540733",
            "clientSecret" => "5e07c00000000000000000000000000000198bcc",
            "prompt" => ["select_account"]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/github',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2GitHubPrompt::SELECTACCOUNT()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2GitHub(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false,
            prompt: [ProjectOAuth2GitHubPrompt::SELECTACCOUNT()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Github::class, $response);
    }
    public function testMethodUpdateOAuth2Gitlab(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "applicationId" => "d41ffe0000000000000000000000000000000000000000000000000000d5e252",
            "secret" => "gloas-838cfa0000000000000000000000000000000000000000000000000000ecbb38",
            "endpoint" => "https://gitlab.com"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/gitlab',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['applicationId', 'secret', 'endpoint', 'enabled'], array_keys($params));
                    $expected = [
                        'applicationId' => "<APPLICATION_ID>",
                        'secret' => "<SECRET>",
                        'endpoint' => "https://example.com",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Gitlab(
            applicationId: "<APPLICATION_ID>",
            secret: "<SECRET>",
            endpoint: "https://example.com",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Gitlab::class, $response);
    }
    public function testMethodUpdateOAuth2Google(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "120000000095-92ifjb00000000000000000000g7ijfb.apps.googleusercontent.com",
            "clientSecret" => "GOCSPX-2k8gsR0000000000000000VNahJj",
            "prompt" => ["none"],
            "nativeEnabled" => true,
            "nativeClientIds" => []
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/google',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'prompt', 'enabled', 'nativeClientIds', 'nativeEnabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'prompt' => [ProjectOAuth2GooglePrompt::NONE()],
                        'enabled' => false,
                        'nativeClientIds' => [],
                        'nativeEnabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Google(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            prompt: [ProjectOAuth2GooglePrompt::NONE()],
            enabled: false,
            nativeClientIds: [],
            nativeEnabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Google::class, $response);
    }
    public function testMethodUpdateOAuth2HuggingFace(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "2ab9cff9-d711-40ad-a91e-b08a49c42d24",
            "clientSecret" => "oauth_app_secret_wcLhRtl000000000000000000000xbNdLt"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/huggingface',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2HuggingFace(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2HuggingFace::class, $response);
    }
    public function testMethodUpdateOAuth2Kakao(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "839ff5000000000000000000013206de",
            "clientSecret" => "jLNVOK00000000000000000000yJebea",
            "prompt" => ["none"]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/kakao',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2KakaoPrompt::NONE()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Kakao(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false,
            prompt: [ProjectOAuth2KakaoPrompt::NONE()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Kakao::class, $response);
    }
    public function testMethodUpdateOAuth2Keycloak(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "appwrite-o0000000st-app",
            "clientSecret" => "jdjrJd00000000000000000000HUsaZO",
            "endpoint" => "keycloak.example.com",
            "realmName" => "appwrite-realm"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/keycloak',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'endpoint', 'realmName', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'endpoint' => "<ENDPOINT>",
                        'realmName' => "<REALM_NAME>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Keycloak(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            endpoint: "<ENDPOINT>",
            realmName: "<REALM_NAME>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Keycloak::class, $response);
    }
    public function testMethodUpdateOAuth2Kick(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "01KQ7C00000000000001MFHS32",
            "clientSecret" => "34ac5600000000000000000000000000000000000000000000000000e830c8b"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/kick',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Kick(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Kick::class, $response);
    }
    public function testMethodUpdateOAuth2Linkedin(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "770000000000dv",
            "primaryClientSecret" => "WPL_AP1.2Bf0000000000000./HtlYw=="
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/linkedin',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'primaryClientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'primaryClientSecret' => "<PRIMARY_CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Linkedin(
            clientId: "<CLIENT_ID>",
            primaryClientSecret: "<PRIMARY_CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Linkedin::class, $response);
    }
    public function testMethodUpdateOAuth2Microsoft(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "applicationId" => "00001111-aaaa-2222-bbbb-3333cccc4444",
            "applicationSecret" => "A1bC2dE3fH4iJ5kL6mN7oP8qR9sT0u",
            "prompt" => ["none"],
            "tenant" => "common"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/microsoft',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['applicationId', 'applicationSecret', 'tenant', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'applicationId' => "<APPLICATION_ID>",
                        'applicationSecret' => "<APPLICATION_SECRET>",
                        'tenant' => "<TENANT>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2MicrosoftPrompt::NONE()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Microsoft(
            applicationId: "<APPLICATION_ID>",
            applicationSecret: "<APPLICATION_SECRET>",
            tenant: "<TENANT>",
            enabled: false,
            prompt: [ProjectOAuth2MicrosoftPrompt::NONE()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Microsoft::class, $response);
    }
    public function testMethodUpdateOAuth2Notion(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "oauthClientId" => "341d8700-0000-0000-0000-000000446ee3",
            "oauthClientSecret" => "secret_dLUr4b000000000000000000000000000000lFHAa9"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/notion',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['oauthClientId', 'oauthClientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'oauthClientId' => "<OAUTH_CLIENT_ID>",
                        'oauthClientSecret' => "<OAUTH_CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Notion(
            oauthClientId: "<OAUTH_CLIENT_ID>",
            oauthClientSecret: "<OAUTH_CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Notion::class, $response);
    }
    public function testMethodUpdateOAuth2Oidc(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "qibI2x0000000000000000000000000006L2YFoG",
            "clientSecret" => "Ah68ed000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003qpcHV",
            "prompt" => ["none"],
            "wellKnownURL" => "https://myoauth.com/.well-known/openid-configuration",
            "authorizationURL" => "https://myoauth.com/oauth2/authorize",
            "tokenURL" => "https://myoauth.com/oauth2/token",
            "userInfoURL" => "https://myoauth.com/oauth2/userinfo"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/oidc',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'wellKnownURL', 'authorizationURL', 'tokenURL', 'userInfoURL', 'prompt', 'maxAge', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'wellKnownURL' => "https://example.com",
                        'authorizationURL' => "https://example.com",
                        'tokenURL' => "https://example.com",
                        'userInfoURL' => "https://example.com",
                        'prompt' => [ProjectOAuth2OidcPrompt::NONE()],
                        'maxAge' => 1,
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Oidc(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            wellKnownURL: "https://example.com",
            authorizationURL: "https://example.com",
            tokenURL: "https://example.com",
            userInfoURL: "https://example.com",
            prompt: [ProjectOAuth2OidcPrompt::NONE()],
            maxAge: 1,
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Oidc::class, $response);
    }
    public function testMethodUpdateOAuth2Okta(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "0oa00000000000000698",
            "clientSecret" => "Kiq0000000000000000000000000000000000000-00000000000H2L5-3SJ-vRV",
            "prompt" => ["none"],
            "domain" => "trial-6400025.okta.com",
            "authorizationServerId" => "aus000000000000000h7z"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/okta',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'domain', 'authorizationServerId', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'domain' => "example.com",
                        'authorizationServerId' => "<AUTHORIZATION_SERVER_ID>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2OktaPrompt::NONE()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Okta(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            domain: "example.com",
            authorizationServerId: "<AUTHORIZATION_SERVER_ID>",
            enabled: false,
            prompt: [ProjectOAuth2OktaPrompt::NONE()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Okta::class, $response);
    }
    public function testMethodUpdateOAuth2Paypal(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB",
            "secretKey" => "EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/paypal',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'secretKey', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'secretKey' => "<SECRET_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Paypal(
            clientId: "<CLIENT_ID>",
            secretKey: "<SECRET_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Paypal::class, $response);
    }
    public function testMethodUpdateOAuth2PaypalSandbox(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "AdhIEG7-000000000000-0000000000000000000000000000000-0000000000000000000000-2pyB",
            "secretKey" => "EH8KCXtew--000000000000000000000000000000000000000_C-1_5UP_000000000000000CB7KDp"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/paypalSandbox',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'secretKey', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'secretKey' => "<SECRET_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2PaypalSandbox(
            clientId: "<CLIENT_ID>",
            secretKey: "<SECRET_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Paypal::class, $response);
    }
    public function testMethodUpdateOAuth2Podio(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "appwrite-oauth-test-app",
            "clientSecret" => "Rn247T0000000000000000000000000000000000000000000000000000W2zWTN"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/podio',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Podio(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Podio::class, $response);
    }
    public function testMethodUpdateOAuth2Resend(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "f47ac10b-58cc-4372-a567-0e02b2c3d479",
            "clientSecret" => "9c1e4b00000000000000000000000000000000000000000000000000a72d5f4"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/resend',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Resend(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Resend::class, $response);
    }
    public function testMethodUpdateOAuth2Salesforce(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "customerKey" => "3MVG9I0000000000000000000000000000000000000000000000000000000000000000000000000C5Aejq",
            "customerSecret" => "3w000000000000e2",
            "prompt" => ["login"]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/salesforce',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['customerKey', 'customerSecret', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'customerKey' => "<CUSTOMER_KEY>",
                        'customerSecret' => "<CUSTOMER_SECRET>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2SalesforcePrompt::LOGIN()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Salesforce(
            customerKey: "<CUSTOMER_KEY>",
            customerSecret: "<CUSTOMER_SECRET>",
            enabled: false,
            prompt: [ProjectOAuth2SalesforcePrompt::LOGIN()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Salesforce::class, $response);
    }
    public function testMethodUpdateOAuth2Slack(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "23000000089.15000000000023",
            "clientSecret" => "81656000000000000000000000f3d2fd"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/slack',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Slack(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Slack::class, $response);
    }
    public function testMethodUpdateOAuth2Spotify(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "6ec271000000000000000000009beace",
            "clientSecret" => "db068a000000000000000000008b5b9f"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/spotify',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Spotify(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Spotify::class, $response);
    }
    public function testMethodUpdateOAuth2Stripe(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "ca_UKibXX0000000000000000000006byvR",
            "apiSecretKey" => "sk_51SfOd000000000000000000000000000000000000000000000000000000000000000000000000000000000000000QGWYfp"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/stripe',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'apiSecretKey', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'apiSecretKey' => "<API_SECRET_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Stripe(
            clientId: "<CLIENT_ID>",
            apiSecretKey: "<API_SECRET_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Stripe::class, $response);
    }
    public function testMethodUpdateOAuth2TikTok(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "awz000000000tyw0",
            "clientSecret" => "6wXewM00000000000000000000yXnite"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/tiktok',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2TikTok(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2TikTok::class, $response);
    }
    public function testMethodUpdateOAuth2Tradeshift(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "oauth2ClientId" => "appwrite-test-org.appwrite-test-app",
            "oauth2ClientSecret" => "7cb52700-0000-0000-0000-000000ca5b83"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/tradeshift',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['oauth2ClientId', 'oauth2ClientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'oauth2ClientId' => "<OAUTH2_CLIENT_ID>",
                        'oauth2ClientSecret' => "<OAUTH2_CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Tradeshift(
            oauth2ClientId: "<OAUTH2_CLIENT_ID>",
            oauth2ClientSecret: "<OAUTH2_CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Tradeshift::class, $response);
    }
    public function testMethodUpdateOAuth2TradeshiftSandbox(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "oauth2ClientId" => "appwrite-test-org.appwrite-test-app",
            "oauth2ClientSecret" => "7cb52700-0000-0000-0000-000000ca5b83"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/tradeshiftBox',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['oauth2ClientId', 'oauth2ClientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'oauth2ClientId' => "<OAUTH2_CLIENT_ID>",
                        'oauth2ClientSecret' => "<OAUTH2_CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2TradeshiftSandbox(
            oauth2ClientId: "<OAUTH2_CLIENT_ID>",
            oauth2ClientSecret: "<OAUTH2_CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Tradeshift::class, $response);
    }
    public function testMethodUpdateOAuth2Twitch(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "vvi0in000000000000000000ikmt9p",
            "clientSecret" => "pmapue000000000000000000zylw3v"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/twitch',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Twitch(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Twitch::class, $response);
    }
    public function testMethodUpdateOAuth2Webflow(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "8bb20000000000000000000000000000000000000000000000000000000040dd",
            "clientSecret" => "59bf00000000000000000000000000000000000000000000000000000000fe59"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/webflow',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Webflow(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Webflow::class, $response);
    }
    public function testMethodUpdateOAuth2WordPress(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "130005",
            "clientSecret" => "PlBfJS0000000000000000000000000000000000000000000000000000EdUZJk"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/wordpress',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2WordPress(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2WordPress::class, $response);
    }
    public function testMethodUpdateOAuth2X(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "customerKey" => "slzZV0000000000000NFLaWT",
            "secretKey" => "tkEPkp00000000000000000000000000000000000000FTxbI9"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/x',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['customerKey', 'secretKey', 'enabled'], array_keys($params));
                    $expected = [
                        'customerKey' => "<CUSTOMER_KEY>",
                        'secretKey' => "<SECRET_KEY>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2X(
            customerKey: "<CUSTOMER_KEY>",
            secretKey: "<SECRET_KEY>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2X::class, $response);
    }
    public function testMethodUpdateOAuth2Yahoo(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "dj0yJm000000000000000000000000000000000000000000000000000000000000000000000000000000000000Z4PWRm",
            "clientSecret" => "cf978f0000000000000000000000000000c5e2e9"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/yahoo',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Yahoo(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Yahoo::class, $response);
    }
    public function testMethodUpdateOAuth2Yandex(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "6a8a6a0000000000000000000091483c",
            "clientSecret" => "bbf98500000000000000000000c75a63"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/yandex',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Yandex(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Yandex::class, $response);
    }
    public function testMethodUpdateOAuth2Zoho(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "1000.83C178000000000000000000RPNX0B",
            "clientSecret" => "fb5cac000000000000000000000000000000a68f6e",
            "prompt" => ["consent"]
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/zoho',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled', 'prompt'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                        'prompt' => [ProjectOAuth2ZohoPrompt::CONSENT()],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Zoho(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false,
            prompt: [ProjectOAuth2ZohoPrompt::CONSENT()]
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Zoho::class, $response);
    }
    public function testMethodUpdateOAuth2Zoom(): void
    {
        $data = [
            "\$id" => "github",
            "enabled" => true,
            "clientId" => "QMAC00000000000000w0AQ",
            "clientSecret" => "GAWsG4000000000000000000007U01ON"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/oauth2/zoom',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['clientId', 'clientSecret', 'enabled'], array_keys($params));
                    $expected = [
                        'clientId' => "<CLIENT_ID>",
                        'clientSecret' => "<CLIENT_SECRET>",
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateOAuth2Zoom(
            clientId: "<CLIENT_ID>",
            clientSecret: "<CLIENT_SECRET>",
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Zoom::class, $response);
    }
    public function testMethodGetOAuth2Provider(): void
    {
        $data = array_replace(
            [
                "\$id" => "github",
                "enabled" => true,
                "clientId" => "839ff5000000000000000000013206de",
                "clientSecret" => "jLNVOK00000000000000000000yJebea",
                "prompt" => ["none"]
            ],
            [
                "\$id" => "kakao"
            ]
        );

        $this->client
            ->expects()->call(
                'GET',
                '/project/oauth2/amazon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['providerId'], array_keys($params));
                    $expected = [
                        'providerId' => ProjectOAuthProviderId::AMAZON(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getOAuth2Provider(
            ProjectOAuthProviderId::AMAZON()
        );

        $this->assertInstanceOf(\Appwrite\Models\OAuth2Kakao::class, $response);
    }
    public function testMethodListPlatforms(): void
    {
        $data = [
            "total" => 5,
            "platforms" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/platforms',
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

        $response = $this->project->listPlatforms(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformList::class, $response);
    }
    public function testMethodCreateAndroidPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "applicationId" => "com.company.appname",
            "fingerprints" => []
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/platforms/android',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'applicationId', 'fingerprints'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'applicationId' => "<APPLICATION_ID>",
                        'fingerprints' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createAndroidPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<APPLICATION_ID>",
            fingerprints: []
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformAndroid::class, $response);
    }
    public function testMethodUpdateAndroidPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "applicationId" => "com.company.appname",
            "fingerprints" => []
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/platforms/android/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'applicationId', 'fingerprints'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'applicationId' => "<APPLICATION_ID>",
                        'fingerprints' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateAndroidPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<APPLICATION_ID>",
            fingerprints: []
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformAndroid::class, $response);
    }
    public function testMethodCreateApplePlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "bundleIdentifier" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/platforms/apple',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'bundleIdentifier'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'bundleIdentifier' => "<BUNDLE_IDENTIFIER>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createApplePlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<BUNDLE_IDENTIFIER>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformApple::class, $response);
    }
    public function testMethodUpdateApplePlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "bundleIdentifier" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/platforms/apple/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'bundleIdentifier'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'bundleIdentifier' => "<BUNDLE_IDENTIFIER>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateApplePlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<BUNDLE_IDENTIFIER>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformApple::class, $response);
    }
    public function testMethodCreateLinuxPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageName" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/platforms/linux',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'packageName'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'packageName' => "<PACKAGE_NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createLinuxPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }
    public function testMethodUpdateLinuxPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageName" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/platforms/linux/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'packageName'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'packageName' => "<PACKAGE_NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateLinuxPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }
    public function testMethodCreateWebPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "hostname" => "app.example.com"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/platforms/web',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'hostname'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'hostname' => "app.example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createWebPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "app.example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWeb::class, $response);
    }
    public function testMethodUpdateWebPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "hostname" => "app.example.com"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/platforms/web/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'hostname'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'hostname' => "app.example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateWebPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "app.example.com"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWeb::class, $response);
    }
    public function testMethodCreateWindowsPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageIdentifierName" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/platforms/windows',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'packageIdentifierName'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'packageIdentifierName' => "<PACKAGE_IDENTIFIER_NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createWindowsPlatform(
            "<PLATFORM_ID>",
            "<NAME>",
            "<PACKAGE_IDENTIFIER_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformWindows::class, $response);
    }
    public function testMethodUpdateWindowsPlatform(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Web App",
            "type" => "windows",
            "packageIdentifierName" => "com.company.appname"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/platforms/windows/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId', 'name', 'packageIdentifierName'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                        'name' => "<NAME>",
                        'packageIdentifierName' => "<PACKAGE_IDENTIFIER_NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

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
            [
                "\$id" => "5e5ea5c16897e",
                "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                "name" => "My Web App",
                "type" => "windows",
                "packageName" => "com.company.appname"
            ],
            [
                "type" => "linux"
            ]
        );

        $this->client
            ->expects()->call(
                'GET',
                '/project/platforms/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getPlatform(
            "<PLATFORM_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\PlatformLinux::class, $response);
    }
    public function testMethodDeletePlatform(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project/platforms/%3CPLATFORM_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['platformId'], array_keys($params));
                    $expected = [
                        'platformId' => "<PLATFORM_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->deletePlatform(
            "<PLATFORM_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListPolicies(): void
    {
        $data = [
            "total" => 10,
            "policies" => []
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/policies',
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

        $response = $this->project->listPolicies(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PolicyList::class, $response);
    }
    public function testMethodUpdateDenyAliasedEmailPolicy(): void
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
                '/project/policies/deny-aliased-email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateDenyAliasedEmailPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateDenyCorporateEmailPolicy(): void
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
                '/project/policies/deny-corporate-email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateDenyCorporateEmailPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateDenyDisposableEmailPolicy(): void
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
                '/project/policies/deny-disposable-email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateDenyDisposableEmailPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateDenyFreeEmailPolicy(): void
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
                '/project/policies/deny-free-email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateDenyFreeEmailPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateDenyRealtimeGuestsPolicy(): void
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
                '/project/policies/deny-realtime-guests',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateDenyRealtimeGuestsPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateMembershipPrivacyPolicy(): void
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
                '/project/policies/membership-privacy',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['userId', 'userEmail', 'userPhone', 'userName', 'userMFA', 'userAccessedAt'], array_keys($params));
                    $expected = [
                        'userId' => false,
                        'userEmail' => false,
                        'userPhone' => false,
                        'userName' => false,
                        'userMFA' => false,
                        'userAccessedAt' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateMembershipPrivacyPolicy(
            userId: false,
            userEmail: false,
            userPhone: false,
            userName: false,
            userMFA: false,
            userAccessedAt: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateMFAFactorsPolicy(): void
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
                '/project/policies/mfa-factors',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['totp', 'email', 'phone', 'custom'], array_keys($params));
                    $expected = [
                        'totp' => false,
                        'email' => false,
                        'phone' => false,
                        'custom' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateMFAFactorsPolicy(
            totp: false,
            email: false,
            phone: false,
            custom: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasskeyPolicy(): void
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
                '/project/policies/passkey',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['rpId'], array_keys($params));
                    $expected = [
                        'rpId' => "<RP_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasskeyPolicy(
            "<RP_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordDictionaryPolicy(): void
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
                '/project/policies/password-dictionary',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled', 'denyList'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                        'denyList' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordDictionaryPolicy(
            false,
            denyList: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordHistoryPolicy(): void
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
                '/project/policies/password-history',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
                        'total' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordHistoryPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordPersonalDataPolicy(): void
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
                '/project/policies/password-personal-data',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled', 'denyList'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                        'denyList' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordPersonalDataPolicy(
            false,
            denyList: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordPwnedPolicy(): void
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
                '/project/policies/password-pwned',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled', 'sessions', 'users'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                        'sessions' => false,
                        'users' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordPwnedPolicy(
            enabled: false,
            sessions: false,
            users: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordRotationPolicy(): void
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
                '/project/policies/password-rotation',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled', 'maxAge'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                        'maxAge' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordRotationPolicy(
            enabled: false,
            maxAge: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdatePasswordStrengthPolicy(): void
    {
        $data = [
            "\$id" => "password-dictionary",
            "min" => 12,
            "uppercase" => true,
            "lowercase" => true,
            "number" => true,
            "symbols" => true
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/policies/password-strength',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['min', 'uppercase', 'lowercase', 'number', 'symbols'], array_keys($params));
                    $expected = [
                        'min' => 1,
                        'uppercase' => false,
                        'lowercase' => false,
                        'number' => false,
                        'symbols' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updatePasswordStrengthPolicy(
            min: 1,
            uppercase: false,
            lowercase: false,
            number: false,
            symbols: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PolicyPasswordStrength::class, $response);
    }
    public function testMethodUpdateSessionAlertPolicy(): void
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
                '/project/policies/session-alert',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateSessionAlertPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateSessionDurationPolicy(): void
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
                '/project/policies/session-duration',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['duration'], array_keys($params));
                    $expected = [
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

        $response = $this->project->updateSessionDurationPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateSessionInvalidationPolicy(): void
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
                '/project/policies/session-invalidation',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['enabled'], array_keys($params));
                    $expected = [
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateSessionInvalidationPolicy(
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateSessionLimitPolicy(): void
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
                '/project/policies/session-limit',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
                        'total' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateSessionLimitPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateUserLimitPolicy(): void
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
                '/project/policies/user-limit',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
                        'total' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateUserLimitPolicy(
            1
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodGetPolicy(): void
    {
        $data = array_replace(
            [
                "\$id" => "password-dictionary",
                "rpId" => "example.com",
                "origins" => []
            ],
            [
                "\$id" => "passkey"
            ]
        );

        $this->client
            ->expects()->call(
                'GET',
                '/project/policies/password-dictionary',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['policyId'], array_keys($params));
                    $expected = [
                        'policyId' => ProjectPolicyId::PASSWORDDICTIONARY(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getPolicy(
            ProjectPolicyId::PASSWORDDICTIONARY()
        );

        $this->assertInstanceOf(\Appwrite\Models\PolicyPasskey::class, $response);
    }
    public function testMethodUpdateProtocol(): void
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
                '/project/protocols/rest',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['protocolId', 'enabled'], array_keys($params));
                    $expected = [
                        'protocolId' => ProjectProtocolId::REST(),
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateProtocol(
            ProjectProtocolId::REST(),
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodUpdateService(): void
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
                '/project/services/account',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['serviceId', 'enabled'], array_keys($params));
                    $expected = [
                        'serviceId' => ProjectServiceId::ACCOUNT(),
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateService(
            ProjectServiceId::ACCOUNT(),
            false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodDeleteSessions(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project/sessions',
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

        $response = $this->project->deleteSessions();

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateSMTP(): void
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
                '/project/smtp',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['host', 'port', 'username', 'password', 'senderEmail', 'senderName', 'replyToEmail', 'replyToName', 'secure', 'enabled'], array_keys($params));
                    $expected = [
                        'host' => "example.com",
                        'port' => 1,
                        'username' => "<USERNAME>",
                        'password' => "password",
                        'senderEmail' => "email@example.com",
                        'senderName' => "<SENDER_NAME>",
                        'replyToEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                        'secure' => ProjectSMTPSecure::TLS(),
                        'enabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateSMTP(
            host: "example.com",
            port: 1,
            username: "<USERNAME>",
            password: "password",
            senderEmail: "email@example.com",
            senderName: "<SENDER_NAME>",
            replyToEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>",
            secure: ProjectSMTPSecure::TLS(),
            enabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Project::class, $response);
    }
    public function testMethodCreateSMTPTest(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'POST',
                '/project/smtp/tests',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['emails'], array_keys($params));
                    $expected = [
                        'emails' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->createSMTPTest(
            []
        );

        $this->assertSame($data, $response);
    }
    public function testMethodListEmailTemplates(): void
    {
        $data = [
            "total" => 5,
            "templates" => [
                [
                    "templateId" => "verification",
                    "locale" => "en_us",
                    "message" => "Click on the link to verify your account.",
                    "senderName" => "My User",
                    "senderEmail" => "mail@appwrite.io",
                    "replyToEmail" => "emails@appwrite.io",
                    "replyToName" => "Support Team",
                    "subject" => "Please verify your email address"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/templates/email',
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

        $response = $this->project->listEmailTemplates(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplateList::class, $response);
    }
    public function testMethodUpdateEmailTemplate(): void
    {
        $data = [
            "templateId" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyToEmail" => "emails@appwrite.io",
            "replyToName" => "Support Team",
            "subject" => "Please verify your email address"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/project/templates/email',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['templateId', 'locale', 'subject', 'message', 'senderName', 'senderEmail', 'replyToEmail', 'replyToName'], array_keys($params));
                    $expected = [
                        'templateId' => ProjectEmailTemplateId::VERIFICATION(),
                        'locale' => ProjectEmailTemplateLocale::AF(),
                        'subject' => "<SUBJECT>",
                        'message' => "<MESSAGE>",
                        'senderName' => "<SENDER_NAME>",
                        'senderEmail' => "email@example.com",
                        'replyToEmail' => "email@example.com",
                        'replyToName' => "<REPLY_TO_NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->updateEmailTemplate(
            ProjectEmailTemplateId::VERIFICATION(),
            locale: ProjectEmailTemplateLocale::AF(),
            subject: "<SUBJECT>",
            message: "<MESSAGE>",
            senderName: "<SENDER_NAME>",
            senderEmail: "email@example.com",
            replyToEmail: "email@example.com",
            replyToName: "<REPLY_TO_NAME>"
        );

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplate::class, $response);
    }
    public function testMethodGetEmailTemplate(): void
    {
        $data = [
            "templateId" => "verification",
            "locale" => "en_us",
            "message" => "Click on the link to verify your account.",
            "senderName" => "My User",
            "senderEmail" => "mail@appwrite.io",
            "replyToEmail" => "emails@appwrite.io",
            "replyToName" => "Support Team",
            "subject" => "Please verify your email address"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/templates/email/verification',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['templateId', 'locale'], array_keys($params));
                    $expected = [
                        'templateId' => ProjectEmailTemplateId::VERIFICATION(),
                        'locale' => ProjectEmailTemplateLocale::AF(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getEmailTemplate(
            ProjectEmailTemplateId::VERIFICATION(),
            locale: ProjectEmailTemplateLocale::AF()
        );

        $this->assertInstanceOf(\Appwrite\Models\EmailTemplate::class, $response);
    }
    public function testMethodListVariables(): void
    {
        $data = [
            "total" => 5,
            "variables" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "key" => "API_KEY",
                    "description" => "Stripe secret key used at checkout.",
                    "value" => "myPa\$\$word1",
                    "secret" => true,
                    "resourceType" => "function",
                    "resourceId" => "myAwesomeFunction"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/variables',
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

        $response = $this->project->listVariables(
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\VariableList::class, $response);
    }
    public function testMethodCreateVariable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "description" => "Stripe secret key used at checkout.",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/project/variables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'variableId' => "<VARIABLE_ID>",
                        'key' => "<KEY>",
                        'value' => "<VALUE>",
                        'secret' => false,
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

        $response = $this->project->createVariable(
            "<VARIABLE_ID>",
            "<KEY>",
            "<VALUE>",
            secret: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }
    public function testMethodGetVariable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "description" => "Stripe secret key used at checkout.",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/project/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['variableId'], array_keys($params));
                    $expected = [
                        'variableId' => "<VARIABLE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->getVariable(
            "<VARIABLE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }
    public function testMethodUpdateVariable(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "description" => "Stripe secret key used at checkout.",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/project/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'variableId' => "<VARIABLE_ID>",
                        'key' => "<KEY>",
                        'value' => "<VALUE>",
                        'secret' => false,
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

        $response = $this->project->updateVariable(
            "<VARIABLE_ID>",
            key: "<KEY>",
            value: "<VALUE>",
            secret: false,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Variable::class, $response);
    }
    public function testMethodDeleteVariable(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/project/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['variableId'], array_keys($params));
                    $expected = [
                        'variableId' => "<VARIABLE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->project->deleteVariable(
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
