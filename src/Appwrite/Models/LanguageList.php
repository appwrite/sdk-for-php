<?php

namespace Appwrite\Models;

/**
 * Languages List
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('languages', $data)) {
            throw new \InvalidArgumentException('Missing required field "languages" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'languages' => static::serializeValue($this->languages)
        ];

        return $result;
    }
}
