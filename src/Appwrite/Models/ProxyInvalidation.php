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
        $data += [
            'domain' => "",
            'type' => "",
            'reference' => "",
            'status' => "",
        ];

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
