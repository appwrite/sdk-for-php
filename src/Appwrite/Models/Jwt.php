<?php

namespace Appwrite\Models;

/**
 * JWT
 */
readonly class Jwt
{
    use ArraySerializable;

    /**
     * Jwt constructor.
     *
     * @param string $jwt jwt encoded string.
     */
    public function __construct(
        public string $jwt
    ) {
    }
}
