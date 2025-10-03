<?php

namespace Appwrite\Enums;

use JsonSerializable;

class HealthAntivirusStatus implements JsonSerializable
{
    private static HealthAntivirusStatus $DISABLED;
    private static HealthAntivirusStatus $OFFLINE;
    private static HealthAntivirusStatus $ONLINE;

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

    public static function DISABLED(): HealthAntivirusStatus
    {
        if (!isset(self::$DISABLED)) {
            self::$DISABLED = new HealthAntivirusStatus('disabled');
        }
        return self::$DISABLED;
    }
    public static function OFFLINE(): HealthAntivirusStatus
    {
        if (!isset(self::$OFFLINE)) {
            self::$OFFLINE = new HealthAntivirusStatus('offline');
        }
        return self::$OFFLINE;
    }
    public static function ONLINE(): HealthAntivirusStatus
    {
        if (!isset(self::$ONLINE)) {
            self::$ONLINE = new HealthAntivirusStatus('online');
        }
        return self::$ONLINE;
    }
}