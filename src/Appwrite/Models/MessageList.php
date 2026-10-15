<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Message list
 *
 * @phpstan-consistent-constructor
 */
readonly class MessageList
{
    use ArraySerializable;

    /**
     * MessageList constructor.
     *
     * @param int $total total number of messages that matched your query.
     * @param list<Message> $messages list of messages.
     */
    public function __construct(
        public int $total,
        public array $messages
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'messages' => [],
        ];

        return new static(
            total: $data['total'],
            messages: is_array($data['messages'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Message::class, $item),
                    $data['messages']
                )
                : $data['messages']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'messages' => static::serializeValue($this->messages)
        ];
    }
}
