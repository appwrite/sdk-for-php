<?php

namespace Appwrite\Models;

/**
 * Rule List
 */
readonly class ProxyRuleList
{
    use ArraySerializable;

    /**
     * ProxyRuleList constructor.
     *
     * @param int $total total number of rules that matched your query.
     * @param list<ProxyRule> $rules list of rules.
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
        if (!array_key_exists('total', $data)) {
            throw new \InvalidArgumentException('Missing required field "total" for ' . static::class . '.');
        }
        if (!array_key_exists('rules', $data)) {
            throw new \InvalidArgumentException('Missing required field "rules" for ' . static::class . '.');
        }

        return new static(
            total: $data['total'],
            rules: is_array($data['rules'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(ProxyRule::class, $item),
                    $data['rules']
                )
                : $data['rules']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'total' => static::serializeValue($this->total),
            'rules' => static::serializeValue($this->rules)
        ];

        return $result;
    }
}
