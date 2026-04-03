<?php

namespace Appwrite\Models;

/**
 * Status List
 */
readonly class HealthStatusList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'statuses' => HealthStatus::class
    ];

    /**
     * HealthStatusList constructor.
     *
     * @param int $total total number of statuses that matched your query.
     * @param list<HealthStatus> $statuses list of statuses.
     */
    public function __construct(
        public int $total,
        public array $statuses
    ) {
    }
}
