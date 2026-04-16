<?php

namespace Appwrite\Models;

/**
 * Topic
 */
readonly class Topic
{
    use ArraySerializable;

    /**
     * Topic constructor.
     *
     * @param string $id topic id.
     * @param string $createdAt topic creation time in iso 8601 format.
     * @param string $updatedAt topic update date in iso 8601 format.
     * @param string $name the name of the topic.
     * @param int $emailTotal total count of email subscribers subscribed to the topic.
     * @param int $smsTotal total count of sms subscribers subscribed to the topic.
     * @param int $pushTotal total count of push subscribers subscribed to the topic.
     * @param array $subscribe subscribe permissions.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $emailTotal,
        public int $smsTotal,
        public int $pushTotal,
        public array $subscribe
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
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('emailTotal', $data)) {
            throw new \InvalidArgumentException('Missing required field "emailTotal" for ' . static::class . '.');
        }
        if (!array_key_exists('smsTotal', $data)) {
            throw new \InvalidArgumentException('Missing required field "smsTotal" for ' . static::class . '.');
        }
        if (!array_key_exists('pushTotal', $data)) {
            throw new \InvalidArgumentException('Missing required field "pushTotal" for ' . static::class . '.');
        }
        if (!array_key_exists('subscribe', $data)) {
            throw new \InvalidArgumentException('Missing required field "subscribe" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            emailTotal: $data['emailTotal'],
            smsTotal: $data['smsTotal'],
            pushTotal: $data['pushTotal'],
            subscribe: $data['subscribe']
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
            'name' => static::serializeValue($this->name),
            'emailTotal' => static::serializeValue($this->emailTotal),
            'smsTotal' => static::serializeValue($this->smsTotal),
            'pushTotal' => static::serializeValue($this->pushTotal),
            'subscribe' => static::serializeValue($this->subscribe)
        ];

        return $result;
    }
}
