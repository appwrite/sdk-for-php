<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class RelationMutate implements JsonSerializable, Stringable
{
    private static RelationMutate $CASCADE;
    private static RelationMutate $RESTRICT;
    private static RelationMutate $SETNULL;

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

    public static function CASCADE(): RelationMutate
    {
        self::$CASCADE ??= new RelationMutate('cascade');

        return self::$CASCADE;
    }
    public static function RESTRICT(): RelationMutate
    {
        self::$RESTRICT ??= new RelationMutate('restrict');

        return self::$RESTRICT;
    }
    public static function SETNULL(): RelationMutate
    {
        self::$SETNULL ??= new RelationMutate('setNull');

        return self::$SETNULL;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'cascade' => self::CASCADE(),
            'restrict' => self::RESTRICT(),
            'setNull' => self::SETNULL(),
            default => throw new \InvalidArgumentException('Unknown RelationMutate value: ' . $value),
        };
    }
}
