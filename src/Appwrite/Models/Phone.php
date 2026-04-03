<?php

namespace Appwrite\Models;

/**
 * Phone
 */
readonly class Phone
{
    use ArraySerializable;

    /**
     * Phone constructor.
     *
     * @param string $code phone code.
     * @param string $countryCode country two-character iso 3166-1 alpha code.
     * @param string $countryName country name.
     */
    public function __construct(
        public string $code,
        public string $countryCode,
        public string $countryName
    ) {
    }
}
