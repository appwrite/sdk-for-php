<?php

namespace Appwrite\Models;

/**
 * ActivityEvent
 */
readonly class ActivityEvent
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id'
    ];

    /**
     * ActivityEvent constructor.
     *
     * @param string $id event id.
     * @param string $userType user type.
     * @param string $userId user id.
     * @param string $userEmail user email.
     * @param string $userName user name.
     * @param string $resourceParent resource parent.
     * @param string $resourceType resource type.
     * @param string $resourceId resource id.
     * @param string $resource resource.
     * @param string $event event name.
     * @param string $userAgent user agent.
     * @param string $ip ip address.
     * @param string $mode api mode when event triggered.
     * @param string $country location.
     * @param string $time log creation date in iso 8601 format.
     * @param string $projectId project id.
     * @param string $teamId team id.
     * @param string $hostname hostname.
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
        public string $id,
        public string $userType,
        public string $userId,
        public string $userEmail,
        public string $userName,
        public string $resourceParent,
        public string $resourceType,
        public string $resourceId,
        public string $resource,
        public string $event,
        public string $userAgent,
        public string $ip,
        public string $mode,
        public string $country,
        public string $time,
        public string $projectId,
        public string $teamId,
        public string $hostname,
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
