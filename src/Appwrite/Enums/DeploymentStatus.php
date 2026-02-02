<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DeploymentStatus implements JsonSerializable
{
    private static DeploymentStatus $WAITING;
    private static DeploymentStatus $PROCESSING;
    private static DeploymentStatus $BUILDING;
    private static DeploymentStatus $READY;
    private static DeploymentStatus $CANCELED;
    private static DeploymentStatus $FAILED;

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

    public static function WAITING(): DeploymentStatus
    {
        if (!isset(self::$WAITING)) {
            self::$WAITING = new DeploymentStatus('waiting');
        }
        return self::$WAITING;
    }
    public static function PROCESSING(): DeploymentStatus
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new DeploymentStatus('processing');
        }
        return self::$PROCESSING;
    }
    public static function BUILDING(): DeploymentStatus
    {
        if (!isset(self::$BUILDING)) {
            self::$BUILDING = new DeploymentStatus('building');
        }
        return self::$BUILDING;
    }
    public static function READY(): DeploymentStatus
    {
        if (!isset(self::$READY)) {
            self::$READY = new DeploymentStatus('ready');
        }
        return self::$READY;
    }
    public static function CANCELED(): DeploymentStatus
    {
        if (!isset(self::$CANCELED)) {
            self::$CANCELED = new DeploymentStatus('canceled');
        }
        return self::$CANCELED;
    }
    public static function FAILED(): DeploymentStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new DeploymentStatus('failed');
        }
        return self::$FAILED;
    }
}