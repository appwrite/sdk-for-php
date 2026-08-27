<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectEmailTemplateId implements JsonSerializable, Stringable
{
    private static ProjectEmailTemplateId $VERIFICATION;
    private static ProjectEmailTemplateId $MAGICSESSION;
    private static ProjectEmailTemplateId $RECOVERY;
    private static ProjectEmailTemplateId $INVITATION;
    private static ProjectEmailTemplateId $MFACHALLENGE;
    private static ProjectEmailTemplateId $SESSIONALERT;
    private static ProjectEmailTemplateId $OTPSESSION;

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

    public static function VERIFICATION(): ProjectEmailTemplateId
    {
        self::$VERIFICATION ??= new ProjectEmailTemplateId('verification');

        return self::$VERIFICATION;
    }
    public static function MAGICSESSION(): ProjectEmailTemplateId
    {
        self::$MAGICSESSION ??= new ProjectEmailTemplateId('magicSession');

        return self::$MAGICSESSION;
    }
    public static function RECOVERY(): ProjectEmailTemplateId
    {
        self::$RECOVERY ??= new ProjectEmailTemplateId('recovery');

        return self::$RECOVERY;
    }
    public static function INVITATION(): ProjectEmailTemplateId
    {
        self::$INVITATION ??= new ProjectEmailTemplateId('invitation');

        return self::$INVITATION;
    }
    public static function MFACHALLENGE(): ProjectEmailTemplateId
    {
        self::$MFACHALLENGE ??= new ProjectEmailTemplateId('mfaChallenge');

        return self::$MFACHALLENGE;
    }
    public static function SESSIONALERT(): ProjectEmailTemplateId
    {
        self::$SESSIONALERT ??= new ProjectEmailTemplateId('sessionAlert');

        return self::$SESSIONALERT;
    }
    public static function OTPSESSION(): ProjectEmailTemplateId
    {
        self::$OTPSESSION ??= new ProjectEmailTemplateId('otpSession');

        return self::$OTPSESSION;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'verification' => self::VERIFICATION(),
            'magicSession' => self::MAGICSESSION(),
            'recovery' => self::RECOVERY(),
            'invitation' => self::INVITATION(),
            'mfaChallenge' => self::MFACHALLENGE(),
            'sessionAlert' => self::SESSIONALERT(),
            'otpSession' => self::OTPSESSION(),
            default => throw new \InvalidArgumentException('Unknown ProjectEmailTemplateId value: ' . $value),
        };
    }
}
