<?php

namespace Appwrite\Models;

/**
 * Users List
 */
readonly class UserList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'users' => User::class
    ];

    /**
     * UserList constructor.
     *
     * @param int $total total number of users that matched your query.
     * @param list<User> $users list of users.
     */
    public function __construct(
        public int $total,
        public array $users
    ) {
    }
}
