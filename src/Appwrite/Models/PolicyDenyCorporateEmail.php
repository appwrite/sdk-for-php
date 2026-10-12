<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Deny Corporate Email
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyDenyCorporateEmail
{
    use ArraySerializable;

    /**
     * PolicyDenyCorporateEmail constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether the deny non-corporate email policy is enabled.
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
