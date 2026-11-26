<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Escalation
 *
 * @phpstan-consistent-constructor
 */
readonly class Escalation
{
    use ArraySerializable;

    /**
     * Escalation constructor.
     *
     * @param string $id escalation id.
     * @param string $createdAt escalation creation date in iso 8601 format.
     * @param string $updatedAt escalation update date in iso 8601 format.
     * @param string $name escalation name.
     * @param list<EscalationStep> $steps who is notified of a firing alert, in order, until a member acknowledges it.
     * @param int $repeat how many more times the steps run from the first, a monitor's cooldown after the last step, while nobody has acknowledged the alert.
     */
    public function __construct(
        public string $id,
        public string $createdAt,
        public string $updatedAt,
        public string $name,
        public array $steps,
        public int $repeat
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            '$id' => "",
            '$createdAt' => "",
            '$updatedAt' => "",
            'name' => "",
            'steps' => [],
            'repeat' => 0,
        ];

        return new static(
            id: $data['$id'],
            createdAt: $data['$createdAt'],
            updatedAt: $data['$updatedAt'],
            name: $data['name'],
            steps: is_array($data['steps'])
                ? array_map(
                    static fn (mixed $item): mixed => static::hydrateTypedValue(EscalationStep::class, $item),
                    $data['steps']
                )
                : $data['steps'],
            repeat: $data['repeat']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            '$id' => static::serializeValue($this->id),
            '$createdAt' => static::serializeValue($this->createdAt),
            '$updatedAt' => static::serializeValue($this->updatedAt),
            'name' => static::serializeValue($this->name),
            'steps' => static::serializeValue($this->steps),
            'repeat' => static::serializeValue($this->repeat)
        ];
    }
}
