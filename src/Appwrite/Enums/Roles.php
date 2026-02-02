<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Roles implements JsonSerializable
{
    private static Roles $ADMIN;
    private static Roles $DEVELOPER;
    private static Roles $OWNER;

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

    public static function ADMIN(): Roles
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new Roles('admin');
        }
        return self::$ADMIN;
    }
    public static function DEVELOPER(): Roles
    {
        if (!isset(self::$DEVELOPER)) {
            self::$DEVELOPER = new Roles('developer');
        }
        return self::$DEVELOPER;
    }
    public static function OWNER(): Roles
    {
        if (!isset(self::$OWNER)) {
            self::$OWNER = new Roles('owner');
        }
        return self::$OWNER;
    }
}