<?php

namespace Appwrite\Models;

/**
 * Teams List
 */
readonly class TeamList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'teams' => Team::class
    ];

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
}
