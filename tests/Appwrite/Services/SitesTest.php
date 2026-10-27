<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Framework;
use Appwrite\Enums\BuildRuntime;
use Appwrite\Enums\Adapter;
use Appwrite\Enums\ProjectKeyScopes;
use Appwrite\InputFile;
use Appwrite\Enums\TemplateReferenceType;
use Appwrite\Enums\VCSReferenceType;
use Appwrite\Enums\DeploymentDownloadType;

final class SitesTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Sites $sites;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->sites = new Sites($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "sites" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "My Site",
                    "description" => "Marketing site for the spring launch.",
                    "enabled" => true,
                    "live" => true,
                    "logging" => true,
                    "framework" => "react",
                    "deploymentRetention" => 7,
                    "deploymentId" => "5e5ea5c16897e",
                    "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "deploymentScreenshotLight" => "5e5ea5c16897e",
                    "deploymentScreenshotDark" => "5e5ea5c16897e",
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
                    "timeout" => 300,
                    "installCommand" => "npm install",
                    "buildCommand" => "npm run build",
                    "startCommand" => "node custom-server.mjs",
                    "outputDirectory" => "build",
                    "installationId" => "6m40at4ejk5h2u9s1hboo",
                    "providerRepositoryId" => "appwrite",
                    "providerBranch" => "main",
                    "providerRootDirectory" => "sites/helloWorld",
                    "providerSilentMode" => true,
                    "providerBranches" => [],
                    "providerPaths" => [],
                    "buildSpecification" => "s-1vcpu-512mb",
                    "runtimeSpecification" => "s-1vcpu-512mb",
                    "buildRuntime" => "node-22",
                    "adapter" => "static",
                    "fallbackFile" => "index.html"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/sites',
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

        $response = $this->sites->list(
            queries: [],
            search: "<SEARCH>",
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\SiteList::class, $response);
    }
    public function testMethodCreate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "description" => "Marketing site for the spring launch.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
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
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "startCommand" => "node custom-server.mjs",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/sites',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'name', 'framework', 'buildRuntime', 'enabled', 'logging', 'timeout', 'installCommand', 'buildCommand', 'startCommand', 'outputDirectory', 'adapter', 'installationId', 'fallbackFile', 'providerRepositoryId', 'providerBranch', 'providerSilentMode', 'providerRootDirectory', 'providerBranches', 'providerPaths', 'buildSpecification', 'runtimeSpecification', 'deploymentRetention', 'scopes', 'description'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'name' => "<NAME>",
                        'framework' => Framework::ANALOG(),
                        'buildRuntime' => BuildRuntime::NODE145(),
                        'enabled' => false,
                        'logging' => false,
                        'timeout' => 1,
                        'installCommand' => "<INSTALL_COMMAND>",
                        'buildCommand' => "<BUILD_COMMAND>",
                        'startCommand' => "<START_COMMAND>",
                        'outputDirectory' => "<OUTPUT_DIRECTORY>",
                        'adapter' => Adapter::STATIC(),
                        'installationId' => "<INSTALLATION_ID>",
                        'fallbackFile' => "<FALLBACK_FILE>",
                        'providerRepositoryId' => "<PROVIDER_REPOSITORY_ID>",
                        'providerBranch' => "<PROVIDER_BRANCH>",
                        'providerSilentMode' => false,
                        'providerRootDirectory' => "<PROVIDER_ROOT_DIRECTORY>",
                        'providerBranches' => [],
                        'providerPaths' => [],
                        'buildSpecification' => "s-1vcpu-512mb",
                        'runtimeSpecification' => "s-1vcpu-512mb",
                        'deploymentRetention' => 1,
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
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

        $response = $this->sites->create(
            "<SITE_ID>",
            "<NAME>",
            Framework::ANALOG(),
            BuildRuntime::NODE145(),
            enabled: false,
            logging: false,
            timeout: 1,
            installCommand: "<INSTALL_COMMAND>",
            buildCommand: "<BUILD_COMMAND>",
            startCommand: "<START_COMMAND>",
            outputDirectory: "<OUTPUT_DIRECTORY>",
            adapter: Adapter::STATIC(),
            installationId: "<INSTALLATION_ID>",
            fallbackFile: "<FALLBACK_FILE>",
            providerRepositoryId: "<PROVIDER_REPOSITORY_ID>",
            providerBranch: "<PROVIDER_BRANCH>",
            providerSilentMode: false,
            providerRootDirectory: "<PROVIDER_ROOT_DIRECTORY>",
            providerBranches: [],
            providerPaths: [],
            buildSpecification: "s-1vcpu-512mb",
            runtimeSpecification: "s-1vcpu-512mb",
            deploymentRetention: 1,
            scopes: [ProjectKeyScopes::PROJECTREAD()],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Site::class, $response);
    }
    public function testMethodListFrameworks(): void
    {
        $data = [
            "total" => 5,
            "frameworks" => [
                [
                    "key" => "sveltekit",
                    "name" => "SvelteKit",
                    "buildRuntime" => "node-22",
                    "runtimes" => [],
                    "adapters" => [
                        [
                            "key" => "static",
                            "installCommand" => "npm install",
                            "buildCommand" => "npm run build",
                            "outputDirectory" => "./dist"
                        ]
                    ]
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/sites/frameworks',
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

        $response = $this->sites->listFrameworks(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\FrameworkList::class, $response);
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
                '/sites/specifications',
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

        $response = $this->sites->listSpecifications(
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
            "name" => "My Site",
            "description" => "Marketing site for the spring launch.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
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
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "startCommand" => "node custom-server.mjs",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/sites/%3CSITE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->sites->get(
            "<SITE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Site::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "description" => "Marketing site for the spring launch.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
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
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "startCommand" => "node custom-server.mjs",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/sites/%3CSITE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'name', 'framework', 'enabled', 'logging', 'timeout', 'installCommand', 'buildCommand', 'startCommand', 'outputDirectory', 'buildRuntime', 'adapter', 'fallbackFile', 'installationId', 'providerRepositoryId', 'providerBranch', 'providerSilentMode', 'providerRootDirectory', 'providerBranches', 'providerPaths', 'buildSpecification', 'runtimeSpecification', 'deploymentRetention', 'scopes', 'description'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'name' => "<NAME>",
                        'framework' => Framework::ANALOG(),
                        'enabled' => false,
                        'logging' => false,
                        'timeout' => 1,
                        'installCommand' => "<INSTALL_COMMAND>",
                        'buildCommand' => "<BUILD_COMMAND>",
                        'startCommand' => "<START_COMMAND>",
                        'outputDirectory' => "<OUTPUT_DIRECTORY>",
                        'buildRuntime' => BuildRuntime::NODE145(),
                        'adapter' => Adapter::STATIC(),
                        'fallbackFile' => "<FALLBACK_FILE>",
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
                        'scopes' => [ProjectKeyScopes::PROJECTREAD()],
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

        $response = $this->sites->update(
            "<SITE_ID>",
            "<NAME>",
            Framework::ANALOG(),
            enabled: false,
            logging: false,
            timeout: 1,
            installCommand: "<INSTALL_COMMAND>",
            buildCommand: "<BUILD_COMMAND>",
            startCommand: "<START_COMMAND>",
            outputDirectory: "<OUTPUT_DIRECTORY>",
            buildRuntime: BuildRuntime::NODE145(),
            adapter: Adapter::STATIC(),
            fallbackFile: "<FALLBACK_FILE>",
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
            scopes: [ProjectKeyScopes::PROJECTREAD()],
            description: "<DESCRIPTION>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Site::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/sites/%3CSITE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->sites->delete(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdateSiteDeployment(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "description" => "Marketing site for the spring launch.",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentRetention" => 7,
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
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
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "startCommand" => "node custom-server.mjs",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "providerBranches" => [],
            "providerPaths" => [],
            "buildSpecification" => "s-1vcpu-512mb",
            "runtimeSpecification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/sites/%3CSITE_ID%3E/deployment',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->updateSiteDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Site::class, $response);
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
                '/sites/%3CSITE_ID%3E/deployments',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'queries', 'search', 'total'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->listDeployments(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/deployments',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'code', 'installCommand', 'buildCommand', 'outputDirectory', 'activate'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'installCommand' => "<INSTALL_COMMAND>",
                        'buildCommand' => "<BUILD_COMMAND>",
                        'outputDirectory' => "<OUTPUT_DIRECTORY>",
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

        $response = $this->sites->createDeployment(
            "<SITE_ID>",
            InputFile::withData('', 'image/png'),
            installCommand: "<INSTALL_COMMAND>",
            buildCommand: "<BUILD_COMMAND>",
            outputDirectory: "<OUTPUT_DIRECTORY>",
            activate: false
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
                '/sites/%3CSITE_ID%3E/deployments/duplicate',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->createDuplicateDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
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
                '/sites/%3CSITE_ID%3E/deployments/template',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'repository', 'owner', 'rootDirectory', 'type', 'reference', 'activate'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'repository' => "<REPOSITORY>",
                        'owner' => "<OWNER>",
                        'rootDirectory' => "<ROOT_DIRECTORY>",
                        'type' => TemplateReferenceType::BRANCH(),
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

        $response = $this->sites->createTemplateDeployment(
            "<SITE_ID>",
            "<REPOSITORY>",
            "<OWNER>",
            "<ROOT_DIRECTORY>",
            TemplateReferenceType::BRANCH(),
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
                '/sites/%3CSITE_ID%3E/deployments/vcs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'type', 'reference', 'activate'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->createVcsDeployment(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/deployments/%3CDEPLOYMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->getDeployment(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/deployments/%3CDEPLOYMENT_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->deleteDeployment(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/deployments/%3CDEPLOYMENT_ID%3E/download',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId', 'type', 'token'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->getDeploymentDownload(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/deployments/%3CDEPLOYMENT_ID%3E/status',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'deploymentId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->updateDeploymentStatus(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Deployment::class, $response);
    }
    public function testMethodListLogs(): void
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
                '/sites/%3CSITE_ID%3E/logs',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->listLogs(
            "<SITE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ExecutionList::class, $response);
    }
    public function testMethodGetLog(): void
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
                '/sites/%3CSITE_ID%3E/logs/%3CLOG_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'logId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'logId' => "<LOG_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->sites->getLog(
            "<SITE_ID>",
            "<LOG_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Execution::class, $response);
    }
    public function testMethodDeleteLog(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/sites/%3CSITE_ID%3E/logs/%3CLOG_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'logId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
                        'logId' => "<LOG_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->sites->deleteLog(
            "<SITE_ID>",
            "<LOG_ID>"
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
                '/sites/%3CSITE_ID%3E/variables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->listVariables(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/variables',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->createVariable(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'variableId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->getVariable(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'variableId', 'key', 'value', 'secret', 'description'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->updateVariable(
            "<SITE_ID>",
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
                '/sites/%3CSITE_ID%3E/variables/%3CVARIABLE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['siteId', 'variableId'], array_keys($params));
                    $expected = [
                        'siteId' => "<SITE_ID>",
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

        $response = $this->sites->deleteVariable(
            "<SITE_ID>",
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
