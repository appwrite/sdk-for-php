<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * Escalation Step
 *
 * @phpstan-consistent-constructor
 */
readonly class EscalationStep
{
    use ArraySerializable;

    /**
     * EscalationStep constructor.
     *
     * @param int $delay seconds to wait before notifying this step: after the alert fires for the first step, after the previous step for the others.
     * @param array $roles organization roles whose confirmed members this step notifies.
     * @param array $userIds ids of the organization's members this step notifies, whatever their role.
     */
    public function __construct(
        public int $delay,
        public array $roles,
        public array $userIds
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $data += [
            'delay' => 0,
            'roles' => [],
            'userIds' => [],
        ];

        return new static(
            delay: $data['delay'],
            roles: $data['roles'],
            userIds: $data['userIds']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'delay' => static::serializeValue($this->delay),
            'roles' => static::serializeValue($this->roles),
            'userIds' => static::serializeValue($this->userIds)
        ];
    }
}
