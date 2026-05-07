<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectPolicy implements JsonSerializable
{
    private static ProjectPolicy $PASSWORDDICTIONARY;
    private static ProjectPolicy $PASSWORDHISTORY;
    private static ProjectPolicy $PASSWORDPERSONALDATA;
    private static ProjectPolicy $SESSIONALERT;
    private static ProjectPolicy $SESSIONDURATION;
    private static ProjectPolicy $SESSIONINVALIDATION;
    private static ProjectPolicy $SESSIONLIMIT;
    private static ProjectPolicy $USERLIMIT;
    private static ProjectPolicy $MEMBERSHIPPRIVACY;

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

    public static function PASSWORDDICTIONARY(): ProjectPolicy
    {
        if (!isset(self::$PASSWORDDICTIONARY)) {
            self::$PASSWORDDICTIONARY = new ProjectPolicy('password-dictionary');
        }
        return self::$PASSWORDDICTIONARY;
    }
    public static function PASSWORDHISTORY(): ProjectPolicy
    {
        if (!isset(self::$PASSWORDHISTORY)) {
            self::$PASSWORDHISTORY = new ProjectPolicy('password-history');
        }
        return self::$PASSWORDHISTORY;
    }
    public static function PASSWORDPERSONALDATA(): ProjectPolicy
    {
        if (!isset(self::$PASSWORDPERSONALDATA)) {
            self::$PASSWORDPERSONALDATA = new ProjectPolicy('password-personal-data');
        }
        return self::$PASSWORDPERSONALDATA;
    }
    public static function SESSIONALERT(): ProjectPolicy
    {
        if (!isset(self::$SESSIONALERT)) {
            self::$SESSIONALERT = new ProjectPolicy('session-alert');
        }
        return self::$SESSIONALERT;
    }
    public static function SESSIONDURATION(): ProjectPolicy
    {
        if (!isset(self::$SESSIONDURATION)) {
            self::$SESSIONDURATION = new ProjectPolicy('session-duration');
        }
        return self::$SESSIONDURATION;
    }
    public static function SESSIONINVALIDATION(): ProjectPolicy
    {
        if (!isset(self::$SESSIONINVALIDATION)) {
            self::$SESSIONINVALIDATION = new ProjectPolicy('session-invalidation');
        }
        return self::$SESSIONINVALIDATION;
    }
    public static function SESSIONLIMIT(): ProjectPolicy
    {
        if (!isset(self::$SESSIONLIMIT)) {
            self::$SESSIONLIMIT = new ProjectPolicy('session-limit');
        }
        return self::$SESSIONLIMIT;
    }
    public static function USERLIMIT(): ProjectPolicy
    {
        if (!isset(self::$USERLIMIT)) {
            self::$USERLIMIT = new ProjectPolicy('user-limit');
        }
        return self::$USERLIMIT;
    }
    public static function MEMBERSHIPPRIVACY(): ProjectPolicy
    {
        if (!isset(self::$MEMBERSHIPPRIVACY)) {
            self::$MEMBERSHIPPRIVACY = new ProjectPolicy('membership-privacy');
        }
        return self::$MEMBERSHIPPRIVACY;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'password-dictionary' => self::PASSWORDDICTIONARY(),
            'password-history' => self::PASSWORDHISTORY(),
            'password-personal-data' => self::PASSWORDPERSONALDATA(),
            'session-alert' => self::SESSIONALERT(),
            'session-duration' => self::SESSIONDURATION(),
            'session-invalidation' => self::SESSIONINVALIDATION(),
            'session-limit' => self::SESSIONLIMIT(),
            'user-limit' => self::USERLIMIT(),
            'membership-privacy' => self::MEMBERSHIPPRIVACY(),
            default => throw new \InvalidArgumentException('Unknown ProjectPolicy value: ' . $value),
        };
    }
}
