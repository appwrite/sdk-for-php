<?php

namespace Appwrite\Models;

/**
 * Webhooks List
 */
readonly class WebhookList
{
    use ArraySerializable;

    /**
     * WebhookList constructor.
     *
     * @param int $total total number of webhooks that matched your query.
     * @param list<Webhook> $webhooks list of webhooks.
     */
    public function __construct(
        public int $total,
        public array $webhooks
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
        if (!array_key_exists('webhooks', $data)) {
            throw new \InvalidArgumentException('Missing required field "webhooks" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            webhooks: is_array($data['webhooks'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Webhook::class, $item),
                    $data['webhooks']
                )
                : $data['webhooks']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'webhooks' => static::serializeValue($this->webhooks)
        ];

        return $result;
    }
}
