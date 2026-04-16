<?php

namespace Appwrite\Models;

/**
 * Logs List
 */
readonly class LogList
{
    use ArraySerializable;

    /**
     * LogList constructor.
     *
     * @param int $total total number of logs that matched your query.
     * @param list<Log> $logs list of logs.
     */
    public function __construct(
        public int $total,
        public array $logs
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('logs', $data)) {
            throw new \InvalidArgumentException('Missing required field "logs" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            logs: is_array($data['logs'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Log::class, $item),
                    $data['logs']
                )
                : $data['logs']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'logs' => static::serializeValue($this->logs)
        ];

        return $result;
    }
}
