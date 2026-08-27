<?php

declare(strict_types=1);

namespace Appwrite\Services;

use Appwrite\Client;
use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

final class LocaleTest extends TestCase
{
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listCodes();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listContinents();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listCountries();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listCountriesEU();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listCountriesPhones();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listCurrencies();

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
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);
        $this->client
            ->allows()->getConfig(Mockery::any())
            ->andReturn('');

        $response = $this->locale->listLanguages();

        $this->assertInstanceOf(\Appwrite\Models\LanguageList::class, $response);
    }
}
