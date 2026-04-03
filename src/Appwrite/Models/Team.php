<?php

namespace Appwrite\Models;

/**
 * Team
 */
readonly class Team
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

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
}
