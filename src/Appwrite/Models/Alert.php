<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\AlertStatus;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Enums\AlertMetric;
use Appwrite\Enums\AlertComparator;
use Appwrite\Enums\MonitorType;
use Appwrite\Enums\MonitorResourceType;
use Appwrite\Enums\MonitorResult;

/**
 * Alert
 *
 * @phpstan-consistent-constructor
 */
readonly class Alert
{
    use ArraySerializable;

    /**
     * Alert constructor.
     *
     * @param string $id alert id.
     * @param string $createdAt date the alert started firing, in iso 8601 format.
     * @param string $updatedAt alert update date in iso 8601 format.
     * @param string $monitorId id of the monitor that raised the alert.
     * @param string $projectId id of the project the alert is about. empty for an alert of the whole organization.
     * @param string $name name of the monitor when the alert fired.
     * @param AlertStatus $status whether the alert is still firing or has resolved.
     * @param string $acknowledgedBy id of the user who acknowledged the alert. empty while nobody has, or when it was acknowledged with an api key.
     * @param string $acknowledgedByName name of the user who acknowledged the alert, when they did.
     * @param string $escalationId id of the escalation notifying the team of this alert. empty when the monitor notified its `notify` roles instead.
     * @param int $escalationStep index of the escalation's next step to notify, counting from 0. equal to the number of steps once the last round has gone out.
     * @param int $escalationRound how many times the escalation's steps have been repeated for this alert.
     * @param array $rules the monitor's rules when the alert fired, as query strings.
     * @param MonitorSeverity $severity the monitor's severity when the alert fired: `info`, `warning`, `error` or `critical`.
     * @param float $threshold threshold the metric crossed, in the metric's unit.
     * @param float $value latest reading while the alert fired: the metric's value for a usage monitor, and for a probe monitor its `latency`.
     * @param float $peak reading furthest past the threshold while the alert fired.
     * @param MonitorType $type type of the monitor that raised the alert.
     * @param MonitorResourceType $resourceType type of the resource the alert fired on: the project, or one database, bucket, function or site.
     * @param string $resourceId id of the resource the alert fired on. the project id for a project-wide monitor.
     * @param int $notifications how many times the alert was announced as firing: once when it fired, and again after each cooldown while it kept firing.
     * @param string|null $resolvedAt date the alert resolved, in iso 8601 format. empty while it fires.
     * @param string|null $acknowledgedAt date a member acknowledged the alert, in iso 8601 format. empty while nobody has.
     * @param string|null $escalatesAt when the next step is notified, in iso 8601 format. null when nothing is due: the alert was acknowledged or resolved, or every step has gone out.
     * @param AlertMetric|null $metric metric the alert fired on. null for a probe monitor's alert.
     * @param AlertComparator|null $comparator how the metric was compared with the threshold. null for a probe monitor's alert.
     * @param int|null $latency probe monitors: response time in milliseconds of the latest check recorded on the alert.
     * @param MonitorResult|null $result what the failing check of a probe monitor found when the alert opened, such as `connect_refused`. null for a usage monitor's alert.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $monitorId,
        public string $projectId,
        public string $name,
        public AlertStatus $status,
        public string $acknowledgedBy,
        public string $acknowledgedByName,
        public string $escalationId,
        public int $escalationStep,
        public int $escalationRound,
        public array $rules,
        public MonitorSeverity $severity,
        public float $threshold,
        public float $value,
        public float $peak,
        public MonitorType $type,
        public MonitorResourceType $resourceType,
        public string $resourceId,
        public int $notifications,
        public ?string $resolvedAt = null,
        public ?string $acknowledgedAt = null,
        public ?string $escalatesAt = null,
        public ?AlertMetric $metric = null,
        public ?AlertComparator $comparator = null,
        public ?int $latency = null,
        public ?MonitorResult $result = null
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
            'monitorId' => "",
            'projectId' => "",
            'name' => "",
            'status' => "firing",
            'acknowledgedBy' => "",
            'acknowledgedByName' => "",
            'escalationId' => "",
            'escalationStep' => 0,
            'escalationRound' => 0,
            'rules' => [],
            'severity' => "warning",
            'threshold' => 0,
            'value' => 0,
            'peak' => 0,
            'type' => "usage",
            'resourceType' => "project",
            'resourceId' => "",
            'notifications' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            monitorId: $data['monitorId'],
            projectId: $data['projectId'],
            name: $data['name'],
            status: static::hydrateTypedValue(AlertStatus::class, $data['status']),
            acknowledgedBy: $data['acknowledgedBy'],
            acknowledgedByName: $data['acknowledgedByName'],
            escalationId: $data['escalationId'],
            escalationStep: $data['escalationStep'],
            escalationRound: $data['escalationRound'],
            rules: $data['rules'],
            severity: static::hydrateTypedValue(MonitorSeverity::class, $data['severity']),
            threshold: $data['threshold'],
            value: $data['value'],
            peak: $data['peak'],
            type: static::hydrateTypedValue(MonitorType::class, $data['type']),
            resourceType: static::hydrateTypedValue(MonitorResourceType::class, $data['resourceType']),
            resourceId: $data['resourceId'],
            notifications: $data['notifications'],
            resolvedAt: $data['resolvedAt'] ?? null,
            acknowledgedAt: $data['acknowledgedAt'] ?? null,
            escalatesAt: $data['escalatesAt'] ?? null,
            metric: array_key_exists('metric', $data) ? static::hydrateTypedValue(AlertMetric::class, $data['metric'], true) : null,
            comparator: array_key_exists('comparator', $data) ? static::hydrateTypedValue(AlertComparator::class, $data['comparator'], true) : null,
            latency: $data['latency'] ?? null,
            result: array_key_exists('result', $data) ? static::hydrateTypedValue(MonitorResult::class, $data['result'], true) : null
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
            'monitorId' => static::serializeValue($this->monitorId),
            'projectId' => static::serializeValue($this->projectId),
            'name' => static::serializeValue($this->name),
            'status' => static::serializeValue($this->status),
            'resolvedAt' => static::serializeValue($this->resolvedAt),
            'acknowledgedAt' => static::serializeValue($this->acknowledgedAt),
            'acknowledgedBy' => static::serializeValue($this->acknowledgedBy),
            'acknowledgedByName' => static::serializeValue($this->acknowledgedByName),
            'escalationId' => static::serializeValue($this->escalationId),
            'escalationStep' => static::serializeValue($this->escalationStep),
            'escalationRound' => static::serializeValue($this->escalationRound),
            'escalatesAt' => static::serializeValue($this->escalatesAt),
            'rules' => static::serializeValue($this->rules),
            'severity' => static::serializeValue($this->severity),
            'metric' => static::serializeValue($this->metric),
            'comparator' => static::serializeValue($this->comparator),
            'threshold' => static::serializeValue($this->threshold),
            'value' => static::serializeValue($this->value),
            'peak' => static::serializeValue($this->peak),
            'type' => static::serializeValue($this->type),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'notifications' => static::serializeValue($this->notifications),
            'latency' => static::serializeValue($this->latency),
            'result' => static::serializeValue($this->result)
        ];
    }
}
