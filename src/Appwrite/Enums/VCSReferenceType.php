<?php

namespace Appwrite\Enums;

use JsonSerializable;

class VCSReferenceType implements JsonSerializable
{
    private static VCSReferenceType $BRANCH;
    private static VCSReferenceType $COMMIT;

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

    public static function BRANCH(): VCSReferenceType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new VCSReferenceType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): VCSReferenceType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new VCSReferenceType('commit');
        }
        return self::$COMMIT;
    }
}