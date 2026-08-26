<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * PlanLimits
 *
 * @phpstan-consistent-constructor
 */
readonly class BillingPlanLimits
{
    use ArraySerializable;

    /**
     * BillingPlanLimits constructor.
     *
     * @param int|null $credits credits limit per billing cycle
     * @param int|null $dailyCredits daily credits limit (if applicable)
     */
    public function __construct(
        public ?int $credits = null,
        public ?int $dailyCredits = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        return new static(
            credits: $data['credits'] ?? null,
            dailyCredits: $data['dailyCredits'] ?? null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'credits' => static::serializeValue($this->credits),
            'dailyCredits' => static::serializeValue($this->dailyCredits)
        ];
    }
}
