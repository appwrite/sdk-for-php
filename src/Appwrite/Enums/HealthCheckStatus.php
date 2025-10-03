<?php

namespace Appwrite\Enums;

use JsonSerializable;

class HealthCheckStatus implements JsonSerializable
{
    private static HealthCheckStatus $PASS;
    private static HealthCheckStatus $FAIL;

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

    public static function PASS(): HealthCheckStatus
    {
        if (!isset(self::$PASS)) {
            self::$PASS = new HealthCheckStatus('pass');
        }
        return self::$PASS;
    }
    public static function FAIL(): HealthCheckStatus
    {
        if (!isset(self::$FAIL)) {
            self::$FAIL = new HealthCheckStatus('fail');
        }
        return self::$FAIL;
    }
}