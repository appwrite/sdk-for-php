<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AlertComparator implements JsonSerializable, Stringable
{
    private static AlertComparator $GREATERTHAN;
    private static AlertComparator $GREATERTHANEQUAL;
    private static AlertComparator $LESSTHAN;
    private static AlertComparator $LESSTHANEQUAL;

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

    public static function GREATERTHAN(): AlertComparator
    {
        self::$GREATERTHAN ??= new AlertComparator('greaterThan');

        return self::$GREATERTHAN;
    }
    public static function GREATERTHANEQUAL(): AlertComparator
    {
        self::$GREATERTHANEQUAL ??= new AlertComparator('greaterThanEqual');

        return self::$GREATERTHANEQUAL;
    }
    public static function LESSTHAN(): AlertComparator
    {
        self::$LESSTHAN ??= new AlertComparator('lessThan');

        return self::$LESSTHAN;
    }
    public static function LESSTHANEQUAL(): AlertComparator
    {
        self::$LESSTHANEQUAL ??= new AlertComparator('lessThanEqual');

        return self::$LESSTHANEQUAL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'greaterThan' => self::GREATERTHAN(),
            'greaterThanEqual' => self::GREATERTHANEQUAL(),
            'lessThan' => self::LESSTHAN(),
            'lessThanEqual' => self::LESSTHANEQUAL(),
            default => throw new \InvalidArgumentException('Unknown AlertComparator value: ' . $value),
        };
    }
}
