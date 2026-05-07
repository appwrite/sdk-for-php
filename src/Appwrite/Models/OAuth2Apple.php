<?php

namespace Appwrite\Models;

/**
 * OAuth2Apple
 */
readonly class OAuth2Apple
{
    use ArraySerializable;

    /**
     * OAuth2Apple constructor.
     *
     * @param string $id oauth2 provider id.
     * @param bool $enabled oauth2 provider is active and can be used to create sessions.
     * @param string $serviceId apple oauth2 service id.
     * @param string $keyId apple oauth2 key id.
     * @param string $teamId apple oauth2 team id.
     * @param string $p8File apple oauth2 .p8 private key file contents. the secret key wrapped by the pem markers is 200 characters long.
     */
    public function __construct(
        public string $id,
        public bool $enabled,
        public string $serviceId,
        public string $keyId,
        public string $teamId,
        public string $p8File
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceId" for ' . static::class . '.');
        }
        if (!array_key_exists('keyId', $data)) {
            throw new \InvalidArgumentException('Missing required field "keyId" for ' . static::class . '.');
        }
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('p8File', $data)) {
            throw new \InvalidArgumentException('Missing required field "p8File" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            enabled: $data['enabled'],
            serviceId: $data['serviceId'],
            keyId: $data['keyId'],
            teamId: $data['teamId'],
            p8File: $data['p8File']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            'enabled' => static::serializeValue($this->enabled),
            'serviceId' => static::serializeValue($this->serviceId),
            'keyId' => static::serializeValue($this->keyId),
            'teamId' => static::serializeValue($this->teamId),
            'p8File' => static::serializeValue($this->p8File)
        ];

        return $result;
    }
}
