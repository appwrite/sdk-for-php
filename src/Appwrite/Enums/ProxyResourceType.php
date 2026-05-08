<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProxyResourceType implements JsonSerializable
{
    private static ProxyResourceType $SITE;
    private static ProxyResourceType $FUNCTIONMODEL;

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
