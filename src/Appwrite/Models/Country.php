<?php

namespace Appwrite\Models;

/**
 * Country
 */
readonly class Country
{
    use ArraySerializable;

    /**
     * Country constructor.
     *
     * @param string $name country name.
     * @param string $code country two-character iso 3166-1 alpha code.
     */
    public function __construct(
        public string $name,
        public string $code
    ) {
    }
}
