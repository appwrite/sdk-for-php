<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password Dictionary
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasswordDictionary
{
    use ArraySerializable;

    /**
     * PolicyPasswordDictionary constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether password dictionary policy is enabled.
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
