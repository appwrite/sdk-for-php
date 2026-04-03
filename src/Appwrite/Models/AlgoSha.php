<?php

namespace Appwrite\Models;

/**
 * AlgoSHA
 */
readonly class AlgoSha
{
    use ArraySerializable;

    /**
     * AlgoSha constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }
}
