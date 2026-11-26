<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorResourceType implements JsonSerializable, Stringable
{
    private static MonitorResourceType $PROJECT;
    private static MonitorResourceType $DATABASE;
    private static MonitorResourceType $BUCKET;
    private static MonitorResourceType $FUNCTION;
    private static MonitorResourceType $SITE;
    private static MonitorResourceType $DEDICATEDDATABASE;
    private static MonitorResourceType $ORGANIZATION;

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

    public static function PROJECT(): MonitorResourceType
    {
        self::$PROJECT ??= new MonitorResourceType('project');

        return self::$PROJECT;
    }
    public static function DATABASE(): MonitorResourceType
    {
        self::$DATABASE ??= new MonitorResourceType('database');

        return self::$DATABASE;
    }
    public static function BUCKET(): MonitorResourceType
    {
        self::$BUCKET ??= new MonitorResourceType('bucket');

        return self::$BUCKET;
    }
    public static function FUNCTION(): MonitorResourceType
    {
        self::$FUNCTION ??= new MonitorResourceType('function');

        return self::$FUNCTION;
    }
    public static function SITE(): MonitorResourceType
    {
        self::$SITE ??= new MonitorResourceType('site');

        return self::$SITE;
    }
    public static function DEDICATEDDATABASE(): MonitorResourceType
    {
        self::$DEDICATEDDATABASE ??= new MonitorResourceType('dedicatedDatabase');

        return self::$DEDICATEDDATABASE;
    }
    public static function ORGANIZATION(): MonitorResourceType
    {
        self::$ORGANIZATION ??= new MonitorResourceType('organization');

        return self::$ORGANIZATION;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'project' => self::PROJECT(),
            'database' => self::DATABASE(),
            'bucket' => self::BUCKET(),
            'function' => self::FUNCTION(),
            'site' => self::SITE(),
            'dedicatedDatabase' => self::DEDICATEDDATABASE(),
            'organization' => self::ORGANIZATION(),
            default => throw new \InvalidArgumentException('Unknown MonitorResourceType value: ' . $value),
        };
    }
}
