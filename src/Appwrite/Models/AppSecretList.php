<?php

namespace Appwrite\Models;

/**
 * App secrets list
 */
readonly class AppSecretList
{
    use ArraySerializable;

    /**
     * AppSecretList constructor.
     *
     * @param int $total total number of secrets that matched your query.
     * @param list<AppSecret> $secrets list of secrets.
     */
    public function __construct(
        public int $total,
        public array $secrets
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
        if (!array_key_exists('secrets', $data)) {
            throw new \InvalidArgumentException('Missing required field "secrets" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            secrets: is_array($data['secrets'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(AppSecret::class, $item),
                    $data['secrets']
                )
                : $data['secrets']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'secrets' => static::serializeValue($this->secrets)
        ];

        return $result;
    }
}
