<?php

namespace Appwrite\Models;

/**
 * usageGroup
 */
readonly class UsageGroup
{
    use ArraySerializable;

    /**
     * UsageGroup constructor.
     *
     * @param string $time group start timestamp (iso 8601).
     * @param int $value aggregated value for the group.
     * @param string|null $path api endpoint path when broken down by `path`.
     * @param string|null $method http method when broken down by `method`.
     * @param string|null $status http status code when broken down by `status`.
     * @param string|null $service api service segment when broken down by `service`.
     * @param string|null $country country code when broken down by `country`.
     * @param string|null $region appwrite region when broken down by `region`.
     * @param string|null $hostname caller origin hostname when broken down by `hostname`.
     * @param string|null $osName operating system name when broken down by `osname`.
     * @param string|null $clientType client type when broken down by `clienttype`.
     * @param string|null $clientName client name when broken down by `clientname`.
     * @param string|null $deviceName device classification when broken down by `devicename`.
     * @param string|null $teamId owning team id when broken down by `teamid`.
     * @param string|null $resourceId external resource id when broken down by `resourceid`.
     */
    public function __construct(
        public string $time,
        public int $value,
        public ?string $path = null,
        public ?string $method = null,
        public ?string $status = null,
        public ?string $service = null,
        public ?string $country = null,
        public ?string $region = null,
        public ?string $hostname = null,
        public ?string $osName = null,
        public ?string $clientType = null,
        public ?string $clientName = null,
        public ?string $deviceName = null,
        public ?string $teamId = null,
        public ?string $resourceId = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('time', $data)) {
            throw new \InvalidArgumentException('Missing required field "time" for ' . static::class . '.');
        }
        if (!array_key_exists('value', $data)) {
            throw new \InvalidArgumentException('Missing required field "value" for ' . static::class . '.');
        }

        return new static(
            time: $data['time'],
            value: $data['value'],
            path: array_key_exists('path', $data) ? $data['path'] : null,
            method: array_key_exists('method', $data) ? $data['method'] : null,
            status: array_key_exists('status', $data) ? $data['status'] : null,
            service: array_key_exists('service', $data) ? $data['service'] : null,
            country: array_key_exists('country', $data) ? $data['country'] : null,
            region: array_key_exists('region', $data) ? $data['region'] : null,
            hostname: array_key_exists('hostname', $data) ? $data['hostname'] : null,
            osName: array_key_exists('osName', $data) ? $data['osName'] : null,
            clientType: array_key_exists('clientType', $data) ? $data['clientType'] : null,
            clientName: array_key_exists('clientName', $data) ? $data['clientName'] : null,
            deviceName: array_key_exists('deviceName', $data) ? $data['deviceName'] : null,
            teamId: array_key_exists('teamId', $data) ? $data['teamId'] : null,
            resourceId: array_key_exists('resourceId', $data) ? $data['resourceId'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'time' => static::serializeValue($this->time),
            'value' => static::serializeValue($this->value),
            'path' => static::serializeValue($this->path),
            'method' => static::serializeValue($this->method),
            'status' => static::serializeValue($this->status),
            'service' => static::serializeValue($this->service),
            'country' => static::serializeValue($this->country),
            'region' => static::serializeValue($this->region),
            'hostname' => static::serializeValue($this->hostname),
            'osName' => static::serializeValue($this->osName),
            'clientType' => static::serializeValue($this->clientType),
            'clientName' => static::serializeValue($this->clientName),
            'deviceName' => static::serializeValue($this->deviceName),
            'teamId' => static::serializeValue($this->teamId),
            'resourceId' => static::serializeValue($this->resourceId)
        ];

        return $result;
    }
}
