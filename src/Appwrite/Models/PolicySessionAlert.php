<?php

namespace Appwrite\Models;

/**
 * Policy Session Alert
 */
readonly class PolicySessionAlert
{
    use ArraySerializable;

    /**
     * PolicySessionAlert constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether session alert policy is enabled.
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
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }

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
        $result = [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled)
        ];

        return $result;
    }
}
