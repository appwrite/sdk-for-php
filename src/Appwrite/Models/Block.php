<?php

namespace Appwrite\Models;

/**
 * Block
 */
readonly class Block
{
    use ArraySerializable;

    /**
     * Block constructor.
     *
     * @param string $createdAt block creation date in iso 8601 format.
     * @param string $resourceType resource type that is blocked
     * @param string $resourceId resource identifier that is blocked
     * @param string $projectName name of the project this block applies to.
     * @param string $region region of the project this block applies to.
     * @param string $organizationName name of the organization that owns the project.
     * @param string $organizationId id of the organization that owns the project.
     * @param string $billingPlan billing plan of the organization that owns the project.
     * @param string|null $reason reason for the block. can be null if no reason was provided.
     * @param string|null $expiredAt block expiration date in iso 8601 format. can be null if the block does not expire.
     */
    public function __construct(
        public string $createdAt,
        public string $resourceType,
        public string $resourceId,
        public string $projectName,
        public string $region,
        public string $organizationName,
        public string $organizationId,
        public string $billingPlan,
        public ?string $reason = null,
        public ?string $expiredAt = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('$createdAt', $data)) {
            throw new \InvalidArgumentException('Missing required field "$createdAt" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceType', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceType" for ' . static::class . '.');
        }
        if (!array_key_exists('resourceId', $data)) {
            throw new \InvalidArgumentException('Missing required field "resourceId" for ' . static::class . '.');
        }
        if (!array_key_exists('projectName', $data)) {
            throw new \InvalidArgumentException('Missing required field "projectName" for ' . static::class . '.');
        }
        if (!array_key_exists('region', $data)) {
            throw new \InvalidArgumentException('Missing required field "region" for ' . static::class . '.');
        }
        if (!array_key_exists('organizationName', $data)) {
            throw new \InvalidArgumentException('Missing required field "organizationName" for ' . static::class . '.');
        }
        if (!array_key_exists('organizationId', $data)) {
            throw new \InvalidArgumentException('Missing required field "organizationId" for ' . static::class . '.');
        }
        if (!array_key_exists('billingPlan', $data)) {
            throw new \InvalidArgumentException('Missing required field "billingPlan" for ' . static::class . '.');
        }

        return new static(
            createdAt: $data['$createdAt'],
            resourceType: $data['resourceType'],
            resourceId: $data['resourceId'],
            projectName: $data['projectName'],
            region: $data['region'],
            organizationName: $data['organizationName'],
            organizationId: $data['organizationId'],
            billingPlan: $data['billingPlan'],
            reason: array_key_exists('reason', $data) ? $data['reason'] : null,
            expiredAt: array_key_exists('expiredAt', $data) ? $data['expiredAt'] : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            '$createdAt' => static::serializeValue($this->createdAt),
            'resourceType' => static::serializeValue($this->resourceType),
            'resourceId' => static::serializeValue($this->resourceId),
            'reason' => static::serializeValue($this->reason),
            'expiredAt' => static::serializeValue($this->expiredAt),
            'projectName' => static::serializeValue($this->projectName),
            'region' => static::serializeValue($this->region),
            'organizationName' => static::serializeValue($this->organizationName),
            'organizationId' => static::serializeValue($this->organizationId),
            'billingPlan' => static::serializeValue($this->billingPlan)
        ];

        return $result;
    }
}
