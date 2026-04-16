<?php

namespace Appwrite\Models;

/**
 * AlgoArgon2
 */
readonly class AlgoArgon2
{
    use ArraySerializable;

    /**
     * AlgoArgon2 constructor.
     *
     * @param string $type algo type.
     * @param int $memoryCost memory used to compute hash.
     * @param int $timeCost amount of time consumed to compute hash
     * @param int $threads number of threads used to compute hash.
     */
    public function __construct(
        public string $type,
        public int $memoryCost,
        public int $timeCost,
        public int $threads
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
        if (!array_key_exists('memoryCost', $data)) {
            throw new \InvalidArgumentException('Missing required field "memoryCost" for ' . static::class . '.');
        }
        if (!array_key_exists('timeCost', $data)) {
            throw new \InvalidArgumentException('Missing required field "timeCost" for ' . static::class . '.');
        }
        if (!array_key_exists('threads', $data)) {
            throw new \InvalidArgumentException('Missing required field "threads" for ' . static::class . '.');
        }

        return new static(
            type: $data['type'],
            memoryCost: $data['memoryCost'],
            timeCost: $data['timeCost'],
            threads: $data['threads']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'type' => static::serializeValue($this->type),
            'memoryCost' => static::serializeValue($this->memoryCost),
            'timeCost' => static::serializeValue($this->timeCost),
            'threads' => static::serializeValue($this->threads)
        ];

        return $result;
    }
}
