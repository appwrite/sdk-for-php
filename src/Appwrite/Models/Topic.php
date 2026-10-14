<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Topic
 *
 * @phpstan-consistent-constructor
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
     * @param int|null $qos mqtt qos for delivery on this topic. null lets the subscriber choose their level.
     * @param int|null $expiry message retention in seconds for offline delivery. null inherits the lowest expiry of the project's enabled appwrite providers, or the 7-day ledger window if none sets one.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $emailTotal,
        public int $smsTotal,
        public int $pushTotal,
        public array $subscribe,
        public ?int $qos = null,
        public ?int $expiry = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'name' => "",
            'emailTotal' => 0,
            'smsTotal' => 0,
            'pushTotal' => 0,
            'subscribe' => ["users"],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            emailTotal: $data['emailTotal'],
            smsTotal: $data['smsTotal'],
            pushTotal: $data['pushTotal'],
            subscribe: $data['subscribe'],
            qos: $data['qos'] ?? null,
            expiry: $data['expiry'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'emailTotal' => static::serializeValue($this->emailTotal),
            'smsTotal' => static::serializeValue($this->smsTotal),
            'pushTotal' => static::serializeValue($this->pushTotal),
            'subscribe' => static::serializeValue($this->subscribe),
            'qos' => static::serializeValue($this->qos),
            'expiry' => static::serializeValue($this->expiry)
        ];
    }
}
