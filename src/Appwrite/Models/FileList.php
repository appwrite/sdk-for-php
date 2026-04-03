<?php

namespace Appwrite\Models;

/**
 * Files List
 */
readonly class FileList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'files' => File::class
    ];

    /**
     * FileList constructor.
     *
     * @param int $total total number of files that matched your query.
     * @param list<File> $files list of files.
     */
    public function __construct(
        public int $total,
        public array $files
    ) {
    }
}
