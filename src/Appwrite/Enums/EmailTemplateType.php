<?php

namespace Appwrite\Enums;

use JsonSerializable;

class EmailTemplateType implements JsonSerializable
{
    private static EmailTemplateType $VERIFICATION;
    private static EmailTemplateType $MAGICSESSION;
    private static EmailTemplateType $RECOVERY;
    private static EmailTemplateType $INVITATION;
    private static EmailTemplateType $MFACHALLENGE;
    private static EmailTemplateType $SESSIONALERT;
    private static EmailTemplateType $OTPSESSION;

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

    public static function VERIFICATION(): EmailTemplateType
    {
        if (!isset(self::$VERIFICATION)) {
            self::$VERIFICATION = new EmailTemplateType('verification');
        }
        return self::$VERIFICATION;
    }
    public static function MAGICSESSION(): EmailTemplateType
    {
        if (!isset(self::$MAGICSESSION)) {
            self::$MAGICSESSION = new EmailTemplateType('magicSession');
        }
        return self::$MAGICSESSION;
    }
    public static function RECOVERY(): EmailTemplateType
    {
        if (!isset(self::$RECOVERY)) {
            self::$RECOVERY = new EmailTemplateType('recovery');
        }
        return self::$RECOVERY;
    }
    public static function INVITATION(): EmailTemplateType
    {
        if (!isset(self::$INVITATION)) {
            self::$INVITATION = new EmailTemplateType('invitation');
        }
        return self::$INVITATION;
    }
    public static function MFACHALLENGE(): EmailTemplateType
    {
        if (!isset(self::$MFACHALLENGE)) {
            self::$MFACHALLENGE = new EmailTemplateType('mfaChallenge');
        }
        return self::$MFACHALLENGE;
    }
    public static function SESSIONALERT(): EmailTemplateType
    {
        if (!isset(self::$SESSIONALERT)) {
            self::$SESSIONALERT = new EmailTemplateType('sessionAlert');
        }
        return self::$SESSIONALERT;
    }
    public static function OTPSESSION(): EmailTemplateType
    {
        if (!isset(self::$OTPSESSION)) {
            self::$OTPSESSION = new EmailTemplateType('otpSession');
        }
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
            default => throw new \InvalidArgumentException('Unknown EmailTemplateType value: ' . $value),
        };
    }
}
