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
}
