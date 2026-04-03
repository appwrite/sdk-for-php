<?php

namespace Appwrite\Models;

/**
 * AlgoBcrypt
 */
readonly class AlgoBcrypt
{
    use ArraySerializable;

    /**
     * AlgoBcrypt constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }
}
