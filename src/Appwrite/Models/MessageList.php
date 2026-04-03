<?php

namespace Appwrite\Models;

/**
 * Message list
 */
readonly class MessageList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'messages' => Message::class
    ];

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
}
