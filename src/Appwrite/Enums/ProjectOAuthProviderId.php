<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectOAuthProviderId implements JsonSerializable
{
    private static ProjectOAuthProviderId $AMAZON;
    private static ProjectOAuthProviderId $APPLE;
    private static ProjectOAuthProviderId $AUTH0;
    private static ProjectOAuthProviderId $AUTHENTIK;
    private static ProjectOAuthProviderId $AUTODESK;
    private static ProjectOAuthProviderId $BITBUCKET;
    private static ProjectOAuthProviderId $BITLY;
    private static ProjectOAuthProviderId $BOX;
    private static ProjectOAuthProviderId $DAILYMOTION;
    private static ProjectOAuthProviderId $DISCORD;
    private static ProjectOAuthProviderId $DISQUS;
    private static ProjectOAuthProviderId $DROPBOX;
    private static ProjectOAuthProviderId $ETSY;
    private static ProjectOAuthProviderId $FACEBOOK;
    private static ProjectOAuthProviderId $FIGMA;
    private static ProjectOAuthProviderId $FUSIONAUTH;
    private static ProjectOAuthProviderId $GITHUB;
    private static ProjectOAuthProviderId $GITLAB;
    private static ProjectOAuthProviderId $GOOGLE;
    private static ProjectOAuthProviderId $KEYCLOAK;
    private static ProjectOAuthProviderId $KICK;
    private static ProjectOAuthProviderId $LINKEDIN;
    private static ProjectOAuthProviderId $MICROSOFT;
    private static ProjectOAuthProviderId $NOTION;
    private static ProjectOAuthProviderId $OIDC;
    private static ProjectOAuthProviderId $OKTA;
    private static ProjectOAuthProviderId $PAYPAL;
    private static ProjectOAuthProviderId $PAYPALSANDBOX;
    private static ProjectOAuthProviderId $PODIO;
    private static ProjectOAuthProviderId $SALESFORCE;
    private static ProjectOAuthProviderId $SLACK;
    private static ProjectOAuthProviderId $SPOTIFY;
    private static ProjectOAuthProviderId $STRIPE;
    private static ProjectOAuthProviderId $TRADESHIFT;
    private static ProjectOAuthProviderId $TRADESHIFTBOX;
    private static ProjectOAuthProviderId $TWITCH;
    private static ProjectOAuthProviderId $WORDPRESS;
    private static ProjectOAuthProviderId $X;
    private static ProjectOAuthProviderId $YAHOO;
    private static ProjectOAuthProviderId $YAMMER;
    private static ProjectOAuthProviderId $YANDEX;
    private static ProjectOAuthProviderId $ZOHO;
    private static ProjectOAuthProviderId $ZOOM;
    private static ProjectOAuthProviderId $GITHUBIMAGINE;
    private static ProjectOAuthProviderId $GOOGLEIMAGINE;

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

    public static function AMAZON(): ProjectOAuthProviderId
    {
        if (!isset(self::$AMAZON)) {
            self::$AMAZON = new ProjectOAuthProviderId('amazon');
        }
        return self::$AMAZON;
    }
    public static function APPLE(): ProjectOAuthProviderId
    {
        if (!isset(self::$APPLE)) {
            self::$APPLE = new ProjectOAuthProviderId('apple');
        }
        return self::$APPLE;
    }
    public static function AUTH0(): ProjectOAuthProviderId
    {
        if (!isset(self::$AUTH0)) {
            self::$AUTH0 = new ProjectOAuthProviderId('auth0');
        }
        return self::$AUTH0;
    }
    public static function AUTHENTIK(): ProjectOAuthProviderId
    {
        if (!isset(self::$AUTHENTIK)) {
            self::$AUTHENTIK = new ProjectOAuthProviderId('authentik');
        }
        return self::$AUTHENTIK;
    }
    public static function AUTODESK(): ProjectOAuthProviderId
    {
        if (!isset(self::$AUTODESK)) {
            self::$AUTODESK = new ProjectOAuthProviderId('autodesk');
        }
        return self::$AUTODESK;
    }
    public static function BITBUCKET(): ProjectOAuthProviderId
    {
        if (!isset(self::$BITBUCKET)) {
            self::$BITBUCKET = new ProjectOAuthProviderId('bitbucket');
        }
        return self::$BITBUCKET;
    }
    public static function BITLY(): ProjectOAuthProviderId
    {
        if (!isset(self::$BITLY)) {
            self::$BITLY = new ProjectOAuthProviderId('bitly');
        }
        return self::$BITLY;
    }
    public static function BOX(): ProjectOAuthProviderId
    {
        if (!isset(self::$BOX)) {
            self::$BOX = new ProjectOAuthProviderId('box');
        }
        return self::$BOX;
    }
    public static function DAILYMOTION(): ProjectOAuthProviderId
    {
        if (!isset(self::$DAILYMOTION)) {
            self::$DAILYMOTION = new ProjectOAuthProviderId('dailymotion');
        }
        return self::$DAILYMOTION;
    }
    public static function DISCORD(): ProjectOAuthProviderId
    {
        if (!isset(self::$DISCORD)) {
            self::$DISCORD = new ProjectOAuthProviderId('discord');
        }
        return self::$DISCORD;
    }
    public static function DISQUS(): ProjectOAuthProviderId
    {
        if (!isset(self::$DISQUS)) {
            self::$DISQUS = new ProjectOAuthProviderId('disqus');
        }
        return self::$DISQUS;
    }
    public static function DROPBOX(): ProjectOAuthProviderId
    {
        if (!isset(self::$DROPBOX)) {
            self::$DROPBOX = new ProjectOAuthProviderId('dropbox');
        }
        return self::$DROPBOX;
    }
    public static function ETSY(): ProjectOAuthProviderId
    {
        if (!isset(self::$ETSY)) {
            self::$ETSY = new ProjectOAuthProviderId('etsy');
        }
        return self::$ETSY;
    }
    public static function FACEBOOK(): ProjectOAuthProviderId
    {
        if (!isset(self::$FACEBOOK)) {
            self::$FACEBOOK = new ProjectOAuthProviderId('facebook');
        }
        return self::$FACEBOOK;
    }
    public static function FIGMA(): ProjectOAuthProviderId
    {
        if (!isset(self::$FIGMA)) {
            self::$FIGMA = new ProjectOAuthProviderId('figma');
        }
        return self::$FIGMA;
    }
    public static function FUSIONAUTH(): ProjectOAuthProviderId
    {
        if (!isset(self::$FUSIONAUTH)) {
            self::$FUSIONAUTH = new ProjectOAuthProviderId('fusionauth');
        }
        return self::$FUSIONAUTH;
    }
    public static function GITHUB(): ProjectOAuthProviderId
    {
        if (!isset(self::$GITHUB)) {
            self::$GITHUB = new ProjectOAuthProviderId('github');
        }
        return self::$GITHUB;
    }
    public static function GITLAB(): ProjectOAuthProviderId
    {
        if (!isset(self::$GITLAB)) {
            self::$GITLAB = new ProjectOAuthProviderId('gitlab');
        }
        return self::$GITLAB;
    }
    public static function GOOGLE(): ProjectOAuthProviderId
    {
        if (!isset(self::$GOOGLE)) {
            self::$GOOGLE = new ProjectOAuthProviderId('google');
        }
        return self::$GOOGLE;
    }
    public static function KEYCLOAK(): ProjectOAuthProviderId
    {
        if (!isset(self::$KEYCLOAK)) {
            self::$KEYCLOAK = new ProjectOAuthProviderId('keycloak');
        }
        return self::$KEYCLOAK;
    }
    public static function KICK(): ProjectOAuthProviderId
    {
        if (!isset(self::$KICK)) {
            self::$KICK = new ProjectOAuthProviderId('kick');
        }
        return self::$KICK;
    }
    public static function LINKEDIN(): ProjectOAuthProviderId
    {
        if (!isset(self::$LINKEDIN)) {
            self::$LINKEDIN = new ProjectOAuthProviderId('linkedin');
        }
        return self::$LINKEDIN;
    }
    public static function MICROSOFT(): ProjectOAuthProviderId
    {
        if (!isset(self::$MICROSOFT)) {
            self::$MICROSOFT = new ProjectOAuthProviderId('microsoft');
        }
        return self::$MICROSOFT;
    }
    public static function NOTION(): ProjectOAuthProviderId
    {
        if (!isset(self::$NOTION)) {
            self::$NOTION = new ProjectOAuthProviderId('notion');
        }
        return self::$NOTION;
    }
    public static function OIDC(): ProjectOAuthProviderId
    {
        if (!isset(self::$OIDC)) {
            self::$OIDC = new ProjectOAuthProviderId('oidc');
        }
        return self::$OIDC;
    }
    public static function OKTA(): ProjectOAuthProviderId
    {
        if (!isset(self::$OKTA)) {
            self::$OKTA = new ProjectOAuthProviderId('okta');
        }
        return self::$OKTA;
    }
    public static function PAYPAL(): ProjectOAuthProviderId
    {
        if (!isset(self::$PAYPAL)) {
            self::$PAYPAL = new ProjectOAuthProviderId('paypal');
        }
        return self::$PAYPAL;
    }
    public static function PAYPALSANDBOX(): ProjectOAuthProviderId
    {
        if (!isset(self::$PAYPALSANDBOX)) {
            self::$PAYPALSANDBOX = new ProjectOAuthProviderId('paypalSandbox');
        }
        return self::$PAYPALSANDBOX;
    }
    public static function PODIO(): ProjectOAuthProviderId
    {
        if (!isset(self::$PODIO)) {
            self::$PODIO = new ProjectOAuthProviderId('podio');
        }
        return self::$PODIO;
    }
    public static function SALESFORCE(): ProjectOAuthProviderId
    {
        if (!isset(self::$SALESFORCE)) {
            self::$SALESFORCE = new ProjectOAuthProviderId('salesforce');
        }
        return self::$SALESFORCE;
    }
    public static function SLACK(): ProjectOAuthProviderId
    {
        if (!isset(self::$SLACK)) {
            self::$SLACK = new ProjectOAuthProviderId('slack');
        }
        return self::$SLACK;
    }
    public static function SPOTIFY(): ProjectOAuthProviderId
    {
        if (!isset(self::$SPOTIFY)) {
            self::$SPOTIFY = new ProjectOAuthProviderId('spotify');
        }
        return self::$SPOTIFY;
    }
    public static function STRIPE(): ProjectOAuthProviderId
    {
        if (!isset(self::$STRIPE)) {
            self::$STRIPE = new ProjectOAuthProviderId('stripe');
        }
        return self::$STRIPE;
    }
    public static function TRADESHIFT(): ProjectOAuthProviderId
    {
        if (!isset(self::$TRADESHIFT)) {
            self::$TRADESHIFT = new ProjectOAuthProviderId('tradeshift');
        }
        return self::$TRADESHIFT;
    }
    public static function TRADESHIFTBOX(): ProjectOAuthProviderId
    {
        if (!isset(self::$TRADESHIFTBOX)) {
            self::$TRADESHIFTBOX = new ProjectOAuthProviderId('tradeshiftBox');
        }
        return self::$TRADESHIFTBOX;
    }
    public static function TWITCH(): ProjectOAuthProviderId
    {
        if (!isset(self::$TWITCH)) {
            self::$TWITCH = new ProjectOAuthProviderId('twitch');
        }
        return self::$TWITCH;
    }
    public static function WORDPRESS(): ProjectOAuthProviderId
    {
        if (!isset(self::$WORDPRESS)) {
            self::$WORDPRESS = new ProjectOAuthProviderId('wordpress');
        }
        return self::$WORDPRESS;
    }
    public static function X(): ProjectOAuthProviderId
    {
        if (!isset(self::$X)) {
            self::$X = new ProjectOAuthProviderId('x');
        }
        return self::$X;
    }
    public static function YAHOO(): ProjectOAuthProviderId
    {
        if (!isset(self::$YAHOO)) {
            self::$YAHOO = new ProjectOAuthProviderId('yahoo');
        }
        return self::$YAHOO;
    }
    public static function YAMMER(): ProjectOAuthProviderId
    {
        if (!isset(self::$YAMMER)) {
            self::$YAMMER = new ProjectOAuthProviderId('yammer');
        }
        return self::$YAMMER;
    }
    public static function YANDEX(): ProjectOAuthProviderId
    {
        if (!isset(self::$YANDEX)) {
            self::$YANDEX = new ProjectOAuthProviderId('yandex');
        }
        return self::$YANDEX;
    }
    public static function ZOHO(): ProjectOAuthProviderId
    {
        if (!isset(self::$ZOHO)) {
            self::$ZOHO = new ProjectOAuthProviderId('zoho');
        }
        return self::$ZOHO;
    }
    public static function ZOOM(): ProjectOAuthProviderId
    {
        if (!isset(self::$ZOOM)) {
            self::$ZOOM = new ProjectOAuthProviderId('zoom');
        }
        return self::$ZOOM;
    }
    public static function GITHUBIMAGINE(): ProjectOAuthProviderId
    {
        if (!isset(self::$GITHUBIMAGINE)) {
            self::$GITHUBIMAGINE = new ProjectOAuthProviderId('githubImagine');
        }
        return self::$GITHUBIMAGINE;
    }
    public static function GOOGLEIMAGINE(): ProjectOAuthProviderId
    {
        if (!isset(self::$GOOGLEIMAGINE)) {
            self::$GOOGLEIMAGINE = new ProjectOAuthProviderId('googleImagine');
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
            'githubImagine' => self::GITHUBIMAGINE(),
            'googleImagine' => self::GOOGLEIMAGINE(),
            default => throw new \InvalidArgumentException('Unknown ProjectOAuthProviderId value: ' . $value),
        };
    }
}
