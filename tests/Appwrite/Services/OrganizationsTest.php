<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class OrganizationsTest extends TestCase {
    private $client;
    private $organizations;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->organizations = new Organizations($this->client);
    }

    public function testMethodDelete(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->delete(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodEstimationDeleteOrganization(): void {

        $data = array(
            "unpaidInvoices" => array());

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->organizations->estimationDeleteOrganization(
            "<ORGANIZATION_ID>"
        );

        $this->assertSame($data, $response);
    }

}
