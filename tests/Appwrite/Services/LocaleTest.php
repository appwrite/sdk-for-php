<?php

namespace Appwrite\Services;

use Appwrite\Client;
use Appwrite\InputFile;
use Mockery;
use PHPUnit\Framework\TestCase;

final class LocaleTest extends TestCase {
    private $client;
    private $locale;

    protected function setUp(): void {
        $this->client = Mockery::mock(Client::class);
        $this->locale = new Locale($this->client);
    }

    public function testMethodGet(): void {

        $data = array(
            "ip" => "127.0.0.1",
            "countryCode" => "US",
            "country" => "United States",
            "continentCode" => "NA",
            "continent" => "North America",
            "eu" => true,
            "currency" => "USD",);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->get(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCodes(): void {

        $data = array(
            "total" => 5,
            "localeCodes" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCodes(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListContinents(): void {

        $data = array(
            "total" => 5,
            "continents" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listContinents(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCountries(): void {

        $data = array(
            "total" => 5,
            "countries" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountries(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCountriesEU(): void {

        $data = array(
            "total" => 5,
            "countries" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountriesEU(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCountriesPhones(): void {

        $data = array(
            "total" => 5,
            "phones" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountriesPhones(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListCurrencies(): void {

        $data = array(
            "total" => 5,
            "currencies" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCurrencies(
        );

        $this->assertSame($data, $response);
    }

    public function testMethodListLanguages(): void {

        $data = array(
            "total" => 5,
            "languages" => array(),);


        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listLanguages(
        );

        $this->assertSame($data, $response);
    }

}
