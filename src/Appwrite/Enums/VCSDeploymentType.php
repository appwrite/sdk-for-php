<?php

namespace Appwrite\Enums;

use JsonSerializable;

class VCSDeploymentType implements JsonSerializable
{
    private static VCSDeploymentType $BRANCH;
    private static VCSDeploymentType $COMMIT;
    private static VCSDeploymentType $TAG;

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

    public static function BRANCH(): VCSDeploymentType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new VCSDeploymentType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): VCSDeploymentType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new VCSDeploymentType('commit');
        }
        return self::$COMMIT;
    }
    public static function TAG(): VCSDeploymentType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new VCSDeploymentType('tag');
        }
        return self::$TAG;
    }
}