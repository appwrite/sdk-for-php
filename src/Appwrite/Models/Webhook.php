<?php

namespace Appwrite\Models;

/**
 * Webhook
 */
readonly class Webhook
{
    use ArraySerializable;

    /**
     * @var array<string, string>
     */
    private const FIELD_MAP = [
        'id' => '$id',
        'createdAt' => '$createdAt',
        'updatedAt' => '$updatedAt'
    ];

    /**
     * Webhook constructor.
     *
     * @param string $id webhook id.
     * @param string $createdAt webhook creation date in iso 8601 format.
     * @param string $updatedAt webhook update date in iso 8601 format.
     * @param string $name webhook name.
     * @param string $url webhook url endpoint.
     * @param array $events webhook trigger events.
     * @param bool $security indicated if ssl / tls certificate verification is enabled.
     * @param string $httpUser http basic authentication username.
     * @param string $httpPass http basic authentication password.
     * @param string $signatureKey signature key which can be used to validated incoming
     * @param bool $enabled indicates if this webhook is enabled.
     * @param string $logs webhook error logs from the most recent failure.
     * @param int $attempts number of consecutive failed webhook attempts.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public string $url,
        public array $events,
        public bool $security,
        public string $httpUser,
        public string $httpPass,
        public string $signatureKey,
        public bool $enabled,
        public string $logs,
        public int $attempts
    ) {
    }
}
