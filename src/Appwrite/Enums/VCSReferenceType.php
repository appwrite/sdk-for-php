<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class VCSReferenceType implements JsonSerializable, Stringable
{
    private static VCSReferenceType $BRANCH;
    private static VCSReferenceType $COMMIT;
    private static VCSReferenceType $TAG;

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

    public static function BRANCH(): VCSReferenceType
    {
        if (!isset(self::$BRANCH)) {
            self::$BRANCH = new VCSReferenceType('branch');
        }
        return self::$BRANCH;
    }
    public static function COMMIT(): VCSReferenceType
    {
        if (!isset(self::$COMMIT)) {
            self::$COMMIT = new VCSReferenceType('commit');
        }
        return self::$COMMIT;
    }
    public static function TAG(): VCSReferenceType
    {
        if (!isset(self::$TAG)) {
            self::$TAG = new VCSReferenceType('tag');
        }
        return self::$TAG;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'branch' => self::BRANCH(),
            'commit' => self::COMMIT(),
            'tag' => self::TAG(),
            default => throw new \InvalidArgumentException('Unknown VCSReferenceType value: ' . $value),
        };
    }
}
