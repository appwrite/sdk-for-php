<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class ProjectTest extends TestCase
{
    private $client;
    private $project;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->project = new Project($this->client);
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
