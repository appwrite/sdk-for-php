<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;
use Appwrite\Enums\Browser;
use Appwrite\Enums\CreditCard;
use Appwrite\Enums\Flag;
use Appwrite\InputFile;
use Appwrite\Enums\BrowserTheme;
use Appwrite\Enums\Timezone;
use Appwrite\Enums\BrowserPermission;
use Appwrite\Enums\ImageFormat;

final class AvatarsTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Avatars $avatars;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->avatars = new Avatars($this->client);
    }

    public function testMethodGetBrowser(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/browsers/aa',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['code', 'width', 'height', 'quality'], array_keys($params));
                    $expected = [
                        'code' => Browser::AVANTBROWSER(),
                        'width' => 1,
                        'height' => 1,
                        'quality' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getBrowser(
            Browser::AVANTBROWSER(),
            width: 1,
            height: 1,
            quality: 1
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetCreditCard(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/credit-cards/amex',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['code', 'width', 'height', 'quality'], array_keys($params));
                    $expected = [
                        'code' => CreditCard::AMERICANEXPRESS(),
                        'width' => 1,
                        'height' => 1,
                        'quality' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getCreditCard(
            CreditCard::AMERICANEXPRESS(),
            width: 1,
            height: 1,
            quality: 1
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFavicon(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/favicon',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['url'], array_keys($params));
                    $expected = [
                        'url' => "https://example.com",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getFavicon(
            "https://example.com"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetFlag(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/flags/af',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['code', 'width', 'height', 'quality'], array_keys($params));
                    $expected = [
                        'code' => Flag::AFGHANISTAN(),
                        'width' => 1,
                        'height' => 1,
                        'quality' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getFlag(
            Flag::AFGHANISTAN(),
            width: 1,
            height: 1,
            quality: 1
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetImage(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/image',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['url', 'width', 'height'], array_keys($params));
                    $expected = [
                        'url' => "https://example.com",
                        'width' => 1,
                        'height' => 1,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getImage(
            "https://example.com",
            width: 1,
            height: 1
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetInitials(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/initials',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['name', 'width', 'height', 'background'], array_keys($params));
                    $expected = [
                        'name' => "<NAME>",
                        'width' => 1,
                        'height' => 1,
                        'background' => "FFFFFF",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getInitials(
            name: "<NAME>",
            width: 1,
            height: 1,
            background: "FFFFFF"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetPhoto(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/photo',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['width', 'height', 'quality', 'output', 'rating', 'userId', 'emailHash', 'name'], array_keys($params));
                    $expected = [
                        'width' => 1,
                        'height' => 1,
                        'quality' => 1,
                        'output' => "png",
                        'rating' => "g",
                        'userId' => "current()",
                        'emailHash' => "<EMAIL_HASH>",
                        'name' => "<NAME>",
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getPhoto(
            width: 1,
            height: 1,
            quality: 1,
            output: "png",
            rating: "g",
            userId: "current()",
            emailHash: "<EMAIL_HASH>",
            name: "<NAME>"
        );

        $this->assertSame($data, $response);
    }
    public function testMethodUpdatePhoto(): void
    {
        $data = [
            "\$id" => "5e5ea5c16897e",
            "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
            "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
            "name" => "John Doe",
            "registration" => "2020-10-15T06:38:00.000+00:00",
            "status" => true,
            "labels" => [],
            "passwordUpdate" => "2020-10-15T06:38:00.000+00:00",
            "email" => "john@appwrite.io",
            "phone" => "+4930901820",
            "emailVerification" => true,
            "phoneVerification" => true,
            "mfa" => true,
            "prefs" => [],
            "targets" => [
                [
                    "\$id" => "259125845563242502",
                    "\$createdAt" => "2020-10-15T06:38:00.000+00:00",
                    "\$updatedAt" => "2020-10-15T06:38:00.000+00:00",
                    "name" => "Apple iPhone 12",
                    "userId" => "259125845563242502",
                    "providerType" => "email",
                    "identifier" => "token",
                    "expired" => true
                ]
            ],
            "accessedAt" => "2020-10-15T06:38:00.000+00:00"
        ];

        $this->client
            ->expects()->call(
                'PUT',
                '/avatars/photo',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['file'], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->updatePhoto(
            InputFile::withData('', 'image/png')
        );

        $this->assertInstanceOf(\Appwrite\Models\Account::class, $response);
    }
    public function testMethodDeletePhoto(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'DELETE',
                '/avatars/photo',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame([], array_keys($params));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->deletePhoto();

        $this->assertSame($data, $response);
    }
    public function testMethodGetQR(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/qr',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['text', 'size', 'margin', 'download'], array_keys($params));
                    $expected = [
                        'text' => "<TEXT>",
                        'size' => 1,
                        'margin' => 1,
                        'download' => false,
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getQR(
            "<TEXT>",
            size: 1,
            margin: 1,
            download: false
        );

        $this->assertSame($data, $response);
    }
    public function testMethodGetScreenshot(): void
    {
        $data = '';

        $this->client
            ->expects()->call(
                'GET',
                '/avatars/screenshots',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['url', 'headers', 'viewportWidth', 'viewportHeight', 'scale', 'theme', 'userAgent', 'fullpage', 'locale', 'timezone', 'latitude', 'longitude', 'accuracy', 'touch', 'permissions', 'sleep', 'width', 'height', 'quality', 'output'], array_keys($params));
                    $expected = [
                        'url' => "https://example.com",
                        'headers' => [],
                        'viewportWidth' => 1,
                        'viewportHeight' => 1,
                        'scale' => 1.0,
                        'theme' => BrowserTheme::LIGHT(),
                        'userAgent' => "Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15",
                        'fullpage' => false,
                        'locale' => "en-US",
                        'timezone' => Timezone::AFRICAABIDJAN(),
                        'latitude' => 1.0,
                        'longitude' => 1.0,
                        'accuracy' => 1.0,
                        'touch' => false,
                        'permissions' => [BrowserPermission::GEOLOCATION()],
                        'sleep' => 1,
                        'width' => 1,
                        'height' => 1,
                        'quality' => 1,
                        'output' => ImageFormat::JPG(),
                    ];
                    $this->assertSame($expected, array_intersect_key($params, $expected));

                    return true;
                })
            )
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->avatars->getScreenshot(
            "https://example.com",
            headers: [],
            viewportWidth: 1,
            viewportHeight: 1,
            scale: 1.0,
            theme: BrowserTheme::LIGHT(),
            userAgent: "Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15",
            fullpage: false,
            locale: "en-US",
            timezone: Timezone::AFRICAABIDJAN(),
            latitude: 1.0,
            longitude: 1.0,
            accuracy: 1.0,
            touch: false,
            permissions: [BrowserPermission::GEOLOCATION()],
            sleep: 1,
            width: 1,
            height: 1,
            quality: 1,
            output: ImageFormat::JPG()
        );

        $this->assertSame($data, $response);
    }
}
