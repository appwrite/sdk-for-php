<?php

namespace Appwrite\Models;

use Appwrite\Enums\ProxyRuleDeploymentResourceType;
use Appwrite\Enums\ProxyRuleStatus;

/**
 * Rule
 */
readonly class ProxyRule
{
    use ArraySerializable;

    /**
     * ProxyRule constructor.
     *
     * @param string $id rule id.
     * @param string $createdAt rule creation date in iso 8601 format.
     * @param string $updatedAt rule update date in iso 8601 format.
     * @param string $domain domain name.
     * @param string $type action definition for the rule. possible values are "api", "deployment", or "redirect"
     * @param string $trigger defines how the rule was created. possible values are "manual" or "deployment"
     * @param string $redirectUrl url to redirect to. used if type is "redirect"
     * @param int $redirectStatusCode status code to apply during redirect. used if type is "redirect"
     * @param string $deploymentId id of deployment. used if type is "deployment"
     * @param string $deploymentResourceId id of deployment's resource (site or function id). used if type is "deployment"
     * @param string $deploymentVcsProviderBranch name of git branch that updates rule. used if type is "deployment"
     * @param ProxyRuleStatus $status domain verification status. possible values are "unverified", "verifying", "verified"
     * @param string $logs logs from rule verification or certificate generation. certificate generation logs are prioritized if both are available.
     * @param string $renewAt certificate auto-renewal date in iso 8601 format.
     * @param ProxyRuleDeploymentResourceType|null $deploymentResourceType type of deployment. possible values are "function", "site". used if rule's type is "deployment".
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $domain,
        public string $type,
        public string $trigger,
        public string $redirectUrl,
        public int $redirectStatusCode,
        public string $deploymentId,
        public string $deploymentResourceId,
        public string $deploymentVcsProviderBranch,
        public ProxyRuleStatus $status,
        public string $logs,
        public string $renewAt,
        public ?ProxyRuleDeploymentResourceType $deploymentResourceType = null
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
        if (!array_key_exists('domain', $data)) {
            throw new \InvalidArgumentException('Missing required field "domain" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('trigger', $data)) {
            throw new \InvalidArgumentException('Missing required field "trigger" for ' . static::class . '.');
        }
        if (!array_key_exists('redirectUrl', $data)) {
            throw new \InvalidArgumentException('Missing required field "redirectUrl" for ' . static::class . '.');
        }
        if (!array_key_exists('redirectStatusCode', $data)) {
            throw new \InvalidArgumentException('Missing required field "redirectStatusCode" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentId', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentId" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentResourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentResourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('deploymentVcsProviderBranch', $data)) {
            throw new \InvalidArgumentException('Missing required field "deploymentVcsProviderBranch" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('logs', $data)) {
            throw new \InvalidArgumentException('Missing required field "logs" for ' . static::class . '.');
        }
        if (!array_key_exists('renewAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "renewAt" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            domain: $data['domain'],
            type: $data['type'],
            trigger: $data['trigger'],
            redirectUrl: $data['redirectUrl'],
            redirectStatusCode: $data['redirectStatusCode'],
            deploymentId: $data['deploymentId'],
            deploymentResourceId: $data['deploymentResourceId'],
            deploymentVcsProviderBranch: $data['deploymentVcsProviderBranch'],
            status: static::hydrateTypedValue(ProxyRuleStatus::class, $data['status']),
            logs: $data['logs'],
            renewAt: $data['renewAt'],
            deploymentResourceType: array_key_exists('deploymentResourceType', $data) ? static::hydrateTypedValue(ProxyRuleDeploymentResourceType::class, $data['deploymentResourceType'], true) : null
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
            'domain' => static::serializeValue($this->domain),
            'type' => static::serializeValue($this->type),
            'trigger' => static::serializeValue($this->trigger),
            'redirectUrl' => static::serializeValue($this->redirectUrl),
            'redirectStatusCode' => static::serializeValue($this->redirectStatusCode),
            'deploymentId' => static::serializeValue($this->deploymentId),
            'deploymentResourceType' => static::serializeValue($this->deploymentResourceType),
            'deploymentResourceId' => static::serializeValue($this->deploymentResourceId),
            'deploymentVcsProviderBranch' => static::serializeValue($this->deploymentVcsProviderBranch),
            'status' => static::serializeValue($this->status),
            'logs' => static::serializeValue($this->logs),
            'renewAt' => static::serializeValue($this->renewAt)
        ];

        return $result;
    }
}
