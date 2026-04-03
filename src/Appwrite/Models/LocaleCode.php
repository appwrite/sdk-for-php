<?php

namespace Appwrite\Models;

/**
 * LocaleCode
 */
readonly class LocaleCode
{
    use ArraySerializable;

    /**
     * LocaleCode constructor.
     *
     * @param string $code locale codes in [iso 639-1](https://en.wikipedia.org/wiki/list_of_iso_639-1_codes)
     * @param string $name locale name
     */
    public function __construct(
        public string $code,
        public string $name
    ) {
    }
}
