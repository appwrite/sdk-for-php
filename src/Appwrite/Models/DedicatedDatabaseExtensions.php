<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Extensions
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseExtensions
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseExtensions constructor.
     *
     * @param array $installed list of installed extensions.
     * @param array $available list of available extensions that can be installed.
     * @param list<PostgresExtension> $metadata curated metadata (display name, description, category) for each available extension.
     */
    public function __construct(
        public array $installed,
        public array $available,
        public array $metadata
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('installed', $data)) {
            throw new \InvalidArgumentException('Missing required field "installed" for ' . static::class . '.');
        }
        if (!array_key_exists('available', $data)) {
            throw new \InvalidArgumentException('Missing required field "available" for ' . static::class . '.');
        }
        if (!array_key_exists('metadata', $data)) {
            throw new \InvalidArgumentException('Missing required field "metadata" for ' . static::class . '.');
        }

        return new static(
            installed: $data['installed'],
            available: $data['available'],
            metadata: is_array($data['metadata'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(PostgresExtension::class, $item),
                    $data['metadata']
                )
                : $data['metadata']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'installed' => static::serializeValue($this->installed),
            'available' => static::serializeValue($this->available),
            'metadata' => static::serializeValue($this->metadata)
        ];
    }
}
