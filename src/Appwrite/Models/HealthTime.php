<?php

namespace Appwrite\Models;

/**
 * Health Time
 */
readonly class HealthTime
{
    use ArraySerializable;

    /**
     * HealthTime constructor.
     *
     * @param int $remoteTime current unix timestamp on trustful remote server.
     * @param int $localTime current unix timestamp of local server where appwrite runs.
     * @param int $diff difference of unix remote and local timestamps in milliseconds.
     */
    public function __construct(
        public int $remoteTime,
        public int $localTime,
        public int $diff
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('remoteTime', $data)) {
            throw new \InvalidArgumentException('Missing required field "remoteTime" for ' . static::class . '.');
        }
        if (!array_key_exists('localTime', $data)) {
            throw new \InvalidArgumentException('Missing required field "localTime" for ' . static::class . '.');
        }
        if (!array_key_exists('diff', $data)) {
            throw new \InvalidArgumentException('Missing required field "diff" for ' . static::class . '.');
        }

        return new static(
            remoteTime: $data['remoteTime'],
            localTime: $data['localTime'],
            diff: $data['diff']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'remoteTime' => static::serializeValue($this->remoteTime),
            'localTime' => static::serializeValue($this->localTime),
            'diff' => static::serializeValue($this->diff)
        ];

        return $result;
    }
}
