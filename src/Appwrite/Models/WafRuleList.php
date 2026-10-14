<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * WAF rule list
 *
 * @phpstan-consistent-constructor
 */
readonly class WafRuleList
{
    use ArraySerializable;

    /**
     * WafRuleList constructor.
     *
     * @param int $total total number of rules that matched your query.
     * @param array $rules list of rules.
     */
    public function __construct(
        public int $total,
        public array $rules
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'total' => 0,
            'rules' => [],
        ];

        return new static(
            total: $data['total'],
            rules: $data['rules']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'total' => static::serializeValue($this->total),
            'rules' => static::serializeValue($this->rules)
        ];
    }
}
