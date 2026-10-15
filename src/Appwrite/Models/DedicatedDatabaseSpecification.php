<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Specification
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseSpecification
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseSpecification constructor.
     *
     * @param string $slug specification slug. use this value when creating a dedicated database.
     * @param string $name human readable specification name.
     * @param float $price monthly price of the specification in usd.
     * @param float $storageOverageRate price per gb of storage above the included amount, per month, in usd.
     * @param float $bandwidthOverageRate price per gb of bandwidth above the included amount, per month, in usd.
     * @param float $replicaRate high availability replica price as a fraction of the specification price.
     * @param float $pitrRate point-in-time recovery price as a fraction of the specification price.
     * @param int $cpu allocated cpu in millicores.
     * @param int $memory allocated memory in mb.
     * @param int $maxConnections maximum number of concurrent connections.
     * @param int $includedStorage included storage in gb before overage charges apply.
     * @param int $includedBandwidth included bandwidth in gb before overage charges apply.
     * @param bool $enabled whether the specification is available on the current plan.
     */
    public function __construct(
        public string $slug,
        public string $name,
        public float $price,
        public float $storageOverageRate,
        public float $bandwidthOverageRate,
        public float $replicaRate,
        public float $pitrRate,
        public int $cpu,
        public int $memory,
        public int $maxConnections,
        public int $includedStorage,
        public int $includedBandwidth,
        public bool $enabled
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'slug' => "",
            'name' => "",
            'price' => 0,
            'storageOverageRate' => 0,
            'bandwidthOverageRate' => 0,
            'replicaRate' => 0,
            'pitrRate' => 0,
            'cpu' => 0,
            'memory' => 0,
            'maxConnections' => 0,
            'includedStorage' => 0,
            'includedBandwidth' => 0,
            'enabled' => false,
        ];

        return new static(
            slug: $data['slug'],
            name: $data['name'],
            price: $data['price'],
            storageOverageRate: $data['storageOverageRate'],
            bandwidthOverageRate: $data['bandwidthOverageRate'],
            replicaRate: $data['replicaRate'],
            pitrRate: $data['pitrRate'],
            cpu: $data['cpu'],
            memory: $data['memory'],
            maxConnections: $data['maxConnections'],
            includedStorage: $data['includedStorage'],
            includedBandwidth: $data['includedBandwidth'],
            enabled: $data['enabled']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'slug' => static::serializeValue($this->slug),
            'name' => static::serializeValue($this->name),
            'price' => static::serializeValue($this->price),
            'storageOverageRate' => static::serializeValue($this->storageOverageRate),
            'bandwidthOverageRate' => static::serializeValue($this->bandwidthOverageRate),
            'replicaRate' => static::serializeValue($this->replicaRate),
            'pitrRate' => static::serializeValue($this->pitrRate),
            'cpu' => static::serializeValue($this->cpu),
            'memory' => static::serializeValue($this->memory),
            'maxConnections' => static::serializeValue($this->maxConnections),
            'includedStorage' => static::serializeValue($this->includedStorage),
            'includedBandwidth' => static::serializeValue($this->includedBandwidth),
            'enabled' => static::serializeValue($this->enabled)
        ];
    }
}
