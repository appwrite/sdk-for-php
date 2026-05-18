<?php

namespace Appwrite\Models;

/**
 * Usage events list
 */
readonly class UsageEventList
{
    use ArraySerializable;

    /**
     * UsageEventList constructor.
     *
     * @param int $total total number of events that matched your query.
     * @param list<UsageEvent> $events list of events.
     */
    public function __construct(
        public int $total,
        public array $events
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
        if (!array_key_exists('events', $data)) {
            throw new \InvalidArgumentException('Missing required field "events" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            events: is_array($data['events'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(UsageEvent::class, $item),
                    $data['events']
                )
                : $data['events']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'events' => static::serializeValue($this->events)
        ];

        return $result;
    }
}
