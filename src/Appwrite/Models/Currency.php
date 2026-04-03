<?php

namespace Appwrite\Models;

/**
 * Currency
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
}
