<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorMethod implements JsonSerializable, Stringable
{
    private static MonitorMethod $GET;
    private static MonitorMethod $HEAD;
    private static MonitorMethod $POST;
    private static MonitorMethod $PUT;
    private static MonitorMethod $PATCH;
    private static MonitorMethod $DELETE;
    private static MonitorMethod $OPTIONS;

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

    public static function GET(): MonitorMethod
    {
        self::$GET ??= new MonitorMethod('GET');

        return self::$GET;
    }
    public static function HEAD(): MonitorMethod
    {
        self::$HEAD ??= new MonitorMethod('HEAD');

        return self::$HEAD;
    }
    public static function POST(): MonitorMethod
    {
        self::$POST ??= new MonitorMethod('POST');

        return self::$POST;
    }
    public static function PUT(): MonitorMethod
    {
        self::$PUT ??= new MonitorMethod('PUT');

        return self::$PUT;
    }
    public static function PATCH(): MonitorMethod
    {
        self::$PATCH ??= new MonitorMethod('PATCH');

        return self::$PATCH;
    }
    public static function DELETE(): MonitorMethod
    {
        self::$DELETE ??= new MonitorMethod('DELETE');

        return self::$DELETE;
    }
    public static function OPTIONS(): MonitorMethod
    {
        self::$OPTIONS ??= new MonitorMethod('OPTIONS');

        return self::$OPTIONS;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'GET' => self::GET(),
            'HEAD' => self::HEAD(),
            'POST' => self::POST(),
            'PUT' => self::PUT(),
            'PATCH' => self::PATCH(),
            'DELETE' => self::DELETE(),
            'OPTIONS' => self::OPTIONS(),
            default => throw new \InvalidArgumentException('Unknown MonitorMethod value: ' . $value),
        };
    }
}
