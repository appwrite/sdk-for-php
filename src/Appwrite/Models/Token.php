<?php

namespace Appwrite\Models;

/**
 * Token
 */
readonly class Token
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
     * Token constructor.
     *
     * @param string $id token id.
     * @param string $createdAt token creation date in iso 8601 format.
     * @param string $userId user id.
     * @param string $secret token secret key. this will return an empty string unless the response is returned using an api key or as part of a webhook payload.
     * @param string $expire token expiration date in iso 8601 format.
     * @param string $phrase security phrase of a token. empty if security phrase was not requested when creating a token. it includes randomly generated phrase which is also sent in the external resource such as email.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $userId,
        public string $secret,
        public string $expire,
        public string $phrase
    ) {
    }
}
