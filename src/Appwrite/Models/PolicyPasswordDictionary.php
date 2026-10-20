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
     * @param array $denyList custom passwords blocked by case-sensitive equality when enabled.
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
