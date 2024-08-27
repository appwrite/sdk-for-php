<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase {
    private $client;
    private $functions;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->functions = new Functions($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "functions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => array(),
            "name" => "My Function",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deployment" => "5e5ea5c16897e",
            "scopes" => array(),
            "vars" => array(),
            "events" => array(),
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
            "specification" => "s-0.5vcpu-512mb",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->create(
            "<FUNCTION_ID>",
            "<NAME>",
            "node-14.5"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListRuntimes(): void {

        $data = array(
            "total" => 5,
            "runtimes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->listRuntimes(
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

        $response = $this->functions->listSpecifications(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => array(),
            "name" => "My Function",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deployment" => "5e5ea5c16897e",
            "scopes" => array(),
            "vars" => array(),
            "events" => array(),
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
            "specification" => "s-0.5vcpu-512mb",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->get(
            "<FUNCTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => array(),
            "name" => "My Function",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deployment" => "5e5ea5c16897e",
            "scopes" => array(),
            "vars" => array(),
            "events" => array(),
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
            "specification" => "s-0.5vcpu-512mb",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->update(
            "<FUNCTION_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->delete(
            "<FUNCTION_ID>"
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

        $response = $this->functions->listDeployments(
            "<FUNCTION_ID>"
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
            "size" => 128,
            "buildSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildTime" => 128,
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

        $response = $this->functions->createDeployment(
            "<FUNCTION_ID>",
            InputFile::withData('', "image/png"),
            true
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
            "size" => 128,
            "buildSize" => 128,
            "buildId" => "5e5ea5c16897e",
            "activate" => true,
            "status" => "ready",
            "buildLogs" => "Compiling source files...",
            "buildTime" => 128,
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

        $response = $this->functions->getDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDeployment(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "execute" => array(),
            "name" => "My Function",
            "enabled" => true,
            "live" => true,
            "logging" => true,
            "runtime" => "python-3.8",
            "deployment" => "5e5ea5c16897e",
            "scopes" => array(),
            "vars" => array(),
            "events" => array(),
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
            "specification" => "s-0.5vcpu-512mb",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->updateDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteDeployment(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->deleteDeployment(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateBuild(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->createBuild(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateDeploymentBuild(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "deploymentId" => "5e5ea5c16897e",
            "status" => "ready",
            "stdout" => "",
            "stderr" => "",
            "startTime" => "2020-10-15T06:38:00.000+00:00",
            "endTime" => "2020-10-15T06:38:00.000+00:00",
            "duration" => 0,
            "size" => 128,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->updateDeploymentBuild(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetDeploymentDownload(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->getDeploymentDownload(
            "<FUNCTION_ID>",
            "<DEPLOYMENT_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListExecutions(): void {

        $data = array(
            "total" => 5,
            "executions" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->listExecutions(
            "<FUNCTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateExecution(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "functionId" => "5e5ea6g16897e",
            "trigger" => "http",
            "status" => "processing",
            "requestMethod" => "GET",
            "requestPath" => "/articles?id=5",
            "requestHeaders" => array(),
            "responseStatusCode" => 200,
            "responseBody" => "Developers are awesome.",
            "responseHeaders" => array(),
            "logs" => "",
            "errors" => "",
            "duration" => 0.4,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->createExecution(
            "<FUNCTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetExecution(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "functionId" => "5e5ea6g16897e",
            "trigger" => "http",
            "status" => "processing",
            "requestMethod" => "GET",
            "requestPath" => "/articles?id=5",
            "requestHeaders" => array(),
            "responseStatusCode" => 200,
            "responseBody" => "Developers are awesome.",
            "responseHeaders" => array(),
            "logs" => "",
            "errors" => "",
            "duration" => 0.4,);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->getExecution(
            "<FUNCTION_ID>",
            "<EXECUTION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteExecution(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->deleteExecution(
            "<FUNCTION_ID>",
            "<EXECUTION_ID>"
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

        $response = $this->functions->listVariables(
            "<FUNCTION_ID>"
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
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->createVariable(
            "<FUNCTION_ID>",
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
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->getVariable(
            "<FUNCTION_ID>",
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
            "resourceType" => "function",
            "resourceId" => "myAwesomeFunction",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->functions->updateVariable(
            "<FUNCTION_ID>",
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

        $response = $this->functions->deleteVariable(
            "<FUNCTION_ID>",
            "<VARIABLE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
