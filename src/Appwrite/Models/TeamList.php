<?php

namespace Appwrite\Models;

/**
 * Teams List
 */
readonly class TeamList
{
    use ArraySerializable;

    /**
     * TeamList constructor.
     *
     * @param int $total total number of teams that matched your query.
     * @param list<Team> $teams list of teams.
     */
    public function __construct(
        public int $total,
        public array $teams
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
        if (!array_key_exists('teams', $data)) {
            throw new \InvalidArgumentException('Missing required field "teams" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            teams: is_array($data['teams'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Team::class, $item),
                    $data['teams']
                )
                : $data['teams']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'teams' => static::serializeValue($this->teams)
        ];

        return $result;
    }
}
