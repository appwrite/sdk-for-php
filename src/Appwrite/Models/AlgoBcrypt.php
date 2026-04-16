<?php

namespace Appwrite\Models;

/**
 * AlgoBcrypt
 */
readonly class AlgoBcrypt
{
    use ArraySerializable;

    /**
     * AlgoBcrypt constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }

        return new static(
            type: $data['type']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'type' => static::serializeValue($this->type)
        ];

        return $result;
    }
}
