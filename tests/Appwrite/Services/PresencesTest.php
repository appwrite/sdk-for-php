<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class PresencesTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Presences $presences;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->presences = new Presences($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "presences" => [
                [
                    "\$id" => "5e5ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$permissions" => [],
                    "userId" => "674af8f3e12a5f9ac0be",
                    "source" => "HTTP"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/presences',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['queries', 'total', 'ttl'], array_keys($params));
                    $expected = [
                        'queries' => [],
                        'total' => false,
                        'ttl' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->presences->list(
            queries: [],
            total: false,
            ttl: 1
        );

        $this->assertInstanceOf(\Appwrite\Models\PresenceList::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/presences/%3CPRESENCE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['presenceId'], array_keys($params));
                    $expected = [
                        'presenceId' => "<PRESENCE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->presences->get(
            "<PRESENCE_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }
    public function testMethodUpsert(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/presences/%3CPRESENCE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['presenceId', 'userId', 'status', 'permissions', 'expiresAt', 'metadata'], array_keys($params));
                    $expected = [
                        'presenceId' => "<PRESENCE_ID>",
                        'userId' => "<USER_ID>",
                        'status' => "<STATUS>",
                        'permissions' => [],
                        'expiresAt' => "2020-10-15T06:38:00.000+00:00",
                        'metadata' => [],
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->presences->upsert(
            "<PRESENCE_ID>",
            "<USER_ID>",
            "<STATUS>",
            permissions: [],
            expiresAt: "2020-10-15T06:38:00.000+00:00",
            metadata: []
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "\$permissions" => [],
            "userId" => "674af8f3e12a5f9ac0be",
            "source" => "HTTP"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/presences/%3CPRESENCE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['presenceId', 'userId', 'status', 'expiresAt', 'metadata', 'permissions', 'purge'], array_keys($params));
                    $expected = [
                        'presenceId' => "<PRESENCE_ID>",
                        'userId' => "<USER_ID>",
                        'status' => "<STATUS>",
                        'expiresAt' => "2020-10-15T06:38:00.000+00:00",
                        'metadata' => [],
                        'permissions' => [],
                        'purge' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->presences->update(
            "<PRESENCE_ID>",
            "<USER_ID>",
            status: "<STATUS>",
            expiresAt: "2020-10-15T06:38:00.000+00:00",
            metadata: [],
            permissions: [],
            purge: false
        );

        $this->assertInstanceOf(\Appwrite\Models\Presence::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/presences/%3CPRESENCE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['presenceId'], array_keys($params));
                    $expected = [
                        'presenceId' => "<PRESENCE_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->presences->delete(
            "<PRESENCE_ID>"
        );

        $this->assertSame($data, $response);
    }
}
