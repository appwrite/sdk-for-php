<?php

declare(strict_types=1);

namespace Appwrite\Models;

use Appwrite\Enums\VideoOutput;

/**
 * Video codec
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoCodec
{
    use ArraySerializable;

    /**
     * VideoCodec constructor.
     *
     * @param string $id codec id.
     * @param string $name codec display name.
     * @param list<VideoOutput> $outputs streaming output formats this codec may be packaged into.
     */
    public function __construct(
        public string $id,
        public string $name,
        public array $outputs
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            'name' => "",
            'outputs' => [],
        ];

        return new static(
            id: $data['$id'],
            name: $data['name'],
            outputs: is_array($data['outputs'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VideoOutput::class, $item),
                    $data['outputs']
                )
                : [static::hydrateTypedValue(VideoOutput::class, $data['outputs'])]
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            'name' => static::serializeValue($this->name),
            'outputs' => static::serializeValue($this->outputs)
        ];
    }
}
