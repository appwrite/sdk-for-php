<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class CreditCard implements JsonSerializable, Stringable
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
    private static CreditCard $UNIONPAY;
    private static CreditCard $VISA;
    private static CreditCard $MIR;
    private static CreditCard $MAESTRO;
    private static CreditCard $RUPAY;

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

    public static function AMERICANEXPRESS(): CreditCard
    {
        self::$AMERICANEXPRESS ??= new CreditCard('amex');

        return self::$AMERICANEXPRESS;
    }
    public static function ARGENCARD(): CreditCard
    {
        self::$ARGENCARD ??= new CreditCard('argencard');

        return self::$ARGENCARD;
    }
    public static function CABAL(): CreditCard
    {
        self::$CABAL ??= new CreditCard('cabal');

        return self::$CABAL;
    }
    public static function CENCOSUD(): CreditCard
    {
        self::$CENCOSUD ??= new CreditCard('cencosud');

        return self::$CENCOSUD;
    }
    public static function DINERSCLUB(): CreditCard
    {
        self::$DINERSCLUB ??= new CreditCard('diners');

        return self::$DINERSCLUB;
    }
    public static function DISCOVER(): CreditCard
    {
        self::$DISCOVER ??= new CreditCard('discover');

        return self::$DISCOVER;
    }
    public static function ELO(): CreditCard
    {
        self::$ELO ??= new CreditCard('elo');

        return self::$ELO;
    }
    public static function HIPERCARD(): CreditCard
    {
        self::$HIPERCARD ??= new CreditCard('hipercard');

        return self::$HIPERCARD;
    }
    public static function JCB(): CreditCard
    {
        self::$JCB ??= new CreditCard('jcb');

        return self::$JCB;
    }
    public static function MASTERCARD(): CreditCard
    {
        self::$MASTERCARD ??= new CreditCard('mastercard');

        return self::$MASTERCARD;
    }
    public static function NARANJA(): CreditCard
    {
        self::$NARANJA ??= new CreditCard('naranja');

        return self::$NARANJA;
    }
    public static function TARJETASHOPPING(): CreditCard
    {
        self::$TARJETASHOPPING ??= new CreditCard('targeta-shopping');

        return self::$TARJETASHOPPING;
    }
    public static function UNIONPAY(): CreditCard
    {
        self::$UNIONPAY ??= new CreditCard('unionpay');

        return self::$UNIONPAY;
    }
    public static function VISA(): CreditCard
    {
        self::$VISA ??= new CreditCard('visa');

        return self::$VISA;
    }
    public static function MIR(): CreditCard
    {
        self::$MIR ??= new CreditCard('mir');

        return self::$MIR;
    }
    public static function MAESTRO(): CreditCard
    {
        self::$MAESTRO ??= new CreditCard('maestro');

        return self::$MAESTRO;
    }
    public static function RUPAY(): CreditCard
    {
        self::$RUPAY ??= new CreditCard('rupay');

        return self::$RUPAY;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'amex' => self::AMERICANEXPRESS(),
            'argencard' => self::ARGENCARD(),
            'cabal' => self::CABAL(),
            'cencosud' => self::CENCOSUD(),
            'diners' => self::DINERSCLUB(),
            'discover' => self::DISCOVER(),
            'elo' => self::ELO(),
            'hipercard' => self::HIPERCARD(),
            'jcb' => self::JCB(),
            'mastercard' => self::MASTERCARD(),
            'naranja' => self::NARANJA(),
            'targeta-shopping' => self::TARJETASHOPPING(),
            'unionpay' => self::UNIONPAY(),
            'visa' => self::VISA(),
            'mir' => self::MIR(),
            'maestro' => self::MAESTRO(),
            'rupay' => self::RUPAY(),
            default => throw new \InvalidArgumentException('Unknown CreditCard value: ' . $value),
        };
    }
}
