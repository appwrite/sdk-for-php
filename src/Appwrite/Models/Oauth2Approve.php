<?php

namespace Appwrite\Models;

/**
 * OAuth2 Approve
 */
readonly class Oauth2Approve
{
    use ArraySerializable;

    /**
     * Oauth2Approve constructor.
     *
     * @param string $redirectUrl url the end user should be redirected to after the grant is approved, carrying the authorization `code` and/or `id_token` along with the original `state`.
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
