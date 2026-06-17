<?php

namespace Appwrite\Models;

/**
 * Project
 */
readonly class Project
{
    use ArraySerializable;

    /**
     * Project constructor.
     *
     * @param string $id project id.
     * @param string $createdAt project creation date in iso 8601 format.
     * @param string $updatedAt project update date in iso 8601 format.
     * @param string $name project name.
     * @param string $teamId project team id.
     * @param string $region project region
     * @param list<DevKey> $devKeys deprecated since 1.9.5: list of dev keys.
     * @param bool $smtpEnabled status for custom smtp
     * @param string $smtpSenderName smtp sender name
     * @param string $smtpSenderEmail smtp sender email
     * @param string $smtpReplyToName smtp reply to name
     * @param string $smtpReplyToEmail smtp reply to email
     * @param string $smtpHost smtp server host name
     * @param int $smtpPort smtp server port
     * @param string $smtpUsername smtp server username
     * @param string $smtpPassword smtp server password. this property is write-only and always returned empty.
     * @param string $smtpSecure smtp server secure protocol
     * @param int $pingCount number of times the ping was received for this project.
     * @param string $pingedAt last ping datetime in iso 8601 format.
     * @param array $labels labels for the project.
     * @param string $status project status
     * @param list<ProjectAuthMethod> $authMethods list of auth methods.
     * @param list<ProjectService> $services list of services.
     * @param list<ProjectProtocol> $protocols list of protocols.
     * @param list<Block> $blocks project blocks information
     * @param string $consoleAccessedAt last time the project was accessed via console. used with plan's projectinactivitydays to determine if project is paused.
     * @param bool $oAuth2ServerEnabled oauth2 server status
     * @param string $oAuth2ServerAuthorizationUrl oauth2 server authorization url
     * @param array $oAuth2ServerScopes oauth2 server allowed scopes
     * @param array $oAuth2ServerAuthorizationDetailsTypes oauth2 server accepted rfc 9396 authorization_details types
     * @param int $oAuth2ServerAccessTokenDuration oauth2 server access token duration in seconds for confidential clients
     * @param int $oAuth2ServerRefreshTokenDuration oauth2 server refresh token duration in seconds for confidential clients
     * @param int $oAuth2ServerPublicAccessTokenDuration oauth2 server access token duration in seconds for public clients (spas, mobile, native)
     * @param int $oAuth2ServerPublicRefreshTokenDuration oauth2 server refresh token duration in seconds for public clients (spas, mobile, native)
     * @param bool $oAuth2ServerConfidentialPkce when enabled, pkce is required for confidential clients (server-side flows using client_secret). pkce is always required for public clients regardless of this setting.
     * @param string $oAuth2ServerVerificationUrl url to your application page where users enter the device flow user code. empty when the device authorization grant is not configured.
     * @param int $oAuth2ServerUserCodeLength number of characters in the device flow user code, excluding the formatting separator.
     * @param string $oAuth2ServerUserCodeFormat character set for device flow user codes: `numeric`, `alphabetic`, or `alphanumeric`.
     * @param int $oAuth2ServerDeviceCodeDuration lifetime in seconds of device flow device codes and user codes.
     * @param string $oAuth2ServerDiscoveryUrl oauth2 server discovery url
     * @param BillingLimits|null $billingLimits billing limits reached
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $teamId,
        public string $region,
        public array $devKeys,
        public bool $smtpEnabled,
        public string $smtpSenderName,
        public string $smtpSenderEmail,
        public string $smtpReplyToName,
        public string $smtpReplyToEmail,
        public string $smtpHost,
        public int $smtpPort,
        public string $smtpUsername,
        public string $smtpPassword,
        public string $smtpSecure,
        public int $pingCount,
        public string $pingedAt,
        public array $labels,
        public string $status,
        public array $authMethods,
        public array $services,
        public array $protocols,
        public array $blocks,
        public string $consoleAccessedAt,
        public bool $oAuth2ServerEnabled,
        public string $oAuth2ServerAuthorizationUrl,
        public array $oAuth2ServerScopes,
        public array $oAuth2ServerAuthorizationDetailsTypes,
        public int $oAuth2ServerAccessTokenDuration,
        public int $oAuth2ServerRefreshTokenDuration,
        public int $oAuth2ServerPublicAccessTokenDuration,
        public int $oAuth2ServerPublicRefreshTokenDuration,
        public bool $oAuth2ServerConfidentialPkce,
        public string $oAuth2ServerVerificationUrl,
        public int $oAuth2ServerUserCodeLength,
        public string $oAuth2ServerUserCodeFormat,
        public int $oAuth2ServerDeviceCodeDuration,
        public string $oAuth2ServerDiscoveryUrl,
        public ?BillingLimits $billingLimits = null
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
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('region', $data)) {
            throw new \InvalidArgumentException('Missing required field "region" for ' . static::class . '.');
        }
        if (!array_key_exists('devKeys', $data)) {
            throw new \InvalidArgumentException('Missing required field "devKeys" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpEnabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpEnabled" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpSenderName', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpSenderName" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpSenderEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpSenderEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpReplyToName', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpReplyToName" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpReplyToEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpReplyToEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpHost', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpHost" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpPort', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpPort" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpUsername', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpUsername" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpPassword', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpPassword" for ' . static::class . '.');
        }
        if (!array_key_exists('smtpSecure', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpSecure" for ' . static::class . '.');
        }
        if (!array_key_exists('pingCount', $data)) {
            throw new \InvalidArgumentException('Missing required field "pingCount" for ' . static::class . '.');
        }
        if (!array_key_exists('pingedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "pingedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('labels', $data)) {
            throw new \InvalidArgumentException('Missing required field "labels" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('authMethods', $data)) {
            throw new \InvalidArgumentException('Missing required field "authMethods" for ' . static::class . '.');
        }
        if (!array_key_exists('services', $data)) {
            throw new \InvalidArgumentException('Missing required field "services" for ' . static::class . '.');
        }
        if (!array_key_exists('protocols', $data)) {
            throw new \InvalidArgumentException('Missing required field "protocols" for ' . static::class . '.');
        }
        if (!array_key_exists('blocks', $data)) {
            throw new \InvalidArgumentException('Missing required field "blocks" for ' . static::class . '.');
        }
        if (!array_key_exists('consoleAccessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "consoleAccessedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerEnabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerEnabled" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerAuthorizationUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerAuthorizationUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerScopes', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerScopes" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerAuthorizationDetailsTypes', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerAuthorizationDetailsTypes" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerAccessTokenDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerAccessTokenDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerRefreshTokenDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerRefreshTokenDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerPublicAccessTokenDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerPublicAccessTokenDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerPublicRefreshTokenDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerPublicRefreshTokenDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerConfidentialPkce', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerConfidentialPkce" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerVerificationUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerVerificationUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerUserCodeLength', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerUserCodeLength" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerUserCodeFormat', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerUserCodeFormat" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerDeviceCodeDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerDeviceCodeDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuth2ServerDiscoveryUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuth2ServerDiscoveryUrl" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            teamId: $data['teamId'],
            region: $data['region'],
            devKeys: is_array($data['devKeys'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DevKey::class, $item),
                    $data['devKeys']
                )
                : $data['devKeys'],
            smtpEnabled: $data['smtpEnabled'],
            smtpSenderName: $data['smtpSenderName'],
            smtpSenderEmail: $data['smtpSenderEmail'],
            smtpReplyToName: $data['smtpReplyToName'],
            smtpReplyToEmail: $data['smtpReplyToEmail'],
            smtpHost: $data['smtpHost'],
            smtpPort: $data['smtpPort'],
            smtpUsername: $data['smtpUsername'],
            smtpPassword: $data['smtpPassword'],
            smtpSecure: $data['smtpSecure'],
            pingCount: $data['pingCount'],
            pingedAt: $data['pingedAt'],
            labels: $data['labels'],
            status: $data['status'],
            authMethods: is_array($data['authMethods'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ProjectAuthMethod::class, $item),
                    $data['authMethods']
                )
                : $data['authMethods'],
            services: is_array($data['services'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ProjectService::class, $item),
                    $data['services']
                )
                : $data['services'],
            protocols: is_array($data['protocols'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ProjectProtocol::class, $item),
                    $data['protocols']
                )
                : $data['protocols'],
            blocks: is_array($data['blocks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Block::class, $item),
                    $data['blocks']
                )
                : $data['blocks'],
            consoleAccessedAt: $data['consoleAccessedAt'],
            oAuth2ServerEnabled: $data['oAuth2ServerEnabled'],
            oAuth2ServerAuthorizationUrl: $data['oAuth2ServerAuthorizationUrl'],
            oAuth2ServerScopes: $data['oAuth2ServerScopes'],
            oAuth2ServerAuthorizationDetailsTypes: $data['oAuth2ServerAuthorizationDetailsTypes'],
            oAuth2ServerAccessTokenDuration: $data['oAuth2ServerAccessTokenDuration'],
            oAuth2ServerRefreshTokenDuration: $data['oAuth2ServerRefreshTokenDuration'],
            oAuth2ServerPublicAccessTokenDuration: $data['oAuth2ServerPublicAccessTokenDuration'],
            oAuth2ServerPublicRefreshTokenDuration: $data['oAuth2ServerPublicRefreshTokenDuration'],
            oAuth2ServerConfidentialPkce: $data['oAuth2ServerConfidentialPkce'],
            oAuth2ServerVerificationUrl: $data['oAuth2ServerVerificationUrl'],
            oAuth2ServerUserCodeLength: $data['oAuth2ServerUserCodeLength'],
            oAuth2ServerUserCodeFormat: $data['oAuth2ServerUserCodeFormat'],
            oAuth2ServerDeviceCodeDuration: $data['oAuth2ServerDeviceCodeDuration'],
            oAuth2ServerDiscoveryUrl: $data['oAuth2ServerDiscoveryUrl'],
            billingLimits: array_key_exists('billingLimits', $data) ? static::hydrateTypedValue(BillingLimits::class, $data['billingLimits'], true) : null
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
            'teamId' => static::serializeValue($this->teamId),
            'region' => static::serializeValue($this->region),
            'devKeys' => static::serializeValue($this->devKeys),
            'smtpEnabled' => static::serializeValue($this->smtpEnabled),
            'smtpSenderName' => static::serializeValue($this->smtpSenderName),
            'smtpSenderEmail' => static::serializeValue($this->smtpSenderEmail),
            'smtpReplyToName' => static::serializeValue($this->smtpReplyToName),
            'smtpReplyToEmail' => static::serializeValue($this->smtpReplyToEmail),
            'smtpHost' => static::serializeValue($this->smtpHost),
            'smtpPort' => static::serializeValue($this->smtpPort),
            'smtpUsername' => static::serializeValue($this->smtpUsername),
            'smtpPassword' => static::serializeValue($this->smtpPassword),
            'smtpSecure' => static::serializeValue($this->smtpSecure),
            'pingCount' => static::serializeValue($this->pingCount),
            'pingedAt' => static::serializeValue($this->pingedAt),
            'labels' => static::serializeValue($this->labels),
            'status' => static::serializeValue($this->status),
            'authMethods' => static::serializeValue($this->authMethods),
            'services' => static::serializeValue($this->services),
            'protocols' => static::serializeValue($this->protocols),
            'blocks' => static::serializeValue($this->blocks),
            'consoleAccessedAt' => static::serializeValue($this->consoleAccessedAt),
            'billingLimits' => static::serializeValue($this->billingLimits),
            'oAuth2ServerEnabled' => static::serializeValue($this->oAuth2ServerEnabled),
            'oAuth2ServerAuthorizationUrl' => static::serializeValue($this->oAuth2ServerAuthorizationUrl),
            'oAuth2ServerScopes' => static::serializeValue($this->oAuth2ServerScopes),
            'oAuth2ServerAuthorizationDetailsTypes' => static::serializeValue($this->oAuth2ServerAuthorizationDetailsTypes),
            'oAuth2ServerAccessTokenDuration' => static::serializeValue($this->oAuth2ServerAccessTokenDuration),
            'oAuth2ServerRefreshTokenDuration' => static::serializeValue($this->oAuth2ServerRefreshTokenDuration),
            'oAuth2ServerPublicAccessTokenDuration' => static::serializeValue($this->oAuth2ServerPublicAccessTokenDuration),
            'oAuth2ServerPublicRefreshTokenDuration' => static::serializeValue($this->oAuth2ServerPublicRefreshTokenDuration),
            'oAuth2ServerConfidentialPkce' => static::serializeValue($this->oAuth2ServerConfidentialPkce),
            'oAuth2ServerVerificationUrl' => static::serializeValue($this->oAuth2ServerVerificationUrl),
            'oAuth2ServerUserCodeLength' => static::serializeValue($this->oAuth2ServerUserCodeLength),
            'oAuth2ServerUserCodeFormat' => static::serializeValue($this->oAuth2ServerUserCodeFormat),
            'oAuth2ServerDeviceCodeDuration' => static::serializeValue($this->oAuth2ServerDeviceCodeDuration),
            'oAuth2ServerDiscoveryUrl' => static::serializeValue($this->oAuth2ServerDiscoveryUrl)
        ];

        return $result;
    }
}
