<?php

namespace Appwrite\Models;

/**
 * Health Queue
 */
readonly class HealthQueue
{
    use ArraySerializable;

    /**
     * HealthQueue constructor.
     *
     * @param int $size amount of actions in the queue.
     */
    public function __construct(
        public int $size
    ) {
    }
}
