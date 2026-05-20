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
     * @param string $region project region
     * @param list<Block> $blocks project blocks information
     * @param string $consoleAccessedAt last time the project was accessed via console. used with plan's projectinactivitydays to determine if project is paused.
     * @param BillingLimits|null $billingLimits billing limits reached
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $teamId,
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
        public string $region,
        public array $blocks,
        public string $consoleAccessedAt,
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
        if (!array_key_exists('region', $data)) {
            throw new \InvalidArgumentException('Missing required field "region" for ' . static::class . '.');
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
            teamId: $data['teamId'],
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
            region: $data['region'],
            blocks: is_array($data['blocks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Block::class, $item),
                    $data['blocks']
                )
                : $data['blocks'],
            consoleAccessedAt: $data['consoleAccessedAt'],
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
            'region' => static::serializeValue($this->region),
            'billingLimits' => static::serializeValue($this->billingLimits),
            'blocks' => static::serializeValue($this->blocks),
            'consoleAccessedAt' => static::serializeValue($this->consoleAccessedAt)
        ];

        return $result;
    }
}
