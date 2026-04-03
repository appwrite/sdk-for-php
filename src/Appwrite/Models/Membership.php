<?php

namespace Appwrite\Models;

/**
 * Membership
 */
readonly class Membership
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
}
