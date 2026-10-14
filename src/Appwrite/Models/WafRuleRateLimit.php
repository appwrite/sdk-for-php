<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\WafRuleAction;

/**
 * WafRuleRateLimit
 *
 * @phpstan-consistent-constructor
 */
readonly class WafRuleRateLimit
{
    use ArraySerializable;

    /**
     * WafRuleRateLimit constructor.
     *
     * @param string $id rule id.
     * @param string $createdAt waf rule creation time in iso 8601 format.
     * @param string $updatedAt waf rule last update time in iso 8601 format.
     * @param string $name human friendly rule name.
     * @param string $description optional description for the rule.
     * @param string $teamId team id.
     * @param string $projectId project id.
     * @param string $resourceType resource type the rule is scoped to.
     * @param string $resourceId resource identifier. empty for api-wide rules.
     * @param WafRuleAction $action action performed when the rule matches.
     * @param int $priority evaluation priority. lower values execute earlier.
     * @param bool $enabled whether the rule is active.
     * @param array $conditions list of conditions evaluated for this rule.
     * @param array $config action specific configuration.
     * @param int $limit maximum number of matching requests allowed for the given interval.
     * @param int $interval interval in seconds for the rate limit window.
     * @param string $key rate limit key: `ip` limits per client ip, `userid` limits per authenticated user.
     * @param string $strategy rate limit strategy: `fixedwindow`, `slidingwindow`, or `tokenbucket`.
     * @param int $maxBucketSize maximum burst capacity in tokens, applied by the `tokenbucket` strategy. the sustained refill rate is `limit / interval`. defaults to `limit`.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $description,
        public string $teamId,
        public string $projectId,
        public string $resourceType,
        public string $resourceId,
        public WafRuleAction $action,
        public int $priority,
        public bool $enabled,
        public array $conditions,
        public array $config,
        public int $limit,
        public int $interval,
        public string $key,
        public string $strategy,
        public int $maxBucketSize
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
            'name' => "",
            'description' => "",
            'teamId' => "",
            'projectId' => "",
            'resourceType' => "api",
            'resourceId' => "",
            'priority' => 0,
            'enabled' => true,
            'conditions' => [],
            'config' => [],
            'limit' => 100,
            'interval' => 3600,
            'key' => "ip",
            'strategy' => "fixedWindow",
            'maxBucketSize' => 0,
        ];

        if (!array_key_exists('action', $data)) {
            throw new \InvalidArgumentException('Missing required field "action" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            description: $data['description'],
            teamId: $data['teamId'],
            projectId: $data['projectId'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            action: static::hydrateTypedValue(WafRuleAction::class, $data['action']),
            priority: $data['priority'],
            enabled: $data['enabled'],
            conditions: $data['conditions'],
            config: $data['config'],
            limit: $data['limit'],
            interval: $data['interval'],
            key: $data['key'],
            strategy: $data['strategy'],
            maxBucketSize: $data['maxBucketSize']
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
            'name' => static::serializeValue($this->name),
            'description' => static::serializeValue($this->description),
            'teamId' => static::serializeValue($this->teamId),
            'projectId' => static::serializeValue($this->projectId),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'action' => static::serializeValue($this->action),
            'priority' => static::serializeValue($this->priority),
            'enabled' => static::serializeValue($this->enabled),
            'conditions' => static::serializeValue($this->conditions),
            'config' => static::serializeValue($this->config),
            'limit' => static::serializeValue($this->limit),
            'interval' => static::serializeValue($this->interval),
            'key' => static::serializeValue($this->key),
            'strategy' => static::serializeValue($this->strategy),
            'maxBucketSize' => static::serializeValue($this->maxBucketSize)
        ];
    }
}
