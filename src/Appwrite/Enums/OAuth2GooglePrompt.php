<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2GooglePrompt implements JsonSerializable, Stringable
{
    private static OAuth2GooglePrompt $NONE;
    private static OAuth2GooglePrompt $CONSENT;
    private static OAuth2GooglePrompt $SELECTACCOUNT;

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

    public static function NONE(): OAuth2GooglePrompt
    {
        self::$NONE ??= new OAuth2GooglePrompt('none');

        return self::$NONE;
    }
    public static function CONSENT(): OAuth2GooglePrompt
    {
        self::$CONSENT ??= new OAuth2GooglePrompt('consent');

        return self::$CONSENT;
    }
    public static function SELECTACCOUNT(): OAuth2GooglePrompt
    {
        self::$SELECTACCOUNT ??= new OAuth2GooglePrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'none' => self::NONE(),
            'consent' => self::CONSENT(),
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2GooglePrompt value: ' . $value),
        };
    }
}
