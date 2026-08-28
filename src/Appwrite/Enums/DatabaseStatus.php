<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DatabaseStatus implements JsonSerializable, Stringable
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

    private function __construct(private readonly string $value)
    {
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
        self::$PROVISIONING ??= new DatabaseStatus('provisioning');

        return self::$PROVISIONING;
    }
    public static function READY(): DatabaseStatus
    {
        self::$READY ??= new DatabaseStatus('ready');

        return self::$READY;
    }
    public static function INACTIVE(): DatabaseStatus
    {
        self::$INACTIVE ??= new DatabaseStatus('inactive');

        return self::$INACTIVE;
    }
    public static function PAUSED(): DatabaseStatus
    {
        self::$PAUSED ??= new DatabaseStatus('paused');

        return self::$PAUSED;
    }
    public static function FAILED(): DatabaseStatus
    {
        self::$FAILED ??= new DatabaseStatus('failed');

        return self::$FAILED;
    }
    public static function DELETING(): DatabaseStatus
    {
        self::$DELETING ??= new DatabaseStatus('deleting');

        return self::$DELETING;
    }
    public static function DELETED(): DatabaseStatus
    {
        self::$DELETED ??= new DatabaseStatus('deleted');

        return self::$DELETED;
    }
    public static function RESTORING(): DatabaseStatus
    {
        self::$RESTORING ??= new DatabaseStatus('restoring');

        return self::$RESTORING;
    }
    public static function SCALING(): DatabaseStatus
    {
        self::$SCALING ??= new DatabaseStatus('scaling');

        return self::$SCALING;
    }
    public static function UPGRADING(): DatabaseStatus
    {
        self::$UPGRADING ??= new DatabaseStatus('upgrading');

        return self::$UPGRADING;
    }
    public static function MIGRATING(): DatabaseStatus
    {
        self::$MIGRATING ??= new DatabaseStatus('migrating');

        return self::$MIGRATING;
    }
    public static function PAUSING(): DatabaseStatus
    {
        self::$PAUSING ??= new DatabaseStatus('pausing');

        return self::$PAUSING;
    }
    public static function RESUMING(): DatabaseStatus
    {
        self::$RESUMING ??= new DatabaseStatus('resuming');

        return self::$RESUMING;
    }
    public static function FAILINGOVER(): DatabaseStatus
    {
        self::$FAILINGOVER ??= new DatabaseStatus('failing-over');

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
