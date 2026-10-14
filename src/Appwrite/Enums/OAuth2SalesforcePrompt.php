<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2SalesforcePrompt implements JsonSerializable, Stringable
{
    private static OAuth2SalesforcePrompt $LOGIN;
    private static OAuth2SalesforcePrompt $CONSENT;

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

    public static function LOGIN(): OAuth2SalesforcePrompt
    {
        self::$LOGIN ??= new OAuth2SalesforcePrompt('login');

        return self::$LOGIN;
    }
    public static function CONSENT(): OAuth2SalesforcePrompt
    {
        self::$CONSENT ??= new OAuth2SalesforcePrompt('consent');

        return self::$CONSENT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'login' => self::LOGIN(),
            'consent' => self::CONSENT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2SalesforcePrompt value: ' . $value),
        };
    }
}
