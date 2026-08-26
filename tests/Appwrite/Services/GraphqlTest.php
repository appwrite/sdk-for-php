<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class GraphqlTest extends TestCase
{
    private Client&MockInterface $client;
    private Graphql $graphql;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->graphql = new Graphql($this->client);
    }

    public function testMethodQuery(): void
    {
        $data = [];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->graphql->query(
            []
        );

        $this->assertSame($data, $response);
    }
    public function testMethodMutation(): void
    {
        $data = [];

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->graphql->mutation(
            []
        );

        $this->assertSame($data, $response);
    }
}
