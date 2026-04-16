<?php

namespace Appwrite\Models;

/**
 * Log
 */
readonly class Log
{
    use ArraySerializable;

    /**
     * Log constructor.
     *
     * @param string $event event name.
     * @param string $userId user id of the actor recorded for this log. during impersonation, this is the original impersonator, not the impersonated target user.
     * @param string $userEmail user email of the actor recorded for this log. during impersonation, this is the original impersonator.
     * @param string $userName user name of the actor recorded for this log. during impersonation, this is the original impersonator.
     * @param string $mode api mode when event triggered.
     * @param string $userType user type who triggered the audit log. possible values: user, admin, guest, keyproject, keyaccount, keyorganization.
     * @param string $ip ip session in use when the session was created.
     * @param string $time log creation date in iso 8601 format.
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
     */
    public function __construct(
        public string $event,
        public string $userId,
        public string $userEmail,
        public string $userName,
        public string $mode,
        public string $userType,
        public string $ip,
        public string $time,
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
        public string $countryName
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('event', $data)) {
            throw new \InvalidArgumentException('Missing required field "event" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('userEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "userEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('userName', $data)) {
            throw new \InvalidArgumentException('Missing required field "userName" for ' . static::class . '.');
        }
        if (!array_key_exists('mode', $data)) {
            throw new \InvalidArgumentException('Missing required field "mode" for ' . static::class . '.');
        }
        if (!array_key_exists('userType', $data)) {
            throw new \InvalidArgumentException('Missing required field "userType" for ' . static::class . '.');
        }
        if (!array_key_exists('ip', $data)) {
            throw new \InvalidArgumentException('Missing required field "ip" for ' . static::class . '.');
        }
        if (!array_key_exists('time', $data)) {
            throw new \InvalidArgumentException('Missing required field "time" for ' . static::class . '.');
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

        return new static(
            event: $data['event'],
            userId: $data['userId'],
            userEmail: $data['userEmail'],
            userName: $data['userName'],
            mode: $data['mode'],
            userType: $data['userType'],
            ip: $data['ip'],
            time: $data['time'],
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
            countryName: $data['countryName']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'event' => static::serializeValue($this->event),
            'userId' => static::serializeValue($this->userId),
            'userEmail' => static::serializeValue($this->userEmail),
            'userName' => static::serializeValue($this->userName),
            'mode' => static::serializeValue($this->mode),
            'userType' => static::serializeValue($this->userType),
            'ip' => static::serializeValue($this->ip),
            'time' => static::serializeValue($this->time),
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
            'countryName' => static::serializeValue($this->countryName)
        ];

        return $result;
    }
}
