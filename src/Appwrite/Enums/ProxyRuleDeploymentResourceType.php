<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProxyRuleDeploymentResourceType implements JsonSerializable
{
    private static ProxyRuleDeploymentResourceType $FUNCTION;
    private static ProxyRuleDeploymentResourceType $SITE;

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

    public static function FUNCTION(): ProxyRuleDeploymentResourceType
    {
        if (!isset(self::$FUNCTION)) {
            self::$FUNCTION = new ProxyRuleDeploymentResourceType('function');
        }
        return self::$FUNCTION;
    }
    public static function SITE(): ProxyRuleDeploymentResourceType
    {
        if (!isset(self::$SITE)) {
            self::$SITE = new ProxyRuleDeploymentResourceType('site');
        }
        return self::$SITE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'function' => self::FUNCTION(),
            'site' => self::SITE(),
            default => throw new \InvalidArgumentException('Unknown ProxyRuleDeploymentResourceType value: ' . $value),
        };
    }
}
