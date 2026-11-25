<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class OAuthProvider implements JsonSerializable, Stringable
{
    private static OAuthProvider $AMAZON;
    private static OAuthProvider $APPLE;
    private static OAuthProvider $APPWRITE;
    private static OAuthProvider $ATLASSIAN;
    private static OAuthProvider $AUTH0;
    private static OAuthProvider $AUTHENTIK;
    private static OAuthProvider $AUTODESK;
    private static OAuthProvider $BITBUCKET;
    private static OAuthProvider $BITLY;
    private static OAuthProvider $BOX;
    private static OAuthProvider $CLOUDFLARE;
    private static OAuthProvider $DAILYMOTION;
    private static OAuthProvider $DISCORD;
    private static OAuthProvider $DISQUS;
    private static OAuthProvider $DROPBOX;
    private static OAuthProvider $ETSY;
    private static OAuthProvider $FACEBOOK;
    private static OAuthProvider $FIGMA;
    private static OAuthProvider $FUSIONAUTH;
    private static OAuthProvider $GITHUB;
    private static OAuthProvider $GITLAB;
    private static OAuthProvider $GOOGLE;
    private static OAuthProvider $HUGGINGFACE;
    private static OAuthProvider $INSTAGRAM;
    private static OAuthProvider $KAKAO;
    private static OAuthProvider $KEYCLOAK;
    private static OAuthProvider $KICK;
    private static OAuthProvider $LINE;
    private static OAuthProvider $LINEAR;
    private static OAuthProvider $LINKEDIN;
    private static OAuthProvider $MICROSOFT;
    private static OAuthProvider $NAVER;
    private static OAuthProvider $NETLIFY;
    private static OAuthProvider $NOTION;
    private static OAuthProvider $OIDC;
    private static OAuthProvider $OKTA;
    private static OAuthProvider $PATREON;
    private static OAuthProvider $PAYPAL;
    private static OAuthProvider $PAYPALSANDBOX;
    private static OAuthProvider $PODIO;
    private static OAuthProvider $RAILWAY;
    private static OAuthProvider $REDDIT;
    private static OAuthProvider $RESEND;
    private static OAuthProvider $ROBLOX;
    private static OAuthProvider $SALESFORCE;
    private static OAuthProvider $SLACK;
    private static OAuthProvider $SPOTIFY;
    private static OAuthProvider $STRAVA;
    private static OAuthProvider $STRIPE;
    private static OAuthProvider $TIKTOK;
    private static OAuthProvider $TRADESHIFT;
    private static OAuthProvider $TRADESHIFTBOX;
    private static OAuthProvider $TWITCH;
    private static OAuthProvider $VERCEL;
    private static OAuthProvider $VIPPS;
    private static OAuthProvider $VIPPSSANDBOX;
    private static OAuthProvider $VK;
    private static OAuthProvider $WEBFLOW;
    private static OAuthProvider $WORDPRESS;
    private static OAuthProvider $WORKOS;
    private static OAuthProvider $X;
    private static OAuthProvider $YAHOO;
    private static OAuthProvider $YAMMER;
    private static OAuthProvider $YANDEX;
    private static OAuthProvider $ZOHO;
    private static OAuthProvider $ZOOM;

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

    public static function AMAZON(): OAuthProvider
    {
        self::$AMAZON ??= new OAuthProvider('amazon');

        return self::$AMAZON;
    }
    public static function APPLE(): OAuthProvider
    {
        self::$APPLE ??= new OAuthProvider('apple');

        return self::$APPLE;
    }
    public static function APPWRITE(): OAuthProvider
    {
        self::$APPWRITE ??= new OAuthProvider('appwrite');

        return self::$APPWRITE;
    }
    public static function ATLASSIAN(): OAuthProvider
    {
        self::$ATLASSIAN ??= new OAuthProvider('atlassian');

        return self::$ATLASSIAN;
    }
    public static function AUTH0(): OAuthProvider
    {
        self::$AUTH0 ??= new OAuthProvider('auth0');

        return self::$AUTH0;
    }
    public static function AUTHENTIK(): OAuthProvider
    {
        self::$AUTHENTIK ??= new OAuthProvider('authentik');

        return self::$AUTHENTIK;
    }
    public static function AUTODESK(): OAuthProvider
    {
        self::$AUTODESK ??= new OAuthProvider('autodesk');

        return self::$AUTODESK;
    }
    public static function BITBUCKET(): OAuthProvider
    {
        self::$BITBUCKET ??= new OAuthProvider('bitbucket');

        return self::$BITBUCKET;
    }
    public static function BITLY(): OAuthProvider
    {
        self::$BITLY ??= new OAuthProvider('bitly');

        return self::$BITLY;
    }
    public static function BOX(): OAuthProvider
    {
        self::$BOX ??= new OAuthProvider('box');

        return self::$BOX;
    }
    public static function CLOUDFLARE(): OAuthProvider
    {
        self::$CLOUDFLARE ??= new OAuthProvider('cloudflare');

        return self::$CLOUDFLARE;
    }
    public static function DAILYMOTION(): OAuthProvider
    {
        self::$DAILYMOTION ??= new OAuthProvider('dailymotion');

        return self::$DAILYMOTION;
    }
    public static function DISCORD(): OAuthProvider
    {
        self::$DISCORD ??= new OAuthProvider('discord');

        return self::$DISCORD;
    }
    public static function DISQUS(): OAuthProvider
    {
        self::$DISQUS ??= new OAuthProvider('disqus');

        return self::$DISQUS;
    }
    public static function DROPBOX(): OAuthProvider
    {
        self::$DROPBOX ??= new OAuthProvider('dropbox');

        return self::$DROPBOX;
    }
    public static function ETSY(): OAuthProvider
    {
        self::$ETSY ??= new OAuthProvider('etsy');

        return self::$ETSY;
    }
    public static function FACEBOOK(): OAuthProvider
    {
        self::$FACEBOOK ??= new OAuthProvider('facebook');

        return self::$FACEBOOK;
    }
    public static function FIGMA(): OAuthProvider
    {
        self::$FIGMA ??= new OAuthProvider('figma');

        return self::$FIGMA;
    }
    public static function FUSIONAUTH(): OAuthProvider
    {
        self::$FUSIONAUTH ??= new OAuthProvider('fusionauth');

        return self::$FUSIONAUTH;
    }
    public static function GITHUB(): OAuthProvider
    {
        self::$GITHUB ??= new OAuthProvider('github');

        return self::$GITHUB;
    }
    public static function GITLAB(): OAuthProvider
    {
        self::$GITLAB ??= new OAuthProvider('gitlab');

        return self::$GITLAB;
    }
    public static function GOOGLE(): OAuthProvider
    {
        self::$GOOGLE ??= new OAuthProvider('google');

        return self::$GOOGLE;
    }
    public static function HUGGINGFACE(): OAuthProvider
    {
        self::$HUGGINGFACE ??= new OAuthProvider('huggingface');

        return self::$HUGGINGFACE;
    }
    public static function INSTAGRAM(): OAuthProvider
    {
        self::$INSTAGRAM ??= new OAuthProvider('instagram');

        return self::$INSTAGRAM;
    }
    public static function KAKAO(): OAuthProvider
    {
        self::$KAKAO ??= new OAuthProvider('kakao');

        return self::$KAKAO;
    }
    public static function KEYCLOAK(): OAuthProvider
    {
        self::$KEYCLOAK ??= new OAuthProvider('keycloak');

        return self::$KEYCLOAK;
    }
    public static function KICK(): OAuthProvider
    {
        self::$KICK ??= new OAuthProvider('kick');

        return self::$KICK;
    }
    public static function LINE(): OAuthProvider
    {
        self::$LINE ??= new OAuthProvider('line');

        return self::$LINE;
    }
    public static function LINEAR(): OAuthProvider
    {
        self::$LINEAR ??= new OAuthProvider('linear');

        return self::$LINEAR;
    }
    public static function LINKEDIN(): OAuthProvider
    {
        self::$LINKEDIN ??= new OAuthProvider('linkedin');

        return self::$LINKEDIN;
    }
    public static function MICROSOFT(): OAuthProvider
    {
        self::$MICROSOFT ??= new OAuthProvider('microsoft');

        return self::$MICROSOFT;
    }
    public static function NAVER(): OAuthProvider
    {
        self::$NAVER ??= new OAuthProvider('naver');

        return self::$NAVER;
    }
    public static function NETLIFY(): OAuthProvider
    {
        self::$NETLIFY ??= new OAuthProvider('netlify');

        return self::$NETLIFY;
    }
    public static function NOTION(): OAuthProvider
    {
        self::$NOTION ??= new OAuthProvider('notion');

        return self::$NOTION;
    }
    public static function OIDC(): OAuthProvider
    {
        self::$OIDC ??= new OAuthProvider('oidc');

        return self::$OIDC;
    }
    public static function OKTA(): OAuthProvider
    {
        self::$OKTA ??= new OAuthProvider('okta');

        return self::$OKTA;
    }
    public static function PATREON(): OAuthProvider
    {
        self::$PATREON ??= new OAuthProvider('patreon');

        return self::$PATREON;
    }
    public static function PAYPAL(): OAuthProvider
    {
        self::$PAYPAL ??= new OAuthProvider('paypal');

        return self::$PAYPAL;
    }
    public static function PAYPALSANDBOX(): OAuthProvider
    {
        self::$PAYPALSANDBOX ??= new OAuthProvider('paypalSandbox');

        return self::$PAYPALSANDBOX;
    }
    public static function PODIO(): OAuthProvider
    {
        self::$PODIO ??= new OAuthProvider('podio');

        return self::$PODIO;
    }
    public static function RAILWAY(): OAuthProvider
    {
        self::$RAILWAY ??= new OAuthProvider('railway');

        return self::$RAILWAY;
    }
    public static function REDDIT(): OAuthProvider
    {
        self::$REDDIT ??= new OAuthProvider('reddit');

        return self::$REDDIT;
    }
    public static function RESEND(): OAuthProvider
    {
        self::$RESEND ??= new OAuthProvider('resend');

        return self::$RESEND;
    }
    public static function ROBLOX(): OAuthProvider
    {
        self::$ROBLOX ??= new OAuthProvider('roblox');

        return self::$ROBLOX;
    }
    public static function SALESFORCE(): OAuthProvider
    {
        self::$SALESFORCE ??= new OAuthProvider('salesforce');

        return self::$SALESFORCE;
    }
    public static function SLACK(): OAuthProvider
    {
        self::$SLACK ??= new OAuthProvider('slack');

        return self::$SLACK;
    }
    public static function SPOTIFY(): OAuthProvider
    {
        self::$SPOTIFY ??= new OAuthProvider('spotify');

        return self::$SPOTIFY;
    }
    public static function STRAVA(): OAuthProvider
    {
        self::$STRAVA ??= new OAuthProvider('strava');

        return self::$STRAVA;
    }
    public static function STRIPE(): OAuthProvider
    {
        self::$STRIPE ??= new OAuthProvider('stripe');

        return self::$STRIPE;
    }
    public static function TIKTOK(): OAuthProvider
    {
        self::$TIKTOK ??= new OAuthProvider('tiktok');

        return self::$TIKTOK;
    }
    public static function TRADESHIFT(): OAuthProvider
    {
        self::$TRADESHIFT ??= new OAuthProvider('tradeshift');

        return self::$TRADESHIFT;
    }
    public static function TRADESHIFTBOX(): OAuthProvider
    {
        self::$TRADESHIFTBOX ??= new OAuthProvider('tradeshiftBox');

        return self::$TRADESHIFTBOX;
    }
    public static function TWITCH(): OAuthProvider
    {
        self::$TWITCH ??= new OAuthProvider('twitch');

        return self::$TWITCH;
    }
    public static function VERCEL(): OAuthProvider
    {
        self::$VERCEL ??= new OAuthProvider('vercel');

        return self::$VERCEL;
    }
    public static function VIPPS(): OAuthProvider
    {
        self::$VIPPS ??= new OAuthProvider('vipps');

        return self::$VIPPS;
    }
    public static function VIPPSSANDBOX(): OAuthProvider
    {
        self::$VIPPSSANDBOX ??= new OAuthProvider('vippsSandbox');

        return self::$VIPPSSANDBOX;
    }
    public static function VK(): OAuthProvider
    {
        self::$VK ??= new OAuthProvider('vk');

        return self::$VK;
    }
    public static function WEBFLOW(): OAuthProvider
    {
        self::$WEBFLOW ??= new OAuthProvider('webflow');

        return self::$WEBFLOW;
    }
    public static function WORDPRESS(): OAuthProvider
    {
        self::$WORDPRESS ??= new OAuthProvider('wordpress');

        return self::$WORDPRESS;
    }
    public static function WORKOS(): OAuthProvider
    {
        self::$WORKOS ??= new OAuthProvider('workos');

        return self::$WORKOS;
    }
    public static function X(): OAuthProvider
    {
        self::$X ??= new OAuthProvider('x');

        return self::$X;
    }
    public static function YAHOO(): OAuthProvider
    {
        self::$YAHOO ??= new OAuthProvider('yahoo');

        return self::$YAHOO;
    }
    public static function YAMMER(): OAuthProvider
    {
        self::$YAMMER ??= new OAuthProvider('yammer');

        return self::$YAMMER;
    }
    public static function YANDEX(): OAuthProvider
    {
        self::$YANDEX ??= new OAuthProvider('yandex');

        return self::$YANDEX;
    }
    public static function ZOHO(): OAuthProvider
    {
        self::$ZOHO ??= new OAuthProvider('zoho');

        return self::$ZOHO;
    }
    public static function ZOOM(): OAuthProvider
    {
        self::$ZOOM ??= new OAuthProvider('zoom');

        return self::$ZOOM;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'amazon' => self::AMAZON(),
            'apple' => self::APPLE(),
            'appwrite' => self::APPWRITE(),
            'atlassian' => self::ATLASSIAN(),
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
            'instagram' => self::INSTAGRAM(),
            'kakao' => self::KAKAO(),
            'keycloak' => self::KEYCLOAK(),
            'kick' => self::KICK(),
            'line' => self::LINE(),
            'linear' => self::LINEAR(),
            'linkedin' => self::LINKEDIN(),
            'microsoft' => self::MICROSOFT(),
            'naver' => self::NAVER(),
            'netlify' => self::NETLIFY(),
            'notion' => self::NOTION(),
            'oidc' => self::OIDC(),
            'okta' => self::OKTA(),
            'patreon' => self::PATREON(),
            'paypal' => self::PAYPAL(),
            'paypalSandbox' => self::PAYPALSANDBOX(),
            'podio' => self::PODIO(),
            'railway' => self::RAILWAY(),
            'reddit' => self::REDDIT(),
            'resend' => self::RESEND(),
            'roblox' => self::ROBLOX(),
            'salesforce' => self::SALESFORCE(),
            'slack' => self::SLACK(),
            'spotify' => self::SPOTIFY(),
            'strava' => self::STRAVA(),
            'stripe' => self::STRIPE(),
            'tiktok' => self::TIKTOK(),
            'tradeshift' => self::TRADESHIFT(),
            'tradeshiftBox' => self::TRADESHIFTBOX(),
            'twitch' => self::TWITCH(),
            'vercel' => self::VERCEL(),
            'vipps' => self::VIPPS(),
            'vippsSandbox' => self::VIPPSSANDBOX(),
            'vk' => self::VK(),
            'webflow' => self::WEBFLOW(),
            'wordpress' => self::WORDPRESS(),
            'workos' => self::WORKOS(),
            'x' => self::X(),
            'yahoo' => self::YAHOO(),
            'yammer' => self::YAMMER(),
            'yandex' => self::YANDEX(),
            'zoho' => self::ZOHO(),
            'zoom' => self::ZOOM(),
            default => throw new \InvalidArgumentException('Unknown OAuthProvider value: ' . $value),
        };
    }
}
