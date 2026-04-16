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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('providerType', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerType" for ' . static::class . '.');
        }
        if (!array_key_exists('topics', $data)) {
            throw new \InvalidArgumentException('Missing required field "topics" for ' . static::class . '.');
        }
        if (!array_key_exists('users', $data)) {
            throw new \InvalidArgumentException('Missing required field "users" for ' . static::class . '.');
        }
        if (!array_key_exists('targets', $data)) {
            throw new \InvalidArgumentException('Missing required field "targets" for ' . static::class . '.');
        }
        if (!array_key_exists('deliveredTotal', $data)) {
            throw new \InvalidArgumentException('Missing required field "deliveredTotal" for ' . static::class . '.');
        }
        if (!array_key_exists('data', $data)) {
            throw new \InvalidArgumentException('Missing required field "data" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            providerType: $data['providerType'],
            topics: $data['topics'],
            users: $data['users'],
            targets: $data['targets'],
            deliveredTotal: $data['deliveredTotal'],
            data: $data['data'],
            status: static::hydrateTypedValue(MessageStatus::class, $data['status']),
            scheduledAt: array_key_exists('scheduledAt', $data) ? $data['scheduledAt'] : null,
            deliveredAt: array_key_exists('deliveredAt', $data) ? $data['deliveredAt'] : null,
            deliveryErrors: array_key_exists('deliveryErrors', $data) ? $data['deliveryErrors'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'providerType' => static::serializeValue($this->providerType),
            'topics' => static::serializeValue($this->topics),
            'users' => static::serializeValue($this->users),
            'targets' => static::serializeValue($this->targets),
            'scheduledAt' => static::serializeValue($this->scheduledAt),
            'deliveredAt' => static::serializeValue($this->deliveredAt),
            'deliveryErrors' => static::serializeValue($this->deliveryErrors),
            'deliveredTotal' => static::serializeValue($this->deliveredTotal),
            'data' => static::serializeValue($this->data),
            'status' => static::serializeValue($this->status)
        ];

        return $result;
    }
}
