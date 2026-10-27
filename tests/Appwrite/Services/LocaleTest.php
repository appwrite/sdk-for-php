<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class LocaleTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private Client&MockInterface $client;
    private Locale $locale;

    protected function setUp(): void
    {
        $this->client = Mockery::mock(Client::class);
        $this->locale = new Locale($this->client);
    }

    public function testMethodGet(): void
    {
        $data = [
            "ip" => "127.0.0.1",
            "countryCode" => "US",
            "country" => "United States",
            "continentCode" => "NA",
            "continent" => "North America",
            "eu" => true,
            "currency" => "USD"
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale',
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

        $response = $this->locale->get();

        $this->assertInstanceOf(\Appwrite\Models\Locale::class, $response);
    }
    public function testMethodListCodes(): void
    {
        $data = [
            "total" => 5,
            "localeCodes" => [
                [
                    "code" => "en-us",
                    "name" => "US"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/codes',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listCodes(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\LocaleCodeList::class, $response);
    }
    public function testMethodListContinents(): void
    {
        $data = [
            "total" => 5,
            "continents" => [
                [
                    "name" => "Europe",
                    "code" => "EU"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/continents',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listContinents(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\ContinentList::class, $response);
    }
    public function testMethodListCountries(): void
    {
        $data = [
            "total" => 5,
            "countries" => [
                [
                    "name" => "United States",
                    "code" => "US"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/countries',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listCountries(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\CountryList::class, $response);
    }
    public function testMethodListCountriesEU(): void
    {
        $data = [
            "total" => 5,
            "countries" => [
                [
                    "name" => "United States",
                    "code" => "US"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/countries/eu',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listCountriesEU(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\CountryList::class, $response);
    }
    public function testMethodListCountriesPhones(): void
    {
        $data = [
            "total" => 5,
            "phones" => [
                [
                    "code" => "+1",
                    "countryCode" => "US",
                    "countryName" => "United States"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/countries/phones',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listCountriesPhones(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\PhoneList::class, $response);
    }
    public function testMethodListCurrencies(): void
    {
        $data = [
            "total" => 5,
            "currencies" => [
                [
                    "symbol" => "\$",
                    "name" => "US dollar",
                    "symbolNative" => "\$",
                    "decimalDigits" => 2,
                    "rounding" => 0,
                    "code" => "USD",
                    "namePlural" => "US dollars"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/currencies',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listCurrencies(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\CurrencyList::class, $response);
    }
    public function testMethodListLanguages(): void
    {
        $data = [
            "total" => 5,
            "languages" => [
                [
                    "name" => "Italian",
                    "code" => "it",
                    "nativeName" => "Italiano"
                ]
            ]
        ];

        $this->client
            ->expects()->call(
                'GET',
                '/locale/languages',
                Mockery::any(),
                Mockery::on(function (array $params): bool {
                    $this->assertSame(['total'], array_keys($params));
                    $expected = [
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

        $response = $this->locale->listLanguages(
            total: false
        );

        $this->assertInstanceOf(\Appwrite\Models\LanguageList::class, $response);
    }
}
