<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProxyRuleStatus implements JsonSerializable, Stringable
{
    private static ProxyRuleStatus $UNVERIFIED;
    private static ProxyRuleStatus $VERIFYING;
    private static ProxyRuleStatus $VERIFIED;

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

    public static function UNVERIFIED(): ProxyRuleStatus
    {
        self::$UNVERIFIED ??= new ProxyRuleStatus('unverified');

        return self::$UNVERIFIED;
    }
    public static function VERIFYING(): ProxyRuleStatus
    {
        self::$VERIFYING ??= new ProxyRuleStatus('verifying');

        return self::$VERIFYING;
    }
    public static function VERIFIED(): ProxyRuleStatus
    {
        self::$VERIFIED ??= new ProxyRuleStatus('verified');

        return self::$VERIFIED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'unverified' => self::UNVERIFIED(),
            'verifying' => self::VERIFYING(),
            'verified' => self::VERIFIED(),
            default => throw new \InvalidArgumentException('Unknown ProxyRuleStatus value: ' . $value),
        };
    }
}
