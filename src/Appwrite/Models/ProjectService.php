<?php

namespace Appwrite\Models;

use Appwrite\Enums\ProjectServiceId;

/**
 * ProjectService
 */
readonly class ProjectService
{
    use ArraySerializable;

    /**
     * ProjectService constructor.
     *
     * @param ProjectServiceId $id service id.
     * @param bool $enabled service status.
     */
    public function __construct(
        public ProjectServiceId $id,
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
            id: static::hydrateTypedValue(ProjectServiceId::class, $data['$id']),
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
