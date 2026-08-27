<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class Framework implements JsonSerializable, Stringable
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

    public static function ANALOG(): Framework
    {
        self::$ANALOG ??= new Framework('analog');

        return self::$ANALOG;
    }
    public static function ANGULAR(): Framework
    {
        self::$ANGULAR ??= new Framework('angular');

        return self::$ANGULAR;
    }
    public static function NEXTJS(): Framework
    {
        self::$NEXTJS ??= new Framework('nextjs');

        return self::$NEXTJS;
    }
    public static function REACT(): Framework
    {
        self::$REACT ??= new Framework('react');

        return self::$REACT;
    }
    public static function NUXT(): Framework
    {
        self::$NUXT ??= new Framework('nuxt');

        return self::$NUXT;
    }
    public static function VUE(): Framework
    {
        self::$VUE ??= new Framework('vue');

        return self::$VUE;
    }
    public static function SVELTEKIT(): Framework
    {
        self::$SVELTEKIT ??= new Framework('sveltekit');

        return self::$SVELTEKIT;
    }
    public static function ASTRO(): Framework
    {
        self::$ASTRO ??= new Framework('astro');

        return self::$ASTRO;
    }
    public static function TANSTACKSTART(): Framework
    {
        self::$TANSTACKSTART ??= new Framework('tanstack-start');

        return self::$TANSTACKSTART;
    }
    public static function REMIX(): Framework
    {
        self::$REMIX ??= new Framework('remix');

        return self::$REMIX;
    }
    public static function LYNX(): Framework
    {
        self::$LYNX ??= new Framework('lynx');

        return self::$LYNX;
    }
    public static function FLUTTER(): Framework
    {
        self::$FLUTTER ??= new Framework('flutter');

        return self::$FLUTTER;
    }
    public static function REACTNATIVE(): Framework
    {
        self::$REACTNATIVE ??= new Framework('react-native');

        return self::$REACTNATIVE;
    }
    public static function VITE(): Framework
    {
        self::$VITE ??= new Framework('vite');

        return self::$VITE;
    }
    public static function OTHER(): Framework
    {
        self::$OTHER ??= new Framework('other');

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
            default => throw new \InvalidArgumentException('Unknown Framework value: ' . $value),
        };
    }
}
