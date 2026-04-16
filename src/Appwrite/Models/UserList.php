<?php

namespace Appwrite\Models;

/**
 * Users List
 */
readonly class UserList
{
    use ArraySerializable;

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

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('users', $data)) {
            throw new \InvalidArgumentException('Missing required field "users" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            users: is_array($data['users'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(User::class, $item),
                    $data['users']
                )
                : $data['users']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'users' => static::serializeValue($this->users)
        ];

        return $result;
    }
}
