<?php

namespace Appwrite\Models;

/**
 * Reports List
 */
readonly class ReportList
{
    use ArraySerializable;

    /**
     * ReportList constructor.
     *
     * @param int $total total number of reports that matched your query.
     * @param list<Report> $reports list of reports.
     */
    public function __construct(
        public int $total,
        public array $reports
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('reports', $data)) {
            throw new \InvalidArgumentException('Missing required field "reports" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            reports: is_array($data['reports'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Report::class, $item),
                    $data['reports']
                )
                : $data['reports']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'reports' => static::serializeValue($this->reports)
        ];

        return $result;
    }
}
