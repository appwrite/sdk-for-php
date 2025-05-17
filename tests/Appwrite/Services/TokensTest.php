<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class TokensTest extends TestCase {
    private $client;
    private $tokens;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->tokens = new Tokens($this->client);
    }

    public function testMethodList(): void {

        $data = array(
            "total" => 5,
            "tokens" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->list(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodCreateFileToken(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->createFileToken(
            "<BUCKET_ID>",
            "<FILE_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGet(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->get(
            "<TOKEN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodUpdate(): void {

        $data = array(
            "\$id" => "bb8ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "resourceId" => "5e5ea5c168bb8:5e5ea5c168bb8",
            "resourceType" => "files",
            "expire" => "2020-10-15T06:38:00.000+00:00",
            "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
            "accessedAt" => "2020-10-15T06:38:00.000+00:00",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->update(
            "<TOKEN_ID>"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodDelete(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->tokens->delete(
            "<TOKEN_ID>"
        );

        $this->assertSame($data, $response);
    }

}
