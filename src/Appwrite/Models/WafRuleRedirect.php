<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\WafRuleAction;

/**
 * WafRuleRedirect
 *
 * @phpstan-consistent-constructor
 */
readonly class WafRuleRedirect
{
    use ArraySerializable;

    /**
     * WafRuleRedirect constructor.
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
     * @param string $location target location for the redirect.
     * @param int $statusCode http status code used for the redirect.
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
        public string $location,
        public int $statusCode
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
            'location' => "/",
            'statusCode' => 302,
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
            location: $data['location'],
            statusCode: $data['statusCode']
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
            'location' => static::serializeValue($this->location),
            'statusCode' => static::serializeValue($this->statusCode)
        ];
    }
}
