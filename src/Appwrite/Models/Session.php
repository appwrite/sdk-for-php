<?php

namespace Appwrite\Models;

/**
 * Session
 */
readonly class Session
{
    use ArraySerializable;

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
        if (!array_key_exists('expire', $data)) {
            throw new \InvalidArgumentException('Missing required field "expire" for ' . static::class . '.');
        }
        if (!array_key_exists('provider', $data)) {
            throw new \InvalidArgumentException('Missing required field "provider" for ' . static::class . '.');
        }
        if (!array_key_exists('providerUid', $data)) {
            throw new \InvalidArgumentException('Missing required field "providerUid" for ' . static::class . '.');
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
        if (!array_key_exists('ip', $data)) {
            throw new \InvalidArgumentException('Missing required field "ip" for ' . static::class . '.');
        }
        if (!array_key_exists('osCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "osCode" for ' . static::class . '.');
        }
        if (!array_key_exists('osName', $data)) {
            throw new \InvalidArgumentException('Missing required field "osName" for ' . static::class . '.');
        }
        if (!array_key_exists('osVersion', $data)) {
            throw new \InvalidArgumentException('Missing required field "osVersion" for ' . static::class . '.');
        }
        if (!array_key_exists('clientType', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientType" for ' . static::class . '.');
        }
        if (!array_key_exists('clientCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientCode" for ' . static::class . '.');
        }
        if (!array_key_exists('clientName', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientName" for ' . static::class . '.');
        }
        if (!array_key_exists('clientVersion', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientVersion" for ' . static::class . '.');
        }
        if (!array_key_exists('clientEngine', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientEngine" for ' . static::class . '.');
        }
        if (!array_key_exists('clientEngineVersion', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientEngineVersion" for ' . static::class . '.');
        }
        if (!array_key_exists('deviceName', $data)) {
            throw new \InvalidArgumentException('Missing required field "deviceName" for ' . static::class . '.');
        }
        if (!array_key_exists('deviceBrand', $data)) {
            throw new \InvalidArgumentException('Missing required field "deviceBrand" for ' . static::class . '.');
        }
        if (!array_key_exists('deviceModel', $data)) {
            throw new \InvalidArgumentException('Missing required field "deviceModel" for ' . static::class . '.');
        }
        if (!array_key_exists('countryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('countryName', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryName" for ' . static::class . '.');
        }
        if (!array_key_exists('current', $data)) {
            throw new \InvalidArgumentException('Missing required field "current" for ' . static::class . '.');
        }
        if (!array_key_exists('factors', $data)) {
            throw new \InvalidArgumentException('Missing required field "factors" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('mfaUpdatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "mfaUpdatedAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            expire: $data['expire'],
            provider: $data['provider'],
            providerUid: $data['providerUid'],
            providerAccessToken: $data['providerAccessToken'],
            providerAccessTokenExpiry: $data['providerAccessTokenExpiry'],
            providerRefreshToken: $data['providerRefreshToken'],
            ip: $data['ip'],
            osCode: $data['osCode'],
            osName: $data['osName'],
            osVersion: $data['osVersion'],
            clientType: $data['clientType'],
            clientCode: $data['clientCode'],
            clientName: $data['clientName'],
            clientVersion: $data['clientVersion'],
            clientEngine: $data['clientEngine'],
            clientEngineVersion: $data['clientEngineVersion'],
            deviceName: $data['deviceName'],
            deviceBrand: $data['deviceBrand'],
            deviceModel: $data['deviceModel'],
            countryCode: $data['countryCode'],
            countryName: $data['countryName'],
            current: $data['current'],
            factors: $data['factors'],
            secret: $data['secret'],
            mfaUpdatedAt: $data['mfaUpdatedAt']
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
            'expire' => static::serializeValue($this->expire),
            'provider' => static::serializeValue($this->provider),
            'providerUid' => static::serializeValue($this->providerUid),
            'providerAccessToken' => static::serializeValue($this->providerAccessToken),
            'providerAccessTokenExpiry' => static::serializeValue($this->providerAccessTokenExpiry),
            'providerRefreshToken' => static::serializeValue($this->providerRefreshToken),
            'ip' => static::serializeValue($this->ip),
            'osCode' => static::serializeValue($this->osCode),
            'osName' => static::serializeValue($this->osName),
            'osVersion' => static::serializeValue($this->osVersion),
            'clientType' => static::serializeValue($this->clientType),
            'clientCode' => static::serializeValue($this->clientCode),
            'clientName' => static::serializeValue($this->clientName),
            'clientVersion' => static::serializeValue($this->clientVersion),
            'clientEngine' => static::serializeValue($this->clientEngine),
            'clientEngineVersion' => static::serializeValue($this->clientEngineVersion),
            'deviceName' => static::serializeValue($this->deviceName),
            'deviceBrand' => static::serializeValue($this->deviceBrand),
            'deviceModel' => static::serializeValue($this->deviceModel),
            'countryCode' => static::serializeValue($this->countryCode),
            'countryName' => static::serializeValue($this->countryName),
            'current' => static::serializeValue($this->current),
            'factors' => static::serializeValue($this->factors),
            'secret' => static::serializeValue($this->secret),
            'mfaUpdatedAt' => static::serializeValue($this->mfaUpdatedAt)
        ];

        return $result;
    }
}
