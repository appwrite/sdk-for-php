<?php

namespace Appwrite\Models;

/**
 * Languages List
 */
readonly class LanguageList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'languages' => Language::class
    ];

    /**
     * LanguageList constructor.
     *
     * @param int $total total number of languages that matched your query.
     * @param list<Language> $languages list of languages.
     */
    public function __construct(
        public int $total,
        public array $languages
    ) {
    }
}
