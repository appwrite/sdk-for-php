<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AppSecretPlaintext
 *
 * @phpstan-consistent-constructor
 */
readonly class AppSecretPlaintext
{
    use ArraySerializable;

    /**
     * AppSecretPlaintext constructor.
     *
     * @param string $id secret id.
     * @param string $createdAt secret creation time in iso 8601 format.
     * @param string $updatedAt secret update time in iso 8601 format.
     * @param string $appId application id this secret belongs to.
     * @param string $secret application client secret. returned only when the secret is created; subsequent reads always return an empty value.
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
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'appId' => "",
            'secret' => "",
            'hint' => "",
            'createdById' => "",
            'createdByName' => "",
        ];

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
