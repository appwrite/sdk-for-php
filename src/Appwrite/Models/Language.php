<?php

namespace Appwrite\Models;

/**
 * Language
 */
readonly class Language
{
    use ArraySerializable;

    /**
     * Language constructor.
     *
     * @param string $name language name.
     * @param string $code language two-character iso 639-1 codes.
     * @param string $nativeName language native name.
     */
    public function __construct(
        public string $name,
        public string $code,
        public string $nativeName
    ) {
    }
}
