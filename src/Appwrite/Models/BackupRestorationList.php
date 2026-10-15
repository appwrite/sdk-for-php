<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Backup restoration list
 *
 * @phpstan-consistent-constructor
 */
readonly class BackupRestorationList
{
    use ArraySerializable;

    /**
     * BackupRestorationList constructor.
     *
     * @param int $total total number of restorations that matched your query.
     * @param list<BackupRestoration> $restorations list of restorations.
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
        $data += [
            'total' => 0,
            'restorations' => [],
        ];

        return new static(
            total: $data['total'],
            restorations: is_array($data['restorations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(BackupRestoration::class, $item),
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
