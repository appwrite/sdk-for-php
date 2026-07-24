<?php

namespace Appwrite\Models;

/**
 * Specification
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
        public bool $enabled
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('slug', $data)) {
            throw new \InvalidArgumentException('Missing required field "slug" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('price', $data)) {
            throw new \InvalidArgumentException('Missing required field "price" for ' . static::class . '.');
        }
        if (!array_key_exists('cpu', $data)) {
            throw new \InvalidArgumentException('Missing required field "cpu" for ' . static::class . '.');
        }
        if (!array_key_exists('memory', $data)) {
            throw new \InvalidArgumentException('Missing required field "memory" for ' . static::class . '.');
        }
        if (!array_key_exists('maxConnections', $data)) {
            throw new \InvalidArgumentException('Missing required field "maxConnections" for ' . static::class . '.');
        }
        if (!array_key_exists('includedStorage', $data)) {
            throw new \InvalidArgumentException('Missing required field "includedStorage" for ' . static::class . '.');
        }
        if (!array_key_exists('includedBandwidth', $data)) {
            throw new \InvalidArgumentException('Missing required field "includedBandwidth" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }

        return new static(
            slug: $data['slug'],
            name: $data['name'],
            price: $data['price'],
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
        $result = [
            'slug' => static::serializeValue($this->slug),
            'name' => static::serializeValue($this->name),
            'price' => static::serializeValue($this->price),
            'cpu' => static::serializeValue($this->cpu),
            'memory' => static::serializeValue($this->memory),
            'maxConnections' => static::serializeValue($this->maxConnections),
            'includedStorage' => static::serializeValue($this->includedStorage),
            'includedBandwidth' => static::serializeValue($this->includedBandwidth),
            'enabled' => static::serializeValue($this->enabled)
        ];

        return $result;
    }
}
