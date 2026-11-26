<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class MonitorResult implements JsonSerializable, Stringable
{
    private static MonitorResult $OK;
    private static MonitorResult $DNSFAILED;
    private static MonitorResult $CONNECTREFUSED;
    private static MonitorResult $CONNECTTIMEOUT;
    private static MonitorResult $CONNECTFAILED;
    private static MonitorResult $TLSFAILED;
    private static MonitorResult $TLSEXPIRING;
    private static MonitorResult $STATUSMISMATCH;
    private static MonitorResult $ANSWERMISMATCH;
    private static MonitorResult $SMTPREJECTED;
    private static MonitorResult $TARGETDENIED;
    private static MonitorResult $TIMEOUT;
    private static MonitorResult $RULEMATCHED;

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

    public static function OK(): MonitorResult
    {
        self::$OK ??= new MonitorResult('ok');

        return self::$OK;
    }
    public static function DNSFAILED(): MonitorResult
    {
        self::$DNSFAILED ??= new MonitorResult('dns_failed');

        return self::$DNSFAILED;
    }
    public static function CONNECTREFUSED(): MonitorResult
    {
        self::$CONNECTREFUSED ??= new MonitorResult('connect_refused');

        return self::$CONNECTREFUSED;
    }
    public static function CONNECTTIMEOUT(): MonitorResult
    {
        self::$CONNECTTIMEOUT ??= new MonitorResult('connect_timeout');

        return self::$CONNECTTIMEOUT;
    }
    public static function CONNECTFAILED(): MonitorResult
    {
        self::$CONNECTFAILED ??= new MonitorResult('connect_failed');

        return self::$CONNECTFAILED;
    }
    public static function TLSFAILED(): MonitorResult
    {
        self::$TLSFAILED ??= new MonitorResult('tls_failed');

        return self::$TLSFAILED;
    }
    public static function TLSEXPIRING(): MonitorResult
    {
        self::$TLSEXPIRING ??= new MonitorResult('tls_expiring');

        return self::$TLSEXPIRING;
    }
    public static function STATUSMISMATCH(): MonitorResult
    {
        self::$STATUSMISMATCH ??= new MonitorResult('status_mismatch');

        return self::$STATUSMISMATCH;
    }
    public static function ANSWERMISMATCH(): MonitorResult
    {
        self::$ANSWERMISMATCH ??= new MonitorResult('answer_mismatch');

        return self::$ANSWERMISMATCH;
    }
    public static function SMTPREJECTED(): MonitorResult
    {
        self::$SMTPREJECTED ??= new MonitorResult('smtp_rejected');

        return self::$SMTPREJECTED;
    }
    public static function TARGETDENIED(): MonitorResult
    {
        self::$TARGETDENIED ??= new MonitorResult('target_denied');

        return self::$TARGETDENIED;
    }
    public static function TIMEOUT(): MonitorResult
    {
        self::$TIMEOUT ??= new MonitorResult('timeout');

        return self::$TIMEOUT;
    }
    public static function RULEMATCHED(): MonitorResult
    {
        self::$RULEMATCHED ??= new MonitorResult('rule_matched');

        return self::$RULEMATCHED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'ok' => self::OK(),
            'dns_failed' => self::DNSFAILED(),
            'connect_refused' => self::CONNECTREFUSED(),
            'connect_timeout' => self::CONNECTTIMEOUT(),
            'connect_failed' => self::CONNECTFAILED(),
            'tls_failed' => self::TLSFAILED(),
            'tls_expiring' => self::TLSEXPIRING(),
            'status_mismatch' => self::STATUSMISMATCH(),
            'answer_mismatch' => self::ANSWERMISMATCH(),
            'smtp_rejected' => self::SMTPREJECTED(),
            'target_denied' => self::TARGETDENIED(),
            'timeout' => self::TIMEOUT(),
            'rule_matched' => self::RULEMATCHED(),
            default => throw new \InvalidArgumentException('Unknown MonitorResult value: ' . $value),
        };
    }
}
