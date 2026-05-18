<?php

namespace Appwrite\Models;

/**
 * Presences List
 */
readonly class PresenceList
{
    use ArraySerializable;

    /**
     * PresenceList constructor.
     *
     * @param int $total total number of presences that matched your query.
     * @param list<Presence> $presences list of presences.
     */
    public function __construct(
        public int $total,
        public array $presences
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('presences', $data)) {
            throw new \InvalidArgumentException('Missing required field "presences" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            presences: is_array($data['presences'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Presence::class, $item),
                    $data['presences']
                )
                : $data['presences']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'presences' => static::serializeValue($this->presences)
        ];

        return $result;
    }
}
