<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class GraphqlTest extends TestCase {
    private $client;
    private $graphql;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->graphql = new Graphql($this->client);
    }

    public function testMethodQuery(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->graphql->query(
            array()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodMutation(): void {

        $data = array();


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->graphql->mutation(
            array()
        );

        $this->assertSame($data, $response);
    }

}
