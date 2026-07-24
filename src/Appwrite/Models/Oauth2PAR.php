<?php

namespace Appwrite\Models;

/**
 * OAuth2 PAR
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
        if (!array_key_exists('request_uri', $data)) {
            throw new \InvalidArgumentException('Missing required field "request_uri" for ' . static::class . '.');
        }
        if (!array_key_exists('expires_in', $data)) {
            throw new \InvalidArgumentException('Missing required field "expires_in" for ' . static::class . '.');
        }

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
        $result = [
            'request_uri' => static::serializeValue($this->requestUri),
            'expires_in' => static::serializeValue($this->expiresIn)
        ];

        return $result;
    }
}
