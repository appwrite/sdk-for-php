<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * MFA Challenge Secret
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            '$createdAt' => "",
            'userId' => "",
            'expire' => "",
            'code' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            'userId' => static::serializeValue($this->userId),
            'expire' => static::serializeValue($this->expire),
            'code' => static::serializeValue($this->code)
        ];
    }
}
