<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * PITRWindows
 *
 * @phpstan-consistent-constructor
 */
readonly class DedicatedDatabasePITRWindows
{
    use ArraySerializable;

    /**
     * DedicatedDatabasePITRWindows constructor.
     *
     * @param string $earliest earliest available recovery point.
     * @param string $latest latest available recovery point.
     */
    public function __construct(
        public string $earliest,
        public string $latest
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('earliest', $data)) {
            throw new \InvalidArgumentException('Missing required field "earliest" for ' . static::class . '.');
        }
        if (!array_key_exists('latest', $data)) {
            throw new \InvalidArgumentException('Missing required field "latest" for ' . static::class . '.');
        }

        return new static(
            earliest: $data['earliest'],
            latest: $data['latest']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'earliest' => static::serializeValue($this->earliest),
            'latest' => static::serializeValue($this->latest)
        ];
    }
}
