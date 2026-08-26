<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class BillingPlanGroup implements JsonSerializable, Stringable
{
    private static BillingPlanGroup $STARTER;
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

    public static function STARTER(): BillingPlanGroup
    {
        if (!isset(self::$STARTER)) {
            self::$STARTER = new BillingPlanGroup('starter');
        }
        return self::$STARTER;
    }
    public static function PRO(): BillingPlanGroup
    {
        if (!isset(self::$PRO)) {
            self::$PRO = new BillingPlanGroup('pro');
        }
        return self::$PRO;
    }
    public static function SCALE(): BillingPlanGroup
    {
        if (!isset(self::$SCALE)) {
            self::$SCALE = new BillingPlanGroup('scale');
        }
        return self::$SCALE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'starter' => self::STARTER(),
            'pro' => self::PRO(),
            'scale' => self::SCALE(),
            default => throw new \InvalidArgumentException('Unknown BillingPlanGroup value: ' . $value),
        };
    }
}
