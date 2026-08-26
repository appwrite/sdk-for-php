<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AppSecret
 *
 * @phpstan-consistent-constructor
 */
readonly class AppSecret
{
    use ArraySerializable;

    /**
     * AppSecret constructor.
     *
     * @param string $id secret id.
     * @param string $createdAt secret creation time in iso 8601 format.
     * @param string $updatedAt secret update time in iso 8601 format.
     * @param string $appId application id this secret belongs to.
     * @param string $secret always empty. the application client secret is returned only once, in the response of the createsecret method.
     * @param string $hint last few characters of the client secret, used to help identify it.
     * @param string $createdById id of the user who created the secret.
     * @param string $createdByName name of the user who created the secret.
     * @param string|null $lastAccessedAt time the secret was last used for authentication in iso 8601 format. null if never used.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $appId,
        public string $secret,
        public string $hint,
        public string $createdById,
        public string $createdByName,
        public ?string $lastAccessedAt = null
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
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('appId', $data)) {
            throw new \InvalidArgumentException('Missing required field "appId" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('hint', $data)) {
            throw new \InvalidArgumentException('Missing required field "hint" for ' . static::class . '.');
        }
        if (!array_key_exists('createdById', $data)) {
            throw new \InvalidArgumentException('Missing required field "createdById" for ' . static::class . '.');
        }
        if (!array_key_exists('createdByName', $data)) {
            throw new \InvalidArgumentException('Missing required field "createdByName" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            appId: $data['appId'],
            secret: $data['secret'],
            hint: $data['hint'],
            createdById: $data['createdById'],
            createdByName: $data['createdByName'],
            lastAccessedAt: $data['lastAccessedAt'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'appId' => static::serializeValue($this->appId),
            'secret' => static::serializeValue($this->secret),
            'hint' => static::serializeValue($this->hint),
            'createdById' => static::serializeValue($this->createdById),
            'createdByName' => static::serializeValue($this->createdByName),
            'lastAccessedAt' => static::serializeValue($this->lastAccessedAt)
        ];
    }
}
