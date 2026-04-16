<?php

namespace Appwrite\Models;

/**
 * Membership
 */
readonly class Membership
{
    use ArraySerializable;

    /**
     * Membership constructor.
     *
     * @param string $id membership id.
     * @param string $createdAt membership creation date in iso 8601 format.
     * @param string $updatedAt membership update date in iso 8601 format.
     * @param string $userId user id.
     * @param string $userName user name. hide this attribute by toggling membership privacy in the console.
     * @param string $userEmail user email address. hide this attribute by toggling membership privacy in the console.
     * @param string $teamId team id.
     * @param string $teamName team name.
     * @param string $invited date, the user has been invited to join the team in iso 8601 format.
     * @param string $joined date, the user has accepted the invitation to join the team in iso 8601 format.
     * @param bool $confirm user confirmation status, true if the user has joined the team or false otherwise.
     * @param bool $mfa multi factor authentication status, true if the user has mfa enabled or false otherwise. hide this attribute by toggling membership privacy in the console.
     * @param array $roles user list of roles
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $userName,
        public string $userEmail,
        public string $teamId,
        public string $teamName,
        public string $invited,
        public string $joined,
        public bool $confirm,
        public bool $mfa,
        public array $roles
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
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('userName', $data)) {
            throw new \InvalidArgumentException('Missing required field "userName" for ' . static::class . '.');
        }
        if (!array_key_exists('userEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "userEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('teamName', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamName" for ' . static::class . '.');
        }
        if (!array_key_exists('invited', $data)) {
            throw new \InvalidArgumentException('Missing required field "invited" for ' . static::class . '.');
        }
        if (!array_key_exists('joined', $data)) {
            throw new \InvalidArgumentException('Missing required field "joined" for ' . static::class . '.');
        }
        if (!array_key_exists('confirm', $data)) {
            throw new \InvalidArgumentException('Missing required field "confirm" for ' . static::class . '.');
        }
        if (!array_key_exists('mfa', $data)) {
            throw new \InvalidArgumentException('Missing required field "mfa" for ' . static::class . '.');
        }
        if (!array_key_exists('roles', $data)) {
            throw new \InvalidArgumentException('Missing required field "roles" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            userName: $data['userName'],
            userEmail: $data['userEmail'],
            teamId: $data['teamId'],
            teamName: $data['teamName'],
            invited: $data['invited'],
            joined: $data['joined'],
            confirm: $data['confirm'],
            mfa: $data['mfa'],
            roles: $data['roles']
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
            'userId' => static::serializeValue($this->userId),
            'userName' => static::serializeValue($this->userName),
            'userEmail' => static::serializeValue($this->userEmail),
            'teamId' => static::serializeValue($this->teamId),
            'teamName' => static::serializeValue($this->teamName),
            'invited' => static::serializeValue($this->invited),
            'joined' => static::serializeValue($this->joined),
            'confirm' => static::serializeValue($this->confirm),
            'mfa' => static::serializeValue($this->mfa),
            'roles' => static::serializeValue($this->roles)
        ];

        return $result;
    }
}
