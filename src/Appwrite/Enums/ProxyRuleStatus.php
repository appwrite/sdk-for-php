<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProxyRuleStatus implements JsonSerializable
{
    private static ProxyRuleStatus $UNVERIFIED;
    private static ProxyRuleStatus $VERIFYING;
    private static ProxyRuleStatus $VERIFIED;

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

    public static function UNVERIFIED(): ProxyRuleStatus
    {
        if (!isset(self::$UNVERIFIED)) {
            self::$UNVERIFIED = new ProxyRuleStatus('unverified');
        }
        return self::$UNVERIFIED;
    }
    public static function VERIFYING(): ProxyRuleStatus
    {
        if (!isset(self::$VERIFYING)) {
            self::$VERIFYING = new ProxyRuleStatus('verifying');
        }
        return self::$VERIFYING;
    }
    public static function VERIFIED(): ProxyRuleStatus
    {
        if (!isset(self::$VERIFIED)) {
            self::$VERIFIED = new ProxyRuleStatus('verified');
        }
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
