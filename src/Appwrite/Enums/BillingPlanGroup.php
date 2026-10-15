<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class BillingPlanGroup implements JsonSerializable, Stringable
{
    private static BillingPlanGroup $FREE;
    private static BillingPlanGroup $START;
    private static BillingPlanGroup $PRO;
    private static BillingPlanGroup $SCALE;

    private function __construct(private readonly string $value)
    {
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function FREE(): BillingPlanGroup
    {
        self::$FREE ??= new BillingPlanGroup('free');

        return self::$FREE;
    }
    public static function START(): BillingPlanGroup
    {
        self::$START ??= new BillingPlanGroup('start');

        return self::$START;
    }
    public static function PRO(): BillingPlanGroup
    {
        self::$PRO ??= new BillingPlanGroup('pro');

        return self::$PRO;
    }
    public static function SCALE(): BillingPlanGroup
    {
        self::$SCALE ??= new BillingPlanGroup('scale');

        return self::$SCALE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'free' => self::FREE(),
            'start' => self::START(),
            'pro' => self::PRO(),
            'scale' => self::SCALE(),
            default => throw new \InvalidArgumentException('Unknown BillingPlanGroup value: ' . $value),
        };
    }
}
