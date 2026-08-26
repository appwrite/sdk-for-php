<?php

declare(strict_types=1);

namespace Appwrite\Models;

/**
 * usageBillingPlan
 *
 * @phpstan-consistent-constructor
 */
readonly class UsageBillingPlan
{
    use ArraySerializable;

    /**
     * UsageBillingPlan constructor.
     *
     * @param AdditionalResource $bandwidth bandwidth additional resources
     * @param AdditionalResource $executions executions additional resources
     * @param AdditionalResource $realtime realtime additional resources
     * @param AdditionalResource $realtimeMessages realtime messages additional resources
     * @param AdditionalResource $storage storage additional resources
     * @param AdditionalResource $users user additional resources
     * @param AdditionalResource $gBHours gbhour additional resources
     * @param AdditionalResource $imageTransformations image transformation additional resources
     * @param AdditionalResource|null $member member additional resources
     * @param AdditionalResource|null $realtimeBandwidth realtime bandwidth additional resources
     * @param AdditionalResource|null $credits credits additional resources
     */
    public function __construct(
        public AdditionalResource $bandwidth,
        public AdditionalResource $executions,
        public AdditionalResource $realtime,
        public AdditionalResource $realtimeMessages,
        public AdditionalResource $storage,
        public AdditionalResource $users,
        public AdditionalResource $gBHours,
        public AdditionalResource $imageTransformations,
        public ?AdditionalResource $member = null,
        public ?AdditionalResource $realtimeBandwidth = null,
        public ?AdditionalResource $credits = null
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
        if (!array_key_exists('executions', $data)) {
            throw new \InvalidArgumentException('Missing required field "executions" for ' . static::class . '.');
        }
        if (!array_key_exists('realtime', $data)) {
            throw new \InvalidArgumentException('Missing required field "realtime" for ' . static::class . '.');
        }
        if (!array_key_exists('realtimeMessages', $data)) {
            throw new \InvalidArgumentException('Missing required field "realtimeMessages" for ' . static::class . '.');
        }
        if (!array_key_exists('storage', $data)) {
            throw new \InvalidArgumentException('Missing required field "storage" for ' . static::class . '.');
        }
        if (!array_key_exists('users', $data)) {
            throw new \InvalidArgumentException('Missing required field "users" for ' . static::class . '.');
        }
        if (!array_key_exists('GBHours', $data)) {
            throw new \InvalidArgumentException('Missing required field "GBHours" for ' . static::class . '.');
        }
        if (!array_key_exists('imageTransformations', $data)) {
            throw new \InvalidArgumentException('Missing required field "imageTransformations" for ' . static::class . '.');
        }

        return new static(
            bandwidth: static::hydrateTypedValue(AdditionalResource::class, $data['bandwidth']),
            executions: static::hydrateTypedValue(AdditionalResource::class, $data['executions']),
            realtime: static::hydrateTypedValue(AdditionalResource::class, $data['realtime']),
            realtimeMessages: static::hydrateTypedValue(AdditionalResource::class, $data['realtimeMessages']),
            storage: static::hydrateTypedValue(AdditionalResource::class, $data['storage']),
            users: static::hydrateTypedValue(AdditionalResource::class, $data['users']),
            gBHours: static::hydrateTypedValue(AdditionalResource::class, $data['GBHours']),
            imageTransformations: static::hydrateTypedValue(AdditionalResource::class, $data['imageTransformations']),
            member: array_key_exists('member', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['member'], true) : null,
            realtimeBandwidth: array_key_exists('realtimeBandwidth', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['realtimeBandwidth'], true) : null,
            credits: array_key_exists('credits', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['credits'], true) : null
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'bandwidth' => static::serializeValue($this->bandwidth),
            'executions' => static::serializeValue($this->executions),
            'member' => static::serializeValue($this->member),
            'realtime' => static::serializeValue($this->realtime),
            'realtimeMessages' => static::serializeValue($this->realtimeMessages),
            'realtimeBandwidth' => static::serializeValue($this->realtimeBandwidth),
            'storage' => static::serializeValue($this->storage),
            'users' => static::serializeValue($this->users),
            'GBHours' => static::serializeValue($this->gBHours),
            'imageTransformations' => static::serializeValue($this->imageTransformations),
            'credits' => static::serializeValue($this->credits)
        ];
    }
}
