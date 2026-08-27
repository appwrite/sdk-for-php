<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AdditionalResource
 *
 * @phpstan-consistent-constructor
 */
readonly class AdditionalResource
{
    use ArraySerializable;

    /**
     * AdditionalResource constructor.
     *
     * @param string $name resource name
     * @param string $unit resource unit
     * @param string $currency price currency
     * @param float $price price
     * @param int $value resource value
     * @param string $invoiceDesc description on invoice
     */
    public function __construct(
        public string $name,
        public string $unit,
        public string $currency,
        public float $price,
        public int $value,
        public string $invoiceDesc
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('unit', $data)) {
            throw new \InvalidArgumentException('Missing required field "unit" for ' . static::class . '.');
        }
        if (!array_key_exists('currency', $data)) {
            throw new \InvalidArgumentException('Missing required field "currency" for ' . static::class . '.');
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
            name: $data['name'],
            unit: $data['unit'],
            currency: $data['currency'],
            price: $data['price'],
            value: $data['value'],
            invoiceDesc: $data['invoiceDesc']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'name' => static::serializeValue($this->name),
            'unit' => static::serializeValue($this->unit),
            'currency' => static::serializeValue($this->currency),
            'price' => static::serializeValue($this->price),
            'value' => static::serializeValue($this->value),
            'invoiceDesc' => static::serializeValue($this->invoiceDesc)
        ];
    }
}
