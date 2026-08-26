<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Invalidation
 *
 * @phpstan-consistent-constructor
 */
readonly class ProxyInvalidation
{
    use ArraySerializable;

    /**
     * ProxyInvalidation constructor.
     *
     * @param string $domain domain name.
     * @param string $type invalidation type. possible values are "tag", "path", or "all".
     * @param string $reference invalidated reference. depending on type this is a cache tag name, a url path, or empty when type is all.
     * @param string $status invalidation status.
     */
    public function __construct(
        public string $domain,
        public string $type,
        public string $reference,
        public string $status
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('domain', $data)) {
            throw new \InvalidArgumentException('Missing required field "domain" for ' . static::class . '.');
        }
        if (!array_key_exists('type', $data)) {
            throw new \InvalidArgumentException('Missing required field "type" for ' . static::class . '.');
        }
        if (!array_key_exists('reference', $data)) {
            throw new \InvalidArgumentException('Missing required field "reference" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            domain: $data['domain'],
            type: $data['type'],
            reference: $data['reference'],
            status: $data['status']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'domain' => static::serializeValue($this->domain),
            'type' => static::serializeValue($this->type),
            'reference' => static::serializeValue($this->reference),
            'status' => static::serializeValue($this->status)
        ];
    }
}
