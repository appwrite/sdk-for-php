<?php

namespace Appwrite\Models;

/**
 * Token
 */
readonly class Token
{
    use ArraySerializable;

    /**
     * Token constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $userId user id.
     * @param string $secret token secret key. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param string $expire token expiration date in iso 8601 format.
     * @param string $phrase security phrase of a token. empty if security phrase was not requested when creating a token. it includes randomly generated phrase which is also sent in the external resource such as email.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $userId,
        public string $secret,
        public string $expire,
        public string $phrase
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
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('expire', $data)) {
            throw new \InvalidArgumentException('Missing required field "expire" for ' . static::class . '.');
        }
        if (!array_key_exists('phrase', $data)) {
            throw new \InvalidArgumentException('Missing required field "phrase" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            userId: $data['userId'],
            secret: $data['secret'],
            expire: $data['expire'],
            phrase: $data['phrase']
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
            'secret' => static::serializeValue($this->secret),
            'expire' => static::serializeValue($this->expire),
            'phrase' => static::serializeValue($this->phrase)
        ];

        return $result;
    }
}
