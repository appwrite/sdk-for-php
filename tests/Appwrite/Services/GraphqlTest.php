<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class GraphqlTest extends TestCase
{
    use MockeryPHPUnitIntegration;

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
            ->expects()->call(
                'POST',
                '/graphql',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['query'], array_keys($params));
                    $expected = [
                        'query' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
            ->expects()->call(
                'POST',
                '/graphql/mutation',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['query'], array_keys($params));
                    $expected = [
                        'query' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
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
