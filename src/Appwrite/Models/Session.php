<?php

namespace Appwrite\Models;

/**
 * Session
 */
readonly class Session
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
     * Session constructor.
     *
     * @param string $id session id.
     * @param string $createdAt session creation date in iso 8601 format.
     * @param string $updatedAt session update date in iso 8601 format.
     * @param string $userId user id.
     * @param string $expire session expiration date in iso 8601 format.
     * @param string $provider session provider.
     * @param string $providerUid session provider user id.
     * @param string $providerAccessToken session provider access token.
     * @param string $providerAccessTokenExpiry the date of when the access token expires in iso 8601 format.
     * @param string $providerRefreshToken session provider refresh token.
     * @param string $ip ip in use when the session was created.
     * @param string $osCode operating system code name. view list of [available options](https://github.com/appwrite/appwrite/blob/master/docs/lists/os.json).
     * @param string $osName operating system name.
     * @param string $osVersion operating system version.
     * @param string $clientType client type.
     * @param string $clientCode client code name. view list of [available options](https://github.com/appwrite/appwrite/blob/master/docs/lists/clients.json).
     * @param string $clientName client name.
     * @param string $clientVersion client version.
     * @param string $clientEngine client engine name.
     * @param string $clientEngineVersion client engine name.
     * @param string $deviceName device name.
     * @param string $deviceBrand device brand name.
     * @param string $deviceModel device model name.
     * @param string $countryCode country two-character iso 3166-1 alpha code.
     * @param string $countryName country name.
     * @param bool $current returns true if this the current user session.
     * @param array $factors returns a list of active session factors.
     * @param string $secret secret used to authenticate the user. only included if the request was made with an api key
     * @param string $mfaUpdatedAt most recent date in iso 8601 format when the session successfully passed mfa challenge.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $expire,
        public string $provider,
        public string $providerUid,
        public string $providerAccessToken,
        public string $providerAccessTokenExpiry,
        public string $providerRefreshToken,
        public string $ip,
        public string $osCode,
        public string $osName,
        public string $osVersion,
        public string $clientType,
        public string $clientCode,
        public string $clientName,
        public string $clientVersion,
        public string $clientEngine,
        public string $clientEngineVersion,
        public string $deviceName,
        public string $deviceBrand,
        public string $deviceModel,
        public string $countryCode,
        public string $countryName,
        public bool $current,
        public array $factors,
        public string $secret,
        public string $mfaUpdatedAt
    ) {
    }
}
