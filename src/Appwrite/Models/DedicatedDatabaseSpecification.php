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
     * @param int $cpu allocated cpu in millicores.
     * @param int $memory allocated memory in mb.
     * @param int $maxConnections maximum number of concurrent connections.
     * @param int $includedStorage included storage in gb before overage charges apply.
     * @param int $includedBandwidth included bandwidth in gb before overage charges apply.
     * @param bool $enabled whether the specification is available on the current plan.
     * @param float|null $storageOverageRate price per gb of storage above the included amount, per month, in usd.
     * @param float|null $bandwidthOverageRate price per gb of bandwidth above the included amount, per month, in usd.
     * @param float|null $replicaRate high availability replica price as a fraction of the specification price.
     * @param float|null $pitrRate point-in-time recovery price as a fraction of the specification price.
     */
    public function __construct(
        public string $slug,
        public string $name,
        public float $price,
        public int $cpu,
        public int $memory,
        public int $maxConnections,
        public int $includedStorage,
        public int $includedBandwidth,
        public bool $enabled,
        public ?float $storageOverageRate = null,
        public ?float $bandwidthOverageRate = null,
        public ?float $replicaRate = null,
        public ?float $pitrRate = null
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
            cpu: $data['cpu'],
            memory: $data['memory'],
            maxConnections: $data['maxConnections'],
            includedStorage: $data['includedStorage'],
            includedBandwidth: $data['includedBandwidth'],
            enabled: $data['enabled'],
            storageOverageRate: $data['storageOverageRate'] ?? null,
            bandwidthOverageRate: $data['bandwidthOverageRate'] ?? null,
            replicaRate: $data['replicaRate'] ?? null,
            pitrRate: $data['pitrRate'] ?? null
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
