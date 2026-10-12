<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Policy Passkey
 *
 * @phpstan-consistent-constructor
 */
readonly class PolicyPasskey
{
    use ArraySerializable;

    /**
     * PolicyPasskey constructor.
     *
     * @param string $id policy id.
     * @param string $rpId relying party id passkeys are bound to. empty until configured.
     * @param array $origins web origins passkeys work on, from the project's platforms on the relying party id and a localhost web platform. read-only.
     */
    public function __construct(
        public string $id,
        public string $rpId,
        public array $origins
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
        if (!array_key_exists('rpId', $data)) {
            throw new \InvalidArgumentException('Missing required field "rpId" for ' . static::class . '.');
        }
        if (!array_key_exists('origins', $data)) {
            throw new \InvalidArgumentException('Missing required field "origins" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            rpId: $data['rpId'],
            origins: $data['origins']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'rpId' => static::serializeValue($this->rpId),
            'origins' => static::serializeValue($this->origins)
        ];
    }
}
