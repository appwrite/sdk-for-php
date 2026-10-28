<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class TokensTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Tokens $tokens;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->tokens = new Tokens($this->client);
    }

    public function testMethodList(): void
    {
        $data = [
            "total" => 5,
            "tokens" => [
                [
                    "\$id" => "bb8ea5c16897e",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
                    "resourceType" => "files",
                    "expire" => "2020-10-15T06:38:00.000+00:00",
                    "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
                    "accessedAt" => "2020-10-15T06:38:00.000+00:00"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tokens/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'queries', 'total'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'queries' => [],
                        'total' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tokens->list(
            "<BUCKET_ID>",
            "<FILE_ID>",
            queries: [],
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ResourceTokenList::class, $response);
    }
    public function testMethodCreateFileToken(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'POST',
                '/tokens/buckets/%3CBUCKET_ID%3E/files/%3CFILE_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['bucketId', 'fileId', 'expire'], array_keys($params));
                    $expected = [
                        'bucketId' => "<BUCKET_ID>",
                        'fileId' => "<FILE_ID>",
                        'expire' => "2020-10-15T06:38:00.000+00:00",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tokens->createFileToken(
            "<BUCKET_ID>",
            "<FILE_ID>",
            expire: "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\ResourceToken::class, $response);
    }
    public function testMethodGet(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/tokens/%3CTOKEN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['tokenId'], array_keys($params));
                    $expected = [
                        'tokenId' => "<TOKEN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tokens->get(
            "<TOKEN_ID>"
        );

        $this->assertInstanceOf(\Appwrite\Models\ResourceToken::class, $response);
    }
    public function testMethodUpdate(): void
    {
        $data = [
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PATCH',
                '/tokens/%3CTOKEN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['tokenId', 'expire'], array_keys($params));
                    $expected = [
                        'tokenId' => "<TOKEN_ID>",
                        'expire' => "2020-10-15T06:38:00.000+00:00",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tokens->update(
            "<TOKEN_ID>",
            expire: "2020-10-15T06:38:00.000+00:00"
        );

        $this->assertInstanceOf(\Appwrite\Models\ResourceToken::class, $response);
    }
    public function testMethodDelete(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/tokens/%3CTOKEN_ID%3E',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['tokenId'], array_keys($params));
                    $expected = [
                        'tokenId' => "<TOKEN_ID>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->tokens->delete(
            "<TOKEN_ID>"
        );

        $this->assertSame($data, $response);
    }
}
