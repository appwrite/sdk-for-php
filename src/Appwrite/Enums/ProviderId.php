<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProviderId implements JsonSerializable
{
    private static ProviderId $AMAZON;
    private static ProviderId $APPLE;
    private static ProviderId $AUTH0;
    private static ProviderId $AUTHENTIK;
    private static ProviderId $AUTODESK;
    private static ProviderId $BITBUCKET;
    private static ProviderId $BITLY;
    private static ProviderId $BOX;
    private static ProviderId $DAILYMOTION;
    private static ProviderId $DISCORD;
    private static ProviderId $DISQUS;
    private static ProviderId $DROPBOX;
    private static ProviderId $ETSY;
    private static ProviderId $FACEBOOK;
    private static ProviderId $FIGMA;
    private static ProviderId $FUSIONAUTH;
    private static ProviderId $GITHUB;
    private static ProviderId $GITLAB;
    private static ProviderId $GOOGLE;
    private static ProviderId $KEYCLOAK;
    private static ProviderId $KICK;
    private static ProviderId $LINKEDIN;
    private static ProviderId $MICROSOFT;
    private static ProviderId $NOTION;
    private static ProviderId $OIDC;
    private static ProviderId $OKTA;
    private static ProviderId $PAYPAL;
    private static ProviderId $PAYPALSANDBOX;
    private static ProviderId $PODIO;
    private static ProviderId $SALESFORCE;
    private static ProviderId $SLACK;
    private static ProviderId $SPOTIFY;
    private static ProviderId $STRIPE;
    private static ProviderId $TRADESHIFT;
    private static ProviderId $TRADESHIFTBOX;
    private static ProviderId $TWITCH;
    private static ProviderId $WORDPRESS;
    private static ProviderId $X;
    private static ProviderId $YAHOO;
    private static ProviderId $YAMMER;
    private static ProviderId $YANDEX;
    private static ProviderId $ZOHO;
    private static ProviderId $ZOOM;
    private static ProviderId $MOCK;
    private static ProviderId $MOCKUNVERIFIED;
    private static ProviderId $GITHUBIMAGINE;
    private static ProviderId $GOOGLEIMAGINE;

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

    public static function AMAZON(): ProviderId
    {
        if (!isset(self::$AMAZON)) {
            self::$AMAZON = new ProviderId('amazon');
        }
        return self::$AMAZON;
    }
    public static function APPLE(): ProviderId
    {
        if (!isset(self::$APPLE)) {
            self::$APPLE = new ProviderId('apple');
        }
        return self::$APPLE;
    }
    public static function AUTH0(): ProviderId
    {
        if (!isset(self::$AUTH0)) {
            self::$AUTH0 = new ProviderId('auth0');
        }
        return self::$AUTH0;
    }
    public static function AUTHENTIK(): ProviderId
    {
        if (!isset(self::$AUTHENTIK)) {
            self::$AUTHENTIK = new ProviderId('authentik');
        }
        return self::$AUTHENTIK;
    }
    public static function AUTODESK(): ProviderId
    {
        if (!isset(self::$AUTODESK)) {
            self::$AUTODESK = new ProviderId('autodesk');
        }
        return self::$AUTODESK;
    }
    public static function BITBUCKET(): ProviderId
    {
        if (!isset(self::$BITBUCKET)) {
            self::$BITBUCKET = new ProviderId('bitbucket');
        }
        return self::$BITBUCKET;
    }
    public static function BITLY(): ProviderId
    {
        if (!isset(self::$BITLY)) {
            self::$BITLY = new ProviderId('bitly');
        }
        return self::$BITLY;
    }
    public static function BOX(): ProviderId
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new ProviderId('box');
        }
        return self::$BOX;
    }
    public static function DAILYMOTION(): ProviderId
    {
        if (!isset(self::$DAILYMOTION)) {
            self::$DAILYMOTION = new ProviderId('dailymotion');
        }
        return self::$DAILYMOTION;
    }
    public static function DISCORD(): ProviderId
    {
        if (!isset(self::$DISCORD)) {
            self::$DISCORD = new ProviderId('discord');
        }
        return self::$DISCORD;
    }
    public static function DISQUS(): ProviderId
    {
        if (!isset(self::$DISQUS)) {
            self::$DISQUS = new ProviderId('disqus');
        }
        return self::$DISQUS;
    }
    public static function DROPBOX(): ProviderId
    {
        if (!isset(self::$DROPBOX)) {
            self::$DROPBOX = new ProviderId('dropbox');
        }
        return self::$DROPBOX;
    }
    public static function ETSY(): ProviderId
    {
        if (!isset(self::$ETSY)) {
            self::$ETSY = new ProviderId('etsy');
        }
        return self::$ETSY;
    }
    public static function FACEBOOK(): ProviderId
    {
        if (!isset(self::$FACEBOOK)) {
            self::$FACEBOOK = new ProviderId('facebook');
        }
        return self::$FACEBOOK;
    }
    public static function FIGMA(): ProviderId
    {
        if (!isset(self::$FIGMA)) {
            self::$FIGMA = new ProviderId('figma');
        }
        return self::$FIGMA;
    }
    public static function FUSIONAUTH(): ProviderId
    {
        if (!isset(self::$FUSIONAUTH)) {
            self::$FUSIONAUTH = new ProviderId('fusionauth');
        }
        return self::$FUSIONAUTH;
    }
    public static function GITHUB(): ProviderId
    {
        if (!isset(self::$GITHUB)) {
            self::$GITHUB = new ProviderId('github');
        }
        return self::$GITHUB;
    }
    public static function GITLAB(): ProviderId
    {
        if (!isset(self::$GITLAB)) {
            self::$GITLAB = new ProviderId('gitlab');
        }
        return self::$GITLAB;
    }
    public static function GOOGLE(): ProviderId
    {
        if (!isset(self::$GOOGLE)) {
            self::$GOOGLE = new ProviderId('google');
        }
        return self::$GOOGLE;
    }
    public static function KEYCLOAK(): ProviderId
    {
        if (!isset(self::$KEYCLOAK)) {
            self::$KEYCLOAK = new ProviderId('keycloak');
        }
        return self::$KEYCLOAK;
    }
    public static function KICK(): ProviderId
    {
        if (!isset(self::$KICK)) {
            self::$KICK = new ProviderId('kick');
        }
        return self::$KICK;
    }
    public static function LINKEDIN(): ProviderId
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new ProviderId('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function MICROSOFT(): ProviderId
    {
        if (!isset(self::$MICROSOFT)) {
            self::$MICROSOFT = new ProviderId('microsoft');
        }
        return self::$MICROSOFT;
    }
    public static function NOTION(): ProviderId
    {
        if (!isset(self::$NOTION)) {
            self::$NOTION = new ProviderId('notion');
        }
        return self::$NOTION;
    }
    public static function OIDC(): ProviderId
    {
        if (!isset(self::$OIDC)) {
            self::$OIDC = new ProviderId('oidc');
        }
        return self::$OIDC;
    }
    public static function OKTA(): ProviderId
    {
        if (!isset(self::$OKTA)) {
            self::$OKTA = new ProviderId('okta');
        }
        return self::$OKTA;
    }
    public static function PAYPAL(): ProviderId
    {
        if (!isset(self::$PAYPAL)) {
            self::$PAYPAL = new ProviderId('paypal');
        }
        return self::$PAYPAL;
    }
    public static function PAYPALSANDBOX(): ProviderId
    {
        if (!isset(self::$PAYPALSANDBOX)) {
            self::$PAYPALSANDBOX = new ProviderId('paypalSandbox');
        }
        return self::$PAYPALSANDBOX;
    }
    public static function PODIO(): ProviderId
    {
        if (!isset(self::$PODIO)) {
            self::$PODIO = new ProviderId('podio');
        }
        return self::$PODIO;
    }
    public static function SALESFORCE(): ProviderId
    {
        if (!isset(self::$SALESFORCE)) {
            self::$SALESFORCE = new ProviderId('salesforce');
        }
        return self::$SALESFORCE;
    }
    public static function SLACK(): ProviderId
    {
        if (!isset(self::$SLACK)) {
            self::$SLACK = new ProviderId('slack');
        }
        return self::$SLACK;
    }
    public static function SPOTIFY(): ProviderId
    {
        if (!isset(self::$SPOTIFY)) {
            self::$SPOTIFY = new ProviderId('spotify');
        }
        return self::$SPOTIFY;
    }
    public static function STRIPE(): ProviderId
    {
        if (!isset(self::$STRIPE)) {
            self::$STRIPE = new ProviderId('stripe');
        }
        return self::$STRIPE;
    }
    public static function TRADESHIFT(): ProviderId
    {
        if (!isset(self::$TRADESHIFT)) {
            self::$TRADESHIFT = new ProviderId('tradeshift');
        }
        return self::$TRADESHIFT;
    }
    public static function TRADESHIFTBOX(): ProviderId
    {
        if (!isset(self::$TRADESHIFTBOX)) {
            self::$TRADESHIFTBOX = new ProviderId('tradeshiftBox');
        }
        return self::$TRADESHIFTBOX;
    }
    public static function TWITCH(): ProviderId
    {
        if (!isset(self::$TWITCH)) {
            self::$TWITCH = new ProviderId('twitch');
        }
        return self::$TWITCH;
    }
    public static function WORDPRESS(): ProviderId
    {
        if (!isset(self::$WORDPRESS)) {
            self::$WORDPRESS = new ProviderId('wordpress');
        }
        return self::$WORDPRESS;
    }
    public static function X(): ProviderId
    {
        if (!isset(self::$X)) {
            self::$X = new ProviderId('x');
        }
        return self::$X;
    }
    public static function YAHOO(): ProviderId
    {
        if (!isset(self::$YAHOO)) {
            self::$YAHOO = new ProviderId('yahoo');
        }
        return self::$YAHOO;
    }
    public static function YAMMER(): ProviderId
    {
        if (!isset(self::$YAMMER)) {
            self::$YAMMER = new ProviderId('yammer');
        }
        return self::$YAMMER;
    }
    public static function YANDEX(): ProviderId
    {
        if (!isset(self::$YANDEX)) {
            self::$YANDEX = new ProviderId('yandex');
        }
        return self::$YANDEX;
    }
    public static function ZOHO(): ProviderId
    {
        if (!isset(self::$ZOHO)) {
            self::$ZOHO = new ProviderId('zoho');
        }
        return self::$ZOHO;
    }
    public static function ZOOM(): ProviderId
    {
        if (!isset(self::$ZOOM)) {
            self::$ZOOM = new ProviderId('zoom');
        }
        return self::$ZOOM;
    }
    public static function MOCK(): ProviderId
    {
        if (!isset(self::$MOCK)) {
            self::$MOCK = new ProviderId('mock');
        }
        return self::$MOCK;
    }
    public static function MOCKUNVERIFIED(): ProviderId
    {
        if (!isset(self::$MOCKUNVERIFIED)) {
            self::$MOCKUNVERIFIED = new ProviderId('mock-unverified');
        }
        return self::$MOCKUNVERIFIED;
    }
    public static function GITHUBIMAGINE(): ProviderId
    {
        if (!isset(self::$GITHUBIMAGINE)) {
            self::$GITHUBIMAGINE = new ProviderId('githubImagine');
        }
        return self::$GITHUBIMAGINE;
    }
    public static function GOOGLEIMAGINE(): ProviderId
    {
        if (!isset(self::$GOOGLEIMAGINE)) {
            self::$GOOGLEIMAGINE = new ProviderId('googleImagine');
        }
        return self::$GOOGLEIMAGINE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'amazon' => self::AMAZON(),
            'apple' => self::APPLE(),
            'auth0' => self::AUTH0(),
            'authentik' => self::AUTHENTIK(),
            'autodesk' => self::AUTODESK(),
            'bitbucket' => self::BITBUCKET(),
            'bitly' => self::BITLY(),
            'box' => self::BOX(),
            'dailymotion' => self::DAILYMOTION(),
            'discord' => self::DISCORD(),
            'disqus' => self::DISQUS(),
            'dropbox' => self::DROPBOX(),
            'etsy' => self::ETSY(),
            'facebook' => self::FACEBOOK(),
            'figma' => self::FIGMA(),
            'fusionauth' => self::FUSIONAUTH(),
            'github' => self::GITHUB(),
            'gitlab' => self::GITLAB(),
            'google' => self::GOOGLE(),
            'keycloak' => self::KEYCLOAK(),
            'kick' => self::KICK(),
            'linkedin' => self::LINKEDIN(),
            'microsoft' => self::MICROSOFT(),
            'notion' => self::NOTION(),
            'oidc' => self::OIDC(),
            'okta' => self::OKTA(),
            'paypal' => self::PAYPAL(),
            'paypalSandbox' => self::PAYPALSANDBOX(),
            'podio' => self::PODIO(),
            'salesforce' => self::SALESFORCE(),
            'slack' => self::SLACK(),
            'spotify' => self::SPOTIFY(),
            'stripe' => self::STRIPE(),
            'tradeshift' => self::TRADESHIFT(),
            'tradeshiftBox' => self::TRADESHIFTBOX(),
            'twitch' => self::TWITCH(),
            'wordpress' => self::WORDPRESS(),
            'x' => self::X(),
            'yahoo' => self::YAHOO(),
            'yammer' => self::YAMMER(),
            'yandex' => self::YANDEX(),
            'zoho' => self::ZOHO(),
            'zoom' => self::ZOOM(),
            'mock' => self::MOCK(),
            'mock-unverified' => self::MOCKUNVERIFIED(),
            'githubImagine' => self::GITHUBIMAGINE(),
            'googleImagine' => self::GOOGLEIMAGINE(),
            default => throw new \InvalidArgumentException('Unknown ProviderId value: ' . $value),
        };
    }
}
