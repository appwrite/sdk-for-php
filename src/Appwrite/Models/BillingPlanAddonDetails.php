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
        $data += [
            'supported' => false,
            'planIncluded' => 0,
            'limit' => 0,
            'type' => "numeric",
            'price' => 0,
            'value' => 0,
            'invoiceDesc' => "",
        ];

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
