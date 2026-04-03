<?php

namespace Appwrite\Models;

/**
 * Continent
 */
readonly class Continent
{
    use ArraySerializable;

    /**
     * Continent constructor.
     *
     * @param string $name continent name.
     * @param string $code continent two letter code.
     */
    public function __construct(
        public string $name,
        public string $code
    ) {
    }
}
