<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Sessions List
 *
 * @phpstan-consistent-constructor
 */
readonly class SessionList
{
    use ArraySerializable;

    /**
     * SessionList constructor.
     *
     * @param int $total total number of sessions that matched your query.
     * @param list<Session> $sessions list of sessions.
     */
    public function __construct(
        public int $total,
        public array $sessions
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'sessions' => [],
        ];

        return new static(
            total: $data['total'],
            sessions: is_array($data['sessions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Session::class, $item),
                    $data['sessions']
                )
                : $data['sessions']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'sessions' => static::serializeValue($this->sessions)
        ];
    }
}
