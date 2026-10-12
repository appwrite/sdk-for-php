<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Specification
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'memory' => 0,
            'cpus' => 0,
            'enabled' => false,
            'slug' => "",
        ];

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
        return [
            'memory' => static::serializeValue($this->memory),
            'cpus' => static::serializeValue($this->cpus),
            'enabled' => static::serializeValue($this->enabled),
            'slug' => static::serializeValue($this->slug)
        ];
    }
}
