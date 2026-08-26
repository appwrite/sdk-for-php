<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Limits
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingLimits
{
    use ArraySerializable;

    /**
     * BillingLimits constructor.
     *
     * @param int|null $bandwidth bandwidth limit
     * @param int|null $storage storage limit
     * @param int|null $users users limit
     * @param int|null $executions executions limit
     * @param int|null $gBHours gbhours limit
     * @param int|null $imageTransformations image transformations limit
     * @param int|null $authPhone auth phone limit
     * @param int|null $budgetLimit budget limit percentage
     */
    public function __construct(
        public ?int $bandwidth = null,
        public ?int $storage = null,
        public ?int $users = null,
        public ?int $executions = null,
        public ?int $gBHours = null,
        public ?int $imageTransformations = null,
        public ?int $authPhone = null,
        public ?int $budgetLimit = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        return new static(
            bandwidth: $data['bandwidth'] ?? null,
            storage: $data['storage'] ?? null,
            users: $data['users'] ?? null,
            executions: $data['executions'] ?? null,
            gBHours: $data['GBHours'] ?? null,
            imageTransformations: $data['imageTransformations'] ?? null,
            authPhone: $data['authPhone'] ?? null,
            budgetLimit: $data['budgetLimit'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'bandwidth' => static::serializeValue($this->bandwidth),
            'storage' => static::serializeValue($this->storage),
            'users' => static::serializeValue($this->users),
            'executions' => static::serializeValue($this->executions),
            'GBHours' => static::serializeValue($this->gBHours),
            'imageTransformations' => static::serializeValue($this->imageTransformations),
            'authPhone' => static::serializeValue($this->authPhone),
            'budgetLimit' => static::serializeValue($this->budgetLimit)
        ];
    }
}
