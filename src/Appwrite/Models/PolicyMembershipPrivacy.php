<?php

namespace Appwrite\Models;

/**
 * Policy Membership Privacy
 */
readonly class PolicyMembershipPrivacy
{
    use ArraySerializable;

    /**
     * PolicyMembershipPrivacy constructor.
     *
     * @param string $id policy id.
     * @param bool $userId whether user id is visible in memberships.
     * @param bool $userEmail whether user email is visible in memberships.
     * @param bool $userPhone whether user phone is visible in memberships.
     * @param bool $userName whether user name is visible in memberships.
     * @param bool $userMFA whether user mfa status is visible in memberships.
     * @param bool $userAccessedAt whether user last access time is visible in memberships.
     */
    public function __construct(
        public string $id,
        public bool $userId,
        public bool $userEmail,
        public bool $userPhone,
        public bool $userName,
        public bool $userMFA,
        public bool $userAccessedAt
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
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('userEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "userEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('userPhone', $data)) {
            throw new \InvalidArgumentException('Missing required field "userPhone" for ' . static::class . '.');
        }
        if (!array_key_exists('userName', $data)) {
            throw new \InvalidArgumentException('Missing required field "userName" for ' . static::class . '.');
        }
        if (!array_key_exists('userMFA', $data)) {
            throw new \InvalidArgumentException('Missing required field "userMFA" for ' . static::class . '.');
        }
        if (!array_key_exists('userAccessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "userAccessedAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            userId: $data['userId'],
            userEmail: $data['userEmail'],
            userPhone: $data['userPhone'],
            userName: $data['userName'],
            userMFA: $data['userMFA'],
            userAccessedAt: $data['userAccessedAt']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'userId' => static::serializeValue($this->userId),
            'userEmail' => static::serializeValue($this->userEmail),
            'userPhone' => static::serializeValue($this->userPhone),
            'userName' => static::serializeValue($this->userName),
            'userMFA' => static::serializeValue($this->userMFA),
            'userAccessedAt' => static::serializeValue($this->userAccessedAt)
        ];

        return $result;
    }
}
