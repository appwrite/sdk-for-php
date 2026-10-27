<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class AppwriteMigrationResource implements JsonSerializable, Stringable
{
    private static AppwriteMigrationResource $USER;
    private static AppwriteMigrationResource $TEAM;
    private static AppwriteMigrationResource $MEMBERSHIP;
    private static AppwriteMigrationResource $AUTHMETHODS;
    private static AppwriteMigrationResource $POLICIES;
    private static AppwriteMigrationResource $OAUTH2PROVIDER;
    private static AppwriteMigrationResource $DATABASE;
    private static AppwriteMigrationResource $TABLE;
    private static AppwriteMigrationResource $COLUMN;
    private static AppwriteMigrationResource $INDEX;
    private static AppwriteMigrationResource $ROW;
    private static AppwriteMigrationResource $DOCUMENT;
    private static AppwriteMigrationResource $ATTRIBUTE;
    private static AppwriteMigrationResource $COLLECTION;
    private static AppwriteMigrationResource $DOCUMENTSDB;
    private static AppwriteMigrationResource $VECTORSDB;
    private static AppwriteMigrationResource $BUCKET;
    private static AppwriteMigrationResource $FILE;
    private static AppwriteMigrationResource $FUNCTION;
    private static AppwriteMigrationResource $DEPLOYMENT;
    private static AppwriteMigrationResource $ENVIRONMENTVARIABLE;
    private static AppwriteMigrationResource $PROVIDER;
    private static AppwriteMigrationResource $TOPIC;
    private static AppwriteMigrationResource $SUBSCRIBER;
    private static AppwriteMigrationResource $MESSAGE;
    private static AppwriteMigrationResource $SITE;
    private static AppwriteMigrationResource $SITEDEPLOYMENT;
    private static AppwriteMigrationResource $SITEVARIABLE;
    private static AppwriteMigrationResource $PLATFORM;
    private static AppwriteMigrationResource $APIKEY;
    private static AppwriteMigrationResource $WEBHOOK;
    private static AppwriteMigrationResource $SMTP;
    private static AppwriteMigrationResource $BACKUPPOLICY;
    private static AppwriteMigrationResource $PROJECTVARIABLE;
    private static AppwriteMigrationResource $PROJECTPROTOCOLS;
    private static AppwriteMigrationResource $PROJECTLABELS;
    private static AppwriteMigrationResource $PROJECTSERVICES;
    private static AppwriteMigrationResource $PROJECTEMAILTEMPLATE;
    private static AppwriteMigrationResource $PROJECTENVIRONMENT;
    private static AppwriteMigrationResource $RULE;

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

    public static function USER(): AppwriteMigrationResource
    {
        self::$USER ??= new AppwriteMigrationResource('user');

        return self::$USER;
    }
    public static function TEAM(): AppwriteMigrationResource
    {
        self::$TEAM ??= new AppwriteMigrationResource('team');

        return self::$TEAM;
    }
    public static function MEMBERSHIP(): AppwriteMigrationResource
    {
        self::$MEMBERSHIP ??= new AppwriteMigrationResource('membership');

        return self::$MEMBERSHIP;
    }
    public static function AUTHMETHODS(): AppwriteMigrationResource
    {
        self::$AUTHMETHODS ??= new AppwriteMigrationResource('auth-methods');

        return self::$AUTHMETHODS;
    }
    public static function POLICIES(): AppwriteMigrationResource
    {
        self::$POLICIES ??= new AppwriteMigrationResource('policies');

        return self::$POLICIES;
    }
    public static function OAUTH2PROVIDER(): AppwriteMigrationResource
    {
        self::$OAUTH2PROVIDER ??= new AppwriteMigrationResource('oauth2-provider');

        return self::$OAUTH2PROVIDER;
    }
    public static function DATABASE(): AppwriteMigrationResource
    {
        self::$DATABASE ??= new AppwriteMigrationResource('database');

        return self::$DATABASE;
    }
    public static function TABLE(): AppwriteMigrationResource
    {
        self::$TABLE ??= new AppwriteMigrationResource('table');

        return self::$TABLE;
    }
    public static function COLUMN(): AppwriteMigrationResource
    {
        self::$COLUMN ??= new AppwriteMigrationResource('column');

        return self::$COLUMN;
    }
    public static function INDEX(): AppwriteMigrationResource
    {
        self::$INDEX ??= new AppwriteMigrationResource('index');

        return self::$INDEX;
    }
    public static function ROW(): AppwriteMigrationResource
    {
        self::$ROW ??= new AppwriteMigrationResource('row');

        return self::$ROW;
    }
    public static function DOCUMENT(): AppwriteMigrationResource
    {
        self::$DOCUMENT ??= new AppwriteMigrationResource('document');

        return self::$DOCUMENT;
    }
    public static function ATTRIBUTE(): AppwriteMigrationResource
    {
        self::$ATTRIBUTE ??= new AppwriteMigrationResource('attribute');

        return self::$ATTRIBUTE;
    }
    public static function COLLECTION(): AppwriteMigrationResource
    {
        self::$COLLECTION ??= new AppwriteMigrationResource('collection');

        return self::$COLLECTION;
    }
    public static function DOCUMENTSDB(): AppwriteMigrationResource
    {
        self::$DOCUMENTSDB ??= new AppwriteMigrationResource('documentsdb');

        return self::$DOCUMENTSDB;
    }
    public static function VECTORSDB(): AppwriteMigrationResource
    {
        self::$VECTORSDB ??= new AppwriteMigrationResource('vectorsdb');

        return self::$VECTORSDB;
    }
    public static function BUCKET(): AppwriteMigrationResource
    {
        self::$BUCKET ??= new AppwriteMigrationResource('bucket');

        return self::$BUCKET;
    }
    public static function FILE(): AppwriteMigrationResource
    {
        self::$FILE ??= new AppwriteMigrationResource('file');

        return self::$FILE;
    }
    public static function FUNCTION(): AppwriteMigrationResource
    {
        self::$FUNCTION ??= new AppwriteMigrationResource('function');

        return self::$FUNCTION;
    }
    public static function DEPLOYMENT(): AppwriteMigrationResource
    {
        self::$DEPLOYMENT ??= new AppwriteMigrationResource('deployment');

        return self::$DEPLOYMENT;
    }
    public static function ENVIRONMENTVARIABLE(): AppwriteMigrationResource
    {
        self::$ENVIRONMENTVARIABLE ??= new AppwriteMigrationResource('environment-variable');

        return self::$ENVIRONMENTVARIABLE;
    }
    public static function PROVIDER(): AppwriteMigrationResource
    {
        self::$PROVIDER ??= new AppwriteMigrationResource('provider');

        return self::$PROVIDER;
    }
    public static function TOPIC(): AppwriteMigrationResource
    {
        self::$TOPIC ??= new AppwriteMigrationResource('topic');

        return self::$TOPIC;
    }
    public static function SUBSCRIBER(): AppwriteMigrationResource
    {
        self::$SUBSCRIBER ??= new AppwriteMigrationResource('subscriber');

        return self::$SUBSCRIBER;
    }
    public static function MESSAGE(): AppwriteMigrationResource
    {
        self::$MESSAGE ??= new AppwriteMigrationResource('message');

        return self::$MESSAGE;
    }
    public static function SITE(): AppwriteMigrationResource
    {
        self::$SITE ??= new AppwriteMigrationResource('site');

        return self::$SITE;
    }
    public static function SITEDEPLOYMENT(): AppwriteMigrationResource
    {
        self::$SITEDEPLOYMENT ??= new AppwriteMigrationResource('site-deployment');

        return self::$SITEDEPLOYMENT;
    }
    public static function SITEVARIABLE(): AppwriteMigrationResource
    {
        self::$SITEVARIABLE ??= new AppwriteMigrationResource('site-variable');

        return self::$SITEVARIABLE;
    }
    public static function PLATFORM(): AppwriteMigrationResource
    {
        self::$PLATFORM ??= new AppwriteMigrationResource('platform');

        return self::$PLATFORM;
    }
    public static function APIKEY(): AppwriteMigrationResource
    {
        self::$APIKEY ??= new AppwriteMigrationResource('api-key');

        return self::$APIKEY;
    }
    public static function WEBHOOK(): AppwriteMigrationResource
    {
        self::$WEBHOOK ??= new AppwriteMigrationResource('webhook');

        return self::$WEBHOOK;
    }
    public static function SMTP(): AppwriteMigrationResource
    {
        self::$SMTP ??= new AppwriteMigrationResource('smtp');

        return self::$SMTP;
    }
    public static function BACKUPPOLICY(): AppwriteMigrationResource
    {
        self::$BACKUPPOLICY ??= new AppwriteMigrationResource('backup-policy');

        return self::$BACKUPPOLICY;
    }
    public static function PROJECTVARIABLE(): AppwriteMigrationResource
    {
        self::$PROJECTVARIABLE ??= new AppwriteMigrationResource('project-variable');

        return self::$PROJECTVARIABLE;
    }
    public static function PROJECTPROTOCOLS(): AppwriteMigrationResource
    {
        self::$PROJECTPROTOCOLS ??= new AppwriteMigrationResource('project-protocols');

        return self::$PROJECTPROTOCOLS;
    }
    public static function PROJECTLABELS(): AppwriteMigrationResource
    {
        self::$PROJECTLABELS ??= new AppwriteMigrationResource('project-labels');

        return self::$PROJECTLABELS;
    }
    public static function PROJECTSERVICES(): AppwriteMigrationResource
    {
        self::$PROJECTSERVICES ??= new AppwriteMigrationResource('project-services');

        return self::$PROJECTSERVICES;
    }
    public static function PROJECTEMAILTEMPLATE(): AppwriteMigrationResource
    {
        self::$PROJECTEMAILTEMPLATE ??= new AppwriteMigrationResource('project-email-template');

        return self::$PROJECTEMAILTEMPLATE;
    }
    public static function PROJECTENVIRONMENT(): AppwriteMigrationResource
    {
        self::$PROJECTENVIRONMENT ??= new AppwriteMigrationResource('project-environment');

        return self::$PROJECTENVIRONMENT;
    }
    public static function RULE(): AppwriteMigrationResource
    {
        self::$RULE ??= new AppwriteMigrationResource('rule');

        return self::$RULE;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'user' => self::USER(),
            'team' => self::TEAM(),
            'membership' => self::MEMBERSHIP(),
            'auth-methods' => self::AUTHMETHODS(),
            'policies' => self::POLICIES(),
            'oauth2-provider' => self::OAUTH2PROVIDER(),
            'database' => self::DATABASE(),
            'table' => self::TABLE(),
            'column' => self::COLUMN(),
            'index' => self::INDEX(),
            'row' => self::ROW(),
            'document' => self::DOCUMENT(),
            'attribute' => self::ATTRIBUTE(),
            'collection' => self::COLLECTION(),
            'documentsdb' => self::DOCUMENTSDB(),
            'vectorsdb' => self::VECTORSDB(),
            'bucket' => self::BUCKET(),
            'file' => self::FILE(),
            'function' => self::FUNCTION(),
            'deployment' => self::DEPLOYMENT(),
            'environment-variable' => self::ENVIRONMENTVARIABLE(),
            'provider' => self::PROVIDER(),
            'topic' => self::TOPIC(),
            'subscriber' => self::SUBSCRIBER(),
            'message' => self::MESSAGE(),
            'site' => self::SITE(),
            'site-deployment' => self::SITEDEPLOYMENT(),
            'site-variable' => self::SITEVARIABLE(),
            'platform' => self::PLATFORM(),
            'api-key' => self::APIKEY(),
            'webhook' => self::WEBHOOK(),
            'smtp' => self::SMTP(),
            'backup-policy' => self::BACKUPPOLICY(),
            'project-variable' => self::PROJECTVARIABLE(),
            'project-protocols' => self::PROJECTPROTOCOLS(),
            'project-labels' => self::PROJECTLABELS(),
            'project-services' => self::PROJECTSERVICES(),
            'project-email-template' => self::PROJECTEMAILTEMPLATE(),
            'project-environment' => self::PROJECTENVIRONMENT(),
            'rule' => self::RULE(),
            default => throw new \InvalidArgumentException('Unknown AppwriteMigrationResource value: ' . $value),
        };
    }
}
