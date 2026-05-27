<?php

namespace Appwrite\Enums;

use JsonSerializable;

class HealthQueueName implements JsonSerializable
{
    private static HealthQueueName $V1DATABASE;
    private static HealthQueueName $V1DELETES;
    private static HealthQueueName $V1AUDITS;
    private static HealthQueueName $V1MAILS;
    private static HealthQueueName $V1FUNCTIONS;
    private static HealthQueueName $V1STATSRESOURCES;
    private static HealthQueueName $V1STATSUSAGE;
    private static HealthQueueName $V1WEBHOOKS;
    private static HealthQueueName $V1CERTIFICATES;
    private static HealthQueueName $V1BUILDS;
    private static HealthQueueName $V1SCREENSHOTS;
    private static HealthQueueName $V1MESSAGING;
    private static HealthQueueName $V1MIGRATIONS;

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

    public static function V1DATABASE(): HealthQueueName
    {
        if (!isset(self::$V1DATABASE)) {
            self::$V1DATABASE = new HealthQueueName('v1-database');
        }
        return self::$V1DATABASE;
    }
    public static function V1DELETES(): HealthQueueName
    {
        if (!isset(self::$V1DELETES)) {
            self::$V1DELETES = new HealthQueueName('v1-deletes');
        }
        return self::$V1DELETES;
    }
    public static function V1AUDITS(): HealthQueueName
    {
        if (!isset(self::$V1AUDITS)) {
            self::$V1AUDITS = new HealthQueueName('v1-audits');
        }
        return self::$V1AUDITS;
    }
    public static function V1MAILS(): HealthQueueName
    {
        if (!isset(self::$V1MAILS)) {
            self::$V1MAILS = new HealthQueueName('v1-mails');
        }
        return self::$V1MAILS;
    }
    public static function V1FUNCTIONS(): HealthQueueName
    {
        if (!isset(self::$V1FUNCTIONS)) {
            self::$V1FUNCTIONS = new HealthQueueName('v1-functions');
        }
        return self::$V1FUNCTIONS;
    }
    public static function V1STATSRESOURCES(): HealthQueueName
    {
        if (!isset(self::$V1STATSRESOURCES)) {
            self::$V1STATSRESOURCES = new HealthQueueName('v1-stats-resources');
        }
        return self::$V1STATSRESOURCES;
    }
    public static function V1STATSUSAGE(): HealthQueueName
    {
        if (!isset(self::$V1STATSUSAGE)) {
            self::$V1STATSUSAGE = new HealthQueueName('v1-stats-usage');
        }
        return self::$V1STATSUSAGE;
    }
    public static function V1WEBHOOKS(): HealthQueueName
    {
        if (!isset(self::$V1WEBHOOKS)) {
            self::$V1WEBHOOKS = new HealthQueueName('v1-webhooks');
        }
        return self::$V1WEBHOOKS;
    }
    public static function V1CERTIFICATES(): HealthQueueName
    {
        if (!isset(self::$V1CERTIFICATES)) {
            self::$V1CERTIFICATES = new HealthQueueName('v1-certificates');
        }
        return self::$V1CERTIFICATES;
    }
    public static function V1BUILDS(): HealthQueueName
    {
        if (!isset(self::$V1BUILDS)) {
            self::$V1BUILDS = new HealthQueueName('v1-builds');
        }
        return self::$V1BUILDS;
    }
    public static function V1SCREENSHOTS(): HealthQueueName
    {
        if (!isset(self::$V1SCREENSHOTS)) {
            self::$V1SCREENSHOTS = new HealthQueueName('v1-screenshots');
        }
        return self::$V1SCREENSHOTS;
    }
    public static function V1MESSAGING(): HealthQueueName
    {
        if (!isset(self::$V1MESSAGING)) {
            self::$V1MESSAGING = new HealthQueueName('v1-messaging');
        }
        return self::$V1MESSAGING;
    }
    public static function V1MIGRATIONS(): HealthQueueName
    {
        if (!isset(self::$V1MIGRATIONS)) {
            self::$V1MIGRATIONS = new HealthQueueName('v1-migrations');
        }
        return self::$V1MIGRATIONS;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'v1-database' => self::V1DATABASE(),
            'v1-deletes' => self::V1DELETES(),
            'v1-audits' => self::V1AUDITS(),
            'v1-mails' => self::V1MAILS(),
            'v1-functions' => self::V1FUNCTIONS(),
            'v1-stats-resources' => self::V1STATSRESOURCES(),
            'v1-stats-usage' => self::V1STATSUSAGE(),
            'v1-webhooks' => self::V1WEBHOOKS(),
            'v1-certificates' => self::V1CERTIFICATES(),
            'v1-builds' => self::V1BUILDS(),
            'v1-screenshots' => self::V1SCREENSHOTS(),
            'v1-messaging' => self::V1MESSAGING(),
            'v1-migrations' => self::V1MIGRATIONS(),
            default => throw new \InvalidArgumentException('Unknown HealthQueueName value: ' . $value),
        };
    }
}
