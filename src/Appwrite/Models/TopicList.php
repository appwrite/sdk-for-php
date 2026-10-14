<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Topic list
 *
 * @phpstan-consistent-constructor
 */
readonly class TopicList
{
    use ArraySerializable;

    /**
     * TopicList constructor.
     *
     * @param int $total total number of topics that matched your query.
     * @param list<Topic> $topics list of topics.
     */
    public function __construct(
        public int $total,
        public array $topics
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'topics' => [],
        ];

        return new static(
            total: $data['total'],
            topics: is_array($data['topics'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Topic::class, $item),
                    $data['topics']
                )
                : $data['topics']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'topics' => static::serializeValue($this->topics)
        ];
    }
}
