<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * MFAType
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'secret' => "",
            'uri' => "",
        ];

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
        return [
            'secret' => static::serializeValue($this->secret),
            'uri' => static::serializeValue($this->uri)
        ];
    }
}
