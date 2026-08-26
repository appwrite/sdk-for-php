<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Addon
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingPlanAddon
{
    use ArraySerializable;

    /**
     * BillingPlanAddon constructor.
     *
     * @param BillingPlanAddonDetails|null $seats addon seats
     * @param BillingPlanAddonDetails|null $projects addon projects
     */
    public function __construct(
        public ?BillingPlanAddonDetails $seats = null,
        public ?BillingPlanAddonDetails $projects = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        return new static(
            seats: array_key_exists('seats', $data) ? static::hydrateTypedValue(BillingPlanAddonDetails::class, $data['seats'], true) : null,
            projects: array_key_exists('projects', $data) ? static::hydrateTypedValue(BillingPlanAddonDetails::class, $data['projects'], true) : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'seats' => static::serializeValue($this->seats),
            'projects' => static::serializeValue($this->projects)
        ];
    }
}
