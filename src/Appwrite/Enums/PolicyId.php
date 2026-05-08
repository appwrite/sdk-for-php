<?php

namespace Appwrite\Enums;

use JsonSerializable;

class PolicyId implements JsonSerializable
{
    private static PolicyId $PASSWORDDICTIONARY;
    private static PolicyId $PASSWORDHISTORY;
    private static PolicyId $PASSWORDPERSONALDATA;
    private static PolicyId $SESSIONALERT;
    private static PolicyId $SESSIONDURATION;
    private static PolicyId $SESSIONINVALIDATION;
    private static PolicyId $SESSIONLIMIT;
    private static PolicyId $USERLIMIT;
    private static PolicyId $MEMBERSHIPPRIVACY;

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

    public static function PASSWORDDICTIONARY(): PolicyId
    {
        if (!isset(self::$PASSWORDDICTIONARY)) {
            self::$PASSWORDDICTIONARY = new PolicyId('password-dictionary');
        }
        return self::$PASSWORDDICTIONARY;
    }
    public static function PASSWORDHISTORY(): PolicyId
    {
        if (!isset(self::$PASSWORDHISTORY)) {
            self::$PASSWORDHISTORY = new PolicyId('password-history');
        }
        return self::$PASSWORDHISTORY;
    }
    public static function PASSWORDPERSONALDATA(): PolicyId
    {
        if (!isset(self::$PASSWORDPERSONALDATA)) {
            self::$PASSWORDPERSONALDATA = new PolicyId('password-personal-data');
        }
        return self::$PASSWORDPERSONALDATA;
    }
    public static function SESSIONALERT(): PolicyId
    {
        if (!isset(self::$SESSIONALERT)) {
            self::$SESSIONALERT = new PolicyId('session-alert');
        }
        return self::$SESSIONALERT;
    }
    public static function SESSIONDURATION(): PolicyId
    {
        if (!isset(self::$SESSIONDURATION)) {
            self::$SESSIONDURATION = new PolicyId('session-duration');
        }
        return self::$SESSIONDURATION;
    }
    public static function SESSIONINVALIDATION(): PolicyId
    {
        if (!isset(self::$SESSIONINVALIDATION)) {
            self::$SESSIONINVALIDATION = new PolicyId('session-invalidation');
        }
        return self::$SESSIONINVALIDATION;
    }
    public static function SESSIONLIMIT(): PolicyId
    {
        if (!isset(self::$SESSIONLIMIT)) {
            self::$SESSIONLIMIT = new PolicyId('session-limit');
        }
        return self::$SESSIONLIMIT;
    }
    public static function USERLIMIT(): PolicyId
    {
        if (!isset(self::$USERLIMIT)) {
            self::$USERLIMIT = new PolicyId('user-limit');
        }
        return self::$USERLIMIT;
    }
    public static function MEMBERSHIPPRIVACY(): PolicyId
    {
        if (!isset(self::$MEMBERSHIPPRIVACY)) {
            self::$MEMBERSHIPPRIVACY = new PolicyId('membership-privacy');
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
            default => throw new \InvalidArgumentException('Unknown PolicyId value: ' . $value),
        };
    }
}
