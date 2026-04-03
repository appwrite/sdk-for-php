<?php

namespace Appwrite\Models;

use Appwrite\Enums\MessageStatus;

/**
 * Message
 */
readonly class Message
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

    /**
     * Message constructor.
     *
     * @param string $id message id.
     * @param string $createdAt message creation time in iso 8601 format.
     * @param string $updatedAt message update date in iso 8601 format.
     * @param string $providerType message provider type.
     * @param array $topics topic ids set as recipients.
     * @param array $users user ids set as recipients.
     * @param array $targets target ids set as recipients.
     * @param int $deliveredTotal number of recipients the message was delivered to.
     * @param array $data data of the message.
     * @param MessageStatus $status status of delivery.
     * @param string|null $scheduledAt the scheduled time for message.
     * @param string|null $deliveredAt the time when the message was delivered.
     * @param array|null $deliveryErrors delivery errors if any.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $providerType,
        public array $topics,
        public array $users,
        public array $targets,
        public int $deliveredTotal,
        public array $data,
        public MessageStatus $status,
        public ?string $scheduledAt = null,
        public ?string $deliveredAt = null,
        public ?array $deliveryErrors = null
    ) {
    }
}
