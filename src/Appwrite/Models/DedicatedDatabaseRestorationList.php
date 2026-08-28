<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Dedicated database restorations list
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabaseRestorationList
{
    use ArraySerializable;

    /**
     * DedicatedDatabaseRestorationList constructor.
     *
     * @param int $total total number of restorations that matched your query.
     * @param list<DedicatedDatabaseRestoration> $restorations list of restorations.
     */
    public function __construct(
        public int $total,
        public array $restorations
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('restorations', $data)) {
            throw new \InvalidArgumentException('Missing required field "restorations" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            restorations: is_array($data['restorations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DedicatedDatabaseRestoration::class, $item),
                    $data['restorations']
                )
                : $data['restorations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'restorations' => static::serializeValue($this->restorations)
        ];
    }
}
