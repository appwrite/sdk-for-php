<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Identity
 *
 * @phpstan-consistent-constructor
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
     * @param string $providerIdToken identity provider id token (jwt) from the most recent native sign-in. empty for identities created through the browser oauth2 flow.
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
        public string $providerRefreshToken,
        public string $providerIdToken
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
            'userId' => "",
            'provider' => "",
            'providerUid' => "",
            'providerEmail' => "",
            'providerAccessToken' => "",
            'providerAccessTokenExpiry' => "",
            'providerRefreshToken' => "",
            'providerIdToken' => "",
        ];

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
            providerRefreshToken: $data['providerRefreshToken'],
            providerIdToken: $data['providerIdToken']
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
            'userId' => static::serializeValue($this->userId),
            'provider' => static::serializeValue($this->provider),
            'providerUid' => static::serializeValue($this->providerUid),
            'providerEmail' => static::serializeValue($this->providerEmail),
            'providerAccessToken' => static::serializeValue($this->providerAccessToken),
            'providerAccessTokenExpiry' => static::serializeValue($this->providerAccessTokenExpiry),
            'providerRefreshToken' => static::serializeValue($this->providerRefreshToken),
            'providerIdToken' => static::serializeValue($this->providerIdToken)
        ];
    }
}
