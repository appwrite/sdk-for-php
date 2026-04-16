<?php

namespace Appwrite\Models;

/**
 * Backup archive list
 */
readonly class BackupArchiveList
{
    use ArraySerializable;

    /**
     * BackupArchiveList constructor.
     *
     * @param int $total total number of archives that matched your query.
     * @param list<BackupArchive> $archives list of archives.
     */
    public function __construct(
        public int $total,
        public array $archives
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
        if (!array_key_exists('archives', $data)) {
            throw new \InvalidArgumentException('Missing required field "archives" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            archives: is_array($data['archives'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(BackupArchive::class, $item),
                    $data['archives']
                )
                : $data['archives']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'archives' => static::serializeValue($this->archives)
        ];

        return $result;
    }
}
