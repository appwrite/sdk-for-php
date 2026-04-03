<?php

namespace Appwrite\Models;

/**
 * AlgoScryptModified
 */
readonly class AlgoScryptModified
{
    use ArraySerializable;

    /**
     * AlgoScryptModified constructor.
     *
     * @param string $type algo type.
     * @param string $salt salt used to compute hash.
     * @param string $saltSeparator separator used to compute hash.
     * @param string $signerKey key used to compute hash.
     */
    public function __construct(
        public string $type,
        public string $salt,
        public string $saltSeparator,
        public string $signerKey
    ) {
    }
}
