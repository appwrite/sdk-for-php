<?php

namespace Appwrite\Models;

/**
 * Subscriber list
 */
readonly class SubscriberList
{
    use ArraySerializable;

    /**
     * SubscriberList constructor.
     *
     * @param int $total total number of subscribers that matched your query.
     * @param list<Subscriber> $subscribers list of subscribers.
     */
    public function __construct(
        public int $total,
        public array $subscribers
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
        if (!array_key_exists('subscribers', $data)) {
            throw new \InvalidArgumentException('Missing required field "subscribers" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            subscribers: is_array($data['subscribers'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Subscriber::class, $item),
                    $data['subscribers']
                )
                : $data['subscribers']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'subscribers' => static::serializeValue($this->subscribers)
        ];

        return $result;
    }
}
