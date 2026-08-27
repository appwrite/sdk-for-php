<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Details
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingPlanAddonDetails
{
    use ArraySerializable;

    /**
     * BillingPlanAddonDetails constructor.
     *
     * @param bool $supported is the addon supported in the plan?
     * @param int $planIncluded addon plan included value
     * @param int $limit addon limit
     * @param string $type addon type
     * @param float $price price
     * @param int $value resource value
     * @param string $invoiceDesc description on invoice
     * @param string|null $currency price currency
     */
    public function __construct(
        public bool $supported,
        public int $planIncluded,
        public int $limit,
        public string $type,
        public float $price,
        public int $value,
        public string $invoiceDesc,
        public ?string $currency = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('supported', $data)) {
            throw new \InvalidArgumentException('Missing required field "supported" for ' . static::class . '.');
        }
        if (!array_key_exists('planIncluded', $data)) {
            throw new \InvalidArgumentException('Missing required field "planIncluded" for ' . static::class . '.');
        }
        if (!array_key_exists('limit', $data)) {
            throw new \InvalidArgumentException('Missing required field "limit" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('price', $data)) {
            throw new \InvalidArgumentException('Missing required field "price" for ' . static::class . '.');
        }
        if (!array_key_exists('value', $data)) {
            throw new \InvalidArgumentException('Missing required field "value" for ' . static::class . '.');
        }
        if (!array_key_exists('invoiceDesc', $data)) {
            throw new \InvalidArgumentException('Missing required field "invoiceDesc" for ' . static::class . '.');
        }

        return new static(
            supported: $data['supported'],
            planIncluded: $data['planIncluded'],
            limit: $data['limit'],
            type: $data['type'],
            price: $data['price'],
            value: $data['value'],
            invoiceDesc: $data['invoiceDesc'],
            currency: $data['currency'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'supported' => static::serializeValue($this->supported),
            'planIncluded' => static::serializeValue($this->planIncluded),
            'limit' => static::serializeValue($this->limit),
            'type' => static::serializeValue($this->type),
            'currency' => static::serializeValue($this->currency),
            'price' => static::serializeValue($this->price),
            'value' => static::serializeValue($this->value),
            'invoiceDesc' => static::serializeValue($this->invoiceDesc)
        ];
    }
}
