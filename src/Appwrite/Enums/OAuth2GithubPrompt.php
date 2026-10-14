<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuth2GithubPrompt implements JsonSerializable, Stringable
{
    private static OAuth2GithubPrompt $SELECTACCOUNT;

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

    public static function SELECTACCOUNT(): OAuth2GithubPrompt
    {
        self::$SELECTACCOUNT ??= new OAuth2GithubPrompt('select_account');

        return self::$SELECTACCOUNT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'select_account' => self::SELECTACCOUNT(),
            default => throw new \InvalidArgumentException('Unknown OAuth2GithubPrompt value: ' . $value),
        };
    }
}
