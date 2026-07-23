<?php

namespace Appwrite\Enums;

use JsonSerializable;

class DatabaseStatus implements JsonSerializable
{
    private static DatabaseStatus $PROVISIONING;
    private static DatabaseStatus $READY;
    private static DatabaseStatus $INACTIVE;
    private static DatabaseStatus $PAUSED;
    private static DatabaseStatus $FAILED;
    private static DatabaseStatus $DELETING;
    private static DatabaseStatus $DELETED;
    private static DatabaseStatus $RESTORING;
    private static DatabaseStatus $SCALING;
    private static DatabaseStatus $UPGRADING;
    private static DatabaseStatus $MIGRATING;
    private static DatabaseStatus $PAUSING;
    private static DatabaseStatus $RESUMING;
    private static DatabaseStatus $FAILINGOVER;

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
    public static function INACTIVE(): DatabaseStatus
    {
        if (!isset(self::$INACTIVE)) {
            self::$INACTIVE = new DatabaseStatus('inactive');
        }
        return self::$INACTIVE;
    }
    public static function PAUSED(): DatabaseStatus
    {
        if (!isset(self::$PAUSED)) {
            self::$PAUSED = new DatabaseStatus('paused');
        }
        return self::$PAUSED;
    }
    public static function FAILED(): DatabaseStatus
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new DatabaseStatus('failed');
        }
        return self::$FAILED;
    }
    public static function DELETING(): DatabaseStatus
    {
        if (!isset(self::$DELETING)) {
            self::$DELETING = new DatabaseStatus('deleting');
        }
        return self::$DELETING;
    }
    public static function DELETED(): DatabaseStatus
    {
        if (!isset(self::$DELETED)) {
            self::$DELETED = new DatabaseStatus('deleted');
        }
        return self::$DELETED;
    }
    public static function RESTORING(): DatabaseStatus
    {
        if (!isset(self::$RESTORING)) {
            self::$RESTORING = new DatabaseStatus('restoring');
        }
        return self::$RESTORING;
    }
    public static function SCALING(): DatabaseStatus
    {
        if (!isset(self::$SCALING)) {
            self::$SCALING = new DatabaseStatus('scaling');
        }
        return self::$SCALING;
    }
    public static function UPGRADING(): DatabaseStatus
    {
        if (!isset(self::$UPGRADING)) {
            self::$UPGRADING = new DatabaseStatus('upgrading');
        }
        return self::$UPGRADING;
    }
    public static function MIGRATING(): DatabaseStatus
    {
        if (!isset(self::$MIGRATING)) {
            self::$MIGRATING = new DatabaseStatus('migrating');
        }
        return self::$MIGRATING;
    }
    public static function PAUSING(): DatabaseStatus
    {
        if (!isset(self::$PAUSING)) {
            self::$PAUSING = new DatabaseStatus('pausing');
        }
        return self::$PAUSING;
    }
    public static function RESUMING(): DatabaseStatus
    {
        if (!isset(self::$RESUMING)) {
            self::$RESUMING = new DatabaseStatus('resuming');
        }
        return self::$RESUMING;
    }
    public static function FAILINGOVER(): DatabaseStatus
    {
        if (!isset(self::$FAILINGOVER)) {
            self::$FAILINGOVER = new DatabaseStatus('failing-over');
        }
        return self::$FAILINGOVER;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'provisioning' => self::PROVISIONING(),
            'ready' => self::READY(),
            'inactive' => self::INACTIVE(),
            'paused' => self::PAUSED(),
            'failed' => self::FAILED(),
            'deleting' => self::DELETING(),
            'deleted' => self::DELETED(),
            'restoring' => self::RESTORING(),
            'scaling' => self::SCALING(),
            'upgrading' => self::UPGRADING(),
            'migrating' => self::MIGRATING(),
            'pausing' => self::PAUSING(),
            'resuming' => self::RESUMING(),
            'failing-over' => self::FAILINGOVER(),
            default => throw new \InvalidArgumentException('Unknown DatabaseStatus value: ' . $value),
        };
    }
}
