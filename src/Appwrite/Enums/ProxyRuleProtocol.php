<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProxyRuleProtocol implements JsonSerializable, Stringable
{
    private static ProxyRuleProtocol $HTTP;
    private static ProxyRuleProtocol $SMTP;

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

    public static function HTTP(): ProxyRuleProtocol
    {
        self::$HTTP ??= new ProxyRuleProtocol('http');

        return self::$HTTP;
    }
    public static function SMTP(): ProxyRuleProtocol
    {
        self::$SMTP ??= new ProxyRuleProtocol('smtp');

        return self::$SMTP;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'http' => self::HTTP(),
            'smtp' => self::SMTP(),
            default => throw new \InvalidArgumentException('Unknown ProxyRuleProtocol value: ' . $value),
        };
    }
}
