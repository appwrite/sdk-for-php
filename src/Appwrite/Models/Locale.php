<?php

namespace Appwrite\Models;

/**
 * Locale
 */
readonly class Locale
{
    use ArraySerializable;

    /**
     * Locale constructor.
     *
     * @param string $ip user ip address.
     * @param string $countryCode country code in [iso 3166-1](http://en.wikipedia.org/wiki/iso_3166-1) two-character format
     * @param string $country country name. this field support localization.
     * @param string $continentCode continent code. a two character continent code "af" for africa, "an" for antarctica, "as" for asia, "eu" for europe, "na" for north america, "oc" for oceania, and "sa" for south america.
     * @param string $continent continent name. this field support localization.
     * @param bool $eu true if country is part of the european union.
     * @param string $currency currency code in [iso 4217-1](http://en.wikipedia.org/wiki/iso_4217) three-character format
     * @param string|null $city city
     * @param string|null $timeZone name of timezone
     * @param string|null $postalCode postal code
     * @param float|null $latitude latitude
     * @param float|null $longitude longitude
     * @param string|null $autonomousSystemNumber autonomous system number (asn) of the ip
     * @param string|null $autonomousSystemOrganization organization that owns the asn
     * @param string|null $isp internet service provider of the ip
     * @param string|null $connectionType connection type of the ip (e.g. cable, cellular, corporate)
     * @param string|null $connectionUsageType user type classification of the ip (e.g. residential, business, hosting)
     * @param string|null $connectionOrganization registered organization of the ip
     */
    public function __construct(
        public string $ip,
        public string $countryCode,
        public string $country,
        public string $continentCode,
        public string $continent,
        public bool $eu,
        public string $currency,
        public ?string $city = null,
        public ?string $timeZone = null,
        public ?string $postalCode = null,
        public ?float $latitude = null,
        public ?float $longitude = null,
        public ?string $autonomousSystemNumber = null,
        public ?string $autonomousSystemOrganization = null,
        public ?string $isp = null,
        public ?string $connectionType = null,
        public ?string $connectionUsageType = null,
        public ?string $connectionOrganization = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('ip', $data)) {
            throw new \InvalidArgumentException('Missing required field "ip" for ' . static::class . '.');
        }
        if (!array_key_exists('countryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('country', $data)) {
            throw new \InvalidArgumentException('Missing required field "country" for ' . static::class . '.');
        }
        if (!array_key_exists('continentCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "continentCode" for ' . static::class . '.');
        }
        if (!array_key_exists('continent', $data)) {
            throw new \InvalidArgumentException('Missing required field "continent" for ' . static::class . '.');
        }
        if (!array_key_exists('eu', $data)) {
            throw new \InvalidArgumentException('Missing required field "eu" for ' . static::class . '.');
        }
        if (!array_key_exists('currency', $data)) {
            throw new \InvalidArgumentException('Missing required field "currency" for ' . static::class . '.');
        }

        return new static(
            ip: $data['ip'],
            countryCode: $data['countryCode'],
            country: $data['country'],
            continentCode: $data['continentCode'],
            continent: $data['continent'],
            eu: $data['eu'],
            currency: $data['currency'],
            city: array_key_exists('city', $data) ? $data['city'] : null,
            timeZone: array_key_exists('timeZone', $data) ? $data['timeZone'] : null,
            postalCode: array_key_exists('postalCode', $data) ? $data['postalCode'] : null,
            latitude: array_key_exists('latitude', $data) ? $data['latitude'] : null,
            longitude: array_key_exists('longitude', $data) ? $data['longitude'] : null,
            autonomousSystemNumber: array_key_exists('autonomousSystemNumber', $data) ? $data['autonomousSystemNumber'] : null,
            autonomousSystemOrganization: array_key_exists('autonomousSystemOrganization', $data) ? $data['autonomousSystemOrganization'] : null,
            isp: array_key_exists('isp', $data) ? $data['isp'] : null,
            connectionType: array_key_exists('connectionType', $data) ? $data['connectionType'] : null,
            connectionUsageType: array_key_exists('connectionUsageType', $data) ? $data['connectionUsageType'] : null,
            connectionOrganization: array_key_exists('connectionOrganization', $data) ? $data['connectionOrganization'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'ip' => static::serializeValue($this->ip),
            'countryCode' => static::serializeValue($this->countryCode),
            'country' => static::serializeValue($this->country),
            'continentCode' => static::serializeValue($this->continentCode),
            'continent' => static::serializeValue($this->continent),
            'eu' => static::serializeValue($this->eu),
            'currency' => static::serializeValue($this->currency),
            'city' => static::serializeValue($this->city),
            'timeZone' => static::serializeValue($this->timeZone),
            'postalCode' => static::serializeValue($this->postalCode),
            'latitude' => static::serializeValue($this->latitude),
            'longitude' => static::serializeValue($this->longitude),
            'autonomousSystemNumber' => static::serializeValue($this->autonomousSystemNumber),
            'autonomousSystemOrganization' => static::serializeValue($this->autonomousSystemOrganization),
            'isp' => static::serializeValue($this->isp),
            'connectionType' => static::serializeValue($this->connectionType),
            'connectionUsageType' => static::serializeValue($this->connectionUsageType),
            'connectionOrganization' => static::serializeValue($this->connectionOrganization)
        ];

        return $result;
    }
}
