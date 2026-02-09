<?php

namespace Appwrite\Enums;

use JsonSerializable;

class BrowserPermission implements JsonSerializable
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

    public static function GEOLOCATION(): BrowserPermission
    {
        if (!isset(self::$GEOLOCATION)) {
            self::$GEOLOCATION = new BrowserPermission('geolocation');
        }
        return self::$GEOLOCATION;
    }
    public static function CAMERA(): BrowserPermission
    {
        if (!isset(self::$CAMERA)) {
            self::$CAMERA = new BrowserPermission('camera');
        }
        return self::$CAMERA;
    }
    public static function MICROPHONE(): BrowserPermission
    {
        if (!isset(self::$MICROPHONE)) {
            self::$MICROPHONE = new BrowserPermission('microphone');
        }
        return self::$MICROPHONE;
    }
    public static function NOTIFICATIONS(): BrowserPermission
    {
        if (!isset(self::$NOTIFICATIONS)) {
            self::$NOTIFICATIONS = new BrowserPermission('notifications');
        }
        return self::$NOTIFICATIONS;
    }
    public static function MIDI(): BrowserPermission
    {
        if (!isset(self::$MIDI)) {
            self::$MIDI = new BrowserPermission('midi');
        }
        return self::$MIDI;
    }
    public static function PUSH(): BrowserPermission
    {
        if (!isset(self::$PUSH)) {
            self::$PUSH = new BrowserPermission('push');
        }
        return self::$PUSH;
    }
    public static function CLIPBOARDREAD(): BrowserPermission
    {
        if (!isset(self::$CLIPBOARDREAD)) {
            self::$CLIPBOARDREAD = new BrowserPermission('clipboard-read');
        }
        return self::$CLIPBOARDREAD;
    }
    public static function CLIPBOARDWRITE(): BrowserPermission
    {
        if (!isset(self::$CLIPBOARDWRITE)) {
            self::$CLIPBOARDWRITE = new BrowserPermission('clipboard-write');
        }
        return self::$CLIPBOARDWRITE;
    }
    public static function PAYMENTHANDLER(): BrowserPermission
    {
        if (!isset(self::$PAYMENTHANDLER)) {
            self::$PAYMENTHANDLER = new BrowserPermission('payment-handler');
        }
        return self::$PAYMENTHANDLER;
    }
    public static function USB(): BrowserPermission
    {
        if (!isset(self::$USB)) {
            self::$USB = new BrowserPermission('usb');
        }
        return self::$USB;
    }
    public static function BLUETOOTH(): BrowserPermission
    {
        if (!isset(self::$BLUETOOTH)) {
            self::$BLUETOOTH = new BrowserPermission('bluetooth');
        }
        return self::$BLUETOOTH;
    }
    public static function ACCELEROMETER(): BrowserPermission
    {
        if (!isset(self::$ACCELEROMETER)) {
            self::$ACCELEROMETER = new BrowserPermission('accelerometer');
        }
        return self::$ACCELEROMETER;
    }
    public static function GYROSCOPE(): BrowserPermission
    {
        if (!isset(self::$GYROSCOPE)) {
            self::$GYROSCOPE = new BrowserPermission('gyroscope');
        }
        return self::$GYROSCOPE;
    }
    public static function MAGNETOMETER(): BrowserPermission
    {
        if (!isset(self::$MAGNETOMETER)) {
            self::$MAGNETOMETER = new BrowserPermission('magnetometer');
        }
        return self::$MAGNETOMETER;
    }
    public static function AMBIENTLIGHTSENSOR(): BrowserPermission
    {
        if (!isset(self::$AMBIENTLIGHTSENSOR)) {
            self::$AMBIENTLIGHTSENSOR = new BrowserPermission('ambient-light-sensor');
        }
        return self::$AMBIENTLIGHTSENSOR;
    }
    public static function BACKGROUNDSYNC(): BrowserPermission
    {
        if (!isset(self::$BACKGROUNDSYNC)) {
            self::$BACKGROUNDSYNC = new BrowserPermission('background-sync');
        }
        return self::$BACKGROUNDSYNC;
    }
    public static function PERSISTENTSTORAGE(): BrowserPermission
    {
        if (!isset(self::$PERSISTENTSTORAGE)) {
            self::$PERSISTENTSTORAGE = new BrowserPermission('persistent-storage');
        }
        return self::$PERSISTENTSTORAGE;
    }
    public static function SCREENWAKELOCK(): BrowserPermission
    {
        if (!isset(self::$SCREENWAKELOCK)) {
            self::$SCREENWAKELOCK = new BrowserPermission('screen-wake-lock');
        }
        return self::$SCREENWAKELOCK;
    }
    public static function WEBSHARE(): BrowserPermission
    {
        if (!isset(self::$WEBSHARE)) {
            self::$WEBSHARE = new BrowserPermission('web-share');
        }
        return self::$WEBSHARE;
    }
    public static function XRSPATIALTRACKING(): BrowserPermission
    {
        if (!isset(self::$XRSPATIALTRACKING)) {
            self::$XRSPATIALTRACKING = new BrowserPermission('xr-spatial-tracking');
        }
        return self::$XRSPATIALTRACKING;
    }
}