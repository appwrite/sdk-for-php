<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\MonitorType;
use Appwrite\Enums\MonitorResourceType;
use Appwrite\Enums\MonitorSeverity;
use Appwrite\Enums\MonitorStatus;
use Appwrite\Enums\MonitorMethod;
use Appwrite\Enums\MonitorRecord;
use Appwrite\Enums\MonitorTlsMode;
use Appwrite\Enums\MonitorResult;

/**
 * Monitor
 *
 * @phpstan-consistent-constructor
 */
readonly class Monitor
{
    use ArraySerializable;

    /**
     * Monitor constructor.
     *
     * @param string $id monitor id.
     * @param string $createdAt monitor creation date in iso 8601 format.
     * @param string $updatedAt monitor update date in iso 8601 format.
     * @param string $name monitor name.
     * @param string $projectId project id.
     * @param array $rules rules that must all hold for the monitor to fire, as query strings. a usage monitor has one comparing a metric with a threshold, optionally scoped with `equal('resourcetype')` and `equal('resourceid')`. a probe monitor fires when its rules match the check, over these variables: `http` `statuscode`, `latency`, `certificatedays` and `certificatelifetime`; `dns` `answer`, `answers` and `latency`; `tcp` `latency`; `smtp` `code`, `latency`, `certificatedays` and `certificatelifetime`. a failed connection fires whatever the rules.
     * @param MonitorType $type what the monitor checks: `usage` compares a usage metric with a threshold; `http`, `dns`, `tcp` and `smtp` probe a target on their own interval.
     * @param MonitorResourceType $resourceType type of the resource the monitor watches, from its rules: the project, or one database, bucket, function or site.
     * @param string $resourceId id of the resource the monitor watches, from its rules. the project id for a project-wide monitor.
     * @param int $window seconds a counter metric is summed over, and a growth metric is measured across. gauges compare their latest value. usage is read a short lag behind the evaluation (`_app_alerts_usage_lag`, 120 seconds by default) so events still being written are counted by the next evaluation.
     * @param int $cooldown minimum seconds between two team notifications of this monitor firing. events fire on every change regardless.
     * @param bool $enabled whether the monitor is evaluated.
     * @param array $notify organization roles whose confirmed members get an email and a console notification when the monitor fires and resolves. empty when the alert events are the only delivery. not used while `escalationid` is set.
     * @param string $escalationId id of the organization's escalation that notifies the team of this monitor's alerts, step by step until one is acknowledged. when set, `notify` is not used. empty to notify the `notify` roles once.
     * @param MonitorSeverity $severity how urgent the monitor's alerts are: `info`, `warning`, `error` or `critical`. critical alerts may be delivered with higher urgency by the notification channels that support it.
     * @param MonitorStatus $status whether the monitor is firing, as of its last evaluation.
     * @param string $alertId id of the alert the monitor is firing for. empty while it is not firing.
     * @param int $interval probe monitors: seconds between two checks, read back raised to the plan's minimum. 0 for usage monitors, which are evaluated on the server's interval.
     * @param int $timeout probe monitors: seconds a check may take before it fails.
     * @param string $url http monitors: url requested.
     * @param string $body http monitors: request body sent.
     * @param string $domain dns monitors: domain queried.
     * @param string $resolver dns monitors: resolver queried. empty for the server's dns resolver.
     * @param string $host tcp and smtp monitors: hostname or ip address connected to.
     * @param int $port tcp and smtp monitors: port connected to.
     * @param float|null $value metric value at the last evaluation. null before the first evaluation, and when the last evaluation (`evaluatedat`) found no usage recorded to read: without data a monitor is not compared, so it keeps its status and open alert.
     * @param string|null $evaluatedAt last evaluation date in iso 8601 format.
     * @param string|null $triggeredAt date the monitor last announced an alert, in iso 8601 format.
     * @param MonitorMethod|null $method http monitors: method the url is requested with. null for other types.
     * @param array|null $headers http monitors: headers sent, as an object of header names and values.
     * @param MonitorRecord|null $record dns monitors: record type queried. null for other types.
     * @param MonitorTlsMode|null $tlsMode smtp monitors: how the connection is secured. `auto` picks implicit tls on port 465, starttls on 587 and none otherwise. null for other types.
     * @param MonitorResult|null $result probe monitors: what the last check found. `ok` passes; anything else opened the monitor's alert. null before the first check.
     * @param int|null $latency probe monitors: milliseconds the last check took.
     * @param int|null $code probe monitors: last status code an http target answered with, reply code an smtp server sent, or response code a dns resolver returned.
     * @param string|null $certificateExpiresAt probe monitors: expiry date of the tls certificate the last check saw, in iso 8601 format. null without tls.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $projectId,
        public array $rules,
        public MonitorType $type,
        public MonitorResourceType $resourceType,
        public string $resourceId,
        public int $window,
        public int $cooldown,
        public bool $enabled,
        public array $notify,
        public string $escalationId,
        public MonitorSeverity $severity,
        public MonitorStatus $status,
        public string $alertId,
        public int $interval,
        public int $timeout,
        public string $url,
        public string $body,
        public string $domain,
        public string $resolver,
        public string $host,
        public int $port,
        public ?float $value = null,
        public ?string $evaluatedAt = null,
        public ?string $triggeredAt = null,
        public ?MonitorMethod $method = null,
        public ?array $headers = null,
        public ?MonitorRecord $record = null,
        public ?MonitorTlsMode $tlsMode = null,
        public ?MonitorResult $result = null,
        public ?int $latency = null,
        public ?int $code = null,
        public ?string $certificateExpiresAt = null
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
            'projectId' => "",
            'rules' => [],
            'type' => "usage",
            'resourceType' => "project",
            'resourceId' => "",
            'window' => 3600,
            'cooldown' => 3600,
            'enabled' => true,
            'notify' => ["owner"],
            'escalationId' => "",
            'severity' => "warning",
            'status' => "ok",
            'alertId' => "",
            'interval' => 0,
            'timeout' => 0,
            'url' => "",
            'body' => "",
            'domain' => "",
            'resolver' => "",
            'host' => "",
            'port' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            projectId: $data['projectId'],
            rules: $data['rules'],
            type: static::hydrateTypedValue(MonitorType::class, $data['type']),
            resourceType: static::hydrateTypedValue(MonitorResourceType::class, $data['resourceType']),
            resourceId: $data['resourceId'],
            window: $data['window'],
            cooldown: $data['cooldown'],
            enabled: $data['enabled'],
            notify: $data['notify'],
            escalationId: $data['escalationId'],
            severity: static::hydrateTypedValue(MonitorSeverity::class, $data['severity']),
            status: static::hydrateTypedValue(MonitorStatus::class, $data['status']),
            alertId: $data['alertId'],
            interval: $data['interval'],
            timeout: $data['timeout'],
            url: $data['url'],
            body: $data['body'],
            domain: $data['domain'],
            resolver: $data['resolver'],
            host: $data['host'],
            port: $data['port'],
            value: $data['value'] ?? null,
            evaluatedAt: $data['evaluatedAt'] ?? null,
            triggeredAt: $data['triggeredAt'] ?? null,
            method: array_key_exists('method', $data) ? static::hydrateTypedValue(MonitorMethod::class, $data['method'], true) : null,
            headers: $data['headers'] ?? null,
            record: array_key_exists('record', $data) ? static::hydrateTypedValue(MonitorRecord::class, $data['record'], true) : null,
            tlsMode: array_key_exists('tlsMode', $data) ? static::hydrateTypedValue(MonitorTlsMode::class, $data['tlsMode'], true) : null,
            result: array_key_exists('result', $data) ? static::hydrateTypedValue(MonitorResult::class, $data['result'], true) : null,
            latency: $data['latency'] ?? null,
            code: $data['code'] ?? null,
            certificateExpiresAt: $data['certificateExpiresAt'] ?? null
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
            'projectId' => static::serializeValue($this->projectId),
            'rules' => static::serializeValue($this->rules),
            'type' => static::serializeValue($this->type),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'window' => static::serializeValue($this->window),
            'cooldown' => static::serializeValue($this->cooldown),
            'enabled' => static::serializeValue($this->enabled),
            'notify' => static::serializeValue($this->notify),
            'escalationId' => static::serializeValue($this->escalationId),
            'severity' => static::serializeValue($this->severity),
            'status' => static::serializeValue($this->status),
            'value' => static::serializeValue($this->value),
            'evaluatedAt' => static::serializeValue($this->evaluatedAt),
            'alertId' => static::serializeValue($this->alertId),
            'triggeredAt' => static::serializeValue($this->triggeredAt),
            'interval' => static::serializeValue($this->interval),
            'timeout' => static::serializeValue($this->timeout),
            'url' => static::serializeValue($this->url),
            'method' => static::serializeValue($this->method),
            'headers' => static::serializeValue($this->headers),
            'body' => static::serializeValue($this->body),
            'domain' => static::serializeValue($this->domain),
            'record' => static::serializeValue($this->record),
            'resolver' => static::serializeValue($this->resolver),
            'host' => static::serializeValue($this->host),
            'port' => static::serializeValue($this->port),
            'tlsMode' => static::serializeValue($this->tlsMode),
            'result' => static::serializeValue($this->result),
            'latency' => static::serializeValue($this->latency),
            'code' => static::serializeValue($this->code),
            'certificateExpiresAt' => static::serializeValue($this->certificateExpiresAt)
        ];
    }
}
