<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Account Devices
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyAccountDevices
{
    use ArraySerializable;

    /**
     * PolicyAccountDevices constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether account devices are enabled. when disabled, new account devices can no longer be created.
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
            'enabled' => true,
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
