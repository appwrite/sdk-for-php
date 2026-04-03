<?php

namespace Appwrite\Models;

/**
 * AlgoMD5
 */
readonly class AlgoMd5
{
    use ArraySerializable;

    /**
     * AlgoMd5 constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }
}
