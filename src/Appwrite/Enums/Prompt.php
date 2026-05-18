<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Prompt implements JsonSerializable
{
    private static Prompt $NONE;
    private static Prompt $CONSENT;
    private static Prompt $SELECTACCOUNT;

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

    public static function NONE(): Prompt
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new Prompt('none');
        }
        return self::$NONE;
    }
    public static function CONSENT(): Prompt
    {
        if (!isset(self::$CONSENT)) {
            self::$CONSENT = new Prompt('consent');
        }
        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): Prompt
    {
        if (!isset(self::$SELECTACCOUNT)) {
            self::$SELECTACCOUNT = new Prompt('select_account');
        }
        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown Prompt value: ' . $value),
        };
    }
}
