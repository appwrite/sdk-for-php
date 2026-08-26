<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * SpecificationPricing
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseSpecificationPricing
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseSpecificationPricing constructor.
     *
     * @param float $storageOverageRate price per gb of storage above the included amount, per month, in usd.
     * @param float $bandwidthOverageRate price per gb of bandwidth above the included amount, per month, in usd.
     * @param float $replicaRate high availability replica price as a fraction of the specification cost.
     * @param float $pitrRate point-in-time recovery price as a fraction of the specification cost.
     */
    public function __construct(
        public float $storageOverageRate,
        public float $bandwidthOverageRate,
        public float $replicaRate,
        public float $pitrRate
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('storageOverageRate', $data)) {
            throw new \InvalidArgumentException('Missing required field "storageOverageRate" for ' . static::class . '.');
        }
        if (!array_key_exists('bandwidthOverageRate', $data)) {
            throw new \InvalidArgumentException('Missing required field "bandwidthOverageRate" for ' . static::class . '.');
        }
        if (!array_key_exists('replicaRate', $data)) {
            throw new \InvalidArgumentException('Missing required field "replicaRate" for ' . static::class . '.');
        }
        if (!array_key_exists('pitrRate', $data)) {
            throw new \InvalidArgumentException('Missing required field "pitrRate" for ' . static::class . '.');
        }

        return new static(
            storageOverageRate: $data['storageOverageRate'],
            bandwidthOverageRate: $data['bandwidthOverageRate'],
            replicaRate: $data['replicaRate'],
            pitrRate: $data['pitrRate']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'storageOverageRate' => static::serializeValue($this->storageOverageRate),
            'bandwidthOverageRate' => static::serializeValue($this->bandwidthOverageRate),
            'replicaRate' => static::serializeValue($this->replicaRate),
            'pitrRate' => static::serializeValue($this->pitrRate)
        ];
    }
}
