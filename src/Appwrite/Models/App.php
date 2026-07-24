<?php

namespace Appwrite\Models;

/**
 * App
 */
readonly class App
{
    use ArraySerializable;

    /**
     * App constructor.
     *
     * @param string $id app id.
     * @param string $createdAt app creation time in iso 8601 format.
     * @param string $updatedAt app update date in iso 8601 format.
     * @param string $name application name.
     * @param string $description application description shown to users during oauth2 consent.
     * @param string $clientUri application homepage url shown to users during oauth2 consent.
     * @param string $logoUri application logo url shown to users during oauth2 consent.
     * @param string $privacyPolicyUrl application privacy policy url shown to users during oauth2 consent.
     * @param string $termsUrl application terms of service url shown to users during oauth2 consent.
     * @param array $contacts application support or security contact emails.
     * @param string $tagline application tagline shown to users during oauth2 consent.
     * @param array $tags application tags shown to users during oauth2 consent.
     * @param array $labels application labels. read-only for clients; only a server sdk using a project api key can update them.
     * @param array $images application image urls shown to users during oauth2 consent.
     * @param string $supportUrl application support url shown to users during oauth2 consent.
     * @param string $dataDeletionUrl application data deletion url shown to users during oauth2 consent.
     * @param array $redirectUris list of authorized redirect uris. these uris can be used to redirect users after they authenticate.
     * @param array $postLogoutRedirectUris list of authorized post-logout redirect uris for openid connect rp-initiated logout. the logout endpoint only redirects users to uris in this list after ending their session.
     * @param bool $enabled whether the app is enabled or not.
     * @param string $type oauth2 client type. `public` for spas, mobile, and native apps that cannot keep a client secret (pkce required); `confidential` for server-side clients that authenticate with a client secret.
     * @param bool $deviceFlow whether this client may use the oauth2 device authorization grant (rfc 8628).
     * @param string $teamId id of team that owns the application, if owned by team. otherwise, user id will be used.
     * @param string $userId id of user who owns the application, if owned by user. otherwise, team id will be used.
     * @param array $installationScopes scopes the application requests when installed on a team. organization-level and project-level scopes only.
     * @param string $installationRedirectUrl url users are redirected to after creating or updating an installation of this application. empty for no redirect.
     * @param list<AppSecret> $secrets list of application secrets.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $description,
        public string $clientUri,
        public string $logoUri,
        public string $privacyPolicyUrl,
        public string $termsUrl,
        public array $contacts,
        public string $tagline,
        public array $tags,
        public array $labels,
        public array $images,
        public string $supportUrl,
        public string $dataDeletionUrl,
        public array $redirectUris,
        public array $postLogoutRedirectUris,
        public bool $enabled,
        public string $type,
        public bool $deviceFlow,
        public string $teamId,
        public string $userId,
        public array $installationScopes,
        public string $installationRedirectUrl,
        public array $secrets
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
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('description', $data)) {
            throw new \InvalidArgumentException('Missing required field "description" for ' . static::class . '.');
        }
        if (!array_key_exists('clientUri', $data)) {
            throw new \InvalidArgumentException('Missing required field "clientUri" for ' . static::class . '.');
        }
        if (!array_key_exists('logoUri', $data)) {
            throw new \InvalidArgumentException('Missing required field "logoUri" for ' . static::class . '.');
        }
        if (!array_key_exists('privacyPolicyUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "privacyPolicyUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('termsUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "termsUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('contacts', $data)) {
            throw new \InvalidArgumentException('Missing required field "contacts" for ' . static::class . '.');
        }
        if (!array_key_exists('tagline', $data)) {
            throw new \InvalidArgumentException('Missing required field "tagline" for ' . static::class . '.');
        }
        if (!array_key_exists('tags', $data)) {
            throw new \InvalidArgumentException('Missing required field "tags" for ' . static::class . '.');
        }
        if (!array_key_exists('labels', $data)) {
            throw new \InvalidArgumentException('Missing required field "labels" for ' . static::class . '.');
        }
        if (!array_key_exists('images', $data)) {
            throw new \InvalidArgumentException('Missing required field "images" for ' . static::class . '.');
        }
        if (!array_key_exists('supportUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "supportUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('dataDeletionUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "dataDeletionUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('redirectUris', $data)) {
            throw new \InvalidArgumentException('Missing required field "redirectUris" for ' . static::class . '.');
        }
        if (!array_key_exists('postLogoutRedirectUris', $data)) {
            throw new \InvalidArgumentException('Missing required field "postLogoutRedirectUris" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('deviceFlow', $data)) {
            throw new \InvalidArgumentException('Missing required field "deviceFlow" for ' . static::class . '.');
        }
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('userId', $data)) {
            throw new \InvalidArgumentException('Missing required field "userId" for ' . static::class . '.');
        }
        if (!array_key_exists('installationScopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "installationScopes" for ' . static::class . '.');
        }
        if (!array_key_exists('installationRedirectUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "installationRedirectUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('secrets', $data)) {
            throw new \InvalidArgumentException('Missing required field "secrets" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            description: $data['description'],
            clientUri: $data['clientUri'],
            logoUri: $data['logoUri'],
            privacyPolicyUrl: $data['privacyPolicyUrl'],
            termsUrl: $data['termsUrl'],
            contacts: $data['contacts'],
            tagline: $data['tagline'],
            tags: $data['tags'],
            labels: $data['labels'],
            images: $data['images'],
            supportUrl: $data['supportUrl'],
            dataDeletionUrl: $data['dataDeletionUrl'],
            redirectUris: $data['redirectUris'],
            postLogoutRedirectUris: $data['postLogoutRedirectUris'],
            enabled: $data['enabled'],
            type: $data['type'],
            deviceFlow: $data['deviceFlow'],
            teamId: $data['teamId'],
            userId: $data['userId'],
            installationScopes: $data['installationScopes'],
            installationRedirectUrl: $data['installationRedirectUrl'],
            secrets: is_array($data['secrets'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AppSecret::class, $item),
                    $data['secrets']
                )
                : $data['secrets']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'description' => static::serializeValue($this->description),
            'clientUri' => static::serializeValue($this->clientUri),
            'logoUri' => static::serializeValue($this->logoUri),
            'privacyPolicyUrl' => static::serializeValue($this->privacyPolicyUrl),
            'termsUrl' => static::serializeValue($this->termsUrl),
            'contacts' => static::serializeValue($this->contacts),
            'tagline' => static::serializeValue($this->tagline),
            'tags' => static::serializeValue($this->tags),
            'labels' => static::serializeValue($this->labels),
            'images' => static::serializeValue($this->images),
            'supportUrl' => static::serializeValue($this->supportUrl),
            'dataDeletionUrl' => static::serializeValue($this->dataDeletionUrl),
            'redirectUris' => static::serializeValue($this->redirectUris),
            'postLogoutRedirectUris' => static::serializeValue($this->postLogoutRedirectUris),
            'enabled' => static::serializeValue($this->enabled),
            'type' => static::serializeValue($this->type),
            'deviceFlow' => static::serializeValue($this->deviceFlow),
            'teamId' => static::serializeValue($this->teamId),
            'userId' => static::serializeValue($this->userId),
            'installationScopes' => static::serializeValue($this->installationScopes),
            'installationRedirectUrl' => static::serializeValue($this->installationRedirectUrl),
            'secrets' => static::serializeValue($this->secrets)
        ];

        return $result;
    }
}
