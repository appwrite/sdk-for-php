<?php

namespace Appwrite\Models;

/**
 * Backup restoration list
 */
readonly class BackupRestorationList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'restorations' => BackupRestoration::class
    ];

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
}
