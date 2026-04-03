<?php

namespace Appwrite\Models;

/**
 * User
 */
readonly class User
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
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'targets' => Target::class
    ];

    /**
     * User constructor.
     *
     * @param string $id user id.
     * @param string $createdAt user creation date in iso 8601 format.
     * @param string $updatedAt user update date in iso 8601 format.
     * @param string $name user name.
     * @param string $registration user registration date in iso 8601 format.
     * @param bool $status user status. pass `true` for enabled and `false` for disabled.
     * @param array $labels labels for the user.
     * @param string $passwordUpdate password update time in iso 8601 format.
     * @param string $email user email address.
     * @param string $phone user phone number in e.164 format.
     * @param bool $emailVerification email verification status.
     * @param bool $phoneVerification phone verification status.
     * @param bool $mfa multi factor authentication status.
     * @param Preferences $prefs user preferences as a key-value object
     * @param list<Target> $targets a user-owned message receiver. a single user may have multiple e.g. emails, phones, and a browser. each target is registered with a single provider.
     * @param string $accessedAt most recent access date in iso 8601 format. this attribute is only updated again after 24 hours.
     * @param string|null $password hashed user password.
     * @param string|null $hash password hashing algorithm.
     * @param array|null $hashOptions password hashing algorithm configuration.
     * @param bool|null $impersonator whether the user can impersonate other users.
     * @param string|null $impersonatorUserId id of the original actor performing the impersonation. present only when the current request is impersonating another user. internal audit logs attribute the action to this user, while the impersonated target is recorded only in internal audit payload data.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $registration,
        public bool $status,
        public array $labels,
        public string $passwordUpdate,
        public string $email,
        public string $phone,
        public bool $emailVerification,
        public bool $phoneVerification,
        public bool $mfa,
        public Preferences $prefs,
        public array $targets,
        public string $accessedAt,
        public ?string $password = null,
        public ?string $hash = null,
        public ?array $hashOptions = null,
        public ?bool $impersonator = null,
        public ?string $impersonatorUserId = null
    ) {
    }
}
