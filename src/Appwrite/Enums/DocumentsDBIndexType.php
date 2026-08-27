<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class DocumentsDBIndexType implements JsonSerializable, Stringable
{
    private static DocumentsDBIndexType $KEY;
    private static DocumentsDBIndexType $FULLTEXT;
    private static DocumentsDBIndexType $UNIQUE;

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

    public static function KEY(): DocumentsDBIndexType
    {
        self::$KEY ??= new DocumentsDBIndexType('key');

        return self::$KEY;
    }
    public static function FULLTEXT(): DocumentsDBIndexType
    {
        self::$FULLTEXT ??= new DocumentsDBIndexType('fulltext');

        return self::$FULLTEXT;
    }
    public static function UNIQUE(): DocumentsDBIndexType
    {
        self::$UNIQUE ??= new DocumentsDBIndexType('unique');

        return self::$UNIQUE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'key' => self::KEY(),
            'fulltext' => self::FULLTEXT(),
            'unique' => self::UNIQUE(),
            default => throw new \InvalidArgumentException('Unknown DocumentsDBIndexType value: ' . $value),
        };
    }
}
