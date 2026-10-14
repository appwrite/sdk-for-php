<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Apps list
 *
 * @phpstan-consistent-constructor
 */
readonly class AppsList
{
    use ArraySerializable;

    /**
     * AppsList constructor.
     *
     * @param int $total total number of apps that matched your query.
     * @param list<App> $apps list of apps.
     */
    public function __construct(
        public int $total,
        public array $apps
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'apps' => [],
        ];

        return new static(
            total: $data['total'],
            apps: is_array($data['apps'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(App::class, $item),
                    $data['apps']
                )
                : $data['apps']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'apps' => static::serializeValue($this->apps)
        ];
    }
}
