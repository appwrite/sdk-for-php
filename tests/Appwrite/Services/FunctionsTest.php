<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Runtime;
use Appwrite\Enums\ProjectKeyScopes;
use Appwrite\InputFile;
use Appwrite\Enums\TemplateReferenceType;
use Appwrite\Enums\VCSReferenceType;
use Appwrite\Enums\DeploymentDownloadType;
use Appwrite\Enums\ExecutionMethod;

final class FunctionsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Functions $functions;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->functions = new Functions($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "functions" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "execute" => [],
                    "name" => "My Function",
                    "description" => "Sends a welcome email to newly registered users.",
                    "enabled" => true,
                    "live" => true,
                    "logging" => true,
                    "runtime" => "python-3.8",
                    "deploymentRetention" => 7,
                    "deploymentId" => "5e5ea5c16897e",
                    "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "latestDeploymentId" => "5e5ea5c16897e",
                    "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "latestDeploymentStatus" => "ready",
                    "scopes" => [],
                    "vars" => [
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
                    ],
                    "events" => [],
                    "schedule" => "5 4 * * *",
                    "timeout" => 300,
                    "entrypoint" => "index.js",
                    "commands" => "npm install",
                    "version" => "v2",
                    "installationId" => "6m40at4ejk5h2u9s1hboo",
                    "providerRepositoryId" => "appwrite",
                    "providerBranch" => "main",
                    "providerRootDirectory" => "functions/helloWorld",
                    "providerSilentMode" => true,
                    "providerBranches" => [],
                    "providerPaths" => [],
                    "buildSpecification" => "s-1vcpu-512mb",
                    "runtimeSpecification" => "s-1vcpu-512mb",
                    "emailEnabled" => true
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions',
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

        $response = $this->functions->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\FunctionList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => [],
            "name" => "My Function",
            "description" => "Sends a welcome email to newly registered users.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "scopes" => [],
            "vars" => [
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
            ],
            "events" => [],
            "schedule" => "5 4 * * *",
            "timeout" => 300,
            "entrypoint" => "index.js",
            "commands" => "npm install",
            "version" => "v2",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "functions/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "emailEnabled" => true
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'name', 'runtime', 'execute', 'events', 'schedule', 'timeout', 'enabled', 'logging', 'entrypoint', 'commands', 'scopes', 'installationId', 'providerRepositoryId', 'providerBranch', 'providerSilentMode', 'providerRootDirectory', 'providerBranches', 'providerPaths', 'buildSpecification', 'runtimeSpecification', 'deploymentRetention', 'interval', 'description'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'name' => "<NAME>",
                        'runtime' => Runtime::NODE145(),
                        'execute' => [],
                        'events' => [],
                        'schedule' => "0 0 * * *",
                        'timeout' => 1,
                        'enabled' => false,
                        'logging' => false,
                        'entrypoint' => "<ENTRYPOINT>",
                        'commands' => "<COMMANDS>",
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
                        'installationId' => "<INSTALLATION_ID>",
                        'providerRepositoryId' => "<PROVIDER_REPOSITORY_ID>",
                        'providerBranch' => "<PROVIDER_BRANCH>",
                        'providerSilentMode' => false,
                        'providerRootDirectory' => "<PROVIDER_ROOT_DIRECTORY>",
                        'providerBranches' => [],
                        'providerPaths' => [],
                        'buildSpecification' => "s-1vcpu-512mb",
                        'runtimeSpecification' => "s-1vcpu-512mb",
                        'deploymentRetention' => 1,
                        'interval' => 1,
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

        $response = $this->functions->create(
            "<FUNCTION_ID>",
            "<NAME>",
            Runtime::NODE145(),
            execute: [],
            events: [],
            schedule: "0 0 * * *",
            timeout: 1,
            enabled: false,
            logging: false,
            entrypoint: "<ENTRYPOINT>",
            commands: "<COMMANDS>",
            scopes: [ProjectKeyScopes::PROJECTREAD()],
            installationId: "<INSTALLATION_ID>",
            providerRepositoryId: "<PROVIDER_REPOSITORY_ID>",
            providerBranch: "<PROVIDER_BRANCH>",
            providerSilentMode: false,
            providerRootDirectory: "<PROVIDER_ROOT_DIRECTORY>",
            providerBranches: [],
            providerPaths: [],
            buildSpecification: "s-1vcpu-512mb",
            runtimeSpecification: "s-1vcpu-512mb",
            deploymentRetention: 1,
            interval: 1,
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\FunctionModel::class, $response);
    }
    public function testMethodListRuntimes(): void
    {
        $data = [
            "total" => 5,
            "runtimes" => [
                [
                    "\$id" => "python-3.8",
                    "key" => "python",
                    "name" => "Python",
                    "version" => "3.8",
                    "base" => "python:3.8-alpine",
                    "image" => "appwrite\\/runtime-for-python:3.8",
                    "logo" => "python.png",
                    "supports" => []
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/runtimes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->functions->listRuntimes(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\RuntimeList::class, $response);
    }
    public function testMethodListSpecifications(): void
    {
        $data = [
            "total" => 5,
            "specifications" => [
                [
                    "memory" => 512,
                    "cpus" => 1,
                    "enabled" => true,
                    "slug" => "s-1vcpu-512mb"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/specifications',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['type', 'total'], array_keys($params));
                    $expected = [
                        'type' => "runtimes",
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

        $response = $this->functions->listSpecifications(
            type: "runtimes",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\SpecificationList::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => [],
            "name" => "My Function",
            "description" => "Sends a welcome email to newly registered users.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "scopes" => [],
            "vars" => [
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
            ],
            "events" => [],
            "schedule" => "5 4 * * *",
            "timeout" => 300,
            "entrypoint" => "index.js",
            "commands" => "npm install",
            "version" => "v2",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "functions/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "emailEnabled" => true
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->get(
            "<FUNCTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\FunctionModel::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => [],
            "name" => "My Function",
            "description" => "Sends a welcome email to newly registered users.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "scopes" => [],
            "vars" => [
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
            ],
            "events" => [],
            "schedule" => "5 4 * * *",
            "timeout" => 300,
            "entrypoint" => "index.js",
            "commands" => "npm install",
            "version" => "v2",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "functions/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "emailEnabled" => true
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/functions/%3CFUNCTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'name', 'runtime', 'execute', 'events', 'schedule', 'timeout', 'enabled', 'logging', 'entrypoint', 'commands', 'scopes', 'installationId', 'providerRepositoryId', 'providerBranch', 'providerSilentMode', 'providerRootDirectory', 'providerBranches', 'providerPaths', 'buildSpecification', 'runtimeSpecification', 'deploymentRetention', 'interval', 'description', 'emailEnabled'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'name' => "<NAME>",
                        'runtime' => Runtime::NODE145(),
                        'execute' => [],
                        'events' => [],
                        'schedule' => "0 0 * * *",
                        'timeout' => 1,
                        'enabled' => false,
                        'logging' => false,
                        'entrypoint' => "<ENTRYPOINT>",
                        'commands' => "<COMMANDS>",
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
                        'installationId' => "<INSTALLATION_ID>",
                        'providerRepositoryId' => "<PROVIDER_REPOSITORY_ID>",
                        'providerBranch' => "<PROVIDER_BRANCH>",
                        'providerSilentMode' => false,
                        'providerRootDirectory' => "<PROVIDER_ROOT_DIRECTORY>",
                        'providerBranches' => [],
                        'providerPaths' => [],
                        'buildSpecification' => "s-1vcpu-512mb",
                        'runtimeSpecification' => "s-1vcpu-512mb",
                        'deploymentRetention' => 1,
                        'interval' => 1,
                        'description' => "<DESCRIPTION>",
                        'emailEnabled' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->update(
            "<FUNCTION_ID>",
            "<NAME>",
            runtime: Runtime::NODE145(),
            execute: [],
            events: [],
            schedule: "0 0 * * *",
            timeout: 1,
            enabled: false,
            logging: false,
            entrypoint: "<ENTRYPOINT>",
            commands: "<COMMANDS>",
            scopes: [ProjectKeyScopes::PROJECTREAD()],
            installationId: "<INSTALLATION_ID>",
            providerRepositoryId: "<PROVIDER_REPOSITORY_ID>",
            providerBranch: "<PROVIDER_BRANCH>",
            providerSilentMode: false,
            providerRootDirectory: "<PROVIDER_ROOT_DIRECTORY>",
            providerBranches: [],
            providerPaths: [],
            buildSpecification: "s-1vcpu-512mb",
            runtimeSpecification: "s-1vcpu-512mb",
            deploymentRetention: 1,
            interval: 1,
            description: "<DESCRIPTION>",
            emailEnabled: false
        );

        $this->assertInstanceOf(\Appwrite\Models\FunctionModel::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/functions/%3CFUNCTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->delete(
            "<FUNCTION_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateFunctionDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => [],
            "name" => "My Function",
            "description" => "Sends a welcome email to newly registered users.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "scopes" => [],
            "vars" => [
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
            ],
            "events" => [],
            "schedule" => "5 4 * * *",
            "timeout" => 300,
            "entrypoint" => "index.js",
            "commands" => "npm install",
            "version" => "v2",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "functions/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "emailEnabled" => true
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/functions/%3CFUNCTION_ID%3E/deployment',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->updateFunctionDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\FunctionModel::class, $response);
    }
    public function testMethodListDeployments(): void
    {
        $data = [
            "total" => 5,
            "deployments" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "type" => "vcs",
                    "resourceId" => "5e5ea6g16897e",
                    "resourceType" => "functions",
                    "entrypoint" => "index.js",
                    "sourceSize" => 128,
                    "buildSize" => 128,
                    "totalSize" => 128,
                    "buildId" => "5e5ea5c16897e",
                    "activate" => true,
                    "screenshotLight" => "5e5ea5c16897e",
                    "screenshotDark" => "5e5ea5c16897e",
                    "status" => "waiting",
                    "buildLogs" => "Compiling source files...",
                    "buildDuration" => 128,
                    "providerRepositoryName" => "database",
                    "providerRepositoryOwner" => "utopia",
                    "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
                    "providerCommitHash" => "7c3f25d",
                    "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
                    "providerCommitAuthor" => "Khushboo Verma",
                    "providerCommitMessage" => "Update index.js",
                    "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
                    "providerBranch" => "0.7.x",
                    "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E/deployments',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->listDeployments(
            "<FUNCTION_ID>",
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\DeploymentList::class, $response);
    }
    public function testMethodCreateDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions/%3CFUNCTION_ID%3E/deployments',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'code', 'activate', 'entrypoint', 'commands'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'activate' => false,
                        'entrypoint' => "<ENTRYPOINT>",
                        'commands' => "<COMMANDS>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->createDeployment(
            "<FUNCTION_ID>",
            InputFile::withData('', 'image/png'),
            false,
            entrypoint: "<ENTRYPOINT>",
            commands: "<COMMANDS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodCreateDuplicateDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions/%3CFUNCTION_ID%3E/deployments/duplicate',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId', 'buildId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                        'buildId' => "<BUILD_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->createDuplicateDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>",
            buildId: "<BUILD_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodCreateTemplateDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions/%3CFUNCTION_ID%3E/deployments/template',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'repository', 'owner', 'rootDirectory', 'type', 'reference', 'activate'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'repository' => "<REPOSITORY>",
                        'owner' => "<OWNER>",
                        'rootDirectory' => "<ROOT_DIRECTORY>",
                        'type' => TemplateReferenceType::COMMIT(),
                        'reference' => "<REFERENCE>",
                        'activate' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->createTemplateDeployment(
            "<FUNCTION_ID>",
            "<REPOSITORY>",
            "<OWNER>",
            "<ROOT_DIRECTORY>",
            TemplateReferenceType::COMMIT(),
            "<REFERENCE>",
            activate: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodCreateVcsDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions/%3CFUNCTION_ID%3E/deployments/vcs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'type', 'reference', 'activate'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'type' => VCSReferenceType::BRANCH(),
                        'reference' => "<REFERENCE>",
                        'activate' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->createVcsDeployment(
            "<FUNCTION_ID>",
            VCSReferenceType::BRANCH(),
            "<REFERENCE>",
            activate: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodGetDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E/deployments/%3CDEPLOYMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->getDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodDeleteDeployment(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/functions/%3CFUNCTION_ID%3E/deployments/%3CDEPLOYMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->deleteDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetDeploymentDownload(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E/deployments/%3CDEPLOYMENT_ID%3E/download',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId', 'type', 'token'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                        'type' => DeploymentDownloadType::SOURCE(),
                        'token' => "<TOKEN>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->getDeploymentDownload(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>",
            type: DeploymentDownloadType::SOURCE(),
            token: "<TOKEN>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateDeploymentStatus(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "type" => "vcs",
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "entrypoint" => "index.js",
            "sourceSize" => 128,
            "buildSize" => 128,
            "totalSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "screenshotLight" => "5e5ea5c16897e",
            "screenshotDark" => "5e5ea5c16897e",
            "status" => "waiting",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranch" => "0.7.x",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/functions/%3CFUNCTION_ID%3E/deployments/%3CDEPLOYMENT_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'deploymentId' => "<DEPLOYMENT_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->updateDeploymentStatus(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodListExecutions(): void
    {
        $data = [
            "total" => 5,
            "executions" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "resourceId" => "5e5ea6g16897e",
                    "resourceType" => "functions",
                    "deploymentId" => "5e5ea5c16897e",
                    "trigger" => "http",
                    "status" => "waiting",
                    "requestMethod" => "GET",
                    "requestPath" => "/articles?id=5",
                    "requestHeaders" => [
                        [
                            "name" => "Content-Type",
                            "value" => "application/json"
                        ]
                    ],
                    "responseStatusCode" => 200,
                    "responseBody" => "[RESPONSEBODY]",
                    "responseHeaders" => [
                        [
                            "name" => "Content-Type",
                            "value" => "application/json"
                        ]
                    ],
                    "logs" => "[LOGS]",
                    "errors" => "[ERRORS]",
                    "duration" => 1.23
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E/executions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->listExecutions(
            "<FUNCTION_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ExecutionList::class, $response);
    }
    public function testMethodCreateExecution(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "deploymentId" => "5e5ea5c16897e",
            "trigger" => "http",
            "status" => "waiting",
            "requestMethod" => "GET",
            "requestPath" => "/articles?id=5",
            "requestHeaders" => [
                [
                    "name" => "Content-Type",
                    "value" => "application/json"
                ]
            ],
            "responseStatusCode" => 200,
            "responseBody" => "[RESPONSEBODY]",
            "responseHeaders" => [
                [
                    "name" => "Content-Type",
                    "value" => "application/json"
                ]
            ],
            "logs" => "[LOGS]",
            "errors" => "[ERRORS]",
            "duration" => 1.23
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/functions/%3CFUNCTION_ID%3E/executions',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'body', 'async', 'path', 'method', 'headers', 'scheduledAt'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'body' => "<BODY>",
                        'async' => false,
                        'path' => "<PATH>",
                        'method' => ExecutionMethod::GET(),
                        'headers' => [],
                        'scheduledAt' => "<SCHEDULED_AT>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->createExecution(
            "<FUNCTION_ID>",
            body: "<BODY>",
            async: false,
            xpath: "<PATH>",
            method: ExecutionMethod::GET(),
            headers: [],
            scheduledAt: "<SCHEDULED_AT>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Execution::class, $response);
    }
    public function testMethodGetExecution(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "resourceId" => "5e5ea6g16897e",
            "resourceType" => "functions",
            "deploymentId" => "5e5ea5c16897e",
            "trigger" => "http",
            "status" => "waiting",
            "requestMethod" => "GET",
            "requestPath" => "/articles?id=5",
            "requestHeaders" => [
                [
                    "name" => "Content-Type",
                    "value" => "application/json"
                ]
            ],
            "responseStatusCode" => 200,
            "responseBody" => "[RESPONSEBODY]",
            "responseHeaders" => [
                [
                    "name" => "Content-Type",
                    "value" => "application/json"
                ]
            ],
            "logs" => "[LOGS]",
            "errors" => "[ERRORS]",
            "duration" => 1.23
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/functions/%3CFUNCTION_ID%3E/executions/%3CEXECUTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'executionId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'executionId' => "<EXECUTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->getExecution(
            "<FUNCTION_ID>",
            "<EXECUTION_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Execution::class, $response);
    }
    public function testMethodDeleteExecution(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/functions/%3CFUNCTION_ID%3E/executions/%3CEXECUTION_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'executionId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
                        'executionId' => "<EXECUTION_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->functions->deleteExecution(
            "<FUNCTION_ID>",
            "<EXECUTION_ID>"
        );

        $this->assertSame($data, $response);
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
                '/functions/%3CFUNCTION_ID%3E/variables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->listVariables(
            "<FUNCTION_ID>",
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
                '/functions/%3CFUNCTION_ID%3E/variables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->createVariable(
            "<FUNCTION_ID>",
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
                '/functions/%3CFUNCTION_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'variableId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->getVariable(
            "<FUNCTION_ID>",
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
                '/functions/%3CFUNCTION_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->updateVariable(
            "<FUNCTION_ID>",
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
                '/functions/%3CFUNCTION_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['functionId', 'variableId'], array_keys($params));
                    $expected = [
                        'functionId' => "<FUNCTION_ID>",
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

        $response = $this->functions->deleteVariable(
            "<FUNCTION_ID>",
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
