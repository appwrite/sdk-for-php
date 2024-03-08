<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ExecutionMethod implements JsonSerializable
{
    private static ExecutionMethod $GET;
    private static ExecutionMethod $POST;
    private static ExecutionMethod $PUT;
    private static ExecutionMethod $PATCH;
    private static ExecutionMethod $DELETE;
    private static ExecutionMethod $OPTIONS;

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

    public static function GET(): ExecutionMethod
    {
        if (!isset(self::$GET)) {
            self::$GET = new ExecutionMethod('GET');
        }
        return self::$GET;
    }
    public static function POST(): ExecutionMethod
    {
        if (!isset(self::$POST)) {
            self::$POST = new ExecutionMethod('POST');
        }
        return self::$POST;
    }
    public static function PUT(): ExecutionMethod
    {
        if (!isset(self::$PUT)) {
            self::$PUT = new ExecutionMethod('PUT');
        }
        return self::$PUT;
    }
    public static function PATCH(): ExecutionMethod
    {
        if (!isset(self::$PATCH)) {
            self::$PATCH = new ExecutionMethod('PATCH');
        }
        return self::$PATCH;
    }
    public static function DELETE(): ExecutionMethod
    {
        if (!isset(self::$DELETE)) {
            self::$DELETE = new ExecutionMethod('DELETE');
        }
        return self::$DELETE;
    }
    public static function OPTIONS(): ExecutionMethod
    {
        if (!isset(self::$OPTIONS)) {
            self::$OPTIONS = new ExecutionMethod('OPTIONS');
        }
        return self::$OPTIONS;
    }
}