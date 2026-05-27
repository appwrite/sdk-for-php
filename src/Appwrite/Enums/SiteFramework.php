<?php

namespace Appwrite\Enums;

use JsonSerializable;

class SiteFramework implements JsonSerializable
{
    private static SiteFramework $ANALOG;
    private static SiteFramework $ANGULAR;
    private static SiteFramework $NEXTJS;
    private static SiteFramework $REACT;
    private static SiteFramework $NUXT;
    private static SiteFramework $VUE;
    private static SiteFramework $SVELTEKIT;
    private static SiteFramework $ASTRO;
    private static SiteFramework $TANSTACKSTART;
    private static SiteFramework $REMIX;
    private static SiteFramework $LYNX;
    private static SiteFramework $FLUTTER;
    private static SiteFramework $REACTNATIVE;
    private static SiteFramework $VITE;
    private static SiteFramework $OTHER;

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

    public static function ANALOG(): SiteFramework
    {
        if (!isset(self::$ANALOG)) {
            self::$ANALOG = new SiteFramework('analog');
        }
        return self::$ANALOG;
    }
    public static function ANGULAR(): SiteFramework
    {
        if (!isset(self::$ANGULAR)) {
            self::$ANGULAR = new SiteFramework('angular');
        }
        return self::$ANGULAR;
    }
    public static function NEXTJS(): SiteFramework
    {
        if (!isset(self::$NEXTJS)) {
            self::$NEXTJS = new SiteFramework('nextjs');
        }
        return self::$NEXTJS;
    }
    public static function REACT(): SiteFramework
    {
        if (!isset(self::$REACT)) {
            self::$REACT = new SiteFramework('react');
        }
        return self::$REACT;
    }
    public static function NUXT(): SiteFramework
    {
        if (!isset(self::$NUXT)) {
            self::$NUXT = new SiteFramework('nuxt');
        }
        return self::$NUXT;
    }
    public static function VUE(): SiteFramework
    {
        if (!isset(self::$VUE)) {
            self::$VUE = new SiteFramework('vue');
        }
        return self::$VUE;
    }
    public static function SVELTEKIT(): SiteFramework
    {
        if (!isset(self::$SVELTEKIT)) {
            self::$SVELTEKIT = new SiteFramework('sveltekit');
        }
        return self::$SVELTEKIT;
    }
    public static function ASTRO(): SiteFramework
    {
        if (!isset(self::$ASTRO)) {
            self::$ASTRO = new SiteFramework('astro');
        }
        return self::$ASTRO;
    }
    public static function TANSTACKSTART(): SiteFramework
    {
        if (!isset(self::$TANSTACKSTART)) {
            self::$TANSTACKSTART = new SiteFramework('tanstack-start');
        }
        return self::$TANSTACKSTART;
    }
    public static function REMIX(): SiteFramework
    {
        if (!isset(self::$REMIX)) {
            self::$REMIX = new SiteFramework('remix');
        }
        return self::$REMIX;
    }
    public static function LYNX(): SiteFramework
    {
        if (!isset(self::$LYNX)) {
            self::$LYNX = new SiteFramework('lynx');
        }
        return self::$LYNX;
    }
    public static function FLUTTER(): SiteFramework
    {
        if (!isset(self::$FLUTTER)) {
            self::$FLUTTER = new SiteFramework('flutter');
        }
        return self::$FLUTTER;
    }
    public static function REACTNATIVE(): SiteFramework
    {
        if (!isset(self::$REACTNATIVE)) {
            self::$REACTNATIVE = new SiteFramework('react-native');
        }
        return self::$REACTNATIVE;
    }
    public static function VITE(): SiteFramework
    {
        if (!isset(self::$VITE)) {
            self::$VITE = new SiteFramework('vite');
        }
        return self::$VITE;
    }
    public static function OTHER(): SiteFramework
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new SiteFramework('other');
        }
        return self::$OTHER;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'analog' => self::ANALOG(),
            'angular' => self::ANGULAR(),
            'nextjs' => self::NEXTJS(),
            'react' => self::REACT(),
            'nuxt' => self::NUXT(),
            'vue' => self::VUE(),
            'sveltekit' => self::SVELTEKIT(),
            'astro' => self::ASTRO(),
            'tanstack-start' => self::TANSTACKSTART(),
            'remix' => self::REMIX(),
            'lynx' => self::LYNX(),
            'flutter' => self::FLUTTER(),
            'react-native' => self::REACTNATIVE(),
            'vite' => self::VITE(),
            'other' => self::OTHER(),
            default => throw new \InvalidArgumentException('Unknown SiteFramework value: ' . $value),
        };
    }
}
