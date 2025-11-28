<?php

namespace Appwrite\Enums;

use JsonSerializable;

class TemplateReferenceType implements JsonSerializable
{
    private static TemplateReferenceType $BRANCH;
    private static TemplateReferenceType $COMMIT;
    private static TemplateReferenceType $TAG;

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

    public static function BRANCH(): TemplateReferenceType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new TemplateReferenceType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): TemplateReferenceType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new TemplateReferenceType('commit');
        }
        return self::$COMMIT;
    }
    public static function TAG(): TemplateReferenceType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new TemplateReferenceType('tag');
        }
        return self::$TAG;
    }
}