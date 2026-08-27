<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ExecutionResourceType implements JsonSerializable, Stringable
{
    private static ExecutionResourceType $FUNCTIONS;
    private static ExecutionResourceType $SITES;

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

    public static function FUNCTIONS(): ExecutionResourceType
    {
        self::$FUNCTIONS ??= new ExecutionResourceType('functions');

        return self::$FUNCTIONS;
    }
    public static function SITES(): ExecutionResourceType
    {
        self::$SITES ??= new ExecutionResourceType('sites');

        return self::$SITES;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'functions' => self::FUNCTIONS(),
            'sites' => self::SITES(),
            default => throw new \InvalidArgumentException('Unknown ExecutionResourceType value: ' . $value),
        };
    }
}
