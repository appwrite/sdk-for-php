<?php

namespace Appwrite\Models;

/**
 * Volume
 */
readonly class DatabaseStatusVolume
{
    use ArraySerializable;

    /**
     * DatabaseStatusVolume constructor.
     *
     * @param string $path mount path of the volume.
     * @param string $usedPercent percentage of storage used.
     * @param string $available available storage space.
     * @param bool $mounted whether the volume is mounted.
     */
    public function __construct(
        public string $path,
        public string $usedPercent,
        public string $available,
        public bool $mounted
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('path', $data)) {
            throw new \InvalidArgumentException('Missing required field "path" for ' . static::class . '.');
        }
        if (!array_key_exists('usedPercent', $data)) {
            throw new \InvalidArgumentException('Missing required field "usedPercent" for ' . static::class . '.');
        }
        if (!array_key_exists('available', $data)) {
            throw new \InvalidArgumentException('Missing required field "available" for ' . static::class . '.');
        }
        if (!array_key_exists('mounted', $data)) {
            throw new \InvalidArgumentException('Missing required field "mounted" for ' . static::class . '.');
        }

        return new static(
            path: $data['path'],
            usedPercent: $data['usedPercent'],
            available: $data['available'],
            mounted: $data['mounted']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'path' => static::serializeValue($this->path),
            'usedPercent' => static::serializeValue($this->usedPercent),
            'available' => static::serializeValue($this->available),
            'mounted' => static::serializeValue($this->mounted)
        ];

        return $result;
    }
}
