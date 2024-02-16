<?php

namespace Appwrite\Enums;

use JsonSerializable;

class CreditCard implements JsonSerializable
{
    private static CreditCard $AMERICAN_EXPRESS;
    private static CreditCard $ARGENCARD;
    private static CreditCard $CABAL;
    private static CreditCard $CONSOSUD;
    private static CreditCard $DINERS_CLUB;
    private static CreditCard $DISCOVER;
    private static CreditCard $ELO;
    private static CreditCard $HIPERCARD;
    private static CreditCard $JCB;
    private static CreditCard $MASTERCARD;
    private static CreditCard $NARANJA;
    private static CreditCard $TARJETA_SHOPPING;
    private static CreditCard $UNION_CHINA_PAY;
    private static CreditCard $VISA;
    private static CreditCard $MIR;
    private static CreditCard $MAESTRO;

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

    public static function AMERICAN_EXPRESS(): CreditCard
    {
        if (!isset(self::$AMERICAN_EXPRESS)) {
            self::$AMERICAN_EXPRESS = new CreditCard('amex');
        }
        return self::$AMERICAN_EXPRESS;
    }
    public static function ARGENCARD(): CreditCard
    {
        if (!isset(self::$ARGENCARD)) {
            self::$ARGENCARD = new CreditCard('argencard');
        }
        return self::$ARGENCARD;
    }
    public static function CABAL(): CreditCard
    {
        if (!isset(self::$CABAL)) {
            self::$CABAL = new CreditCard('cabal');
        }
        return self::$CABAL;
    }
    public static function CONSOSUD(): CreditCard
    {
        if (!isset(self::$CONSOSUD)) {
            self::$CONSOSUD = new CreditCard('censosud');
        }
        return self::$CONSOSUD;
    }
    public static function DINERS_CLUB(): CreditCard
    {
        if (!isset(self::$DINERS_CLUB)) {
            self::$DINERS_CLUB = new CreditCard('diners');
        }
        return self::$DINERS_CLUB;
    }
    public static function DISCOVER(): CreditCard
    {
        if (!isset(self::$DISCOVER)) {
            self::$DISCOVER = new CreditCard('discover');
        }
        return self::$DISCOVER;
    }
    public static function ELO(): CreditCard
    {
        if (!isset(self::$ELO)) {
            self::$ELO = new CreditCard('elo');
        }
        return self::$ELO;
    }
    public static function HIPERCARD(): CreditCard
    {
        if (!isset(self::$HIPERCARD)) {
            self::$HIPERCARD = new CreditCard('hipercard');
        }
        return self::$HIPERCARD;
    }
    public static function JCB(): CreditCard
    {
        if (!isset(self::$JCB)) {
            self::$JCB = new CreditCard('jcb');
        }
        return self::$JCB;
    }
    public static function MASTERCARD(): CreditCard
    {
        if (!isset(self::$MASTERCARD)) {
            self::$MASTERCARD = new CreditCard('mastercard');
        }
        return self::$MASTERCARD;
    }
    public static function NARANJA(): CreditCard
    {
        if (!isset(self::$NARANJA)) {
            self::$NARANJA = new CreditCard('naranja');
        }
        return self::$NARANJA;
    }
    public static function TARJETA_SHOPPING(): CreditCard
    {
        if (!isset(self::$TARJETA_SHOPPING)) {
            self::$TARJETA_SHOPPING = new CreditCard('targeta-shopping');
        }
        return self::$TARJETA_SHOPPING;
    }
    public static function UNION_CHINA_PAY(): CreditCard
    {
        if (!isset(self::$UNION_CHINA_PAY)) {
            self::$UNION_CHINA_PAY = new CreditCard('union-china-pay');
        }
        return self::$UNION_CHINA_PAY;
    }
    public static function VISA(): CreditCard
    {
        if (!isset(self::$VISA)) {
            self::$VISA = new CreditCard('visa');
        }
        return self::$VISA;
    }
    public static function MIR(): CreditCard
    {
        if (!isset(self::$MIR)) {
            self::$MIR = new CreditCard('mir');
        }
        return self::$MIR;
    }
    public static function MAESTRO(): CreditCard
    {
        if (!isset(self::$MAESTRO)) {
            self::$MAESTRO = new CreditCard('maestro');
        }
        return self::$MAESTRO;
    }
}