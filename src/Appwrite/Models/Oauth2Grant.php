<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 Grant
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2Grant
{
    use ArraySerializable;

    /**
     * Oauth2Grant constructor.
     *
     * @param string $id grant id.
     * @param string $createdAt grant creation time in iso 8601 format.
     * @param string $updatedAt grant update date in iso 8601 format.
     * @param string $userId id of the user the grant belongs to.
     * @param string $appId id of the oauth2 client (app) the grant was requested for.
     * @param array $scopes requested oauth2 scopes the user is being asked to consent to.
     * @param array $resources requested rfc 8707 resource indicators the user is being asked to consent to.
     * @param string $authorizationDetails requested authorization_details the user is being asked to consent to, as a json string. each entry has a `type` plus project-defined fields.
     * @param string $prompt oidc prompt directive the consent screen should honor. space-separated list of: login, consent, select_account.
     * @param string $redirectUri redirect uri the user will be sent to after the flow completes.
     * @param int $authTime unix timestamp of when the user last authenticated.
     * @param string $expire grant expiration time in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $userId,
        public string $appId,
        public array $scopes,
        public array $resources,
        public string $authorizationDetails,
        public string $prompt,
        public string $redirectUri,
        public int $authTime,
        public string $expire
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
            'userId' => "",
            'appId' => "",
            'scopes' => [],
            'resources' => [],
            'authorizationDetails' => "[]",
            'prompt' => "",
            'redirectUri' => "",
            'authTime' => 0,
            'expire' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            userId: $data['userId'],
            appId: $data['appId'],
            scopes: $data['scopes'],
            resources: $data['resources'],
            authorizationDetails: $data['authorizationDetails'],
            prompt: $data['prompt'],
            redirectUri: $data['redirectUri'],
            authTime: $data['authTime'],
            expire: $data['expire']
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
            'userId' => static::serializeValue($this->userId),
            'appId' => static::serializeValue($this->appId),
            'scopes' => static::serializeValue($this->scopes),
            'resources' => static::serializeValue($this->resources),
            'authorizationDetails' => static::serializeValue($this->authorizationDetails),
            'prompt' => static::serializeValue($this->prompt),
            'redirectUri' => static::serializeValue($this->redirectUri),
            'authTime' => static::serializeValue($this->authTime),
            'expire' => static::serializeValue($this->expire)
        ];
    }
}
