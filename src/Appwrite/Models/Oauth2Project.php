<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Project
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Project
{
    use ArraySerializable;

    /**
     * Oauth2Project constructor.
     *
     * @param string $id project id.
     * @param string $region region id the project is deployed in.
     * @param string $endpoint api endpoint of the region the project is deployed in. empty when the region has no public hostname configured.
     */
    public function __construct(
        public string $id,
        public string $region,
        public string $endpoint
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'region' => "",
            'endpoint' => "",
        ];

        return new static(
            id: $data['$id'],
            region: $data['region'],
            endpoint: $data['endpoint']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'region' => static::serializeValue($this->region),
            'endpoint' => static::serializeValue($this->endpoint)
        ];
    }
}
