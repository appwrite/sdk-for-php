<?php

namespace Appwrite\Models;

/**
 * AlgoPHPass
 */
readonly class AlgoPhpass
{
    use ArraySerializable;

    /**
     * AlgoPhpass constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }
}
