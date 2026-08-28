<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class BrowserPermission implements JsonSerializable, Stringable
{
    private static BrowserPermission $GEOLOCATION;
    private static BrowserPermission $CAMERA;
    private static BrowserPermission $MICROPHONE;
    private static BrowserPermission $NOTIFICATIONS;
    private static BrowserPermission $MIDI;
    private static BrowserPermission $PUSH;
    private static BrowserPermission $CLIPBOARDREAD;
    private static BrowserPermission $CLIPBOARDWRITE;
    private static BrowserPermission $PAYMENTHANDLER;
    private static BrowserPermission $USB;
    private static BrowserPermission $BLUETOOTH;
    private static BrowserPermission $ACCELEROMETER;
    private static BrowserPermission $GYROSCOPE;
    private static BrowserPermission $MAGNETOMETER;
    private static BrowserPermission $AMBIENTLIGHTSENSOR;
    private static BrowserPermission $BACKGROUNDSYNC;
    private static BrowserPermission $PERSISTENTSTORAGE;
    private static BrowserPermission $SCREENWAKELOCK;
    private static BrowserPermission $WEBSHARE;
    private static BrowserPermission $XRSPATIALTRACKING;

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

    public static function GEOLOCATION(): BrowserPermission
    {
        self::$GEOLOCATION ??= new BrowserPermission('geolocation');

        return self::$GEOLOCATION;
    }
    public static function CAMERA(): BrowserPermission
    {
        self::$CAMERA ??= new BrowserPermission('camera');

        return self::$CAMERA;
    }
    public static function MICROPHONE(): BrowserPermission
    {
        self::$MICROPHONE ??= new BrowserPermission('microphone');

        return self::$MICROPHONE;
    }
    public static function NOTIFICATIONS(): BrowserPermission
    {
        self::$NOTIFICATIONS ??= new BrowserPermission('notifications');

        return self::$NOTIFICATIONS;
    }
    public static function MIDI(): BrowserPermission
    {
        self::$MIDI ??= new BrowserPermission('midi');

        return self::$MIDI;
    }
    public static function PUSH(): BrowserPermission
    {
        self::$PUSH ??= new BrowserPermission('push');

        return self::$PUSH;
    }
    public static function CLIPBOARDREAD(): BrowserPermission
    {
        self::$CLIPBOARDREAD ??= new BrowserPermission('clipboard-read');

        return self::$CLIPBOARDREAD;
    }
    public static function CLIPBOARDWRITE(): BrowserPermission
    {
        self::$CLIPBOARDWRITE ??= new BrowserPermission('clipboard-write');

        return self::$CLIPBOARDWRITE;
    }
    public static function PAYMENTHANDLER(): BrowserPermission
    {
        self::$PAYMENTHANDLER ??= new BrowserPermission('payment-handler');

        return self::$PAYMENTHANDLER;
    }
    public static function USB(): BrowserPermission
    {
        self::$USB ??= new BrowserPermission('usb');

        return self::$USB;
    }
    public static function BLUETOOTH(): BrowserPermission
    {
        self::$BLUETOOTH ??= new BrowserPermission('bluetooth');

        return self::$BLUETOOTH;
    }
    public static function ACCELEROMETER(): BrowserPermission
    {
        self::$ACCELEROMETER ??= new BrowserPermission('accelerometer');

        return self::$ACCELEROMETER;
    }
    public static function GYROSCOPE(): BrowserPermission
    {
        self::$GYROSCOPE ??= new BrowserPermission('gyroscope');

        return self::$GYROSCOPE;
    }
    public static function MAGNETOMETER(): BrowserPermission
    {
        self::$MAGNETOMETER ??= new BrowserPermission('magnetometer');

        return self::$MAGNETOMETER;
    }
    public static function AMBIENTLIGHTSENSOR(): BrowserPermission
    {
        self::$AMBIENTLIGHTSENSOR ??= new BrowserPermission('ambient-light-sensor');

        return self::$AMBIENTLIGHTSENSOR;
    }
    public static function BACKGROUNDSYNC(): BrowserPermission
    {
        self::$BACKGROUNDSYNC ??= new BrowserPermission('background-sync');

        return self::$BACKGROUNDSYNC;
    }
    public static function PERSISTENTSTORAGE(): BrowserPermission
    {
        self::$PERSISTENTSTORAGE ??= new BrowserPermission('persistent-storage');

        return self::$PERSISTENTSTORAGE;
    }
    public static function SCREENWAKELOCK(): BrowserPermission
    {
        self::$SCREENWAKELOCK ??= new BrowserPermission('screen-wake-lock');

        return self::$SCREENWAKELOCK;
    }
    public static function WEBSHARE(): BrowserPermission
    {
        self::$WEBSHARE ??= new BrowserPermission('web-share');

        return self::$WEBSHARE;
    }
    public static function XRSPATIALTRACKING(): BrowserPermission
    {
        self::$XRSPATIALTRACKING ??= new BrowserPermission('xr-spatial-tracking');

        return self::$XRSPATIALTRACKING;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'geolocation' => self::GEOLOCATION(),
            'camera' => self::CAMERA(),
            'microphone' => self::MICROPHONE(),
            'notifications' => self::NOTIFICATIONS(),
            'midi' => self::MIDI(),
            'push' => self::PUSH(),
            'clipboard-read' => self::CLIPBOARDREAD(),
            'clipboard-write' => self::CLIPBOARDWRITE(),
            'payment-handler' => self::PAYMENTHANDLER(),
            'usb' => self::USB(),
            'bluetooth' => self::BLUETOOTH(),
            'accelerometer' => self::ACCELEROMETER(),
            'gyroscope' => self::GYROSCOPE(),
            'magnetometer' => self::MAGNETOMETER(),
            'ambient-light-sensor' => self::AMBIENTLIGHTSENSOR(),
            'background-sync' => self::BACKGROUNDSYNC(),
            'persistent-storage' => self::PERSISTENTSTORAGE(),
            'screen-wake-lock' => self::SCREENWAKELOCK(),
            'web-share' => self::WEBSHARE(),
            'xr-spatial-tracking' => self::XRSPATIALTRACKING(),
            default => throw new \InvalidArgumentException('Unknown BrowserPermission value: ' . $value),
        };
    }
}
