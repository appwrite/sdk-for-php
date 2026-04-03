<?php

namespace Appwrite\Models;

/**
 * Webhooks List
 */
readonly class WebhookList
{
    use ArraySerializable;

    /**
     * @var array<string, class-string>
     */
    private const ARRAY_TYPES = [
        'webhooks' => Webhook::class
    ];

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
}
