<?php

declare(strict_types=1);

namespace Appwrite\Enums;

use JsonSerializable;
use Stringable;

class EnvironmentResource implements JsonSerializable, Stringable
{
    private static EnvironmentResource $USER;
    private static EnvironmentResource $TEAM;
    private static EnvironmentResource $MEMBERSHIP;
    private static EnvironmentResource $AUTHMETHODS;
    private static EnvironmentResource $POLICIES;
    private static EnvironmentResource $OAUTH2PROVIDER;
    private static EnvironmentResource $DATABASE;
    private static EnvironmentResource $DOCUMENTSDB;
    private static EnvironmentResource $VECTORSDB;
    private static EnvironmentResource $TABLE;
    private static EnvironmentResource $COLLECTION;
    private static EnvironmentResource $COLUMN;
    private static EnvironmentResource $ATTRIBUTE;
    private static EnvironmentResource $INDEX;
    private static EnvironmentResource $ROW;
    private static EnvironmentResource $DOCUMENT;
    private static EnvironmentResource $BUCKET;
    private static EnvironmentResource $FILE;
    private static EnvironmentResource $FUNCTION;
    private static EnvironmentResource $ENVIRONMENTVARIABLE;
    private static EnvironmentResource $DEPLOYMENT;
    private static EnvironmentResource $SITE;
    private static EnvironmentResource $SITEVARIABLE;
    private static EnvironmentResource $SITEDEPLOYMENT;
    private static EnvironmentResource $PROVIDER;
    private static EnvironmentResource $TOPIC;
    private static EnvironmentResource $SUBSCRIBER;
    private static EnvironmentResource $PLATFORM;
    private static EnvironmentResource $SMTP;
    private static EnvironmentResource $PROJECTVARIABLE;
    private static EnvironmentResource $PROJECTPROTOCOLS;
    private static EnvironmentResource $PROJECTLABELS;
    private static EnvironmentResource $PROJECTSERVICES;
    private static EnvironmentResource $PROJECTEMAILTEMPLATE;

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

    public static function USER(): EnvironmentResource
    {
        self::$USER ??= new EnvironmentResource('user');

        return self::$USER;
    }
    public static function TEAM(): EnvironmentResource
    {
        self::$TEAM ??= new EnvironmentResource('team');

        return self::$TEAM;
    }
    public static function MEMBERSHIP(): EnvironmentResource
    {
        self::$MEMBERSHIP ??= new EnvironmentResource('membership');

        return self::$MEMBERSHIP;
    }
    public static function AUTHMETHODS(): EnvironmentResource
    {
        self::$AUTHMETHODS ??= new EnvironmentResource('auth-methods');

        return self::$AUTHMETHODS;
    }
    public static function POLICIES(): EnvironmentResource
    {
        self::$POLICIES ??= new EnvironmentResource('policies');

        return self::$POLICIES;
    }
    public static function OAUTH2PROVIDER(): EnvironmentResource
    {
        self::$OAUTH2PROVIDER ??= new EnvironmentResource('oauth2-provider');

        return self::$OAUTH2PROVIDER;
    }
    public static function DATABASE(): EnvironmentResource
    {
        self::$DATABASE ??= new EnvironmentResource('database');

        return self::$DATABASE;
    }
    public static function DOCUMENTSDB(): EnvironmentResource
    {
        self::$DOCUMENTSDB ??= new EnvironmentResource('documentsdb');

        return self::$DOCUMENTSDB;
    }
    public static function VECTORSDB(): EnvironmentResource
    {
        self::$VECTORSDB ??= new EnvironmentResource('vectorsdb');

        return self::$VECTORSDB;
    }
    public static function TABLE(): EnvironmentResource
    {
        self::$TABLE ??= new EnvironmentResource('table');

        return self::$TABLE;
    }
    public static function COLLECTION(): EnvironmentResource
    {
        self::$COLLECTION ??= new EnvironmentResource('collection');

        return self::$COLLECTION;
    }
    public static function COLUMN(): EnvironmentResource
    {
        self::$COLUMN ??= new EnvironmentResource('column');

        return self::$COLUMN;
    }
    public static function ATTRIBUTE(): EnvironmentResource
    {
        self::$ATTRIBUTE ??= new EnvironmentResource('attribute');

        return self::$ATTRIBUTE;
    }
    public static function INDEX(): EnvironmentResource
    {
        self::$INDEX ??= new EnvironmentResource('index');

        return self::$INDEX;
    }
    public static function ROW(): EnvironmentResource
    {
        self::$ROW ??= new EnvironmentResource('row');

        return self::$ROW;
    }
    public static function DOCUMENT(): EnvironmentResource
    {
        self::$DOCUMENT ??= new EnvironmentResource('document');

        return self::$DOCUMENT;
    }
    public static function BUCKET(): EnvironmentResource
    {
        self::$BUCKET ??= new EnvironmentResource('bucket');

        return self::$BUCKET;
    }
    public static function FILE(): EnvironmentResource
    {
        self::$FILE ??= new EnvironmentResource('file');

        return self::$FILE;
    }
    public static function FUNCTION(): EnvironmentResource
    {
        self::$FUNCTION ??= new EnvironmentResource('function');

        return self::$FUNCTION;
    }
    public static function ENVIRONMENTVARIABLE(): EnvironmentResource
    {
        self::$ENVIRONMENTVARIABLE ??= new EnvironmentResource('environment-variable');

        return self::$ENVIRONMENTVARIABLE;
    }
    public static function DEPLOYMENT(): EnvironmentResource
    {
        self::$DEPLOYMENT ??= new EnvironmentResource('deployment');

        return self::$DEPLOYMENT;
    }
    public static function SITE(): EnvironmentResource
    {
        self::$SITE ??= new EnvironmentResource('site');

        return self::$SITE;
    }
    public static function SITEVARIABLE(): EnvironmentResource
    {
        self::$SITEVARIABLE ??= new EnvironmentResource('site-variable');

        return self::$SITEVARIABLE;
    }
    public static function SITEDEPLOYMENT(): EnvironmentResource
    {
        self::$SITEDEPLOYMENT ??= new EnvironmentResource('site-deployment');

        return self::$SITEDEPLOYMENT;
    }
    public static function PROVIDER(): EnvironmentResource
    {
        self::$PROVIDER ??= new EnvironmentResource('provider');

        return self::$PROVIDER;
    }
    public static function TOPIC(): EnvironmentResource
    {
        self::$TOPIC ??= new EnvironmentResource('topic');

        return self::$TOPIC;
    }
    public static function SUBSCRIBER(): EnvironmentResource
    {
        self::$SUBSCRIBER ??= new EnvironmentResource('subscriber');

        return self::$SUBSCRIBER;
    }
    public static function PLATFORM(): EnvironmentResource
    {
        self::$PLATFORM ??= new EnvironmentResource('platform');

        return self::$PLATFORM;
    }
    public static function SMTP(): EnvironmentResource
    {
        self::$SMTP ??= new EnvironmentResource('smtp');

        return self::$SMTP;
    }
    public static function PROJECTVARIABLE(): EnvironmentResource
    {
        self::$PROJECTVARIABLE ??= new EnvironmentResource('project-variable');

        return self::$PROJECTVARIABLE;
    }
    public static function PROJECTPROTOCOLS(): EnvironmentResource
    {
        self::$PROJECTPROTOCOLS ??= new EnvironmentResource('project-protocols');

        return self::$PROJECTPROTOCOLS;
    }
    public static function PROJECTLABELS(): EnvironmentResource
    {
        self::$PROJECTLABELS ??= new EnvironmentResource('project-labels');

        return self::$PROJECTLABELS;
    }
    public static function PROJECTSERVICES(): EnvironmentResource
    {
        self::$PROJECTSERVICES ??= new EnvironmentResource('project-services');

        return self::$PROJECTSERVICES;
    }
    public static function PROJECTEMAILTEMPLATE(): EnvironmentResource
    {
        self::$PROJECTEMAILTEMPLATE ??= new EnvironmentResource('project-email-template');

        return self::$PROJECTEMAILTEMPLATE;
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
            'documentsdb' => self::DOCUMENTSDB(),
            'vectorsdb' => self::VECTORSDB(),
            'table' => self::TABLE(),
            'collection' => self::COLLECTION(),
            'column' => self::COLUMN(),
            'attribute' => self::ATTRIBUTE(),
            'index' => self::INDEX(),
            'row' => self::ROW(),
            'document' => self::DOCUMENT(),
            'bucket' => self::BUCKET(),
            'file' => self::FILE(),
            'function' => self::FUNCTION(),
            'environment-variable' => self::ENVIRONMENTVARIABLE(),
            'deployment' => self::DEPLOYMENT(),
            'site' => self::SITE(),
            'site-variable' => self::SITEVARIABLE(),
            'site-deployment' => self::SITEDEPLOYMENT(),
            'provider' => self::PROVIDER(),
            'topic' => self::TOPIC(),
            'subscriber' => self::SUBSCRIBER(),
            'platform' => self::PLATFORM(),
            'smtp' => self::SMTP(),
            'project-variable' => self::PROJECTVARIABLE(),
            'project-protocols' => self::PROJECTPROTOCOLS(),
            'project-labels' => self::PROJECTLABELS(),
            'project-services' => self::PROJECTSERVICES(),
            'project-email-template' => self::PROJECTEMAILTEMPLATE(),
            default => throw new \InvalidArgumentException('Unknown EnvironmentResource value: ' . $value),
        };
    }
}
