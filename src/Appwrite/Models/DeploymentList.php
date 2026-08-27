<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Deployments List
 *
 * @phpstan-consistent-constructor
 */
readonly class DeploymentList
{
    use ArraySerializable;

    /**
     * DeploymentList constructor.
     *
     * @param int $total total number of deployments that matched your query.
     * @param list<Deployment> $deployments list of deployments.
     */
    public function __construct(
        public int $total,
        public array $deployments
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
        if (!array_key_exists('deployments', $data)) {
            throw new \InvalidArgumentException('Missing required field "deployments" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            deployments: is_array($data['deployments'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Deployment::class, $item),
                    $data['deployments']
                )
                : $data['deployments']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'deployments' => static::serializeValue($this->deployments)
        ];
    }
}
