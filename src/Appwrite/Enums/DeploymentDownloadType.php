<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DeploymentDownloadType implements JsonSerializable
{
    private static DeploymentDownloadType $SOURCE;
    private static DeploymentDownloadType $OUTPUT;

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

    public static function SOURCE(): DeploymentDownloadType
    {
        if (!isset(self::$SOURCE)) {
            self::$SOURCE = new DeploymentDownloadType('source');
        }
        return self::$SOURCE;
    }
    public static function OUTPUT(): DeploymentDownloadType
    {
        if (!isset(self::$OUTPUT)) {
            self::$OUTPUT = new DeploymentDownloadType('output');
        }
        return self::$OUTPUT;
    }
}