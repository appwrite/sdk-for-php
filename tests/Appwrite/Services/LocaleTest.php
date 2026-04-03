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
                        
        $data = array("ip" => "127.0.0.1"
,"countryCode" => "US"
,"country" => "United States"
,"continentCode" => "NA"
,"continent" => "North America"
,"eu" => true
,"currency" => "USD"
)
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->get(
        );

                $this->assertInstanceOf(\Appwrite\Models\Locale::class, $response);
            }

    public function testMethodListCodes(): void {
                        
        $data = array("total" => 5
,"localeCodes" =>     array(array("code" => "en-us"
,"name" => "US"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCodes(
        );

                $this->assertInstanceOf(\Appwrite\Models\LocaleCodeList::class, $response);
            }

    public function testMethodListContinents(): void {
                        
        $data = array("total" => 5
,"continents" =>     array(array("name" => "Europe"
,"code" => "EU"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listContinents(
        );

                $this->assertInstanceOf(\Appwrite\Models\ContinentList::class, $response);
            }

    public function testMethodListCountries(): void {
                        
        $data = array("total" => 5
,"countries" =>     array(array("name" => "United States"
,"code" => "US"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountries(
        );

                $this->assertInstanceOf(\Appwrite\Models\CountryList::class, $response);
            }

    public function testMethodListCountriesEU(): void {
                        
        $data = array("total" => 5
,"countries" =>     array(array("name" => "United States"
,"code" => "US"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountriesEU(
        );

                $this->assertInstanceOf(\Appwrite\Models\CountryList::class, $response);
            }

    public function testMethodListCountriesPhones(): void {
                        
        $data = array("total" => 5
,"phones" =>     array(array("code" => "+1"
,"countryCode" => "US"
,"countryName" => "United States"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCountriesPhones(
        );

                $this->assertInstanceOf(\Appwrite\Models\PhoneList::class, $response);
            }

    public function testMethodListCurrencies(): void {
                        
        $data = array("total" => 5
,"currencies" =>     array(array("symbol" => "\$"
,"name" => "US dollar"
,"symbolNative" => "\$"
,"decimalDigits" => 2
,"rounding" => 0
,"code" => "USD"
,"namePlural" => "US dollars"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listCurrencies(
        );

                $this->assertInstanceOf(\Appwrite\Models\CurrencyList::class, $response);
            }

    public function testMethodListLanguages(): void {
                        
        $data = array("total" => 5
,"languages" =>     array(array("name" => "Italian"
,"code" => "it"
,"nativeName" => "Italiano"
)
)
    )
;

        $this->client
            ->allows()->call(Mockery::any(), Mockery::any(), Mockery::any(), Mockery::any())
            ->andReturn($data);

        $response = $this->locale->listLanguages(
        );

                $this->assertInstanceOf(\Appwrite\Models\LanguageList::class, $response);
            }

}
