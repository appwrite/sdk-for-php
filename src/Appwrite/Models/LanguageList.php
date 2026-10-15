<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Languages List
 *
 * @phpstan-consistent-constructor
 */
readonly class LanguageList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'languages' => [],
        ];

        return new static(
            total: $data['total'],
            languages: is_array($data['languages'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Language::class, $item),
                    $data['languages']
                )
                : $data['languages']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'languages' => static::serializeValue($this->languages)
        ];
    }
}
