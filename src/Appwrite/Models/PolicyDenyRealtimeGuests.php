<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Deny Realtime Guests
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyDenyRealtimeGuests
{
    use ArraySerializable;

    /**
     * PolicyDenyRealtimeGuests constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether guests are stopped from subscribing to realtime channels.
     */
    public function __construct(
        public string $id,
        public bool $enabled
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'enabled' => false,
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled)
        ];
    }
}
