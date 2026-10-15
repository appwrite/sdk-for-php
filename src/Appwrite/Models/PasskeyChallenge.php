<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Passkey Challenge
 *
 * @phpstan-consistent-constructor
 */
readonly class PasskeyChallenge
{
    use ArraySerializable;

    /**
     * PasskeyChallenge constructor.
     *
     * @param string $id challenge id. when signing in, pass it back with the credential to receive a token.
     * @param string $createdAt challenge creation date in iso 8601 format.
     * @param string $passkeyId id of the passkey being registered. empty for sign-in challenges.
     * @param string $expire challenge expiration date in iso 8601 format.
     * @param array $publicKey webauthn options in json form. pass them to `publickeycredential.parsecreationoptionsfromjson()` when registering, or `publickeycredential.parserequestoptionsfromjson()` when signing in.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $passkeyId,
        public string $expire,
        public array $publicKey
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
            'passkeyId' => "",
            'expire' => "",
            'publicKey' => [],
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            passkeyId: $data['passkeyId'],
            expire: $data['expire'],
            publicKey: $data['publicKey']
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
            'passkeyId' => static::serializeValue($this->passkeyId),
            'expire' => static::serializeValue($this->expire),
            'publicKey' => static::serializeValue($this->publicKey)
        ];
    }
}
