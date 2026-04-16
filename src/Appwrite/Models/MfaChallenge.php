<?php

namespace Appwrite\Models;

/**
 * MFA Challenge
 */
readonly class MfaChallenge
{
    use ArraySerializable;

    /**
     * MfaChallenge constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $userId user id.
     * @param string $expire token expiration date in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $userId,
        public string $expire
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
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('expire', $data)) {
            throw new \InvalidArgumentException('Missing required field "expire" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            userId: $data['userId'],
            expire: $data['expire']
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
            'userId' => static::serializeValue($this->userId),
            'expire' => static::serializeValue($this->expire)
        ];

        return $result;
    }
}
