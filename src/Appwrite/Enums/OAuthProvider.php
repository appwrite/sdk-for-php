<?php

namespace Appwrite\Enums;

use JsonSerializable;

class OAuthProvider implements JsonSerializable
{
    private static OAuthProvider $AMAZON;
    private static OAuthProvider $APPLE;
    private static OAuthProvider $AUTH0;
    private static OAuthProvider $AUTHENTIK;
    private static OAuthProvider $AUTODESK;
    private static OAuthProvider $BITBUCKET;
    private static OAuthProvider $BITLY;
    private static OAuthProvider $BOX;
    private static OAuthProvider $DAILYMOTION;
    private static OAuthProvider $DISCORD;
    private static OAuthProvider $DISQUS;
    private static OAuthProvider $DROPBOX;
    private static OAuthProvider $ETSY;
    private static OAuthProvider $FACEBOOK;
    private static OAuthProvider $GITHUB;
    private static OAuthProvider $GITLAB;
    private static OAuthProvider $GOOGLE;
    private static OAuthProvider $LINKEDIN;
    private static OAuthProvider $MICROSOFT;
    private static OAuthProvider $NOTION;
    private static OAuthProvider $OIDC;
    private static OAuthProvider $OKTA;
    private static OAuthProvider $PAYPAL;
    private static OAuthProvider $PAYPALSANDBOX;
    private static OAuthProvider $PODIO;
    private static OAuthProvider $SALESFORCE;
    private static OAuthProvider $SLACK;
    private static OAuthProvider $SPOTIFY;
    private static OAuthProvider $STRIPE;
    private static OAuthProvider $TRADESHIFT;
    private static OAuthProvider $TRADESHIFTBOX;
    private static OAuthProvider $TWITCH;
    private static OAuthProvider $WORDPRESS;
    private static OAuthProvider $YAHOO;
    private static OAuthProvider $YAMMER;
    private static OAuthProvider $YANDEX;
    private static OAuthProvider $ZOHO;
    private static OAuthProvider $ZOOM;
    private static OAuthProvider $MOCK;

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

    public static function AMAZON(): OAuthProvider
    {
        if (!isset(self::$AMAZON)) {
            self::$AMAZON = new OAuthProvider('amazon');
        }
        return self::$AMAZON;
    }
    public static function APPLE(): OAuthProvider
    {
        if (!isset(self::$APPLE)) {
            self::$APPLE = new OAuthProvider('apple');
        }
        return self::$APPLE;
    }
    public static function AUTH0(): OAuthProvider
    {
        if (!isset(self::$AUTH0)) {
            self::$AUTH0 = new OAuthProvider('auth0');
        }
        return self::$AUTH0;
    }
    public static function AUTHENTIK(): OAuthProvider
    {
        if (!isset(self::$AUTHENTIK)) {
            self::$AUTHENTIK = new OAuthProvider('authentik');
        }
        return self::$AUTHENTIK;
    }
    public static function AUTODESK(): OAuthProvider
    {
        if (!isset(self::$AUTODESK)) {
            self::$AUTODESK = new OAuthProvider('autodesk');
        }
        return self::$AUTODESK;
    }
    public static function BITBUCKET(): OAuthProvider
    {
        if (!isset(self::$BITBUCKET)) {
            self::$BITBUCKET = new OAuthProvider('bitbucket');
        }
        return self::$BITBUCKET;
    }
    public static function BITLY(): OAuthProvider
    {
        if (!isset(self::$BITLY)) {
            self::$BITLY = new OAuthProvider('bitly');
        }
        return self::$BITLY;
    }
    public static function BOX(): OAuthProvider
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new OAuthProvider('box');
        }
        return self::$BOX;
    }
    public static function DAILYMOTION(): OAuthProvider
    {
        if (!isset(self::$DAILYMOTION)) {
            self::$DAILYMOTION = new OAuthProvider('dailymotion');
        }
        return self::$DAILYMOTION;
    }
    public static function DISCORD(): OAuthProvider
    {
        if (!isset(self::$DISCORD)) {
            self::$DISCORD = new OAuthProvider('discord');
        }
        return self::$DISCORD;
    }
    public static function DISQUS(): OAuthProvider
    {
        if (!isset(self::$DISQUS)) {
            self::$DISQUS = new OAuthProvider('disqus');
        }
        return self::$DISQUS;
    }
    public static function DROPBOX(): OAuthProvider
    {
        if (!isset(self::$DROPBOX)) {
            self::$DROPBOX = new OAuthProvider('dropbox');
        }
        return self::$DROPBOX;
    }
    public static function ETSY(): OAuthProvider
    {
        if (!isset(self::$ETSY)) {
            self::$ETSY = new OAuthProvider('etsy');
        }
        return self::$ETSY;
    }
    public static function FACEBOOK(): OAuthProvider
    {
        if (!isset(self::$FACEBOOK)) {
            self::$FACEBOOK = new OAuthProvider('facebook');
        }
        return self::$FACEBOOK;
    }
    public static function GITHUB(): OAuthProvider
    {
        if (!isset(self::$GITHUB)) {
            self::$GITHUB = new OAuthProvider('github');
        }
        return self::$GITHUB;
    }
    public static function GITLAB(): OAuthProvider
    {
        if (!isset(self::$GITLAB)) {
            self::$GITLAB = new OAuthProvider('gitlab');
        }
        return self::$GITLAB;
    }
    public static function GOOGLE(): OAuthProvider
    {
        if (!isset(self::$GOOGLE)) {
            self::$GOOGLE = new OAuthProvider('google');
        }
        return self::$GOOGLE;
    }
    public static function LINKEDIN(): OAuthProvider
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new OAuthProvider('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function MICROSOFT(): OAuthProvider
    {
        if (!isset(self::$MICROSOFT)) {
            self::$MICROSOFT = new OAuthProvider('microsoft');
        }
        return self::$MICROSOFT;
    }
    public static function NOTION(): OAuthProvider
    {
        if (!isset(self::$NOTION)) {
            self::$NOTION = new OAuthProvider('notion');
        }
        return self::$NOTION;
    }
    public static function OIDC(): OAuthProvider
    {
        if (!isset(self::$OIDC)) {
            self::$OIDC = new OAuthProvider('oidc');
        }
        return self::$OIDC;
    }
    public static function OKTA(): OAuthProvider
    {
        if (!isset(self::$OKTA)) {
            self::$OKTA = new OAuthProvider('okta');
        }
        return self::$OKTA;
    }
    public static function PAYPAL(): OAuthProvider
    {
        if (!isset(self::$PAYPAL)) {
            self::$PAYPAL = new OAuthProvider('paypal');
        }
        return self::$PAYPAL;
    }
    public static function PAYPALSANDBOX(): OAuthProvider
    {
        if (!isset(self::$PAYPALSANDBOX)) {
            self::$PAYPALSANDBOX = new OAuthProvider('paypalSandbox');
        }
        return self::$PAYPALSANDBOX;
    }
    public static function PODIO(): OAuthProvider
    {
        if (!isset(self::$PODIO)) {
            self::$PODIO = new OAuthProvider('podio');
        }
        return self::$PODIO;
    }
    public static function SALESFORCE(): OAuthProvider
    {
        if (!isset(self::$SALESFORCE)) {
            self::$SALESFORCE = new OAuthProvider('salesforce');
        }
        return self::$SALESFORCE;
    }
    public static function SLACK(): OAuthProvider
    {
        if (!isset(self::$SLACK)) {
            self::$SLACK = new OAuthProvider('slack');
        }
        return self::$SLACK;
    }
    public static function SPOTIFY(): OAuthProvider
    {
        if (!isset(self::$SPOTIFY)) {
            self::$SPOTIFY = new OAuthProvider('spotify');
        }
        return self::$SPOTIFY;
    }
    public static function STRIPE(): OAuthProvider
    {
        if (!isset(self::$STRIPE)) {
            self::$STRIPE = new OAuthProvider('stripe');
        }
        return self::$STRIPE;
    }
    public static function TRADESHIFT(): OAuthProvider
    {
        if (!isset(self::$TRADESHIFT)) {
            self::$TRADESHIFT = new OAuthProvider('tradeshift');
        }
        return self::$TRADESHIFT;
    }
    public static function TRADESHIFTBOX(): OAuthProvider
    {
        if (!isset(self::$TRADESHIFTBOX)) {
            self::$TRADESHIFTBOX = new OAuthProvider('tradeshiftBox');
        }
        return self::$TRADESHIFTBOX;
    }
    public static function TWITCH(): OAuthProvider
    {
        if (!isset(self::$TWITCH)) {
            self::$TWITCH = new OAuthProvider('twitch');
        }
        return self::$TWITCH;
    }
    public static function WORDPRESS(): OAuthProvider
    {
        if (!isset(self::$WORDPRESS)) {
            self::$WORDPRESS = new OAuthProvider('wordpress');
        }
        return self::$WORDPRESS;
    }
    public static function YAHOO(): OAuthProvider
    {
        if (!isset(self::$YAHOO)) {
            self::$YAHOO = new OAuthProvider('yahoo');
        }
        return self::$YAHOO;
    }
    public static function YAMMER(): OAuthProvider
    {
        if (!isset(self::$YAMMER)) {
            self::$YAMMER = new OAuthProvider('yammer');
        }
        return self::$YAMMER;
    }
    public static function YANDEX(): OAuthProvider
    {
        if (!isset(self::$YANDEX)) {
            self::$YANDEX = new OAuthProvider('yandex');
        }
        return self::$YANDEX;
    }
    public static function ZOHO(): OAuthProvider
    {
        if (!isset(self::$ZOHO)) {
            self::$ZOHO = new OAuthProvider('zoho');
        }
        return self::$ZOHO;
    }
    public static function ZOOM(): OAuthProvider
    {
        if (!isset(self::$ZOOM)) {
            self::$ZOOM = new OAuthProvider('zoom');
        }
        return self::$ZOOM;
    }
    public static function MOCK(): OAuthProvider
    {
        if (!isset(self::$MOCK)) {
            self::$MOCK = new OAuthProvider('mock');
        }
        return self::$MOCK;
    }
}