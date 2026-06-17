<?php

namespace Appwrite\Models;

/**
 * ActivityEvent
 */
readonly class ActivityEvent
{
    use ArraySerializable;

    /**
     * ActivityEvent constructor.
     *
     * @param string $id event id.
     * @param string $actorType actor type.
     * @param string $actorId actor id.
     * @param string $actorEmail actor email.
     * @param string $actorName actor name.
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
     * @param string $countryCode country two-character iso 3166-1 alpha code.
     * @param string $countryName country name.
     */
    public function __construct(
        public string $id,
        public string $actorType,
        public string $actorId,
        public string $actorEmail,
        public string $actorName,
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
        public string $countryCode,
        public string $countryName
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
        if (!array_key_exists('actorType', $data)) {
            throw new \InvalidArgumentException('Missing required field "actorType" for ' . static::class . '.');
        }
        if (!array_key_exists('actorId', $data)) {
            throw new \InvalidArgumentException('Missing required field "actorId" for ' . static::class . '.');
        }
        if (!array_key_exists('actorEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "actorEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('actorName', $data)) {
            throw new \InvalidArgumentException('Missing required field "actorName" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceParent', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceParent" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('resource', $data)) {
            throw new \InvalidArgumentException('Missing required field "resource" for ' . static::class . '.');
        }
        if (!array_key_exists('event', $data)) {
            throw new \InvalidArgumentException('Missing required field "event" for ' . static::class . '.');
        }
        if (!array_key_exists('userAgent', $data)) {
            throw new \InvalidArgumentException('Missing required field "userAgent" for ' . static::class . '.');
        }
        if (!array_key_exists('ip', $data)) {
            throw new \InvalidArgumentException('Missing required field "ip" for ' . static::class . '.');
        }
        if (!array_key_exists('mode', $data)) {
            throw new \InvalidArgumentException('Missing required field "mode" for ' . static::class . '.');
        }
        if (!array_key_exists('country', $data)) {
            throw new \InvalidArgumentException('Missing required field "country" for ' . static::class . '.');
        }
        if (!array_key_exists('time', $data)) {
            throw new \InvalidArgumentException('Missing required field "time" for ' . static::class . '.');
        }
        if (!array_key_exists('projectId', $data)) {
            throw new \InvalidArgumentException('Missing required field "projectId" for ' . static::class . '.');
        }
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('hostname', $data)) {
            throw new \InvalidArgumentException('Missing required field "hostname" for ' . static::class . '.');
        }
        if (!array_key_exists('countryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('countryName', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryName" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            actorType: $data['actorType'],
            actorId: $data['actorId'],
            actorEmail: $data['actorEmail'],
            actorName: $data['actorName'],
            resourceParent: $data['resourceParent'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            resource: $data['resource'],
            event: $data['event'],
            userAgent: $data['userAgent'],
            ip: $data['ip'],
            mode: $data['mode'],
            country: $data['country'],
            time: $data['time'],
            projectId: $data['projectId'],
            teamId: $data['teamId'],
            hostname: $data['hostname'],
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
            '$id' => static::serializeValue($this->id),
            'actorType' => static::serializeValue($this->actorType),
            'actorId' => static::serializeValue($this->actorId),
            'actorEmail' => static::serializeValue($this->actorEmail),
            'actorName' => static::serializeValue($this->actorName),
            'resourceParent' => static::serializeValue($this->resourceParent),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'resource' => static::serializeValue($this->resource),
            'event' => static::serializeValue($this->event),
            'userAgent' => static::serializeValue($this->userAgent),
            'ip' => static::serializeValue($this->ip),
            'mode' => static::serializeValue($this->mode),
            'country' => static::serializeValue($this->country),
            'time' => static::serializeValue($this->time),
            'projectId' => static::serializeValue($this->projectId),
            'teamId' => static::serializeValue($this->teamId),
            'hostname' => static::serializeValue($this->hostname),
            'countryCode' => static::serializeValue($this->countryCode),
            'countryName' => static::serializeValue($this->countryName)
        ];

        return $result;
    }
}
