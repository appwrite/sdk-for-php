<?php

namespace Appwrite\Models;

/**
 * Apps list
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('apps', $data)) {
            throw new \InvalidArgumentException('Missing required field "apps" for ' . static::class . '.');
        }

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
        $result = [
            'total' => static::serializeValue($this->total),
            'apps' => static::serializeValue($this->apps)
        ];

        return $result;
    }
}
