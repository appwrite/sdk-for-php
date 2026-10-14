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
     * @param AdditionalResource|null $bandwidth bandwidth additional resources
     * @param AdditionalResource|null $executions executions additional resources
     * @param AdditionalResource|null $member member additional resources
     * @param AdditionalResource|null $realtime realtime additional resources
     * @param AdditionalResource|null $realtimeMessages realtime messages additional resources
     * @param AdditionalResource|null $realtimeBandwidth realtime bandwidth additional resources
     * @param AdditionalResource|null $storage storage additional resources
     * @param AdditionalResource|null $users user additional resources
     * @param AdditionalResource|null $gBHours gbhour additional resources
     * @param AdditionalResource|null $imageTransformations image transformation additional resources
     * @param AdditionalResource|null $credits credits additional resources
     */
    public function __construct(
        public ?AdditionalResource $bandwidth = null,
        public ?AdditionalResource $executions = null,
        public ?AdditionalResource $member = null,
        public ?AdditionalResource $realtime = null,
        public ?AdditionalResource $realtimeMessages = null,
        public ?AdditionalResource $realtimeBandwidth = null,
        public ?AdditionalResource $storage = null,
        public ?AdditionalResource $users = null,
        public ?AdditionalResource $gBHours = null,
        public ?AdditionalResource $imageTransformations = null,
        public ?AdditionalResource $credits = null
    ) {
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {

        return new static(
            bandwidth: array_key_exists('bandwidth', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['bandwidth'], true) : null,
            executions: array_key_exists('executions', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['executions'], true) : null,
            member: array_key_exists('member', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['member'], true) : null,
            realtime: array_key_exists('realtime', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['realtime'], true) : null,
            realtimeMessages: array_key_exists('realtimeMessages', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['realtimeMessages'], true) : null,
            realtimeBandwidth: array_key_exists('realtimeBandwidth', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['realtimeBandwidth'], true) : null,
            storage: array_key_exists('storage', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['storage'], true) : null,
            users: array_key_exists('users', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['users'], true) : null,
            gBHours: array_key_exists('GBHours', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['GBHours'], true) : null,
            imageTransformations: array_key_exists('imageTransformations', $data) ? static::hydrateTypedValue(AdditionalResource::class, $data['imageTransformations'], true) : null,
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
