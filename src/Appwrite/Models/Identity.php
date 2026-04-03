<?php

namespace Appwrite\Models;

/**
 * Identity
 */
readonly class Identity
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
