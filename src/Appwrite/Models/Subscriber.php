<?php

namespace Appwrite\Models;

/**
 * Subscriber
 */
readonly class Subscriber
{
    use ArraySerializable;

    /**
     * Subscriber constructor.
     *
     * @param string $id subscriber id.
     * @param string $createdAt subscriber creation time in iso 8601 format.
     * @param string $updatedAt subscriber update date in iso 8601 format.
     * @param string $targetId target id.
     * @param Target $target target.
     * @param string $userId topic id.
     * @param string $userName user name.
     * @param string $topicId topic id.
     * @param string $providerType the target provider type. can be one of the following: `email`, `sms` or `push`.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $targetId,
        public Target $target,
        public string $userId,
        public string $userName,
        public string $topicId,
        public string $providerType
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
        if (!array_key_exists('targetId', $data)) {
            throw new \InvalidArgumentException('Missing required field "targetId" for ' . static::class . '.');
        }
        if (!array_key_exists('target', $data)) {
            throw new \InvalidArgumentException('Missing required field "target" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('userName', $data)) {
            throw new \InvalidArgumentException('Missing required field "userName" for ' . static::class . '.');
        }
        if (!array_key_exists('topicId', $data)) {
            throw new \InvalidArgumentException('Missing required field "topicId" for ' . static::class . '.');
        }
        if (!array_key_exists('providerType', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerType" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            targetId: $data['targetId'],
            target: static::hydrateTypedValue(Target::class, $data['target']),
            userId: $data['userId'],
            userName: $data['userName'],
            topicId: $data['topicId'],
            providerType: $data['providerType']
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
            'targetId' => static::serializeValue($this->targetId),
            'target' => static::serializeValue($this->target),
            'userId' => static::serializeValue($this->userId),
            'userName' => static::serializeValue($this->userName),
            'topicId' => static::serializeValue($this->topicId),
            'providerType' => static::serializeValue($this->providerType)
        ];

        return $result;
    }
}
