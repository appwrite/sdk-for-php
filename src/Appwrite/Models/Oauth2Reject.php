<?php

namespace Appwrite\Models;

/**
 * OAuth2 Reject
 */
readonly class Oauth2Reject
{
    use ArraySerializable;

    /**
     * Oauth2Reject constructor.
     *
     * @param string $redirectUrl url the end user should be redirected to after the grant is rejected, carrying an `access_denied` error.
     */
    public function __construct(
        public string $redirectUrl
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('redirectUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "redirectUrl" for ' . static::class . '.');
        }

        return new static(
            redirectUrl: $data['redirectUrl']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'redirectUrl' => static::serializeValue($this->redirectUrl)
        ];

        return $result;
    }
}
