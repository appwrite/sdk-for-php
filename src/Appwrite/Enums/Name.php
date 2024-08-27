<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Name implements JsonSerializable
{
    private static Name $V1DATABASE;
    private static Name $V1DELETES;
    private static Name $V1AUDITS;
    private static Name $V1MAILS;
    private static Name $V1FUNCTIONS;
    private static Name $V1USAGE;
    private static Name $V1USAGEDUMP;
    private static Name $V1WEBHOOKS;
    private static Name $V1CERTIFICATES;
    private static Name $V1BUILDS;
    private static Name $V1MESSAGING;
    private static Name $V1MIGRATIONS;

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

    public static function V1DATABASE(): Name
    {
        if (!isset(self::$V1DATABASE)) {
            self::$V1DATABASE = new Name('v1-database');
        }
        return self::$V1DATABASE;
    }
    public static function V1DELETES(): Name
    {
        if (!isset(self::$V1DELETES)) {
            self::$V1DELETES = new Name('v1-deletes');
        }
        return self::$V1DELETES;
    }
    public static function V1AUDITS(): Name
    {
        if (!isset(self::$V1AUDITS)) {
            self::$V1AUDITS = new Name('v1-audits');
        }
        return self::$V1AUDITS;
    }
    public static function V1MAILS(): Name
    {
        if (!isset(self::$V1MAILS)) {
            self::$V1MAILS = new Name('v1-mails');
        }
        return self::$V1MAILS;
    }
    public static function V1FUNCTIONS(): Name
    {
        if (!isset(self::$V1FUNCTIONS)) {
            self::$V1FUNCTIONS = new Name('v1-functions');
        }
        return self::$V1FUNCTIONS;
    }
    public static function V1USAGE(): Name
    {
        if (!isset(self::$V1USAGE)) {
            self::$V1USAGE = new Name('v1-usage');
        }
        return self::$V1USAGE;
    }
    public static function V1USAGEDUMP(): Name
    {
        if (!isset(self::$V1USAGEDUMP)) {
            self::$V1USAGEDUMP = new Name('v1-usage-dump');
        }
        return self::$V1USAGEDUMP;
    }
    public static function V1WEBHOOKS(): Name
    {
        if (!isset(self::$V1WEBHOOKS)) {
            self::$V1WEBHOOKS = new Name('v1-webhooks');
        }
        return self::$V1WEBHOOKS;
    }
    public static function V1CERTIFICATES(): Name
    {
        if (!isset(self::$V1CERTIFICATES)) {
            self::$V1CERTIFICATES = new Name('v1-certificates');
        }
        return self::$V1CERTIFICATES;
    }
    public static function V1BUILDS(): Name
    {
        if (!isset(self::$V1BUILDS)) {
            self::$V1BUILDS = new Name('v1-builds');
        }
        return self::$V1BUILDS;
    }
    public static function V1MESSAGING(): Name
    {
        if (!isset(self::$V1MESSAGING)) {
            self::$V1MESSAGING = new Name('v1-messaging');
        }
        return self::$V1MESSAGING;
    }
    public static function V1MIGRATIONS(): Name
    {
        if (!isset(self::$V1MIGRATIONS)) {
            self::$V1MIGRATIONS = new Name('v1-migrations');
        }
        return self::$V1MIGRATIONS;
    }
}