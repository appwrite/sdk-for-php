<?php

namespace Appwrite\Models;

/**
 * AlgoScrypt
 */
readonly class AlgoScrypt
{
    use ArraySerializable;

    /**
     * AlgoScrypt constructor.
     *
     * @param string $type algo type.
     * @param int $costCpu cpu complexity of computed hash.
     * @param int $costMemory memory complexity of computed hash.
     * @param int $costParallel parallelization of computed hash.
     * @param int $length length used to compute hash.
     */
    public function __construct(
        public string $type,
        public int $costCpu,
        public int $costMemory,
        public int $costParallel,
        public int $length
    ) {
    }
}
