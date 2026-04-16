<?php

namespace Appwrite\Models;

/**
 * Identity
 */
readonly class Identity
{
    use ArraySerializable;

    /**
     * Identity constructor.
     *
     * @param string $id identity id.
     * @param string $createdAt identity creation date in iso 8601 format.
     * @param string $updatedAt identity update date in iso 8601 format.
     * @param string $userId user id.
     * @param string $provider identity provider.
     * @param string $providerUid id of the user in the identity provider.
     * @param string $providerEmail email of the user in the identity provider.
     * @param string $providerAccessToken identity provider access token.
     * @param string $providerAccessTokenExpiry the date of when the access token expires in iso 8601 format.
     * @param string $providerRefreshToken identity provider refresh token.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $provider,
        public string $providerUid,
        public string $providerEmail,
        public string $providerAccessToken,
        public string $providerAccessTokenExpiry,
        public string $providerRefreshToken
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
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('provider', $data)) {
            throw new \InvalidArgumentException('Missing required field "provider" for ' . static::class . '.');
        }
        if (!array_key_exists('providerUid', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerUid" for ' . static::class . '.');
        }
        if (!array_key_exists('providerEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('providerAccessToken', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerAccessToken" for ' . static::class . '.');
        }
        if (!array_key_exists('providerAccessTokenExpiry', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerAccessTokenExpiry" for ' . static::class . '.');
        }
        if (!array_key_exists('providerRefreshToken', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerRefreshToken" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            provider: $data['provider'],
            providerUid: $data['providerUid'],
            providerEmail: $data['providerEmail'],
            providerAccessToken: $data['providerAccessToken'],
            providerAccessTokenExpiry: $data['providerAccessTokenExpiry'],
            providerRefreshToken: $data['providerRefreshToken']
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
            'userId' => static::serializeValue($this->userId),
            'provider' => static::serializeValue($this->provider),
            'providerUid' => static::serializeValue($this->providerUid),
            'providerEmail' => static::serializeValue($this->providerEmail),
            'providerAccessToken' => static::serializeValue($this->providerAccessToken),
            'providerAccessTokenExpiry' => static::serializeValue($this->providerAccessTokenExpiry),
            'providerRefreshToken' => static::serializeValue($this->providerRefreshToken)
        ];

        return $result;
    }
}
