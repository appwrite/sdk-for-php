<?php

namespace Appwrite\Models;

/**
 * Headers
 */
readonly class Headers
{
    use ArraySerializable;

    /**
     * Headers constructor.
     *
     * @param string $name header name.
     * @param string $value header value.
     */
    public function __construct(
        public string $name,
        public string $value
    ) {
    }
}
