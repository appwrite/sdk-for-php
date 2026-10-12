<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Volume
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'path' => "",
            'usedPercent' => "0%",
            'available' => "0GB",
            'mounted' => false,
        ];

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
        return [
            'path' => static::serializeValue($this->path),
            'usedPercent' => static::serializeValue($this->usedPercent),
            'available' => static::serializeValue($this->available),
            'mounted' => static::serializeValue($this->mounted)
        ];
    }
}
