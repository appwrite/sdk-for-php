<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class SitesTest extends TestCase {
    private $client;
    private $sites;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->sites = new Sites($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "sites" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "vars" => array(),
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "specification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->create(
            "<SITE_ID>",
            "<NAME>",
            "analog",
            "node-14.5"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListFrameworks(): void {

        $data = array(
            "total" => 5,
            "frameworks" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->listFrameworks(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListSpecifications(): void {

        $data = array(
            "total" => 5,
            "specifications" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->listSpecifications(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "vars" => array(),
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "specification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->get(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "vars" => array(),
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "specification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->update(
            "<SITE_ID>",
            "<NAME>",
            "analog"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->delete(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateSiteDeployment(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "My Site",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "framework" => "react",
            "deploymentId" => "5e5ea5c16897e",
            "deploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "deploymentScreenshotLight" => "5e5ea5c16897e",
            "deploymentScreenshotDark" => "5e5ea5c16897e",
            "latestDeploymentId" => "5e5ea5c16897e",
            "latestDeploymentCreatedAt" => "2020-10-15T06:38:00.000+00:00",
            "latestDeploymentStatus" => "ready",
            "vars" => array(),
            "timeout" => 300,
            "installCommand" => "npm install",
            "buildCommand" => "npm run build",
            "outputDirectory" => "build",
            "installationId" => "6m40at4ejk5h2u9s1hboo",
            "providerRepositoryId" => "appwrite",
            "providerBranch" => "main",
            "providerRootDirectory" => "sites/helloWorld",
            "providerSilentMode" => true,
            "specification" => "s-1vcpu-512mb",
            "buildRuntime" => "node-22",
            "adapter" => "static",
            "fallbackFile" => "index.html",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->updateSiteDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListDeployments(): void {

        $data = array(
            "total" => 5,
            "deployments" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->listDeployments(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDeployment(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->createDeployment(
            "<SITE_ID>",
            InputFile::withData('', "image/png"),
            true
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateDuplicateDeployment(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->createDuplicateDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateTemplateDeployment(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->createTemplateDeployment(
            "<SITE_ID>",
            "<REPOSITORY>",
            "<OWNER>",
            "<ROOT_DIRECTORY>",
            "<VERSION>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVcsDeployment(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->createVcsDeployment(
            "<SITE_ID>",
            "branch",
            "<REFERENCE>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDeployment(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->getDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDeployment(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->deleteDeployment(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDeploymentDownload(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->getDeploymentDownload(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDeploymentStatus(): void {

        $data = array(
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
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildDuration" => 128,
            "providerRepositoryName" => "database",
            "providerRepositoryOwner" => "utopia",
            "providerRepositoryUrl" => "https://github.com/vermakhushboo/g4-node-function",
            "providerBranch" => "0.7.x",
            "providerCommitHash" => "7c3f25d",
            "providerCommitAuthorUrl" => "https://github.com/vermakhushboo",
            "providerCommitAuthor" => "Khushboo Verma",
            "providerCommitMessage" => "Update index.js",
            "providerCommitUrl" => "https://github.com/vermakhushboo/g4-node-function/commit/60c0416257a9cbcdd96b2d370c38d8f8d150ccfb",
            "providerBranchUrl" => "https://github.com/vermakhushboo/appwrite/tree/0.7.x",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->updateDeploymentStatus(
            "<SITE_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListLogs(): void {

        $data = array(
            "total" => 5,
            "executions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->listLogs(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetLog(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "functionId" => "5e5ea6g16897e",
            "deploymentId" => "5e5ea5c16897e",
            "trigger" => "http",
            "status" => "processing",
            "requestMethod" => "GET",
            "requestPath" => "/articles?id=5",
            "requestHeaders" => array(),
            "responseStatusCode" => 200,
            "responseBody" => "",
            "responseHeaders" => array(),
            "logs" => "",
            "errors" => "",
            "duration" => 0.4,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->getLog(
            "<SITE_ID>",
            "<LOG_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteLog(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->deleteLog(
            "<SITE_ID>",
            "<LOG_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListVariables(): void {

        $data = array(
            "total" => 5,
            "variables" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->listVariables(
            "<SITE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->createVariable(
            "<SITE_ID>",
            "<KEY>",
            "<VALUE>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->getVariable(
            "<SITE_ID>",
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateVariable(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "key" => "API_KEY",
            "value" => "myPa\$\$word1",
            "secret" => true,
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->updateVariable(
            "<SITE_ID>",
            "<VARIABLE_ID>",
            "<KEY>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteVariable(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->sites->deleteVariable(
            "<SITE_ID>",
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
