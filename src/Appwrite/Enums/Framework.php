<?php

namespace Appwrite\Enums;

use JsonSerializable;

class Framework implements JsonSerializable
{
    private static Framework $ANALOG;
    private static Framework $ANGULAR;
    private static Framework $NEXTJS;
    private static Framework $REACT;
    private static Framework $NUXT;
    private static Framework $VUE;
    private static Framework $SVELTEKIT;
    private static Framework $ASTRO;
    private static Framework $TANSTACKSTART;
    private static Framework $REMIX;
    private static Framework $LYNX;
    private static Framework $FLUTTER;
    private static Framework $REACTNATIVE;
    private static Framework $VITE;
    private static Framework $OTHER;

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

    public static function ANALOG(): Framework
    {
        if (!isset(self::$ANALOG)) {
            self::$ANALOG = new Framework('analog');
        }
        return self::$ANALOG;
    }
    public static function ANGULAR(): Framework
    {
        if (!isset(self::$ANGULAR)) {
            self::$ANGULAR = new Framework('angular');
        }
        return self::$ANGULAR;
    }
    public static function NEXTJS(): Framework
    {
        if (!isset(self::$NEXTJS)) {
            self::$NEXTJS = new Framework('nextjs');
        }
        return self::$NEXTJS;
    }
    public static function REACT(): Framework
    {
        if (!isset(self::$REACT)) {
            self::$REACT = new Framework('react');
        }
        return self::$REACT;
    }
    public static function NUXT(): Framework
    {
        if (!isset(self::$NUXT)) {
            self::$NUXT = new Framework('nuxt');
        }
        return self::$NUXT;
    }
    public static function VUE(): Framework
    {
        if (!isset(self::$VUE)) {
            self::$VUE = new Framework('vue');
        }
        return self::$VUE;
    }
    public static function SVELTEKIT(): Framework
    {
        if (!isset(self::$SVELTEKIT)) {
            self::$SVELTEKIT = new Framework('sveltekit');
        }
        return self::$SVELTEKIT;
    }
    public static function ASTRO(): Framework
    {
        if (!isset(self::$ASTRO)) {
            self::$ASTRO = new Framework('astro');
        }
        return self::$ASTRO;
    }
    public static function TANSTACKSTART(): Framework
    {
        if (!isset(self::$TANSTACKSTART)) {
            self::$TANSTACKSTART = new Framework('tanstack-start');
        }
        return self::$TANSTACKSTART;
    }
    public static function REMIX(): Framework
    {
        if (!isset(self::$REMIX)) {
            self::$REMIX = new Framework('remix');
        }
        return self::$REMIX;
    }
    public static function LYNX(): Framework
    {
        if (!isset(self::$LYNX)) {
            self::$LYNX = new Framework('lynx');
        }
        return self::$LYNX;
    }
    public static function FLUTTER(): Framework
    {
        if (!isset(self::$FLUTTER)) {
            self::$FLUTTER = new Framework('flutter');
        }
        return self::$FLUTTER;
    }
    public static function REACTNATIVE(): Framework
    {
        if (!isset(self::$REACTNATIVE)) {
            self::$REACTNATIVE = new Framework('react-native');
        }
        return self::$REACTNATIVE;
    }
    public static function VITE(): Framework
    {
        if (!isset(self::$VITE)) {
            self::$VITE = new Framework('vite');
        }
        return self::$VITE;
    }
    public static function OTHER(): Framework
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new Framework('other');
        }
        return self::$OTHER;
    }
}