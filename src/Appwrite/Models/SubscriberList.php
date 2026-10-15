<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Subscriber list
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'subscribers' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'subscribers' => static::serializeValue($this->subscribers)
        ];
    }
}
