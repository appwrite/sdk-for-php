<?php

namespace Appwrite\Models;

/**
 * AlgoScrypt
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
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('costCpu', $data)) {
            throw new \InvalidArgumentException('Missing required field "costCpu" for ' . static::class . '.');
        }
        if (!array_key_exists('costMemory', $data)) {
            throw new \InvalidArgumentException('Missing required field "costMemory" for ' . static::class . '.');
        }
        if (!array_key_exists('costParallel', $data)) {
            throw new \InvalidArgumentException('Missing required field "costParallel" for ' . static::class . '.');
        }
        if (!array_key_exists('length', $data)) {
            throw new \InvalidArgumentException('Missing required field "length" for ' . static::class . '.');
        }

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
        $result = [
            'type' => static::serializeValue($this->type),
            'costCpu' => static::serializeValue($this->costCpu),
            'costMemory' => static::serializeValue($this->costMemory),
            'costParallel' => static::serializeValue($this->costParallel),
            'length' => static::serializeValue($this->length)
        ];

        return $result;
    }
}
