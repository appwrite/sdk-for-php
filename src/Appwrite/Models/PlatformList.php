<?php

namespace Appwrite\Models;

/**
 * Platforms List
 */
readonly class PlatformList
{
    use ArraySerializable;

    /**
     * PlatformList constructor.
     *
     * @param int $total total number of platforms in the given project.
     * @param array $platforms list of platforms.
     */
    public function __construct(
        public int $total,
        public array $platforms
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('platforms', $data)) {
            throw new \InvalidArgumentException('Missing required field "platforms" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            platforms: $data['platforms']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'platforms' => static::serializeValue($this->platforms)
        ];

        return $result;
    }
}
