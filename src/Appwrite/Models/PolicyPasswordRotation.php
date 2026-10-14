<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password Rotation
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasswordRotation
{
    use ArraySerializable;

    /**
     * PolicyPasswordRotation constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether expired passwords require a reset before email/password sign-in.
     * @param int $maxAge maximum password age in seconds.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public int $maxAge
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
            'maxAge' => 31536000,
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            maxAge: $data['maxAge']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'maxAge' => static::serializeValue($this->maxAge)
        ];
    }
}
