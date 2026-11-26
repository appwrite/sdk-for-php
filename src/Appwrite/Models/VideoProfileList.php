<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Video Profiles List
 *
 * @phpstan-consistent-constructor
 */
readonly class VideoProfileList
{
    use ArraySerializable;

    /**
     * VideoProfileList constructor.
     *
     * @param int $total total number of profiles that matched your query.
     * @param list<VideoProfile> $profiles list of profiles.
     */
    public function __construct(
        public int $total,
        public array $profiles
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'profiles' => [],
        ];

        return new static(
            total: $data['total'],
            profiles: is_array($data['profiles'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(VideoProfile::class, $item),
                    $data['profiles']
                )
                : $data['profiles']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'profiles' => static::serializeValue($this->profiles)
        ];
    }
}
