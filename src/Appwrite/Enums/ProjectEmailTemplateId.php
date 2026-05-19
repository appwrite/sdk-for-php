<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectEmailTemplateId implements JsonSerializable
{
    private static ProjectEmailTemplateId $VERIFICATION;
    private static ProjectEmailTemplateId $MAGICSESSION;
    private static ProjectEmailTemplateId $RECOVERY;
    private static ProjectEmailTemplateId $INVITATION;
    private static ProjectEmailTemplateId $MFACHALLENGE;
    private static ProjectEmailTemplateId $SESSIONALERT;
    private static ProjectEmailTemplateId $OTPSESSION;

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

    public static function VERIFICATION(): ProjectEmailTemplateId
    {
        if (!isset(self::$VERIFICATION)) {
            self::$VERIFICATION = new ProjectEmailTemplateId('verification');
        }
        return self::$VERIFICATION;
    }
    public static function MAGICSESSION(): ProjectEmailTemplateId
    {
        if (!isset(self::$MAGICSESSION)) {
            self::$MAGICSESSION = new ProjectEmailTemplateId('magicSession');
        }
        return self::$MAGICSESSION;
    }
    public static function RECOVERY(): ProjectEmailTemplateId
    {
        if (!isset(self::$RECOVERY)) {
            self::$RECOVERY = new ProjectEmailTemplateId('recovery');
        }
        return self::$RECOVERY;
    }
    public static function INVITATION(): ProjectEmailTemplateId
    {
        if (!isset(self::$INVITATION)) {
            self::$INVITATION = new ProjectEmailTemplateId('invitation');
        }
        return self::$INVITATION;
    }
    public static function MFACHALLENGE(): ProjectEmailTemplateId
    {
        if (!isset(self::$MFACHALLENGE)) {
            self::$MFACHALLENGE = new ProjectEmailTemplateId('mfaChallenge');
        }
        return self::$MFACHALLENGE;
    }
    public static function SESSIONALERT(): ProjectEmailTemplateId
    {
        if (!isset(self::$SESSIONALERT)) {
            self::$SESSIONALERT = new ProjectEmailTemplateId('sessionAlert');
        }
        return self::$SESSIONALERT;
    }
    public static function OTPSESSION(): ProjectEmailTemplateId
    {
        if (!isset(self::$OTPSESSION)) {
            self::$OTPSESSION = new ProjectEmailTemplateId('otpSession');
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
            default => throw new \InvalidArgumentException('Unknown ProjectEmailTemplateId value: ' . $value),
        };
    }
}
