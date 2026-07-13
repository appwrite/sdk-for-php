<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DatabaseStatus implements JsonSerializable
{
    private static DatabaseStatus $PROVISIONING;
    private static DatabaseStatus $READY;
    private static DatabaseStatus $FAILED;

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

    public static function PROVISIONING(): DatabaseStatus
    {
        if (!isset(self::$PROVISIONING)) {
            self::$PROVISIONING = new DatabaseStatus('provisioning');
        }
        return self::$PROVISIONING;
    }
    public static function READY(): DatabaseStatus
    {
        if (!isset(self::$READY)) {
            self::$READY = new DatabaseStatus('ready');
        }
        return self::$READY;
    }
    public static function FAILED(): DatabaseStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new DatabaseStatus('failed');
        }
        return self::$FAILED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'provisioning' => self::PROVISIONING(),
            'ready' => self::READY(),
            'failed' => self::FAILED(),
            default => throw new \InvalidArgumentException('Unknown DatabaseStatus value: ' . $value),
        };
    }
}
