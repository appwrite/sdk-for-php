<?php

namespace Appwrite\Models;

/**
 * Health Time
 */
readonly class HealthTime
{
    use ArraySerializable;

    /**
     * HealthTime constructor.
     *
     * @param int $remoteTime current unix timestamp on trustful remote server.
     * @param int $localTime current unix timestamp of local server where appwrite runs.
     * @param int $diff difference of unix remote and local timestamps in milliseconds.
     */
    public function __construct(
        public int $remoteTime,
        public int $localTime,
        public int $diff
    ) {
    }
}
