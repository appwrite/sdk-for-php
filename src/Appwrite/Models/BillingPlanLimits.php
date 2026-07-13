<?php

namespace Appwrite\Models;

/**
 * PlanLimits
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
            credits: array_key_exists('credits', $data) ? $data['credits'] : null,
            dailyCredits: array_key_exists('dailyCredits', $data) ? $data['dailyCredits'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'credits' => static::serializeValue($this->credits),
            'dailyCredits' => static::serializeValue($this->dailyCredits)
        ];

        return $result;
    }
}
