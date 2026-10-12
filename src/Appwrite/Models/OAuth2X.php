<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2X
 *
 * @phpstan-consistent-constructor
 */
readonly class OAuth2X
{
    use ArraySerializable;

    /**
     * OAuth2X constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $customerKey x oauth2 customer key.
     * @param string $secretKey x oauth2 secret key.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $customerKey,
        public string $secretKey
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'enabled' => false,
            'customerKey' => "",
            'secretKey' => "",
        ];

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            customerKey: $data['customerKey'],
            secretKey: $data['secretKey']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'customerKey' => static::serializeValue($this->customerKey),
            'secretKey' => static::serializeValue($this->secretKey)
        ];
    }
}
