<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AlgoBcrypt
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'type' => "bcrypt",
        ];

        return new static(
            type: $data['type']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'type' => static::serializeValue($this->type)
        ];
    }
}
