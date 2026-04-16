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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('memory', $data)) {
            throw new \InvalidArgumentException('Missing required field "memory" for ' . static::class . '.');
        }
        if (!array_key_exists('cpus', $data)) {
            throw new \InvalidArgumentException('Missing required field "cpus" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('slug', $data)) {
            throw new \InvalidArgumentException('Missing required field "slug" for ' . static::class . '.');
        }

        return new static(
            memory: $data['memory'],
            cpus: $data['cpus'],
            enabled: $data['enabled'],
            slug: $data['slug']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'memory' => static::serializeValue($this->memory),
            'cpus' => static::serializeValue($this->cpus),
            'enabled' => static::serializeValue($this->enabled),
            'slug' => static::serializeValue($this->slug)
        ];

        return $result;
    }
}
