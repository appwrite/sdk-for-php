<?php

namespace Appwrite\Models;

/**
 * MFAType
 */
readonly class MfaType
{
    use ArraySerializable;

    /**
     * MfaType constructor.
     *
     * @param string $secret secret token used for totp factor.
     * @param string $uri uri for authenticator apps.
     */
    public function __construct(
        public string $secret,
        public string $uri
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('uri', $data)) {
            throw new \InvalidArgumentException('Missing required field "uri" for ' . static::class . '.');
        }

        return new static(
            secret: $data['secret'],
            uri: $data['uri']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'secret' => static::serializeValue($this->secret),
            'uri' => static::serializeValue($this->uri)
        ];

        return $result;
    }
}
