<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AnalyticsDimension implements JsonSerializable, Stringable
{
    private static AnalyticsDimension $COUNTRY;
    private static AnalyticsDimension $REGION;
    private static AnalyticsDimension $CITY;
    private static AnalyticsDimension $BROWSER;
    private static AnalyticsDimension $BROWSERVERSION;
    private static AnalyticsDimension $OPERATINGSYSTEM;
    private static AnalyticsDimension $OPERATINGSYSTEMVERSION;
    private static AnalyticsDimension $DEVICE;
    private static AnalyticsDimension $SCREENSIZE;
    private static AnalyticsDimension $REFERRERSOURCE;
    private static AnalyticsDimension $CHANNEL;
    private static AnalyticsDimension $UTMSOURCE;
    private static AnalyticsDimension $UTMMEDIUM;
    private static AnalyticsDimension $UTMCAMPAIGN;
    private static AnalyticsDimension $UTMCONTENT;
    private static AnalyticsDimension $UTMTERM;
    private static AnalyticsDimension $PAGE;
    private static AnalyticsDimension $HOSTNAME;
    private static AnalyticsDimension $ENTRYPAGE;
    private static AnalyticsDimension $EXITPAGE;
    private static AnalyticsDimension $TRAFFICTYPE;
    private static AnalyticsDimension $BOTNAME;
    private static AnalyticsDimension $BOTCATEGORY;
    private static AnalyticsDimension $USERID;
    private static AnalyticsDimension $EVENTNAME;
    private static AnalyticsDimension $PROPS;

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

    public static function COUNTRY(): AnalyticsDimension
    {
        self::$COUNTRY ??= new AnalyticsDimension('country');

        return self::$COUNTRY;
    }
    public static function REGION(): AnalyticsDimension
    {
        self::$REGION ??= new AnalyticsDimension('region');

        return self::$REGION;
    }
    public static function CITY(): AnalyticsDimension
    {
        self::$CITY ??= new AnalyticsDimension('city');

        return self::$CITY;
    }
    public static function BROWSER(): AnalyticsDimension
    {
        self::$BROWSER ??= new AnalyticsDimension('browser');

        return self::$BROWSER;
    }
    public static function BROWSERVERSION(): AnalyticsDimension
    {
        self::$BROWSERVERSION ??= new AnalyticsDimension('browserVersion');

        return self::$BROWSERVERSION;
    }
    public static function OPERATINGSYSTEM(): AnalyticsDimension
    {
        self::$OPERATINGSYSTEM ??= new AnalyticsDimension('operatingSystem');

        return self::$OPERATINGSYSTEM;
    }
    public static function OPERATINGSYSTEMVERSION(): AnalyticsDimension
    {
        self::$OPERATINGSYSTEMVERSION ??= new AnalyticsDimension('operatingSystemVersion');

        return self::$OPERATINGSYSTEMVERSION;
    }
    public static function DEVICE(): AnalyticsDimension
    {
        self::$DEVICE ??= new AnalyticsDimension('device');

        return self::$DEVICE;
    }
    public static function SCREENSIZE(): AnalyticsDimension
    {
        self::$SCREENSIZE ??= new AnalyticsDimension('screenSize');

        return self::$SCREENSIZE;
    }
    public static function REFERRERSOURCE(): AnalyticsDimension
    {
        self::$REFERRERSOURCE ??= new AnalyticsDimension('referrerSource');

        return self::$REFERRERSOURCE;
    }
    public static function CHANNEL(): AnalyticsDimension
    {
        self::$CHANNEL ??= new AnalyticsDimension('channel');

        return self::$CHANNEL;
    }
    public static function UTMSOURCE(): AnalyticsDimension
    {
        self::$UTMSOURCE ??= new AnalyticsDimension('utmSource');

        return self::$UTMSOURCE;
    }
    public static function UTMMEDIUM(): AnalyticsDimension
    {
        self::$UTMMEDIUM ??= new AnalyticsDimension('utmMedium');

        return self::$UTMMEDIUM;
    }
    public static function UTMCAMPAIGN(): AnalyticsDimension
    {
        self::$UTMCAMPAIGN ??= new AnalyticsDimension('utmCampaign');

        return self::$UTMCAMPAIGN;
    }
    public static function UTMCONTENT(): AnalyticsDimension
    {
        self::$UTMCONTENT ??= new AnalyticsDimension('utmContent');

        return self::$UTMCONTENT;
    }
    public static function UTMTERM(): AnalyticsDimension
    {
        self::$UTMTERM ??= new AnalyticsDimension('utmTerm');

        return self::$UTMTERM;
    }
    public static function PAGE(): AnalyticsDimension
    {
        self::$PAGE ??= new AnalyticsDimension('page');

        return self::$PAGE;
    }
    public static function HOSTNAME(): AnalyticsDimension
    {
        self::$HOSTNAME ??= new AnalyticsDimension('hostname');

        return self::$HOSTNAME;
    }
    public static function ENTRYPAGE(): AnalyticsDimension
    {
        self::$ENTRYPAGE ??= new AnalyticsDimension('entryPage');

        return self::$ENTRYPAGE;
    }
    public static function EXITPAGE(): AnalyticsDimension
    {
        self::$EXITPAGE ??= new AnalyticsDimension('exitPage');

        return self::$EXITPAGE;
    }
    public static function TRAFFICTYPE(): AnalyticsDimension
    {
        self::$TRAFFICTYPE ??= new AnalyticsDimension('trafficType');

        return self::$TRAFFICTYPE;
    }
    public static function BOTNAME(): AnalyticsDimension
    {
        self::$BOTNAME ??= new AnalyticsDimension('botName');

        return self::$BOTNAME;
    }
    public static function BOTCATEGORY(): AnalyticsDimension
    {
        self::$BOTCATEGORY ??= new AnalyticsDimension('botCategory');

        return self::$BOTCATEGORY;
    }
    public static function USERID(): AnalyticsDimension
    {
        self::$USERID ??= new AnalyticsDimension('userId');

        return self::$USERID;
    }
    public static function EVENTNAME(): AnalyticsDimension
    {
        self::$EVENTNAME ??= new AnalyticsDimension('eventName');

        return self::$EVENTNAME;
    }
    public static function PROPS(): AnalyticsDimension
    {
        self::$PROPS ??= new AnalyticsDimension('props');

        return self::$PROPS;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'country' => self::COUNTRY(),
            'region' => self::REGION(),
            'city' => self::CITY(),
            'browser' => self::BROWSER(),
            'browserVersion' => self::BROWSERVERSION(),
            'operatingSystem' => self::OPERATINGSYSTEM(),
            'operatingSystemVersion' => self::OPERATINGSYSTEMVERSION(),
            'device' => self::DEVICE(),
            'screenSize' => self::SCREENSIZE(),
            'referrerSource' => self::REFERRERSOURCE(),
            'channel' => self::CHANNEL(),
            'utmSource' => self::UTMSOURCE(),
            'utmMedium' => self::UTMMEDIUM(),
            'utmCampaign' => self::UTMCAMPAIGN(),
            'utmContent' => self::UTMCONTENT(),
            'utmTerm' => self::UTMTERM(),
            'page' => self::PAGE(),
            'hostname' => self::HOSTNAME(),
            'entryPage' => self::ENTRYPAGE(),
            'exitPage' => self::EXITPAGE(),
            'trafficType' => self::TRAFFICTYPE(),
            'botName' => self::BOTNAME(),
            'botCategory' => self::BOTCATEGORY(),
            'userId' => self::USERID(),
            'eventName' => self::EVENTNAME(),
            'props' => self::PROPS(),
            default => throw new \InvalidArgumentException('Unknown AnalyticsDimension value: ' . $value),
        };
    }
}
