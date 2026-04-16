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
     */
    public function __construct(
        public string $ip,
        public string $countryCode,
        public string $country,
        public string $continentCode,
        public string $continent,
        public bool $eu,
        public string $currency
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
            currency: $data['currency']
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
            'currency' => static::serializeValue($this->currency)
        ];

        return $result;
    }
}
