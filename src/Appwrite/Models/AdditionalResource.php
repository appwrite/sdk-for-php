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
        $data += [
            'name' => "",
            'unit' => "",
            'currency' => "",
            'price' => 0,
            'value' => 0,
            'invoiceDesc' => "",
        ];

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
