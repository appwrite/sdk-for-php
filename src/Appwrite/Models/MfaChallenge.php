<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * MFA Challenge
 *
 * @phpstan-consistent-constructor
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
        $data += [
            '$id' => "",
            '$createdAt' => "",
            'userId' => "",
            'expire' => "",
        ];

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
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            'userId' => static::serializeValue($this->userId),
            'expire' => static::serializeValue($this->expire)
        ];
    }
}
