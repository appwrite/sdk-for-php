<?php

namespace Appwrite\Models;

/**
 * Report
 */
readonly class Report
{
    use ArraySerializable;

    /**
     * Report constructor.
     *
     * @param string $id report id.
     * @param string $createdAt report creation date in iso 8601 format.
     * @param string $updatedAt report update date in iso 8601 format.
     * @param string $appId id of the third-party app that submitted the report.
     * @param string $type analyzer that produced this report. e.g. lighthouse, audit, databaseanalyzer.
     * @param string $title short, human-readable title for the report.
     * @param string $summary markdown summary describing the report.
     * @param string $targetType plural noun describing what the report analyzes, e.g. databases, sites, urls.
     * @param string $target free-form target identifier (url for lighthouse, resource id for db).
     * @param array $categories categories covered by the report, e.g. performance, accessibility.
     * @param list<Insight> $insights insights nested under this report.
     * @param string|null $analyzedAt time the report was analyzed in iso 8601 format.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $appId,
        public string $type,
        public string $title,
        public string $summary,
        public string $targetType,
        public string $target,
        public array $categories,
        public array $insights,
        public ?string $analyzedAt = null
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
        if (!array_key_exists('appId', $data)) {
            throw new \InvalidArgumentException('Missing required field "appId" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('title', $data)) {
            throw new \InvalidArgumentException('Missing required field "title" for ' . static::class . '.');
        }
        if (!array_key_exists('summary', $data)) {
            throw new \InvalidArgumentException('Missing required field "summary" for ' . static::class . '.');
        }
        if (!array_key_exists('targetType', $data)) {
            throw new \InvalidArgumentException('Missing required field "targetType" for ' . static::class . '.');
        }
        if (!array_key_exists('target', $data)) {
            throw new \InvalidArgumentException('Missing required field "target" for ' . static::class . '.');
        }
        if (!array_key_exists('categories', $data)) {
            throw new \InvalidArgumentException('Missing required field "categories" for ' . static::class . '.');
        }
        if (!array_key_exists('insights', $data)) {
            throw new \InvalidArgumentException('Missing required field "insights" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            appId: $data['appId'],
            type: $data['type'],
            title: $data['title'],
            summary: $data['summary'],
            targetType: $data['targetType'],
            target: $data['target'],
            categories: $data['categories'],
            insights: is_array($data['insights'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Insight::class, $item),
                    $data['insights']
                )
                : $data['insights'],
            analyzedAt: array_key_exists('analyzedAt', $data) ? $data['analyzedAt'] : null
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
            'appId' => static::serializeValue($this->appId),
            'type' => static::serializeValue($this->type),
            'title' => static::serializeValue($this->title),
            'summary' => static::serializeValue($this->summary),
            'targetType' => static::serializeValue($this->targetType),
            'target' => static::serializeValue($this->target),
            'categories' => static::serializeValue($this->categories),
            'insights' => static::serializeValue($this->insights),
            'analyzedAt' => static::serializeValue($this->analyzedAt)
        ];

        return $result;
    }
}
