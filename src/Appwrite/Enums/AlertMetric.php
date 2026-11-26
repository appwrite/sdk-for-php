<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AlertMetric implements JsonSerializable, Stringable
{
    private static AlertMetric $NETWORKREQUESTS;
    private static AlertMetric $NETWORKINBOUND;
    private static AlertMetric $NETWORKOUTBOUND;
    private static AlertMetric $EXECUTIONS;
    private static AlertMetric $EXECUTIONSMBSECONDS;
    private static AlertMetric $REALTIMECONNECTIONS;
    private static AlertMetric $WEBHOOKSEVENTSSENT;
    private static AlertMetric $WEBHOOKSEVENTSFAILED;
    private static AlertMetric $USERSMAU;
    private static AlertMetric $AUTHMETHODPHONE;
    private static AlertMetric $USERS;
    private static AlertMetric $DATABASESOPERATIONSREADS;
    private static AlertMetric $DATABASESOPERATIONSWRITES;
    private static AlertMetric $DATABASESSTORAGE;
    private static AlertMetric $STORAGE;
    private static AlertMetric $FILESSTORAGE;
    private static AlertMetric $MESSAGESSENT;
    private static AlertMetric $MESSAGESSMSSENT;
    private static AlertMetric $MESSAGESFAILED;
    private static AlertMetric $AVATARSSCREENSHOTSGENERATED;
    private static AlertMetric $DEDICATEDDATABASESCPU;
    private static AlertMetric $DEDICATEDDATABASESMEMORY;
    private static AlertMetric $DEDICATEDDATABASESSTORAGE;
    private static AlertMetric $DEDICATEDDATABASESCONNECTIONS;
    private static AlertMetric $DEDICATEDDATABASESQPS;
    private static AlertMetric $DEDICATEDDATABASESIOPSREAD;
    private static AlertMetric $DEDICATEDDATABASESIOPSWRITE;
    private static AlertMetric $ANALYTICSEVENTS;
    private static AlertMetric $ANALYTICSPAGEVIEWS;
    private static AlertMetric $BILLINGBUDGETUSED;

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

    public static function NETWORKREQUESTS(): AlertMetric
    {
        self::$NETWORKREQUESTS ??= new AlertMetric('network.requests');

        return self::$NETWORKREQUESTS;
    }
    public static function NETWORKINBOUND(): AlertMetric
    {
        self::$NETWORKINBOUND ??= new AlertMetric('network.inbound');

        return self::$NETWORKINBOUND;
    }
    public static function NETWORKOUTBOUND(): AlertMetric
    {
        self::$NETWORKOUTBOUND ??= new AlertMetric('network.outbound');

        return self::$NETWORKOUTBOUND;
    }
    public static function EXECUTIONS(): AlertMetric
    {
        self::$EXECUTIONS ??= new AlertMetric('executions');

        return self::$EXECUTIONS;
    }
    public static function EXECUTIONSMBSECONDS(): AlertMetric
    {
        self::$EXECUTIONSMBSECONDS ??= new AlertMetric('executions.mbSeconds');

        return self::$EXECUTIONSMBSECONDS;
    }
    public static function REALTIMECONNECTIONS(): AlertMetric
    {
        self::$REALTIMECONNECTIONS ??= new AlertMetric('realtime.connections');

        return self::$REALTIMECONNECTIONS;
    }
    public static function WEBHOOKSEVENTSSENT(): AlertMetric
    {
        self::$WEBHOOKSEVENTSSENT ??= new AlertMetric('webhooks.events.sent');

        return self::$WEBHOOKSEVENTSSENT;
    }
    public static function WEBHOOKSEVENTSFAILED(): AlertMetric
    {
        self::$WEBHOOKSEVENTSFAILED ??= new AlertMetric('webhooks.events.failed');

        return self::$WEBHOOKSEVENTSFAILED;
    }
    public static function USERSMAU(): AlertMetric
    {
        self::$USERSMAU ??= new AlertMetric('users.mau');

        return self::$USERSMAU;
    }
    public static function AUTHMETHODPHONE(): AlertMetric
    {
        self::$AUTHMETHODPHONE ??= new AlertMetric('auth.method.phone');

        return self::$AUTHMETHODPHONE;
    }
    public static function USERS(): AlertMetric
    {
        self::$USERS ??= new AlertMetric('users');

        return self::$USERS;
    }
    public static function DATABASESOPERATIONSREADS(): AlertMetric
    {
        self::$DATABASESOPERATIONSREADS ??= new AlertMetric('databases.operations.reads');

        return self::$DATABASESOPERATIONSREADS;
    }
    public static function DATABASESOPERATIONSWRITES(): AlertMetric
    {
        self::$DATABASESOPERATIONSWRITES ??= new AlertMetric('databases.operations.writes');

        return self::$DATABASESOPERATIONSWRITES;
    }
    public static function DATABASESSTORAGE(): AlertMetric
    {
        self::$DATABASESSTORAGE ??= new AlertMetric('databases.storage');

        return self::$DATABASESSTORAGE;
    }
    public static function STORAGE(): AlertMetric
    {
        self::$STORAGE ??= new AlertMetric('storage');

        return self::$STORAGE;
    }
    public static function FILESSTORAGE(): AlertMetric
    {
        self::$FILESSTORAGE ??= new AlertMetric('files.storage');

        return self::$FILESSTORAGE;
    }
    public static function MESSAGESSENT(): AlertMetric
    {
        self::$MESSAGESSENT ??= new AlertMetric('messages.sent');

        return self::$MESSAGESSENT;
    }
    public static function MESSAGESSMSSENT(): AlertMetric
    {
        self::$MESSAGESSMSSENT ??= new AlertMetric('messages.sms.sent');

        return self::$MESSAGESSMSSENT;
    }
    public static function MESSAGESFAILED(): AlertMetric
    {
        self::$MESSAGESFAILED ??= new AlertMetric('messages.failed');

        return self::$MESSAGESFAILED;
    }
    public static function AVATARSSCREENSHOTSGENERATED(): AlertMetric
    {
        self::$AVATARSSCREENSHOTSGENERATED ??= new AlertMetric('avatars.screenshotsGenerated');

        return self::$AVATARSSCREENSHOTSGENERATED;
    }
    public static function DEDICATEDDATABASESCPU(): AlertMetric
    {
        self::$DEDICATEDDATABASESCPU ??= new AlertMetric('dedicatedDatabases.cpu');

        return self::$DEDICATEDDATABASESCPU;
    }
    public static function DEDICATEDDATABASESMEMORY(): AlertMetric
    {
        self::$DEDICATEDDATABASESMEMORY ??= new AlertMetric('dedicatedDatabases.memory');

        return self::$DEDICATEDDATABASESMEMORY;
    }
    public static function DEDICATEDDATABASESSTORAGE(): AlertMetric
    {
        self::$DEDICATEDDATABASESSTORAGE ??= new AlertMetric('dedicatedDatabases.storage');

        return self::$DEDICATEDDATABASESSTORAGE;
    }
    public static function DEDICATEDDATABASESCONNECTIONS(): AlertMetric
    {
        self::$DEDICATEDDATABASESCONNECTIONS ??= new AlertMetric('dedicatedDatabases.connections');

        return self::$DEDICATEDDATABASESCONNECTIONS;
    }
    public static function DEDICATEDDATABASESQPS(): AlertMetric
    {
        self::$DEDICATEDDATABASESQPS ??= new AlertMetric('dedicatedDatabases.qps');

        return self::$DEDICATEDDATABASESQPS;
    }
    public static function DEDICATEDDATABASESIOPSREAD(): AlertMetric
    {
        self::$DEDICATEDDATABASESIOPSREAD ??= new AlertMetric('dedicatedDatabases.iopsRead');

        return self::$DEDICATEDDATABASESIOPSREAD;
    }
    public static function DEDICATEDDATABASESIOPSWRITE(): AlertMetric
    {
        self::$DEDICATEDDATABASESIOPSWRITE ??= new AlertMetric('dedicatedDatabases.iopsWrite');

        return self::$DEDICATEDDATABASESIOPSWRITE;
    }
    public static function ANALYTICSEVENTS(): AlertMetric
    {
        self::$ANALYTICSEVENTS ??= new AlertMetric('analytics.events');

        return self::$ANALYTICSEVENTS;
    }
    public static function ANALYTICSPAGEVIEWS(): AlertMetric
    {
        self::$ANALYTICSPAGEVIEWS ??= new AlertMetric('analytics.pageviews');

        return self::$ANALYTICSPAGEVIEWS;
    }
    public static function BILLINGBUDGETUSED(): AlertMetric
    {
        self::$BILLINGBUDGETUSED ??= new AlertMetric('billing.budgetUsed');

        return self::$BILLINGBUDGETUSED;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'network.requests' => self::NETWORKREQUESTS(),
            'network.inbound' => self::NETWORKINBOUND(),
            'network.outbound' => self::NETWORKOUTBOUND(),
            'executions' => self::EXECUTIONS(),
            'executions.mbSeconds' => self::EXECUTIONSMBSECONDS(),
            'realtime.connections' => self::REALTIMECONNECTIONS(),
            'webhooks.events.sent' => self::WEBHOOKSEVENTSSENT(),
            'webhooks.events.failed' => self::WEBHOOKSEVENTSFAILED(),
            'users.mau' => self::USERSMAU(),
            'auth.method.phone' => self::AUTHMETHODPHONE(),
            'users' => self::USERS(),
            'databases.operations.reads' => self::DATABASESOPERATIONSREADS(),
            'databases.operations.writes' => self::DATABASESOPERATIONSWRITES(),
            'databases.storage' => self::DATABASESSTORAGE(),
            'storage' => self::STORAGE(),
            'files.storage' => self::FILESSTORAGE(),
            'messages.sent' => self::MESSAGESSENT(),
            'messages.sms.sent' => self::MESSAGESSMSSENT(),
            'messages.failed' => self::MESSAGESFAILED(),
            'avatars.screenshotsGenerated' => self::AVATARSSCREENSHOTSGENERATED(),
            'dedicatedDatabases.cpu' => self::DEDICATEDDATABASESCPU(),
            'dedicatedDatabases.memory' => self::DEDICATEDDATABASESMEMORY(),
            'dedicatedDatabases.storage' => self::DEDICATEDDATABASESSTORAGE(),
            'dedicatedDatabases.connections' => self::DEDICATEDDATABASESCONNECTIONS(),
            'dedicatedDatabases.qps' => self::DEDICATEDDATABASESQPS(),
            'dedicatedDatabases.iopsRead' => self::DEDICATEDDATABASESIOPSREAD(),
            'dedicatedDatabases.iopsWrite' => self::DEDICATEDDATABASESIOPSWRITE(),
            'analytics.events' => self::ANALYTICSEVENTS(),
            'analytics.pageviews' => self::ANALYTICSPAGEVIEWS(),
            'billing.budgetUsed' => self::BILLINGBUDGETUSED(),
            default => throw new \InvalidArgumentException('Unknown AlertMetric value: ' . $value),
        };
    }
}
