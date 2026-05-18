<?php

namespace Appwrite\Models;

/**
 * Insight
 */
readonly class Insight
{
    use ArraySerializable;

    /**
     * Insight constructor.
     *
     * @param string $id insight id.
     * @param string $createdAt insight creation date in iso 8601 format.
     * @param string $updatedAt insight update date in iso 8601 format.
     * @param string $reportId parent report id. insights always belong to a report.
     * @param string $type insight type. one of databaseindex (legacy), tablesdbindex, documentsdbindex, vectorsdbindex, databaseperformance, siteperformance, siteaccessibility, siteseo, functionperformance. the index types are engine-specific so each cta can pair the right service+method (databases.createindex, tablesdb.createindex, documentsdb.createindex, or vectorsdb.createindex).
     * @param string $severity insight severity. one of info, warning, critical.
     * @param string $status insight status. one of active, dismissed.
     * @param string $resourceType type of the resource the insight is about. plural noun, e.g. databases, sites, functions.
     * @param string $resourceId id of the resource the insight is about.
     * @param string $parentResourceType plural noun for the parent resource that contains the insight's resource, e.g. an insight about a column index on a table → resourcetype=indexes, parentresourcetype=tables. empty when the resource has no parent.
     * @param string $parentResourceId id of the parent resource. empty when the resource has no parent.
     * @param string $title insight title.
     * @param string $summary short markdown summary describing the insight.
     * @param list<InsightCTA> $ctas list of call-to-action buttons attached to this insight.
     * @param string|null $analyzedAt time the insight was analyzed in iso 8601 format.
     * @param string|null $dismissedAt time the insight was dismissed in iso 8601 format. empty when not dismissed.
     * @param string|null $dismissedBy user id that dismissed the insight. empty when not dismissed.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $reportId,
        public string $type,
        public string $severity,
        public string $status,
        public string $resourceType,
        public string $resourceId,
        public string $parentResourceType,
        public string $parentResourceId,
        public string $title,
        public string $summary,
        public array $ctas,
        public ?string $analyzedAt = null,
        public ?string $dismissedAt = null,
        public ?string $dismissedBy = null
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
        if (!array_key_exists('reportId', $data)) {
            throw new \InvalidArgumentException('Missing required field "reportId" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('severity', $data)) {
            throw new \InvalidArgumentException('Missing required field "severity" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('parentResourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "parentResourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('parentResourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "parentResourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('title', $data)) {
            throw new \InvalidArgumentException('Missing required field "title" for ' . static::class . '.');
        }
        if (!array_key_exists('summary', $data)) {
            throw new \InvalidArgumentException('Missing required field "summary" for ' . static::class . '.');
        }
        if (!array_key_exists('ctas', $data)) {
            throw new \InvalidArgumentException('Missing required field "ctas" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            reportId: $data['reportId'],
            type: $data['type'],
            severity: $data['severity'],
            status: $data['status'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            parentResourceType: $data['parentResourceType'],
            parentResourceId: $data['parentResourceId'],
            title: $data['title'],
            summary: $data['summary'],
            ctas: is_array($data['ctas'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(InsightCTA::class, $item),
                    $data['ctas']
                )
                : $data['ctas'],
            analyzedAt: array_key_exists('analyzedAt', $data) ? $data['analyzedAt'] : null,
            dismissedAt: array_key_exists('dismissedAt', $data) ? $data['dismissedAt'] : null,
            dismissedBy: array_key_exists('dismissedBy', $data) ? $data['dismissedBy'] : null
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
            'reportId' => static::serializeValue($this->reportId),
            'type' => static::serializeValue($this->type),
            'severity' => static::serializeValue($this->severity),
            'status' => static::serializeValue($this->status),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'parentResourceType' => static::serializeValue($this->parentResourceType),
            'parentResourceId' => static::serializeValue($this->parentResourceId),
            'title' => static::serializeValue($this->title),
            'summary' => static::serializeValue($this->summary),
            'ctas' => static::serializeValue($this->ctas),
            'analyzedAt' => static::serializeValue($this->analyzedAt),
            'dismissedAt' => static::serializeValue($this->dismissedAt),
            'dismissedBy' => static::serializeValue($this->dismissedBy)
        ];

        return $result;
    }
}
