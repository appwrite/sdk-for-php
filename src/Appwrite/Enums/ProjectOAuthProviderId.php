<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class ProjectOAuthProviderId implements JsonSerializable, Stringable
{
    private static ProjectOAuthProviderId $AMAZON;
    private static ProjectOAuthProviderId $APPLE;
    private static ProjectOAuthProviderId $APPWRITE;
    private static ProjectOAuthProviderId $AUTH0;
    private static ProjectOAuthProviderId $AUTHENTIK;
    private static ProjectOAuthProviderId $AUTODESK;
    private static ProjectOAuthProviderId $BITBUCKET;
    private static ProjectOAuthProviderId $BITLY;
    private static ProjectOAuthProviderId $BOX;
    private static ProjectOAuthProviderId $CLOUDFLARE;
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
    private static ProjectOAuthProviderId $HUGGINGFACE;
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
    private static ProjectOAuthProviderId $RESEND;
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

    public static function AMAZON(): ProjectOAuthProviderId
    {
        self::$AMAZON ??= new ProjectOAuthProviderId('amazon');

        return self::$AMAZON;
    }
    public static function APPLE(): ProjectOAuthProviderId
    {
        self::$APPLE ??= new ProjectOAuthProviderId('apple');

        return self::$APPLE;
    }
    public static function APPWRITE(): ProjectOAuthProviderId
    {
        self::$APPWRITE ??= new ProjectOAuthProviderId('appwrite');

        return self::$APPWRITE;
    }
    public static function AUTH0(): ProjectOAuthProviderId
    {
        self::$AUTH0 ??= new ProjectOAuthProviderId('auth0');

        return self::$AUTH0;
    }
    public static function AUTHENTIK(): ProjectOAuthProviderId
    {
        self::$AUTHENTIK ??= new ProjectOAuthProviderId('authentik');

        return self::$AUTHENTIK;
    }
    public static function AUTODESK(): ProjectOAuthProviderId
    {
        self::$AUTODESK ??= new ProjectOAuthProviderId('autodesk');

        return self::$AUTODESK;
    }
    public static function BITBUCKET(): ProjectOAuthProviderId
    {
        self::$BITBUCKET ??= new ProjectOAuthProviderId('bitbucket');

        return self::$BITBUCKET;
    }
    public static function BITLY(): ProjectOAuthProviderId
    {
        self::$BITLY ??= new ProjectOAuthProviderId('bitly');

        return self::$BITLY;
    }
    public static function BOX(): ProjectOAuthProviderId
    {
        self::$BOX ??= new ProjectOAuthProviderId('box');

        return self::$BOX;
    }
    public static function CLOUDFLARE(): ProjectOAuthProviderId
    {
        self::$CLOUDFLARE ??= new ProjectOAuthProviderId('cloudflare');

        return self::$CLOUDFLARE;
    }
    public static function DAILYMOTION(): ProjectOAuthProviderId
    {
        self::$DAILYMOTION ??= new ProjectOAuthProviderId('dailymotion');

        return self::$DAILYMOTION;
    }
    public static function DISCORD(): ProjectOAuthProviderId
    {
        self::$DISCORD ??= new ProjectOAuthProviderId('discord');

        return self::$DISCORD;
    }
    public static function DISQUS(): ProjectOAuthProviderId
    {
        self::$DISQUS ??= new ProjectOAuthProviderId('disqus');

        return self::$DISQUS;
    }
    public static function DROPBOX(): ProjectOAuthProviderId
    {
        self::$DROPBOX ??= new ProjectOAuthProviderId('dropbox');

        return self::$DROPBOX;
    }
    public static function ETSY(): ProjectOAuthProviderId
    {
        self::$ETSY ??= new ProjectOAuthProviderId('etsy');

        return self::$ETSY;
    }
    public static function FACEBOOK(): ProjectOAuthProviderId
    {
        self::$FACEBOOK ??= new ProjectOAuthProviderId('facebook');

        return self::$FACEBOOK;
    }
    public static function FIGMA(): ProjectOAuthProviderId
    {
        self::$FIGMA ??= new ProjectOAuthProviderId('figma');

        return self::$FIGMA;
    }
    public static function FUSIONAUTH(): ProjectOAuthProviderId
    {
        self::$FUSIONAUTH ??= new ProjectOAuthProviderId('fusionauth');

        return self::$FUSIONAUTH;
    }
    public static function GITHUB(): ProjectOAuthProviderId
    {
        self::$GITHUB ??= new ProjectOAuthProviderId('github');

        return self::$GITHUB;
    }
    public static function GITLAB(): ProjectOAuthProviderId
    {
        self::$GITLAB ??= new ProjectOAuthProviderId('gitlab');

        return self::$GITLAB;
    }
    public static function GOOGLE(): ProjectOAuthProviderId
    {
        self::$GOOGLE ??= new ProjectOAuthProviderId('google');

        return self::$GOOGLE;
    }
    public static function HUGGINGFACE(): ProjectOAuthProviderId
    {
        self::$HUGGINGFACE ??= new ProjectOAuthProviderId('huggingface');

        return self::$HUGGINGFACE;
    }
    public static function KEYCLOAK(): ProjectOAuthProviderId
    {
        self::$KEYCLOAK ??= new ProjectOAuthProviderId('keycloak');

        return self::$KEYCLOAK;
    }
    public static function KICK(): ProjectOAuthProviderId
    {
        self::$KICK ??= new ProjectOAuthProviderId('kick');

        return self::$KICK;
    }
    public static function LINKEDIN(): ProjectOAuthProviderId
    {
        self::$LINKEDIN ??= new ProjectOAuthProviderId('linkedin');

        return self::$LINKEDIN;
    }
    public static function MICROSOFT(): ProjectOAuthProviderId
    {
        self::$MICROSOFT ??= new ProjectOAuthProviderId('microsoft');

        return self::$MICROSOFT;
    }
    public static function NOTION(): ProjectOAuthProviderId
    {
        self::$NOTION ??= new ProjectOAuthProviderId('notion');

        return self::$NOTION;
    }
    public static function OIDC(): ProjectOAuthProviderId
    {
        self::$OIDC ??= new ProjectOAuthProviderId('oidc');

        return self::$OIDC;
    }
    public static function OKTA(): ProjectOAuthProviderId
    {
        self::$OKTA ??= new ProjectOAuthProviderId('okta');

        return self::$OKTA;
    }
    public static function PAYPAL(): ProjectOAuthProviderId
    {
        self::$PAYPAL ??= new ProjectOAuthProviderId('paypal');

        return self::$PAYPAL;
    }
    public static function PAYPALSANDBOX(): ProjectOAuthProviderId
    {
        self::$PAYPALSANDBOX ??= new ProjectOAuthProviderId('paypalSandbox');

        return self::$PAYPALSANDBOX;
    }
    public static function PODIO(): ProjectOAuthProviderId
    {
        self::$PODIO ??= new ProjectOAuthProviderId('podio');

        return self::$PODIO;
    }
    public static function RESEND(): ProjectOAuthProviderId
    {
        self::$RESEND ??= new ProjectOAuthProviderId('resend');

        return self::$RESEND;
    }
    public static function SALESFORCE(): ProjectOAuthProviderId
    {
        self::$SALESFORCE ??= new ProjectOAuthProviderId('salesforce');

        return self::$SALESFORCE;
    }
    public static function SLACK(): ProjectOAuthProviderId
    {
        self::$SLACK ??= new ProjectOAuthProviderId('slack');

        return self::$SLACK;
    }
    public static function SPOTIFY(): ProjectOAuthProviderId
    {
        self::$SPOTIFY ??= new ProjectOAuthProviderId('spotify');

        return self::$SPOTIFY;
    }
    public static function STRIPE(): ProjectOAuthProviderId
    {
        self::$STRIPE ??= new ProjectOAuthProviderId('stripe');

        return self::$STRIPE;
    }
    public static function TRADESHIFT(): ProjectOAuthProviderId
    {
        self::$TRADESHIFT ??= new ProjectOAuthProviderId('tradeshift');

        return self::$TRADESHIFT;
    }
    public static function TRADESHIFTBOX(): ProjectOAuthProviderId
    {
        self::$TRADESHIFTBOX ??= new ProjectOAuthProviderId('tradeshiftBox');

        return self::$TRADESHIFTBOX;
    }
    public static function TWITCH(): ProjectOAuthProviderId
    {
        self::$TWITCH ??= new ProjectOAuthProviderId('twitch');

        return self::$TWITCH;
    }
    public static function WORDPRESS(): ProjectOAuthProviderId
    {
        self::$WORDPRESS ??= new ProjectOAuthProviderId('wordpress');

        return self::$WORDPRESS;
    }
    public static function X(): ProjectOAuthProviderId
    {
        self::$X ??= new ProjectOAuthProviderId('x');

        return self::$X;
    }
    public static function YAHOO(): ProjectOAuthProviderId
    {
        self::$YAHOO ??= new ProjectOAuthProviderId('yahoo');

        return self::$YAHOO;
    }
    public static function YAMMER(): ProjectOAuthProviderId
    {
        self::$YAMMER ??= new ProjectOAuthProviderId('yammer');

        return self::$YAMMER;
    }
    public static function YANDEX(): ProjectOAuthProviderId
    {
        self::$YANDEX ??= new ProjectOAuthProviderId('yandex');

        return self::$YANDEX;
    }
    public static function ZOHO(): ProjectOAuthProviderId
    {
        self::$ZOHO ??= new ProjectOAuthProviderId('zoho');

        return self::$ZOHO;
    }
    public static function ZOOM(): ProjectOAuthProviderId
    {
        self::$ZOOM ??= new ProjectOAuthProviderId('zoom');

        return self::$ZOOM;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'amazon' => self::AMAZON(),
            'apple' => self::APPLE(),
            'appwrite' => self::APPWRITE(),
            'auth0' => self::AUTH0(),
            'authentik' => self::AUTHENTIK(),
            'autodesk' => self::AUTODESK(),
            'bitbucket' => self::BITBUCKET(),
            'bitly' => self::BITLY(),
            'box' => self::BOX(),
            'cloudflare' => self::CLOUDFLARE(),
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
            'huggingface' => self::HUGGINGFACE(),
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
            'resend' => self::RESEND(),
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
            default => throw new \InvalidArgumentException('Unknown ProjectOAuthProviderId value: ' . $value),
        };
    }
}
