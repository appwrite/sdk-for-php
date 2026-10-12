<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Currency
 *
 * @phpstan-consistent-constructor
 */
readonly class Currency
{
    use ArraySerializable;

    /**
     * Currency constructor.
     *
     * @param string $symbol currency symbol.
     * @param string $name currency name.
     * @param string $symbolNative currency native symbol.
     * @param int $decimalDigits number of decimal digits.
     * @param float $rounding currency digit rounding.
     * @param string $code currency code in [iso 4217-1](http://en.wikipedia.org/wiki/iso_4217) three-character format.
     * @param string $namePlural currency plural name
     */
    public function __construct(
        public string $symbol,
        public string $name,
        public string $symbolNative,
        public int $decimalDigits,
        public float $rounding,
        public string $code,
        public string $namePlural
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'symbol' => "",
            'name' => "",
            'symbolNative' => "",
            'decimalDigits' => 0,
            'rounding' => 0,
            'code' => "",
            'namePlural' => "",
        ];

        return new static(
            symbol: $data['symbol'],
            name: $data['name'],
            symbolNative: $data['symbolNative'],
            decimalDigits: $data['decimalDigits'],
            rounding: $data['rounding'],
            code: $data['code'],
            namePlural: $data['namePlural']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'symbol' => static::serializeValue($this->symbol),
            'name' => static::serializeValue($this->name),
            'symbolNative' => static::serializeValue($this->symbolNative),
            'decimalDigits' => static::serializeValue($this->decimalDigits),
            'rounding' => static::serializeValue($this->rounding),
            'code' => static::serializeValue($this->code),
            'namePlural' => static::serializeValue($this->namePlural)
        ];
    }
}
