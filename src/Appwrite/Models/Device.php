<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Device
 *
 * @phpstan-consistent-constructor
 */
readonly class Device
{
    use ArraySerializable;

    /**
     * Device constructor.
     *
     * @param string $id device id.
     * @param string $createdAt device creation date in iso 8601 format.
     * @param string $updatedAt device update date in iso 8601 format.
     * @param string $expire device expiration date in iso 8601 format.
     * @param string $activeSessionId id of the session that is currently active on the device. empty when no session is active, for example right after the active session was deleted.
     * @param list<Session> $sessions list of sessions the device holds. switch between them to change the active account.
     * @param string $secret secret used to authenticate the device. carried by the device cookie; only included in the response if the request was made with an api key.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $expire,
        public string $activeSessionId,
        public array $sessions,
        public string $secret
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'expire' => "",
            'activeSessionId' => "",
            'sessions' => [],
            'secret' => "",
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            expire: $data['expire'],
            activeSessionId: $data['activeSessionId'],
            sessions: is_array($data['sessions'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(Session::class, $item),
                    $data['sessions']
                )
                : $data['sessions'],
            secret: $data['secret']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'expire' => static::serializeValue($this->expire),
            'activeSessionId' => static::serializeValue($this->activeSessionId),
            'sessions' => static::serializeValue($this->sessions),
            'secret' => static::serializeValue($this->secret)
        ];
    }
}
