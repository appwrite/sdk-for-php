<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectPolicyId implements JsonSerializable
{
    private static ProjectPolicyId $PASSWORDDICTIONARY;
    private static ProjectPolicyId $PASSWORDHISTORY;
    private static ProjectPolicyId $PASSWORDSTRENGTH;
    private static ProjectPolicyId $PASSWORDPERSONALDATA;
    private static ProjectPolicyId $SESSIONALERT;
    private static ProjectPolicyId $SESSIONDURATION;
    private static ProjectPolicyId $SESSIONINVALIDATION;
    private static ProjectPolicyId $SESSIONLIMIT;
    private static ProjectPolicyId $USERLIMIT;
    private static ProjectPolicyId $MEMBERSHIPPRIVACY;
    private static ProjectPolicyId $DENYALIASEDEMAIL;
    private static ProjectPolicyId $DENYDISPOSABLEEMAIL;
    private static ProjectPolicyId $DENYFREEEMAIL;
    private static ProjectPolicyId $DENYCORPORATEEMAIL;

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

    public static function PASSWORDDICTIONARY(): ProjectPolicyId
    {
        if (!isset(self::$PASSWORDDICTIONARY)) {
            self::$PASSWORDDICTIONARY = new ProjectPolicyId('password-dictionary');
        }
        return self::$PASSWORDDICTIONARY;
    }
    public static function PASSWORDHISTORY(): ProjectPolicyId
    {
        if (!isset(self::$PASSWORDHISTORY)) {
            self::$PASSWORDHISTORY = new ProjectPolicyId('password-history');
        }
        return self::$PASSWORDHISTORY;
    }
    public static function PASSWORDSTRENGTH(): ProjectPolicyId
    {
        if (!isset(self::$PASSWORDSTRENGTH)) {
            self::$PASSWORDSTRENGTH = new ProjectPolicyId('password-strength');
        }
        return self::$PASSWORDSTRENGTH;
    }
    public static function PASSWORDPERSONALDATA(): ProjectPolicyId
    {
        if (!isset(self::$PASSWORDPERSONALDATA)) {
            self::$PASSWORDPERSONALDATA = new ProjectPolicyId('password-personal-data');
        }
        return self::$PASSWORDPERSONALDATA;
    }
    public static function SESSIONALERT(): ProjectPolicyId
    {
        if (!isset(self::$SESSIONALERT)) {
            self::$SESSIONALERT = new ProjectPolicyId('session-alert');
        }
        return self::$SESSIONALERT;
    }
    public static function SESSIONDURATION(): ProjectPolicyId
    {
        if (!isset(self::$SESSIONDURATION)) {
            self::$SESSIONDURATION = new ProjectPolicyId('session-duration');
        }
        return self::$SESSIONDURATION;
    }
    public static function SESSIONINVALIDATION(): ProjectPolicyId
    {
        if (!isset(self::$SESSIONINVALIDATION)) {
            self::$SESSIONINVALIDATION = new ProjectPolicyId('session-invalidation');
        }
        return self::$SESSIONINVALIDATION;
    }
    public static function SESSIONLIMIT(): ProjectPolicyId
    {
        if (!isset(self::$SESSIONLIMIT)) {
            self::$SESSIONLIMIT = new ProjectPolicyId('session-limit');
        }
        return self::$SESSIONLIMIT;
    }
    public static function USERLIMIT(): ProjectPolicyId
    {
        if (!isset(self::$USERLIMIT)) {
            self::$USERLIMIT = new ProjectPolicyId('user-limit');
        }
        return self::$USERLIMIT;
    }
    public static function MEMBERSHIPPRIVACY(): ProjectPolicyId
    {
        if (!isset(self::$MEMBERSHIPPRIVACY)) {
            self::$MEMBERSHIPPRIVACY = new ProjectPolicyId('membership-privacy');
        }
        return self::$MEMBERSHIPPRIVACY;
    }
    public static function DENYALIASEDEMAIL(): ProjectPolicyId
    {
        if (!isset(self::$DENYALIASEDEMAIL)) {
            self::$DENYALIASEDEMAIL = new ProjectPolicyId('deny-aliased-email');
        }
        return self::$DENYALIASEDEMAIL;
    }
    public static function DENYDISPOSABLEEMAIL(): ProjectPolicyId
    {
        if (!isset(self::$DENYDISPOSABLEEMAIL)) {
            self::$DENYDISPOSABLEEMAIL = new ProjectPolicyId('deny-disposable-email');
        }
        return self::$DENYDISPOSABLEEMAIL;
    }
    public static function DENYFREEEMAIL(): ProjectPolicyId
    {
        if (!isset(self::$DENYFREEEMAIL)) {
            self::$DENYFREEEMAIL = new ProjectPolicyId('deny-free-email');
        }
        return self::$DENYFREEEMAIL;
    }
    public static function DENYCORPORATEEMAIL(): ProjectPolicyId
    {
        if (!isset(self::$DENYCORPORATEEMAIL)) {
            self::$DENYCORPORATEEMAIL = new ProjectPolicyId('deny-corporate-email');
        }
        return self::$DENYCORPORATEEMAIL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'password-dictionary' => self::PASSWORDDICTIONARY(),
            'password-history' => self::PASSWORDHISTORY(),
            'password-strength' => self::PASSWORDSTRENGTH(),
            'password-personal-data' => self::PASSWORDPERSONALDATA(),
            'session-alert' => self::SESSIONALERT(),
            'session-duration' => self::SESSIONDURATION(),
            'session-invalidation' => self::SESSIONINVALIDATION(),
            'session-limit' => self::SESSIONLIMIT(),
            'user-limit' => self::USERLIMIT(),
            'membership-privacy' => self::MEMBERSHIPPRIVACY(),
            'deny-aliased-email' => self::DENYALIASEDEMAIL(),
            'deny-disposable-email' => self::DENYDISPOSABLEEMAIL(),
            'deny-free-email' => self::DENYFREEEMAIL(),
            'deny-corporate-email' => self::DENYCORPORATEEMAIL(),
            default => throw new \InvalidArgumentException('Unknown ProjectPolicyId value: ' . $value),
        };
    }
}
