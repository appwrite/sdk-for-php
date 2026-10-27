<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OnDuplicate implements JsonSerializable, Stringable
{
    private static OnDuplicate $FAIL;
    private static OnDuplicate $SKIP;
    private static OnDuplicate $OVERWRITE;

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

    public static function FAIL(): OnDuplicate
    {
        self::$FAIL ??= new OnDuplicate('fail');

        return self::$FAIL;
    }
    public static function SKIP(): OnDuplicate
    {
        self::$SKIP ??= new OnDuplicate('skip');

        return self::$SKIP;
    }
    public static function OVERWRITE(): OnDuplicate
    {
        self::$OVERWRITE ??= new OnDuplicate('overwrite');

        return self::$OVERWRITE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'fail' => self::FAIL(),
            'skip' => self::SKIP(),
            'overwrite' => self::OVERWRITE(),
            default => throw new \InvalidArgumentException('Unknown OnDuplicate value: ' . $value),
        };
    }
}
