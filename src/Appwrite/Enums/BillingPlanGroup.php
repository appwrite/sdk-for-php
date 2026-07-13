<?php

namespace Appwrite\Enums;

use JsonSerializable;

class BillingPlanGroup implements JsonSerializable
{
    private static BillingPlanGroup $STARTER;
    private static BillingPlanGroup $PRO;
    private static BillingPlanGroup $SCALE;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
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
