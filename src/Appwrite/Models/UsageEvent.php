<?php

namespace Appwrite\Models;

/**
 * usageEvent
 */
readonly class UsageEvent
{
    use ArraySerializable;

    /**
     * UsageEvent constructor.
     *
     * @param string $metric the metric key.
     * @param int $value the metric value.
     * @param string $time the event timestamp.
     * @param string $path the api endpoint path.
     * @param string $method the http method.
     * @param string $status http status code. stored as string to preserve unset state (empty string = not available).
     * @param string $resourceType the resource type.
     * @param string $resourceId the resource id.
     * @param string $countryCode country code in [iso 3166-1](http://en.wikipedia.org/wiki/iso_3166-1) two-character format.
     * @param string $userAgent the user agent string.
     */
    public function __construct(
        public string $metric,
        public int $value,
        public string $time,
        public string $path,
        public string $method,
        public string $status,
        public string $resourceType,
        public string $resourceId,
        public string $countryCode,
        public string $userAgent
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('metric', $data)) {
            throw new \InvalidArgumentException('Missing required field "metric" for ' . static::class . '.');
        }
        if (!array_key_exists('value', $data)) {
            throw new \InvalidArgumentException('Missing required field "value" for ' . static::class . '.');
        }
        if (!array_key_exists('time', $data)) {
            throw new \InvalidArgumentException('Missing required field "time" for ' . static::class . '.');
        }
        if (!array_key_exists('path', $data)) {
            throw new \InvalidArgumentException('Missing required field "path" for ' . static::class . '.');
        }
        if (!array_key_exists('method', $data)) {
            throw new \InvalidArgumentException('Missing required field "method" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('countryCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "countryCode" for ' . static::class . '.');
        }
        if (!array_key_exists('userAgent', $data)) {
            throw new \InvalidArgumentException('Missing required field "userAgent" for ' . static::class . '.');
        }

        return new static(
            metric: $data['metric'],
            value: $data['value'],
            time: $data['time'],
            path: $data['path'],
            method: $data['method'],
            status: $data['status'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            countryCode: $data['countryCode'],
            userAgent: $data['userAgent']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'metric' => static::serializeValue($this->metric),
            'value' => static::serializeValue($this->value),
            'time' => static::serializeValue($this->time),
            'path' => static::serializeValue($this->path),
            'method' => static::serializeValue($this->method),
            'status' => static::serializeValue($this->status),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'countryCode' => static::serializeValue($this->countryCode),
            'userAgent' => static::serializeValue($this->userAgent)
        ];

        return $result;
    }
}
