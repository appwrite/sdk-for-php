<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProxyRuleDeploymentResourceType implements JsonSerializable, Stringable
{
    private static ProxyRuleDeploymentResourceType $FUNCTION;
    private static ProxyRuleDeploymentResourceType $SITE;
    private static ProxyRuleDeploymentResourceType $DEDICATEDDATABASE;

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

    public static function FUNCTION(): ProxyRuleDeploymentResourceType
    {
        self::$FUNCTION ??= new ProxyRuleDeploymentResourceType('function');

        return self::$FUNCTION;
    }
    public static function SITE(): ProxyRuleDeploymentResourceType
    {
        self::$SITE ??= new ProxyRuleDeploymentResourceType('site');

        return self::$SITE;
    }
    public static function DEDICATEDDATABASE(): ProxyRuleDeploymentResourceType
    {
        self::$DEDICATEDDATABASE ??= new ProxyRuleDeploymentResourceType('dedicatedDatabase');

        return self::$DEDICATEDDATABASE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'function' => self::FUNCTION(),
            'site' => self::SITE(),
            'dedicatedDatabase' => self::DEDICATEDDATABASE(),
            default => throw new \InvalidArgumentException('Unknown ProxyRuleDeploymentResourceType value: ' . $value),
        };
    }
}
