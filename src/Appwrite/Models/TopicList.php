<?php

namespace Appwrite\Models;

/**
 * Topic list
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('topics', $data)) {
            throw new \InvalidArgumentException('Missing required field "topics" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'topics' => static::serializeValue($this->topics)
        ];

        return $result;
    }
}
