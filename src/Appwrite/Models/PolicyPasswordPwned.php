<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Password Pwned
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasswordPwned
{
    use ArraySerializable;

    /**
     * PolicyPasswordPwned constructor.
     *
     * @param string $id policy id.
     * @param bool $enabled whether passwords are checked against known data breaches and the result recorded on the user.
     * @param bool $sessions whether a sign-in with a breached password is refused until the password is reset.
     * @param bool $users whether a breached password is rejected when a user signs up or sets a new password.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public bool $sessions,
        public bool $users
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'enabled' => true,
            'sessions' => false,
            'users' => false,
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            sessions: $data['sessions'],
            users: $data['users']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'sessions' => static::serializeValue($this->sessions),
            'users' => static::serializeValue($this->users)
        ];
    }
}
