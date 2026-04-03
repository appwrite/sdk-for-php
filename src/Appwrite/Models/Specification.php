<?php

namespace Appwrite\Models;

/**
 * Specification
 */
readonly class Specification
{
    use ArraySerializable;

    /**
     * Specification constructor.
     *
     * @param int $memory memory size in mb.
     * @param float $cpus number of cpus.
     * @param bool $enabled is size enabled.
     * @param string $slug size slug.
     */
    public function __construct(
        public int $memory,
        public float $cpus,
        public bool $enabled,
        public string $slug
    ) {
    }
}
