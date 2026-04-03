<?php

namespace Appwrite\Models;

/**
 * MFA Challenge
 */
readonly class MfaChallenge
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt'
    ];

    /**
     * MfaChallenge constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $userId user id.
     * @param string $expire token expiration date in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $userId,
        public string $expire
    ) {
    }
}
