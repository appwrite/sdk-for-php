<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * App installations list
 *
 * @phpstan-consistent-constructor
 */
readonly class AppInstallationList
{
    use ArraySerializable;

    /**
     * AppInstallationList constructor.
     *
     * @param int $total total number of installations that matched your query.
     * @param list<AppInstallation> $installations list of installations.
     */
    public function __construct(
        public int $total,
        public array $installations
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
        if (!array_key_exists('installations', $data)) {
            throw new \InvalidArgumentException('Missing required field "installations" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            installations: is_array($data['installations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AppInstallation::class, $item),
                    $data['installations']
                )
                : $data['installations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'installations' => static::serializeValue($this->installations)
        ];
    }
}
