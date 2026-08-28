<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ExecutionMethod implements JsonSerializable, Stringable
{
    private static ExecutionMethod $GET;
    private static ExecutionMethod $POST;
    private static ExecutionMethod $PUT;
    private static ExecutionMethod $PATCH;
    private static ExecutionMethod $DELETE;
    private static ExecutionMethod $OPTIONS;
    private static ExecutionMethod $HEAD;

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

    public static function GET(): ExecutionMethod
    {
        self::$GET ??= new ExecutionMethod('GET');

        return self::$GET;
    }
    public static function POST(): ExecutionMethod
    {
        self::$POST ??= new ExecutionMethod('POST');

        return self::$POST;
    }
    public static function PUT(): ExecutionMethod
    {
        self::$PUT ??= new ExecutionMethod('PUT');

        return self::$PUT;
    }
    public static function PATCH(): ExecutionMethod
    {
        self::$PATCH ??= new ExecutionMethod('PATCH');

        return self::$PATCH;
    }
    public static function DELETE(): ExecutionMethod
    {
        self::$DELETE ??= new ExecutionMethod('DELETE');

        return self::$DELETE;
    }
    public static function OPTIONS(): ExecutionMethod
    {
        self::$OPTIONS ??= new ExecutionMethod('OPTIONS');

        return self::$OPTIONS;
    }
    public static function HEAD(): ExecutionMethod
    {
        self::$HEAD ??= new ExecutionMethod('HEAD');

        return self::$HEAD;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'GET' => self::GET(),
            'POST' => self::POST(),
            'PUT' => self::PUT(),
            'PATCH' => self::PATCH(),
            'DELETE' => self::DELETE(),
            'OPTIONS' => self::OPTIONS(),
            'HEAD' => self::HEAD(),
            default => throw new \InvalidArgumentException('Unknown ExecutionMethod value: ' . $value),
        };
    }
}
