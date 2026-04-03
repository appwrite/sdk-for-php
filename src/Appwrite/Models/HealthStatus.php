<?php

namespace Appwrite\Models;

use Appwrite\Enums\HealthCheckStatus;

/**
 * Health Status
 */
readonly class HealthStatus
{
    use ArraySerializable;

    /**
     * HealthStatus constructor.
     *
     * @param string $name name of the service.
     * @param int $ping duration in milliseconds how long the health check took.
     * @param HealthCheckStatus $status service status. possible values are: `pass`, `fail`
     */
    public function __construct(
        public string $name,
        public int $ping,
        public HealthCheckStatus $status
    ) {
    }
}
