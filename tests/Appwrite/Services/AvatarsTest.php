<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class AvatarsTest extends TestCase {
    private $client;
    private $avatars;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->avatars = new Avatars($this->client);
    }

    public function testMethodGetBrowser(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getBrowser(
            "aa"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCreditCard(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getCreditCard(
            "amex"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFavicon(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getFavicon(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetFlag(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getFlag(
            "af"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetImage(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getImage(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetInitials(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getInitials(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetQR(): void {

        $data = '';


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getQR(
            "<TEXT>"
        );

        $this->assertSame($data, $response);
    }

}
