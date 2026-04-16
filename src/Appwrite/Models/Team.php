<?php

namespace Appwrite\Models;

/**
 * Team
 */
readonly class Team
{
    use ArraySerializable;

    /**
     * Team constructor.
     *
     * @param string $id team id.
     * @param string $createdAt team creation date in iso 8601 format.
     * @param string $updatedAt team update date in iso 8601 format.
     * @param string $name team name.
     * @param int $total total number of team members.
     * @param Preferences $prefs team preferences as a key-value object
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public int $total,
        public Preferences $prefs
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('prefs', $data)) {
            throw new \InvalidArgumentException('Missing required field "prefs" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            total: $data['total'],
            prefs: static::hydrateTypedValue(Preferences::class, $data['prefs'])
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'total' => static::serializeValue($this->total),
            'prefs' => static::serializeValue($this->prefs)
        ];

        return $result;
    }
}
