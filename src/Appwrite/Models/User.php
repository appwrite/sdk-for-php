<?php

namespace Appwrite\Models;

/**
 * User
 */
readonly class User
{
    use ArraySerializable;

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
     * @param string|null $emailCanonical canonical form of the user email address.
     * @param bool|null $emailIsFree whether the user email is from a free email provider.
     * @param bool|null $emailIsDisposable whether the user email is from a disposable email provider.
     * @param bool|null $emailIsCorporate whether the user email is from a corporate domain.
     * @param bool|null $emailIsCanonical whether the user email is in its canonical form.
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
        public ?string $emailCanonical = null,
        public ?bool $emailIsFree = null,
        public ?bool $emailIsDisposable = null,
        public ?bool $emailIsCorporate = null,
        public ?bool $emailIsCanonical = null,
        public ?bool $impersonator = null,
        public ?string $impersonatorUserId = null
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
        if (!array_key_exists('registration', $data)) {
            throw new \InvalidArgumentException('Missing required field "registration" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('labels', $data)) {
            throw new \InvalidArgumentException('Missing required field "labels" for ' . static::class . '.');
        }
        if (!array_key_exists('passwordUpdate', $data)) {
            throw new \InvalidArgumentException('Missing required field "passwordUpdate" for ' . static::class . '.');
        }
        if (!array_key_exists('email', $data)) {
            throw new \InvalidArgumentException('Missing required field "email" for ' . static::class . '.');
        }
        if (!array_key_exists('phone', $data)) {
            throw new \InvalidArgumentException('Missing required field "phone" for ' . static::class . '.');
        }
        if (!array_key_exists('emailVerification', $data)) {
            throw new \InvalidArgumentException('Missing required field "emailVerification" for ' . static::class . '.');
        }
        if (!array_key_exists('phoneVerification', $data)) {
            throw new \InvalidArgumentException('Missing required field "phoneVerification" for ' . static::class . '.');
        }
        if (!array_key_exists('mfa', $data)) {
            throw new \InvalidArgumentException('Missing required field "mfa" for ' . static::class . '.');
        }
        if (!array_key_exists('prefs', $data)) {
            throw new \InvalidArgumentException('Missing required field "prefs" for ' . static::class . '.');
        }
        if (!array_key_exists('targets', $data)) {
            throw new \InvalidArgumentException('Missing required field "targets" for ' . static::class . '.');
        }
        if (!array_key_exists('accessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "accessedAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            registration: $data['registration'],
            status: $data['status'],
            labels: $data['labels'],
            passwordUpdate: $data['passwordUpdate'],
            email: $data['email'],
            phone: $data['phone'],
            emailVerification: $data['emailVerification'],
            phoneVerification: $data['phoneVerification'],
            mfa: $data['mfa'],
            prefs: static::hydrateTypedValue(Preferences::class, $data['prefs']),
            targets: is_array($data['targets'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Target::class, $item),
                    $data['targets']
                )
                : $data['targets'],
            accessedAt: $data['accessedAt'],
            password: array_key_exists('password', $data) ? $data['password'] : null,
            hash: array_key_exists('hash', $data) ? $data['hash'] : null,
            hashOptions: array_key_exists('hashOptions', $data) ? $data['hashOptions'] : null,
            emailCanonical: array_key_exists('emailCanonical', $data) ? $data['emailCanonical'] : null,
            emailIsFree: array_key_exists('emailIsFree', $data) ? $data['emailIsFree'] : null,
            emailIsDisposable: array_key_exists('emailIsDisposable', $data) ? $data['emailIsDisposable'] : null,
            emailIsCorporate: array_key_exists('emailIsCorporate', $data) ? $data['emailIsCorporate'] : null,
            emailIsCanonical: array_key_exists('emailIsCanonical', $data) ? $data['emailIsCanonical'] : null,
            impersonator: array_key_exists('impersonator', $data) ? $data['impersonator'] : null,
            impersonatorUserId: array_key_exists('impersonatorUserId', $data) ? $data['impersonatorUserId'] : null
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
            'password' => static::serializeValue($this->password),
            'hash' => static::serializeValue($this->hash),
            'hashOptions' => static::serializeValue($this->hashOptions),
            'registration' => static::serializeValue($this->registration),
            'status' => static::serializeValue($this->status),
            'labels' => static::serializeValue($this->labels),
            'passwordUpdate' => static::serializeValue($this->passwordUpdate),
            'email' => static::serializeValue($this->email),
            'phone' => static::serializeValue($this->phone),
            'emailVerification' => static::serializeValue($this->emailVerification),
            'emailCanonical' => static::serializeValue($this->emailCanonical),
            'emailIsFree' => static::serializeValue($this->emailIsFree),
            'emailIsDisposable' => static::serializeValue($this->emailIsDisposable),
            'emailIsCorporate' => static::serializeValue($this->emailIsCorporate),
            'emailIsCanonical' => static::serializeValue($this->emailIsCanonical),
            'phoneVerification' => static::serializeValue($this->phoneVerification),
            'mfa' => static::serializeValue($this->mfa),
            'prefs' => static::serializeValue($this->prefs),
            'targets' => static::serializeValue($this->targets),
            'accessedAt' => static::serializeValue($this->accessedAt),
            'impersonator' => static::serializeValue($this->impersonator),
            'impersonatorUserId' => static::serializeValue($this->impersonatorUserId)
        ];

        return $result;
    }
}
