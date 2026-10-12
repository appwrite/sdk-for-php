<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 PAR
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2PAR
{
    use ArraySerializable;

    /**
     * Oauth2PAR constructor.
     *
     * @param string $requestUri authorization request handle to pass to the authorize endpoint.
     * @param int $expiresIn lifetime of the authorization request handle in seconds.
     */
    public function __construct(
        public string $requestUri,
        public int $expiresIn
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'request_uri' => "",
            'expires_in' => 0,
        ];

        return new static(
            requestUri: $data['request_uri'],
            expiresIn: $data['expires_in']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'request_uri' => static::serializeValue($this->requestUri),
            'expires_in' => static::serializeValue($this->expiresIn)
        ];
    }
}
