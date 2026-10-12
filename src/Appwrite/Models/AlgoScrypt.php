<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AlgoScrypt
 *
 * @phpstan-consistent-constructor
 */
readonly class AlgoScrypt
{
    use ArraySerializable;

    /**
     * AlgoScrypt constructor.
     *
     * @param string $type algo type.
     * @param int $costCpu cpu complexity of computed hash.
     * @param int $costMemory memory complexity of computed hash.
     * @param int $costParallel parallelization of computed hash.
     * @param int $length length used to compute hash.
     */
    public function __construct(
        public string $type,
        public int $costCpu,
        public int $costMemory,
        public int $costParallel,
        public int $length
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'type' => "scrypt",
            'costCpu' => 8,
            'costMemory' => 14,
            'costParallel' => 1,
            'length' => 64,
        ];

        return new static(
            type: $data['type'],
            costCpu: $data['costCpu'],
            costMemory: $data['costMemory'],
            costParallel: $data['costParallel'],
            length: $data['length']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'type' => static::serializeValue($this->type),
            'costCpu' => static::serializeValue($this->costCpu),
            'costMemory' => static::serializeValue($this->costMemory),
            'costParallel' => static::serializeValue($this->costParallel),
            'length' => static::serializeValue($this->length)
        ];
    }
}
