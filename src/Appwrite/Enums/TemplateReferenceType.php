<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class TemplateReferenceType implements JsonSerializable, Stringable
{
    private static TemplateReferenceType $COMMIT;
    private static TemplateReferenceType $BRANCH;
    private static TemplateReferenceType $TAG;

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

    public static function COMMIT(): TemplateReferenceType
    {
        self::$COMMIT ??= new TemplateReferenceType('commit');

        return self::$COMMIT;
    }
    public static function BRANCH(): TemplateReferenceType
    {
        self::$BRANCH ??= new TemplateReferenceType('branch');

        return self::$BRANCH;
    }
    public static function TAG(): TemplateReferenceType
    {
        self::$TAG ??= new TemplateReferenceType('tag');

        return self::$TAG;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'commit' => self::COMMIT(),
            'branch' => self::BRANCH(),
            'tag' => self::TAG(),
            default => throw new \InvalidArgumentException('Unknown TemplateReferenceType value: ' . $value),
        };
    }
}
