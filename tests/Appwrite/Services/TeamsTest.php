<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TeamsTest extends TestCase {
    private $client;
    private $teams;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->teams = new Teams($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "teams" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->list(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreate(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->create(
            "<TEAM_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->get(
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateName(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "VIP",
            "total" => 7,
            "prefs" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->updateName(
            "<TEAM_ID>",
            "<NAME>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->delete(
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListMemberships(): void {

        $data = array(
            "total" => 5,
            "memberships" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->listMemberships(
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateMembership(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "roles" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->createMembership(
            "<TEAM_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetMembership(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "roles" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->getMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMembership(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "roles" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->updateMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDeleteMembership(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->deleteMembership(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdateMembershipStatus(): void {

        $data = array(
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "userId" => "5e5ea5c16897e",
            "userName" => "John Doe",
            "userEmail" => "john@appwrite.io",
            "teamId" => "5e5ea5c16897e",
            "teamName" => "VIP",
            "invited" => "2020-10-15T06:38:00.000+00:00",
            "joined" => "2020-10-15T06:38:00.000+00:00",
            "confirm" => true,
            "mfa" => true,
            "roles" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->updateMembershipStatus(
            "<TEAM_ID>",
            "<MEMBERSHIP_ID>",
            "<USER_ID>",
            "<SECRET>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetPrefs(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->getPrefs(
            "<TEAM_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdatePrefs(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->teams->updatePrefs(
            "<TEAM_ID>",
            array()
        );

        $this->assertSame($data, $response);
    }

}
