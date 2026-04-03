<?php

namespace Appwrite\Models;

/**
 * AlgoArgon2
 */
readonly class AlgoArgon2
{
    use ArraySerializable;

    /**
     * AlgoArgon2 constructor.
     *
     * @param string $type algo type.
     * @param int $memoryCost memory used to compute hash.
     * @param int $timeCost amount of time consumed to compute hash
     * @param int $threads number of threads used to compute hash.
     */
    public function __construct(
        public string $type,
        public int $memoryCost,
        public int $timeCost,
        public int $threads
    ) {
    }
}
