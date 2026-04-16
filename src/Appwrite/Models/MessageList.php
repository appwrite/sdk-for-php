<?php

namespace Appwrite\Models;

/**
 * Message list
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('messages', $data)) {
            throw new \InvalidArgumentException('Missing required field "messages" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'messages' => static::serializeValue($this->messages)
        ];

        return $result;
    }
}
