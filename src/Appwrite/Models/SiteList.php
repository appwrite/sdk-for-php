<?php

namespace Appwrite\Models;

/**
 * Sites List
 */
readonly class SiteList
{
    use ArraySerializable;

    /**
     * SiteList constructor.
     *
     * @param int $total total number of sites that matched your query.
     * @param list<Site> $sites list of sites.
     */
    public function __construct(
        public int $total,
        public array $sites
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
        if (!array_key_exists('sites', $data)) {
            throw new \InvalidArgumentException('Missing required field "sites" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            sites: is_array($data['sites'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Site::class, $item),
                    $data['sites']
                )
                : $data['sites']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'sites' => static::serializeValue($this->sites)
        ];

        return $result;
    }
}
