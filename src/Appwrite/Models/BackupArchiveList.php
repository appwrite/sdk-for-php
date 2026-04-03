<?php

namespace Appwrite\Models;

/**
 * Backup archive list
 */
readonly class BackupArchiveList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'archives' => BackupArchive::class
    ];

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
}
