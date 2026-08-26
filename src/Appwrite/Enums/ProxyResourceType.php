<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProxyResourceType implements JsonSerializable, Stringable
{
    private static ProxyResourceType $SITE;
    private static ProxyResourceType $FUNCTIONMODEL;

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

    public static function SITE(): ProxyResourceType
    {
        if (!isset(self::$SITE)) {
            self::$SITE = new ProxyResourceType('site');
        }
        return self::$SITE;
    }
    public static function FUNCTIONMODEL(): ProxyResourceType
    {
        if (!isset(self::$FUNCTIONMODEL)) {
            self::$FUNCTIONMODEL = new ProxyResourceType('function');
        }
        return self::$FUNCTIONMODEL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'site' => self::SITE(),
            'function' => self::FUNCTIONMODEL(),
            default => throw new \InvalidArgumentException('Unknown ProxyResourceType value: ' . $value),
        };
    }
}
