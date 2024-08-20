<?php

namespace Appwrite\Enums;

use JsonSerializable;

class CreditCard implements JsonSerializable
{
    private static CreditCard $AMERICANEXPRESS;
    private static CreditCard $ARGENCARD;
    private static CreditCard $CABAL;
    private static CreditCard $CENCOSUD;
    private static CreditCard $DINERSCLUB;
    private static CreditCard $DISCOVER;
    private static CreditCard $ELO;
    private static CreditCard $HIPERCARD;
    private static CreditCard $JCB;
    private static CreditCard $MASTERCARD;
    private static CreditCard $NARANJA;
    private static CreditCard $TARJETASHOPPING;
    private static CreditCard $UNIONCHINAPAY;
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

    public static function AMERICANEXPRESS(): CreditCard
    {
        if (!isset(self::$AMERICANEXPRESS)) {
            self::$AMERICANEXPRESS = new CreditCard('amex');
        }
        return self::$AMERICANEXPRESS;
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
    public static function CENCOSUD(): CreditCard
    {
        if (!isset(self::$CENCOSUD)) {
            self::$CENCOSUD = new CreditCard('cencosud');
        }
        return self::$CENCOSUD;
    }
    public static function DINERSCLUB(): CreditCard
    {
        if (!isset(self::$DINERSCLUB)) {
            self::$DINERSCLUB = new CreditCard('diners');
        }
        return self::$DINERSCLUB;
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
    public static function TARJETASHOPPING(): CreditCard
    {
        if (!isset(self::$TARJETASHOPPING)) {
            self::$TARJETASHOPPING = new CreditCard('targeta-shopping');
        }
        return self::$TARJETASHOPPING;
    }
    public static function UNIONCHINAPAY(): CreditCard
    {
        if (!isset(self::$UNIONCHINAPAY)) {
            self::$UNIONCHINAPAY = new CreditCard('union-china-pay');
        }
        return self::$UNIONCHINAPAY;
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