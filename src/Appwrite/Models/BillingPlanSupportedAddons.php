<?php

namespace Appwrite\Models;

/**
 * BillingPlanSupportedAddons
 */
readonly class BillingPlanSupportedAddons
{
    use ArraySerializable;

    /**
     * BillingPlanSupportedAddons constructor.
     *
     * @param bool $baa whether the plan supports baa (business associate agreement) addon
     * @param bool $premiumGeoDB whether the plan supports premium geo db addon (project-level)
     * @param bool $premiumGeoDBOrg whether the plan supports premium geo db addon (organization-level)
     */
    public function __construct(
        public bool $baa,
        public bool $premiumGeoDB,
        public bool $premiumGeoDBOrg
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('baa', $data)) {
            throw new \InvalidArgumentException('Missing required field "baa" for ' . static::class . '.');
        }
        if (!array_key_exists('premiumGeoDB', $data)) {
            throw new \InvalidArgumentException('Missing required field "premiumGeoDB" for ' . static::class . '.');
        }
        if (!array_key_exists('premiumGeoDBOrg', $data)) {
            throw new \InvalidArgumentException('Missing required field "premiumGeoDBOrg" for ' . static::class . '.');
        }

        return new static(
            baa: $data['baa'],
            premiumGeoDB: $data['premiumGeoDB'],
            premiumGeoDBOrg: $data['premiumGeoDBOrg']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'baa' => static::serializeValue($this->baa),
            'premiumGeoDB' => static::serializeValue($this->premiumGeoDB),
            'premiumGeoDBOrg' => static::serializeValue($this->premiumGeoDBOrg)
        ];

        return $result;
    }
}
