<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class PresencesTest extends TestCase
{
    private $client;
    private $presences;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->presences = new Presences($this->client);
    }

    public function testMethodList(): void
    {
        $data = array(
            "total" => 5,
            "presences" => array(
                array(
                    "\$id" => "5e5ea5c16897e",
                    "\$sequence" => "1",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => array(),
                    "userInternalId" => "1",
                    "userId" => "674af8f3e12a5f9ac0be",
                    "source" => "HTTP"
                )
            )
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->presences->list();

        $this->assertInstanceOf(\Appwrite\Models\PresenceList::class, $response);
    }

    public function testMethodGet(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "userInternalId" => "1",
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->presences->get(
            "<PRESENCE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }

    public function testMethodUpsert(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "userInternalId" => "1",
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->presences->upsert(
            "<PRESENCE_ID>",
            "<USER_ID>",
            "<STATUS>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }

    public function testMethodUpdatePresence(): void
    {
        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$sequence" => "1",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => array(),
            "userInternalId" => "1",
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        );

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->presences->updatePresence(
            "<PRESENCE_ID>",
            "<USER_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }

    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->presences->delete(
            "<PRESENCE_ID>"
        );

        $this->assertSame($data, $response);
    }

}
