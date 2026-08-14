<?php

namespace Appwrite\Models;

/**
 * MFA Challenge Secret
 */
readonly class MfaChallengeSecret
{
    use ArraySerializable;

    /**
     * MfaChallengeSecret constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $userId user id.
     * @param string $expire token expiration date in iso 8601 format.
     * @param string $code challenge code to be delivered to the end user through a custom channel.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $userId,
        public string $expire,
        public string $code
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
        if (!array_key_exists('code', $data)) {
            throw new \InvalidArgumentException('Missing required field "code" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            userId: $data['userId'],
            expire: $data['expire'],
            code: $data['code']
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
            'expire' => static::serializeValue($this->expire),
            'code' => static::serializeValue($this->code)
        ];

        return $result;
    }
}
