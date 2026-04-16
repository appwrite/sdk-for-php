<?php

namespace Appwrite\Models;

use Appwrite\Enums\HealthAntivirusStatus;

/**
 * Health Antivirus
 */
readonly class HealthAntivirus
{
    use ArraySerializable;

    /**
     * HealthAntivirus constructor.
     *
     * @param string $version antivirus version.
     * @param HealthAntivirusStatus $status antivirus status. possible values are: `disabled`, `offline`, `online`
     */
    public function __construct(
        public string $version,
        public HealthAntivirusStatus $status
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('version', $data)) {
            throw new \InvalidArgumentException('Missing required field "version" for ' . static::class . '.');
        }
        if (!array_key_exists('status', $data)) {
            throw new \InvalidArgumentException('Missing required field "status" for ' . static::class . '.');
        }

        return new static(
            version: $data['version'],
            status: static::hydrateTypedValue(HealthAntivirusStatus::class, $data['status'])
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'version' => static::serializeValue($this->version),
            'status' => static::serializeValue($this->status)
        ];

        return $result;
    }
}
