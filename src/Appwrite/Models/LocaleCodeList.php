<?php

namespace Appwrite\Models;

/**
 * Locale codes list
 */
readonly class LocaleCodeList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'localeCodes' => LocaleCode::class
    ];

    /**
     * LocaleCodeList constructor.
     *
     * @param int $total total number of localecodes that matched your query.
     * @param list<LocaleCode> $localeCodes list of localecodes.
     */
    public function __construct(
        public int $total,
        public array $localeCodes
    ) {
    }
}
