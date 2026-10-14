<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class WafRuleAction implements JsonSerializable, Stringable
{
    private static WafRuleAction $BYPASS;
    private static WafRuleAction $DENY;
    private static WafRuleAction $CHALLENGE;
    private static WafRuleAction $RATELIMIT;
    private static WafRuleAction $REDIRECT;

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

    public static function BYPASS(): WafRuleAction
    {
        self::$BYPASS ??= new WafRuleAction('bypass');

        return self::$BYPASS;
    }
    public static function DENY(): WafRuleAction
    {
        self::$DENY ??= new WafRuleAction('deny');

        return self::$DENY;
    }
    public static function CHALLENGE(): WafRuleAction
    {
        self::$CHALLENGE ??= new WafRuleAction('challenge');

        return self::$CHALLENGE;
    }
    public static function RATELIMIT(): WafRuleAction
    {
        self::$RATELIMIT ??= new WafRuleAction('rateLimit');

        return self::$RATELIMIT;
    }
    public static function REDIRECT(): WafRuleAction
    {
        self::$REDIRECT ??= new WafRuleAction('redirect');

        return self::$REDIRECT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'bypass' => self::BYPASS(),
            'deny' => self::DENY(),
            'challenge' => self::CHALLENGE(),
            'rateLimit' => self::RATELIMIT(),
            'redirect' => self::REDIRECT(),
            default => throw new \InvalidArgumentException('Unknown WafRuleAction value: ' . $value),
        };
    }
}
