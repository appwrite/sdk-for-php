<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Browser implements JsonSerializable, Stringable
{
    private static Browser $AVANTBROWSER;
    private static Browser $ANDROIDWEBVIEWBETA;
    private static Browser $GOOGLECHROME;
    private static Browser $GOOGLECHROMEIOS;
    private static Browser $GOOGLECHROMEMOBILE;
    private static Browser $CHROMIUM;
    private static Browser $MOZILLAFIREFOX;
    private static Browser $SAFARI;
    private static Browser $MOBILESAFARI;
    private static Browser $MICROSOFTEDGE;
    private static Browser $MICROSOFTEDGEIOS;
    private static Browser $OPERAMINI;
    private static Browser $OPERA;
    private static Browser $OPERANEXT;

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

    public static function AVANTBROWSER(): Browser
    {
        self::$AVANTBROWSER ??= new Browser('aa');

        return self::$AVANTBROWSER;
    }
    public static function ANDROIDWEBVIEWBETA(): Browser
    {
        self::$ANDROIDWEBVIEWBETA ??= new Browser('an');

        return self::$ANDROIDWEBVIEWBETA;
    }
    public static function GOOGLECHROME(): Browser
    {
        self::$GOOGLECHROME ??= new Browser('ch');

        return self::$GOOGLECHROME;
    }
    public static function GOOGLECHROMEIOS(): Browser
    {
        self::$GOOGLECHROMEIOS ??= new Browser('ci');

        return self::$GOOGLECHROMEIOS;
    }
    public static function GOOGLECHROMEMOBILE(): Browser
    {
        self::$GOOGLECHROMEMOBILE ??= new Browser('cm');

        return self::$GOOGLECHROMEMOBILE;
    }
    public static function CHROMIUM(): Browser
    {
        self::$CHROMIUM ??= new Browser('cr');

        return self::$CHROMIUM;
    }
    public static function MOZILLAFIREFOX(): Browser
    {
        self::$MOZILLAFIREFOX ??= new Browser('ff');

        return self::$MOZILLAFIREFOX;
    }
    public static function SAFARI(): Browser
    {
        self::$SAFARI ??= new Browser('sf');

        return self::$SAFARI;
    }
    public static function MOBILESAFARI(): Browser
    {
        self::$MOBILESAFARI ??= new Browser('mf');

        return self::$MOBILESAFARI;
    }
    public static function MICROSOFTEDGE(): Browser
    {
        self::$MICROSOFTEDGE ??= new Browser('ps');

        return self::$MICROSOFTEDGE;
    }
    public static function MICROSOFTEDGEIOS(): Browser
    {
        self::$MICROSOFTEDGEIOS ??= new Browser('oi');

        return self::$MICROSOFTEDGEIOS;
    }
    public static function OPERAMINI(): Browser
    {
        self::$OPERAMINI ??= new Browser('om');

        return self::$OPERAMINI;
    }
    public static function OPERA(): Browser
    {
        self::$OPERA ??= new Browser('op');

        return self::$OPERA;
    }
    public static function OPERANEXT(): Browser
    {
        self::$OPERANEXT ??= new Browser('on');

        return self::$OPERANEXT;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'aa' => self::AVANTBROWSER(),
            'an' => self::ANDROIDWEBVIEWBETA(),
            'ch' => self::GOOGLECHROME(),
            'ci' => self::GOOGLECHROMEIOS(),
            'cm' => self::GOOGLECHROMEMOBILE(),
            'cr' => self::CHROMIUM(),
            'ff' => self::MOZILLAFIREFOX(),
            'sf' => self::SAFARI(),
            'mf' => self::MOBILESAFARI(),
            'ps' => self::MICROSOFTEDGE(),
            'oi' => self::MICROSOFTEDGEIOS(),
            'om' => self::OPERAMINI(),
            'op' => self::OPERA(),
            'on' => self::OPERANEXT(),
            default => throw new \InvalidArgumentException('Unknown Browser value: ' . $value),
        };
    }
}
