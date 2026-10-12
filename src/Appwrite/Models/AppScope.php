<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AppScope
 *
 * @phpstan-consistent-constructor
 */
readonly class AppScope
{
    use ArraySerializable;

    /**
     * AppScope constructor.
     *
     * @param string $value scope value as requested by apps.
     * @param string $description human-readable description of what the scope grants.
     * @param string $type what the scope grants access to. one of `account`, `project`, or `organization`. only `project` and `organization` scopes are installable.
     * @param string $category scope category, used to group scopes on consent and installation screens.
     * @param bool $deprecated whether the scope is deprecated. deprecated scopes can still be requested but should not be offered for new grants.
     */
    public function __construct(
        public string $value,
        public string $description,
        public string $type,
        public string $category,
        public bool $deprecated
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'value' => "",
            'description' => "",
            'type' => "",
            'category' => "",
            'deprecated' => false,
        ];

        return new static(
            value: $data['value'],
            description: $data['description'],
            type: $data['type'],
            category: $data['category'],
            deprecated: $data['deprecated']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'value' => static::serializeValue($this->value),
            'description' => static::serializeValue($this->description),
            'type' => static::serializeValue($this->type),
            'category' => static::serializeValue($this->category),
            'deprecated' => static::serializeValue($this->deprecated)
        ];
    }
}
