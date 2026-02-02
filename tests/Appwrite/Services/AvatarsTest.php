<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Browser;
use Appwrite\Enums\CreditCard;
use Appwrite\Enums\Flag;
use Appwrite\Enums\Theme;
use Appwrite\Enums\Timezone;
use Appwrite\Enums\BrowserPermission;
use Appwrite\Enums\ImageFormat;

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
            Browser::AVANTBROWSER()
        );

        $this->assertSame($data, $response);
    }

    public function testMethodGetCreditCard(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getCreditCard(
            CreditCard::AMERICANEXPRESS()
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
            Flag::AFGHANISTAN()
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

    public function testMethodGetScreenshot(): void {

        $data = '';

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->avatars->getScreenshot(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }

}
