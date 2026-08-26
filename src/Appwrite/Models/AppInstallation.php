<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AppInstallation
 *
 * @phpstan-consistent-constructor
 */
readonly class AppInstallation
{
    use ArraySerializable;

    /**
     * AppInstallation constructor.
     *
     * @param string $id installation id.
     * @param string $createdAt installation creation time in iso 8601 format.
     * @param string $updatedAt installation update time in iso 8601 format.
     * @param string $appId id of the installed application.
     * @param string $teamId id of the team the application is installed on.
     * @param array $scopes scopes granted to the application. snapshot of the application's installation scopes taken when the installation was created or last updated.
     * @param array $authorizationDetails authorization details granted to the application. rich authorization request (rfc 9396) style entries; the appwrite console stores authorized project ids here.
     * @param string $createdById id of the user who created the installation.
     * @param string $createdByName name of the user who created the installation.
     * @param string|null $lastAccessedAt time an access token was last issued for the installation in iso 8601 format. null if never used.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $appId,
        public string $teamId,
        public array $scopes,
        public array $authorizationDetails,
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
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('scopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "scopes" for ' . static::class . '.');
        }
        if (!array_key_exists('authorizationDetails', $data)) {
            throw new \InvalidArgumentException('Missing required field "authorizationDetails" for ' . static::class . '.');
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
            teamId: $data['teamId'],
            scopes: $data['scopes'],
            authorizationDetails: $data['authorizationDetails'],
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
            'teamId' => static::serializeValue($this->teamId),
            'scopes' => static::serializeValue($this->scopes),
            'authorizationDetails' => static::serializeValue($this->authorizationDetails),
            'createdById' => static::serializeValue($this->createdById),
            'createdByName' => static::serializeValue($this->createdByName),
            'lastAccessedAt' => static::serializeValue($this->lastAccessedAt)
        ];
    }
}
