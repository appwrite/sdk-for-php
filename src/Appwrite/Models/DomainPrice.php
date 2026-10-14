<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * DomainPrice
 *
 * @phpstan-consistent-constructor
 */
readonly class DomainPrice
{
    use ArraySerializable;

    /**
     * DomainPrice constructor.
     *
     * @param string $domain domain name.
     * @param string $tld top-level domain for the requested domain.
     * @param bool $available whether the domain is currently available for registration.
     * @param int $periodYears price period in years.
     * @param bool $premium whether the domain is a premium domain.
     * @param int $renewalPeriodYears renewal price period in years.
     * @param float|null $price domain registration price. null when the price could not be resolved, for example for an unsupported tld.
     * @param float|null $renewalPrice domain renewal price for the same period. null when the domain was not priced or the registrar has no renewal price for it.
     */
    public function __construct(
        public string $domain,
        public string $tld,
        public bool $available,
        public int $periodYears,
        public bool $premium,
        public int $renewalPeriodYears,
        public ?float $price = null,
        public ?float $renewalPrice = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'domain' => "",
            'tld' => "",
            'available' => false,
            'periodYears' => 1,
            'premium' => false,
            'renewalPeriodYears' => 1,
        ];

        return new static(
            domain: $data['domain'],
            tld: $data['tld'],
            available: $data['available'],
            periodYears: $data['periodYears'],
            premium: $data['premium'],
            renewalPeriodYears: $data['renewalPeriodYears'],
            price: $data['price'] ?? null,
            renewalPrice: $data['renewalPrice'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'domain' => static::serializeValue($this->domain),
            'tld' => static::serializeValue($this->tld),
            'available' => static::serializeValue($this->available),
            'price' => static::serializeValue($this->price),
            'periodYears' => static::serializeValue($this->periodYears),
            'premium' => static::serializeValue($this->premium),
            'renewalPrice' => static::serializeValue($this->renewalPrice),
            'renewalPeriodYears' => static::serializeValue($this->renewalPeriodYears)
        ];
    }
}
