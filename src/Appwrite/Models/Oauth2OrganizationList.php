<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * OAuth2 accessible organizations list
 *
 * @phpstan-consistent-constructor
 */
readonly class Oauth2OrganizationList
{
    use ArraySerializable;

    /**
     * Oauth2OrganizationList constructor.
     *
     * @param int $total total number of organizations that matched your query.
     * @param list<Oauth2Organization> $organizations list of organizations.
     */
    public function __construct(
        public int $total,
        public array $organizations
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
        if (!array_key_exists('organizations', $data)) {
            throw new \InvalidArgumentException('Missing required field "organizations" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            organizations: is_array($data['organizations'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Oauth2Organization::class, $item),
                    $data['organizations']
                )
                : $data['organizations']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'organizations' => static::serializeValue($this->organizations)
        ];
    }
}
