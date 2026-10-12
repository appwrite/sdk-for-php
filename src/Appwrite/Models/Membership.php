<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Membership
 *
 * @phpstan-consistent-constructor
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
     * @param string $userPhone user phone number. hide this attribute by toggling membership privacy in the console.
     * @param string $teamId team id.
     * @param string $teamName team name.
     * @param string $invited date, the user has been invited to join the team in iso 8601 format.
     * @param string $joined date, the user has accepted the invitation to join the team in iso 8601 format.
     * @param bool $confirm user confirmation status, true if the user has joined the team or false otherwise.
     * @param bool $mfa multi factor authentication status, true if the user has mfa enabled or false otherwise. hide this attribute by toggling membership privacy in the console.
     * @param string $userAccessedAt most recent access date in iso 8601 format. show this attribute by toggling membership privacy in the console.
     * @param array $roles user list of roles
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $userName,
        public string $userEmail,
        public string $userPhone,
        public string $teamId,
        public string $teamName,
        public string $invited,
        public string $joined,
        public bool $confirm,
        public bool $mfa,
        public string $userAccessedAt,
        public array $roles
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'userId' => "",
            'userName' => "",
            'userEmail' => "",
            'userPhone' => "",
            'teamId' => "",
            'teamName' => "",
            'invited' => "",
            'joined' => "",
            'confirm' => false,
            'mfa' => false,
            'userAccessedAt' => "",
            'roles' => [],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            userName: $data['userName'],
            userEmail: $data['userEmail'],
            userPhone: $data['userPhone'],
            teamId: $data['teamId'],
            teamName: $data['teamName'],
            invited: $data['invited'],
            joined: $data['joined'],
            confirm: $data['confirm'],
            mfa: $data['mfa'],
            userAccessedAt: $data['userAccessedAt'],
            roles: $data['roles']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'userId' => static::serializeValue($this->userId),
            'userName' => static::serializeValue($this->userName),
            'userEmail' => static::serializeValue($this->userEmail),
            'userPhone' => static::serializeValue($this->userPhone),
            'teamId' => static::serializeValue($this->teamId),
            'teamName' => static::serializeValue($this->teamName),
            'invited' => static::serializeValue($this->invited),
            'joined' => static::serializeValue($this->joined),
            'confirm' => static::serializeValue($this->confirm),
            'mfa' => static::serializeValue($this->mfa),
            'userAccessedAt' => static::serializeValue($this->userAccessedAt),
            'roles' => static::serializeValue($this->roles)
        ];
    }
}
