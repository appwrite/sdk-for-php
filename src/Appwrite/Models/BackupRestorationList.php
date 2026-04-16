<?php

namespace Appwrite\Models;

/**
 * Backup restoration list
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
        $result = [
            'total' => static::serializeValue($this->total),
            'restorations' => static::serializeValue($this->restorations)
        ];

        return $result;
    }
}
