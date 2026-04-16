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
     * @param string $description project description.
     * @param string $teamId project team id.
     * @param string $logo project logo file id.
     * @param string $url project website url.
     * @param string $legalName company legal name.
     * @param string $legalCountry country code in [iso 3166-1](http://en.wikipedia.org/wiki/iso_3166-1) two-character format.
     * @param string $legalState state name.
     * @param string $legalCity city name.
     * @param string $legalAddress company address.
     * @param string $legalTaxId company tax id.
     * @param int $authDuration session duration in seconds.
     * @param int $authLimit max users allowed. 0 is unlimited.
     * @param int $authSessionsLimit max sessions allowed per user. 100 maximum.
     * @param int $authPasswordHistory max allowed passwords in the history list per user. max passwords limit allowed in history is 20. use 0 for disabling password history.
     * @param bool $authPasswordDictionary whether or not to check user's password against most commonly used passwords.
     * @param bool $authPersonalDataCheck whether or not to check the user password for similarity with their personal data.
     * @param bool $authDisposableEmails whether or not to disallow disposable email addresses during signup and email updates.
     * @param bool $authCanonicalEmails whether or not to require canonical email addresses during signup and email updates.
     * @param bool $authFreeEmails whether or not to disallow free email addresses during signup and email updates.
     * @param list<MockNumber> $authMockNumbers an array of mock numbers and their corresponding verification codes (otps).
     * @param bool $authSessionAlerts whether or not to send session alert emails to users.
     * @param bool $authMembershipsUserName whether or not to show user names in the teams membership response.
     * @param bool $authMembershipsUserEmail whether or not to show user emails in the teams membership response.
     * @param bool $authMembershipsMfa whether or not to show user mfa status in the teams membership response.
     * @param bool $authInvalidateSessions whether or not all existing sessions should be invalidated on password change
     * @param list<AuthProvider> $oAuthProviders list of auth providers.
     * @param array $platforms list of platforms.
     * @param list<Webhook> $webhooks list of webhooks.
     * @param list<Key> $keys list of api keys.
     * @param list<DevKey> $devKeys list of dev keys.
     * @param bool $smtpEnabled status for custom smtp
     * @param string $smtpSenderName smtp sender name
     * @param string $smtpSenderEmail smtp sender email
     * @param string $smtpReplyTo smtp reply to email
     * @param string $smtpHost smtp server host name
     * @param int $smtpPort smtp server port
     * @param string $smtpUsername smtp server username
     * @param string $smtpPassword smtp server password
     * @param string $smtpSecure smtp server secure protocol
     * @param int $pingCount number of times the ping was received for this project.
     * @param string $pingedAt last ping datetime in iso 8601 format.
     * @param array $labels labels for the project.
     * @param string $status project status
     * @param bool $authEmailPassword email/password auth method status
     * @param bool $authUsersAuthMagicURL magic url auth method status
     * @param bool $authEmailOtp email (otp) auth method status
     * @param bool $authAnonymous anonymous auth method status
     * @param bool $authInvites invites auth method status
     * @param bool $authJWT jwt auth method status
     * @param bool $authPhone phone auth method status
     * @param bool $serviceStatusForAccount account service status
     * @param bool $serviceStatusForAvatars avatars service status
     * @param bool $serviceStatusForDatabases databases (legacy) service status
     * @param bool $serviceStatusForTablesdb tablesdb service status
     * @param bool $serviceStatusForLocale locale service status
     * @param bool $serviceStatusForHealth health service status
     * @param bool $serviceStatusForProject project service status
     * @param bool $serviceStatusForStorage storage service status
     * @param bool $serviceStatusForTeams teams service status
     * @param bool $serviceStatusForUsers users service status
     * @param bool $serviceStatusForVcs vcs service status
     * @param bool $serviceStatusForSites sites service status
     * @param bool $serviceStatusForFunctions functions service status
     * @param bool $serviceStatusForProxy proxy service status
     * @param bool $serviceStatusForGraphql graphql service status
     * @param bool $serviceStatusForMigrations migrations service status
     * @param bool $serviceStatusForMessaging messaging service status
     * @param bool $protocolStatusForRest rest protocol status
     * @param bool $protocolStatusForGraphql graphql protocol status
     * @param bool $protocolStatusForWebsocket websocket protocol status
     * @param string $region project region
     * @param BillingLimits $billingLimits billing limits reached
     * @param list<Block> $blocks project blocks information
     * @param string $consoleAccessedAt last time the project was accessed via console. used with plan's projectinactivitydays to determine if project is paused.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $description,
        public string $teamId,
        public string $logo,
        public string $url,
        public string $legalName,
        public string $legalCountry,
        public string $legalState,
        public string $legalCity,
        public string $legalAddress,
        public string $legalTaxId,
        public int $authDuration,
        public int $authLimit,
        public int $authSessionsLimit,
        public int $authPasswordHistory,
        public bool $authPasswordDictionary,
        public bool $authPersonalDataCheck,
        public bool $authDisposableEmails,
        public bool $authCanonicalEmails,
        public bool $authFreeEmails,
        public array $authMockNumbers,
        public bool $authSessionAlerts,
        public bool $authMembershipsUserName,
        public bool $authMembershipsUserEmail,
        public bool $authMembershipsMfa,
        public bool $authInvalidateSessions,
        public array $oAuthProviders,
        public array $platforms,
        public array $webhooks,
        public array $keys,
        public array $devKeys,
        public bool $smtpEnabled,
        public string $smtpSenderName,
        public string $smtpSenderEmail,
        public string $smtpReplyTo,
        public string $smtpHost,
        public int $smtpPort,
        public string $smtpUsername,
        public string $smtpPassword,
        public string $smtpSecure,
        public int $pingCount,
        public string $pingedAt,
        public array $labels,
        public string $status,
        public bool $authEmailPassword,
        public bool $authUsersAuthMagicURL,
        public bool $authEmailOtp,
        public bool $authAnonymous,
        public bool $authInvites,
        public bool $authJWT,
        public bool $authPhone,
        public bool $serviceStatusForAccount,
        public bool $serviceStatusForAvatars,
        public bool $serviceStatusForDatabases,
        public bool $serviceStatusForTablesdb,
        public bool $serviceStatusForLocale,
        public bool $serviceStatusForHealth,
        public bool $serviceStatusForProject,
        public bool $serviceStatusForStorage,
        public bool $serviceStatusForTeams,
        public bool $serviceStatusForUsers,
        public bool $serviceStatusForVcs,
        public bool $serviceStatusForSites,
        public bool $serviceStatusForFunctions,
        public bool $serviceStatusForProxy,
        public bool $serviceStatusForGraphql,
        public bool $serviceStatusForMigrations,
        public bool $serviceStatusForMessaging,
        public bool $protocolStatusForRest,
        public bool $protocolStatusForGraphql,
        public bool $protocolStatusForWebsocket,
        public string $region,
        public BillingLimits $billingLimits,
        public array $blocks,
        public string $consoleAccessedAt
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
        if (!array_key_exists('teamId', $data)) {
            throw new \InvalidArgumentException('Missing required field "teamId" for ' . static::class . '.');
        }
        if (!array_key_exists('logo', $data)) {
            throw new \InvalidArgumentException('Missing required field "logo" for ' . static::class . '.');
        }
        if (!array_key_exists('url', $data)) {
            throw new \InvalidArgumentException('Missing required field "url" for ' . static::class . '.');
        }
        if (!array_key_exists('legalName', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalName" for ' . static::class . '.');
        }
        if (!array_key_exists('legalCountry', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalCountry" for ' . static::class . '.');
        }
        if (!array_key_exists('legalState', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalState" for ' . static::class . '.');
        }
        if (!array_key_exists('legalCity', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalCity" for ' . static::class . '.');
        }
        if (!array_key_exists('legalAddress', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalAddress" for ' . static::class . '.');
        }
        if (!array_key_exists('legalTaxId', $data)) {
            throw new \InvalidArgumentException('Missing required field "legalTaxId" for ' . static::class . '.');
        }
        if (!array_key_exists('authDuration', $data)) {
            throw new \InvalidArgumentException('Missing required field "authDuration" for ' . static::class . '.');
        }
        if (!array_key_exists('authLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "authLimit" for ' . static::class . '.');
        }
        if (!array_key_exists('authSessionsLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "authSessionsLimit" for ' . static::class . '.');
        }
        if (!array_key_exists('authPasswordHistory', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPasswordHistory" for ' . static::class . '.');
        }
        if (!array_key_exists('authPasswordDictionary', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPasswordDictionary" for ' . static::class . '.');
        }
        if (!array_key_exists('authPersonalDataCheck', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPersonalDataCheck" for ' . static::class . '.');
        }
        if (!array_key_exists('authDisposableEmails', $data)) {
            throw new \InvalidArgumentException('Missing required field "authDisposableEmails" for ' . static::class . '.');
        }
        if (!array_key_exists('authCanonicalEmails', $data)) {
            throw new \InvalidArgumentException('Missing required field "authCanonicalEmails" for ' . static::class . '.');
        }
        if (!array_key_exists('authFreeEmails', $data)) {
            throw new \InvalidArgumentException('Missing required field "authFreeEmails" for ' . static::class . '.');
        }
        if (!array_key_exists('authMockNumbers', $data)) {
            throw new \InvalidArgumentException('Missing required field "authMockNumbers" for ' . static::class . '.');
        }
        if (!array_key_exists('authSessionAlerts', $data)) {
            throw new \InvalidArgumentException('Missing required field "authSessionAlerts" for ' . static::class . '.');
        }
        if (!array_key_exists('authMembershipsUserName', $data)) {
            throw new \InvalidArgumentException('Missing required field "authMembershipsUserName" for ' . static::class . '.');
        }
        if (!array_key_exists('authMembershipsUserEmail', $data)) {
            throw new \InvalidArgumentException('Missing required field "authMembershipsUserEmail" for ' . static::class . '.');
        }
        if (!array_key_exists('authMembershipsMfa', $data)) {
            throw new \InvalidArgumentException('Missing required field "authMembershipsMfa" for ' . static::class . '.');
        }
        if (!array_key_exists('authInvalidateSessions', $data)) {
            throw new \InvalidArgumentException('Missing required field "authInvalidateSessions" for ' . static::class . '.');
        }
        if (!array_key_exists('oAuthProviders', $data)) {
            throw new \InvalidArgumentException('Missing required field "oAuthProviders" for ' . static::class . '.');
        }
        if (!array_key_exists('platforms', $data)) {
            throw new \InvalidArgumentException('Missing required field "platforms" for ' . static::class . '.');
        }
        if (!array_key_exists('webhooks', $data)) {
            throw new \InvalidArgumentException('Missing required field "webhooks" for ' . static::class . '.');
        }
        if (!array_key_exists('keys', $data)) {
            throw new \InvalidArgumentException('Missing required field "keys" for ' . static::class . '.');
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
        if (!array_key_exists('smtpReplyTo', $data)) {
            throw new \InvalidArgumentException('Missing required field "smtpReplyTo" for ' . static::class . '.');
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
        if (!array_key_exists('authEmailPassword', $data)) {
            throw new \InvalidArgumentException('Missing required field "authEmailPassword" for ' . static::class . '.');
        }
        if (!array_key_exists('authUsersAuthMagicURL', $data)) {
            throw new \InvalidArgumentException('Missing required field "authUsersAuthMagicURL" for ' . static::class . '.');
        }
        if (!array_key_exists('authEmailOtp', $data)) {
            throw new \InvalidArgumentException('Missing required field "authEmailOtp" for ' . static::class . '.');
        }
        if (!array_key_exists('authAnonymous', $data)) {
            throw new \InvalidArgumentException('Missing required field "authAnonymous" for ' . static::class . '.');
        }
        if (!array_key_exists('authInvites', $data)) {
            throw new \InvalidArgumentException('Missing required field "authInvites" for ' . static::class . '.');
        }
        if (!array_key_exists('authJWT', $data)) {
            throw new \InvalidArgumentException('Missing required field "authJWT" for ' . static::class . '.');
        }
        if (!array_key_exists('authPhone', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPhone" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForAccount', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForAccount" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForAvatars', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForAvatars" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForDatabases', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForDatabases" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForTablesdb', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForTablesdb" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForLocale', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForLocale" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForHealth', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForHealth" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForProject', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForProject" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForStorage', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForStorage" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForTeams', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForTeams" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForUsers', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForUsers" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForVcs', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForVcs" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForSites', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForSites" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForFunctions', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForFunctions" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForProxy', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForProxy" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForGraphql', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForGraphql" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForMigrations', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForMigrations" for ' . static::class . '.');
        }
        if (!array_key_exists('serviceStatusForMessaging', $data)) {
            throw new \InvalidArgumentException('Missing required field "serviceStatusForMessaging" for ' . static::class . '.');
        }
        if (!array_key_exists('protocolStatusForRest', $data)) {
            throw new \InvalidArgumentException('Missing required field "protocolStatusForRest" for ' . static::class . '.');
        }
        if (!array_key_exists('protocolStatusForGraphql', $data)) {
            throw new \InvalidArgumentException('Missing required field "protocolStatusForGraphql" for ' . static::class . '.');
        }
        if (!array_key_exists('protocolStatusForWebsocket', $data)) {
            throw new \InvalidArgumentException('Missing required field "protocolStatusForWebsocket" for ' . static::class . '.');
        }
        if (!array_key_exists('region', $data)) {
            throw new \InvalidArgumentException('Missing required field "region" for ' . static::class . '.');
        }
        if (!array_key_exists('billingLimits', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingLimits" for ' . static::class . '.');
        }
        if (!array_key_exists('blocks', $data)) {
            throw new \InvalidArgumentException('Missing required field "blocks" for ' . static::class . '.');
        }
        if (!array_key_exists('consoleAccessedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "consoleAccessedAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            description: $data['description'],
            teamId: $data['teamId'],
            logo: $data['logo'],
            url: $data['url'],
            legalName: $data['legalName'],
            legalCountry: $data['legalCountry'],
            legalState: $data['legalState'],
            legalCity: $data['legalCity'],
            legalAddress: $data['legalAddress'],
            legalTaxId: $data['legalTaxId'],
            authDuration: $data['authDuration'],
            authLimit: $data['authLimit'],
            authSessionsLimit: $data['authSessionsLimit'],
            authPasswordHistory: $data['authPasswordHistory'],
            authPasswordDictionary: $data['authPasswordDictionary'],
            authPersonalDataCheck: $data['authPersonalDataCheck'],
            authDisposableEmails: $data['authDisposableEmails'],
            authCanonicalEmails: $data['authCanonicalEmails'],
            authFreeEmails: $data['authFreeEmails'],
            authMockNumbers: is_array($data['authMockNumbers'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(MockNumber::class, $item),
                    $data['authMockNumbers']
                )
                : $data['authMockNumbers'],
            authSessionAlerts: $data['authSessionAlerts'],
            authMembershipsUserName: $data['authMembershipsUserName'],
            authMembershipsUserEmail: $data['authMembershipsUserEmail'],
            authMembershipsMfa: $data['authMembershipsMfa'],
            authInvalidateSessions: $data['authInvalidateSessions'],
            oAuthProviders: is_array($data['oAuthProviders'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AuthProvider::class, $item),
                    $data['oAuthProviders']
                )
                : $data['oAuthProviders'],
            platforms: $data['platforms'],
            webhooks: is_array($data['webhooks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Webhook::class, $item),
                    $data['webhooks']
                )
                : $data['webhooks'],
            keys: is_array($data['keys'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Key::class, $item),
                    $data['keys']
                )
                : $data['keys'],
            devKeys: is_array($data['devKeys'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(DevKey::class, $item),
                    $data['devKeys']
                )
                : $data['devKeys'],
            smtpEnabled: $data['smtpEnabled'],
            smtpSenderName: $data['smtpSenderName'],
            smtpSenderEmail: $data['smtpSenderEmail'],
            smtpReplyTo: $data['smtpReplyTo'],
            smtpHost: $data['smtpHost'],
            smtpPort: $data['smtpPort'],
            smtpUsername: $data['smtpUsername'],
            smtpPassword: $data['smtpPassword'],
            smtpSecure: $data['smtpSecure'],
            pingCount: $data['pingCount'],
            pingedAt: $data['pingedAt'],
            labels: $data['labels'],
            status: $data['status'],
            authEmailPassword: $data['authEmailPassword'],
            authUsersAuthMagicURL: $data['authUsersAuthMagicURL'],
            authEmailOtp: $data['authEmailOtp'],
            authAnonymous: $data['authAnonymous'],
            authInvites: $data['authInvites'],
            authJWT: $data['authJWT'],
            authPhone: $data['authPhone'],
            serviceStatusForAccount: $data['serviceStatusForAccount'],
            serviceStatusForAvatars: $data['serviceStatusForAvatars'],
            serviceStatusForDatabases: $data['serviceStatusForDatabases'],
            serviceStatusForTablesdb: $data['serviceStatusForTablesdb'],
            serviceStatusForLocale: $data['serviceStatusForLocale'],
            serviceStatusForHealth: $data['serviceStatusForHealth'],
            serviceStatusForProject: $data['serviceStatusForProject'],
            serviceStatusForStorage: $data['serviceStatusForStorage'],
            serviceStatusForTeams: $data['serviceStatusForTeams'],
            serviceStatusForUsers: $data['serviceStatusForUsers'],
            serviceStatusForVcs: $data['serviceStatusForVcs'],
            serviceStatusForSites: $data['serviceStatusForSites'],
            serviceStatusForFunctions: $data['serviceStatusForFunctions'],
            serviceStatusForProxy: $data['serviceStatusForProxy'],
            serviceStatusForGraphql: $data['serviceStatusForGraphql'],
            serviceStatusForMigrations: $data['serviceStatusForMigrations'],
            serviceStatusForMessaging: $data['serviceStatusForMessaging'],
            protocolStatusForRest: $data['protocolStatusForRest'],
            protocolStatusForGraphql: $data['protocolStatusForGraphql'],
            protocolStatusForWebsocket: $data['protocolStatusForWebsocket'],
            region: $data['region'],
            billingLimits: static::hydrateTypedValue(BillingLimits::class, $data['billingLimits']),
            blocks: is_array($data['blocks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Block::class, $item),
                    $data['blocks']
                )
                : $data['blocks'],
            consoleAccessedAt: $data['consoleAccessedAt']
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
            'teamId' => static::serializeValue($this->teamId),
            'logo' => static::serializeValue($this->logo),
            'url' => static::serializeValue($this->url),
            'legalName' => static::serializeValue($this->legalName),
            'legalCountry' => static::serializeValue($this->legalCountry),
            'legalState' => static::serializeValue($this->legalState),
            'legalCity' => static::serializeValue($this->legalCity),
            'legalAddress' => static::serializeValue($this->legalAddress),
            'legalTaxId' => static::serializeValue($this->legalTaxId),
            'authDuration' => static::serializeValue($this->authDuration),
            'authLimit' => static::serializeValue($this->authLimit),
            'authSessionsLimit' => static::serializeValue($this->authSessionsLimit),
            'authPasswordHistory' => static::serializeValue($this->authPasswordHistory),
            'authPasswordDictionary' => static::serializeValue($this->authPasswordDictionary),
            'authPersonalDataCheck' => static::serializeValue($this->authPersonalDataCheck),
            'authDisposableEmails' => static::serializeValue($this->authDisposableEmails),
            'authCanonicalEmails' => static::serializeValue($this->authCanonicalEmails),
            'authFreeEmails' => static::serializeValue($this->authFreeEmails),
            'authMockNumbers' => static::serializeValue($this->authMockNumbers),
            'authSessionAlerts' => static::serializeValue($this->authSessionAlerts),
            'authMembershipsUserName' => static::serializeValue($this->authMembershipsUserName),
            'authMembershipsUserEmail' => static::serializeValue($this->authMembershipsUserEmail),
            'authMembershipsMfa' => static::serializeValue($this->authMembershipsMfa),
            'authInvalidateSessions' => static::serializeValue($this->authInvalidateSessions),
            'oAuthProviders' => static::serializeValue($this->oAuthProviders),
            'platforms' => static::serializeValue($this->platforms),
            'webhooks' => static::serializeValue($this->webhooks),
            'keys' => static::serializeValue($this->keys),
            'devKeys' => static::serializeValue($this->devKeys),
            'smtpEnabled' => static::serializeValue($this->smtpEnabled),
            'smtpSenderName' => static::serializeValue($this->smtpSenderName),
            'smtpSenderEmail' => static::serializeValue($this->smtpSenderEmail),
            'smtpReplyTo' => static::serializeValue($this->smtpReplyTo),
            'smtpHost' => static::serializeValue($this->smtpHost),
            'smtpPort' => static::serializeValue($this->smtpPort),
            'smtpUsername' => static::serializeValue($this->smtpUsername),
            'smtpPassword' => static::serializeValue($this->smtpPassword),
            'smtpSecure' => static::serializeValue($this->smtpSecure),
            'pingCount' => static::serializeValue($this->pingCount),
            'pingedAt' => static::serializeValue($this->pingedAt),
            'labels' => static::serializeValue($this->labels),
            'status' => static::serializeValue($this->status),
            'authEmailPassword' => static::serializeValue($this->authEmailPassword),
            'authUsersAuthMagicURL' => static::serializeValue($this->authUsersAuthMagicURL),
            'authEmailOtp' => static::serializeValue($this->authEmailOtp),
            'authAnonymous' => static::serializeValue($this->authAnonymous),
            'authInvites' => static::serializeValue($this->authInvites),
            'authJWT' => static::serializeValue($this->authJWT),
            'authPhone' => static::serializeValue($this->authPhone),
            'serviceStatusForAccount' => static::serializeValue($this->serviceStatusForAccount),
            'serviceStatusForAvatars' => static::serializeValue($this->serviceStatusForAvatars),
            'serviceStatusForDatabases' => static::serializeValue($this->serviceStatusForDatabases),
            'serviceStatusForTablesdb' => static::serializeValue($this->serviceStatusForTablesdb),
            'serviceStatusForLocale' => static::serializeValue($this->serviceStatusForLocale),
            'serviceStatusForHealth' => static::serializeValue($this->serviceStatusForHealth),
            'serviceStatusForProject' => static::serializeValue($this->serviceStatusForProject),
            'serviceStatusForStorage' => static::serializeValue($this->serviceStatusForStorage),
            'serviceStatusForTeams' => static::serializeValue($this->serviceStatusForTeams),
            'serviceStatusForUsers' => static::serializeValue($this->serviceStatusForUsers),
            'serviceStatusForVcs' => static::serializeValue($this->serviceStatusForVcs),
            'serviceStatusForSites' => static::serializeValue($this->serviceStatusForSites),
            'serviceStatusForFunctions' => static::serializeValue($this->serviceStatusForFunctions),
            'serviceStatusForProxy' => static::serializeValue($this->serviceStatusForProxy),
            'serviceStatusForGraphql' => static::serializeValue($this->serviceStatusForGraphql),
            'serviceStatusForMigrations' => static::serializeValue($this->serviceStatusForMigrations),
            'serviceStatusForMessaging' => static::serializeValue($this->serviceStatusForMessaging),
            'protocolStatusForRest' => static::serializeValue($this->protocolStatusForRest),
            'protocolStatusForGraphql' => static::serializeValue($this->protocolStatusForGraphql),
            'protocolStatusForWebsocket' => static::serializeValue($this->protocolStatusForWebsocket),
            'region' => static::serializeValue($this->region),
            'billingLimits' => static::serializeValue($this->billingLimits),
            'blocks' => static::serializeValue($this->blocks),
            'consoleAccessedAt' => static::serializeValue($this->consoleAccessedAt)
        ];

        return $result;
    }
}
