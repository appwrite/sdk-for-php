<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password Personal Data
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasswordPersonalData
{
    use ArraySerializable;

    /**
     * PolicyPasswordPersonalData constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether password personal data policy is enabled.
     * @param array $denyList custom terms blocked by case-insensitive substring matching when enabled.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public array $denyList
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
            'denyList' => [],
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            denyList: $data['denyList']
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
            'denyList' => static::serializeValue($this->denyList)
        ];
    }
}
