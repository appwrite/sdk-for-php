<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * AlgoMD5
 *
 * @phpstan-consistent-constructor
 */
readonly class AlgoMd5
{
    use ArraySerializable;

    /**
     * AlgoMd5 constructor.
     *
     * @param string $type algo type.
     */
    public function __construct(
        public string $type
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'type' => "md5",
        ];

        return new static(
            type: $data['type']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'type' => static::serializeValue($this->type)
        ];
    }
}
