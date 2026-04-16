<?php

namespace Appwrite\Models;

/**
 * Webhook
 */
readonly class Webhook
{
    use ArraySerializable;

    /**
     * Webhook constructor.
     *
     * @param string $id webhook id.
     * @param string $createdAt webhook creation date in iso 8601 format.
     * @param string $updatedAt webhook update date in iso 8601 format.
     * @param string $name webhook name.
     * @param string $url webhook url endpoint.
     * @param array $events webhook trigger events.
     * @param bool $tls indicates if ssl / tls certificate verification is enabled.
     * @param string $authUsername http basic authentication username.
     * @param string $authPassword http basic authentication password.
     * @param string $secret signature key which can be used to validate incoming webhook payloads. only returned on creation and secret rotation.
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
        public bool $tls,
        public string $authUsername,
        public string $authPassword,
        public string $secret,
        public bool $enabled,
        public string $logs,
        public int $attempts
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$id', $data)) {
            throw new \InvalidArgumentException('Missing required field "$id" for ' . static::class . '.');
        }
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('$updatedAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$updatedAt" for ' . static::class . '.');
        }
        if (!array_key_exists('name', $data)) {
            throw new \InvalidArgumentException('Missing required field "name" for ' . static::class . '.');
        }
        if (!array_key_exists('url', $data)) {
            throw new \InvalidArgumentException('Missing required field "url" for ' . static::class . '.');
        }
        if (!array_key_exists('events', $data)) {
            throw new \InvalidArgumentException('Missing required field "events" for ' . static::class . '.');
        }
        if (!array_key_exists('tls', $data)) {
            throw new \InvalidArgumentException('Missing required field "tls" for ' . static::class . '.');
        }
        if (!array_key_exists('authUsername', $data)) {
            throw new \InvalidArgumentException('Missing required field "authUsername" for ' . static::class . '.');
        }
        if (!array_key_exists('authPassword', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPassword" for ' . static::class . '.');
        }
        if (!array_key_exists('secret', $data)) {
            throw new \InvalidArgumentException('Missing required field "secret" for ' . static::class . '.');
        }
        if (!array_key_exists('enabled', $data)) {
            throw new \InvalidArgumentException('Missing required field "enabled" for ' . static::class . '.');
        }
        if (!array_key_exists('logs', $data)) {
            throw new \InvalidArgumentException('Missing required field "logs" for ' . static::class . '.');
        }
        if (!array_key_exists('attempts', $data)) {
            throw new \InvalidArgumentException('Missing required field "attempts" for ' . static::class . '.');
        }

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            url: $data['url'],
            events: $data['events'],
            tls: $data['tls'],
            authUsername: $data['authUsername'],
            authPassword: $data['authPassword'],
            secret: $data['secret'],
            enabled: $data['enabled'],
            logs: $data['logs'],
            attempts: $data['attempts']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'url' => static::serializeValue($this->url),
            'events' => static::serializeValue($this->events),
            'tls' => static::serializeValue($this->tls),
            'authUsername' => static::serializeValue($this->authUsername),
            'authPassword' => static::serializeValue($this->authPassword),
            'secret' => static::serializeValue($this->secret),
            'enabled' => static::serializeValue($this->enabled),
            'logs' => static::serializeValue($this->logs),
            'attempts' => static::serializeValue($this->attempts)
        ];

        return $result;
    }
}
