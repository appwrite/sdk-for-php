<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Reports List
 *
 * @phpstan-consistent-constructor
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
        $data += [
            'total' => 0,
            'reports' => [],
        ];

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
        return [
            'total' => static::serializeValue($this->total),
            'reports' => static::serializeValue($this->reports)
        ];
    }
}
