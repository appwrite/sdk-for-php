<?php

namespace Appwrite\Models;

use Appwrite\Enums\ProjectAuthMethodId;

/**
 * ProjectAuthMethod
 */
readonly class ProjectAuthMethod
{
    use ArraySerializable;

    /**
     * ProjectAuthMethod constructor.
     *
     * @param ProjectAuthMethodId $id auth method id.
     * @param bool $enabled auth method status.
     */
    public function __construct(
        public ProjectAuthMethodId $id,
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
            id: static::hydrateTypedValue(ProjectAuthMethodId::class, $data['$id']),
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
