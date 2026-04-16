<?php

namespace Appwrite\Models;

/**
 * BillingLimits
 */
readonly class BillingLimits
{
    use ArraySerializable;

    /**
     * BillingLimits constructor.
     *
     * @param int $bandwidth bandwidth limit
     * @param int $storage storage limit
     * @param int $users users limit
     * @param int $executions executions limit
     * @param int $gBHours gbhours limit
     * @param int $imageTransformations image transformations limit
     * @param int $authPhone auth phone limit
     * @param int $budgetLimit budget limit percentage
     */
    public function __construct(
        public int $bandwidth,
        public int $storage,
        public int $users,
        public int $executions,
        public int $gBHours,
        public int $imageTransformations,
        public int $authPhone,
        public int $budgetLimit
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        if (!array_key_exists('bandwidth', $data)) {
            throw new \InvalidArgumentException('Missing required field "bandwidth" for ' . static::class . '.');
        }
        if (!array_key_exists('storage', $data)) {
            throw new \InvalidArgumentException('Missing required field "storage" for ' . static::class . '.');
        }
        if (!array_key_exists('users', $data)) {
            throw new \InvalidArgumentException('Missing required field "users" for ' . static::class . '.');
        }
        if (!array_key_exists('executions', $data)) {
            throw new \InvalidArgumentException('Missing required field "executions" for ' . static::class . '.');
        }
        if (!array_key_exists('GBHours', $data)) {
            throw new \InvalidArgumentException('Missing required field "GBHours" for ' . static::class . '.');
        }
        if (!array_key_exists('imageTransformations', $data)) {
            throw new \InvalidArgumentException('Missing required field "imageTransformations" for ' . static::class . '.');
        }
        if (!array_key_exists('authPhone', $data)) {
            throw new \InvalidArgumentException('Missing required field "authPhone" for ' . static::class . '.');
        }
        if (!array_key_exists('budgetLimit', $data)) {
            throw new \InvalidArgumentException('Missing required field "budgetLimit" for ' . static::class . '.');
        }

        return new static(
            bandwidth: $data['bandwidth'],
            storage: $data['storage'],
            users: $data['users'],
            executions: $data['executions'],
            gBHours: $data['GBHours'],
            imageTransformations: $data['imageTransformations'],
            authPhone: $data['authPhone'],
            budgetLimit: $data['budgetLimit']
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [
            'bandwidth' => static::serializeValue($this->bandwidth),
            'storage' => static::serializeValue($this->storage),
            'users' => static::serializeValue($this->users),
            'executions' => static::serializeValue($this->executions),
            'GBHours' => static::serializeValue($this->gBHours),
            'imageTransformations' => static::serializeValue($this->imageTransformations),
            'authPhone' => static::serializeValue($this->authPhone),
            'budgetLimit' => static::serializeValue($this->budgetLimit)
        ];

        return $result;
    }
}
