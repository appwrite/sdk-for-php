<?php

namespace Appwrite\Models;

/**
 * Addon
 */
readonly class BillingPlanAddon
{
    use ArraySerializable;

    /**
     * BillingPlanAddon constructor.
     *
     * @param BillingPlanAddonDetails $seats addon seats
     * @param BillingPlanAddonDetails $projects addon projects
     */
    public function __construct(
        public BillingPlanAddonDetails $seats,
        public BillingPlanAddonDetails $projects
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('seats', $data)) {
            throw new \InvalidArgumentException('Missing required field "seats" for ' . static::class . '.');
        }
        if (!array_key_exists('projects', $data)) {
            throw new \InvalidArgumentException('Missing required field "projects" for ' . static::class . '.');
        }

        return new static(
            seats: static::hydrateTypedValue(BillingPlanAddonDetails::class, $data['seats']),
            projects: static::hydrateTypedValue(BillingPlanAddonDetails::class, $data['projects'])
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'seats' => static::serializeValue($this->seats),
            'projects' => static::serializeValue($this->projects)
        ];

        return $result;
    }
}
