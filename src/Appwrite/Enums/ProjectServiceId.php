<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ProjectServiceId implements JsonSerializable
{
    private static ProjectServiceId $ACCOUNT;
    private static ProjectServiceId $AVATARS;
    private static ProjectServiceId $DATABASES;
    private static ProjectServiceId $TABLESDB;
    private static ProjectServiceId $LOCALE;
    private static ProjectServiceId $HEALTH;
    private static ProjectServiceId $PROJECT;
    private static ProjectServiceId $STORAGE;
    private static ProjectServiceId $TEAMS;
    private static ProjectServiceId $USERS;
    private static ProjectServiceId $VCS;
    private static ProjectServiceId $SITES;
    private static ProjectServiceId $FUNCTIONS;
    private static ProjectServiceId $PROXY;
    private static ProjectServiceId $GRAPHQL;
    private static ProjectServiceId $MIGRATIONS;
    private static ProjectServiceId $MESSAGING;
    private static ProjectServiceId $ADVISOR;
    private static ProjectServiceId $OAUTH2;

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

    public static function ACCOUNT(): ProjectServiceId
    {
        if (!isset(self::$ACCOUNT)) {
            self::$ACCOUNT = new ProjectServiceId('account');
        }
        return self::$ACCOUNT;
    }
    public static function AVATARS(): ProjectServiceId
    {
        if (!isset(self::$AVATARS)) {
            self::$AVATARS = new ProjectServiceId('avatars');
        }
        return self::$AVATARS;
    }
    public static function DATABASES(): ProjectServiceId
    {
        if (!isset(self::$DATABASES)) {
            self::$DATABASES = new ProjectServiceId('databases');
        }
        return self::$DATABASES;
    }
    public static function TABLESDB(): ProjectServiceId
    {
        if (!isset(self::$TABLESDB)) {
            self::$TABLESDB = new ProjectServiceId('tablesdb');
        }
        return self::$TABLESDB;
    }
    public static function LOCALE(): ProjectServiceId
    {
        if (!isset(self::$LOCALE)) {
            self::$LOCALE = new ProjectServiceId('locale');
        }
        return self::$LOCALE;
    }
    public static function HEALTH(): ProjectServiceId
    {
        if (!isset(self::$HEALTH)) {
            self::$HEALTH = new ProjectServiceId('health');
        }
        return self::$HEALTH;
    }
    public static function PROJECT(): ProjectServiceId
    {
        if (!isset(self::$PROJECT)) {
            self::$PROJECT = new ProjectServiceId('project');
        }
        return self::$PROJECT;
    }
    public static function STORAGE(): ProjectServiceId
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new ProjectServiceId('storage');
        }
        return self::$STORAGE;
    }
    public static function TEAMS(): ProjectServiceId
    {
        if (!isset(self::$TEAMS)) {
            self::$TEAMS = new ProjectServiceId('teams');
        }
        return self::$TEAMS;
    }
    public static function USERS(): ProjectServiceId
    {
        if (!isset(self::$USERS)) {
            self::$USERS = new ProjectServiceId('users');
        }
        return self::$USERS;
    }
    public static function VCS(): ProjectServiceId
    {
        if (!isset(self::$VCS)) {
            self::$VCS = new ProjectServiceId('vcs');
        }
        return self::$VCS;
    }
    public static function SITES(): ProjectServiceId
    {
        if (!isset(self::$SITES)) {
            self::$SITES = new ProjectServiceId('sites');
        }
        return self::$SITES;
    }
    public static function FUNCTIONS(): ProjectServiceId
    {
        if (!isset(self::$FUNCTIONS)) {
            self::$FUNCTIONS = new ProjectServiceId('functions');
        }
        return self::$FUNCTIONS;
    }
    public static function PROXY(): ProjectServiceId
    {
        if (!isset(self::$PROXY)) {
            self::$PROXY = new ProjectServiceId('proxy');
        }
        return self::$PROXY;
    }
    public static function GRAPHQL(): ProjectServiceId
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new ProjectServiceId('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function MIGRATIONS(): ProjectServiceId
    {
        if (!isset(self::$MIGRATIONS)) {
            self::$MIGRATIONS = new ProjectServiceId('migrations');
        }
        return self::$MIGRATIONS;
    }
    public static function MESSAGING(): ProjectServiceId
    {
        if (!isset(self::$MESSAGING)) {
            self::$MESSAGING = new ProjectServiceId('messaging');
        }
        return self::$MESSAGING;
    }
    public static function ADVISOR(): ProjectServiceId
    {
        if (!isset(self::$ADVISOR)) {
            self::$ADVISOR = new ProjectServiceId('advisor');
        }
        return self::$ADVISOR;
    }
    public static function OAUTH2(): ProjectServiceId
    {
        if (!isset(self::$OAUTH2)) {
            self::$OAUTH2 = new ProjectServiceId('oauth2');
        }
        return self::$OAUTH2;
    }

    public static function from(string $value): self
    {
        return match ($value) {
            'account' => self::ACCOUNT(),
            'avatars' => self::AVATARS(),
            'databases' => self::DATABASES(),
            'tablesdb' => self::TABLESDB(),
            'locale' => self::LOCALE(),
            'health' => self::HEALTH(),
            'project' => self::PROJECT(),
            'storage' => self::STORAGE(),
            'teams' => self::TEAMS(),
            'users' => self::USERS(),
            'vcs' => self::VCS(),
            'sites' => self::SITES(),
            'functions' => self::FUNCTIONS(),
            'proxy' => self::PROXY(),
            'graphql' => self::GRAPHQL(),
            'migrations' => self::MIGRATIONS(),
            'messaging' => self::MESSAGING(),
            'advisor' => self::ADVISOR(),
            'oauth2' => self::OAUTH2(),
            default => throw new \InvalidArgumentException('Unknown ProjectServiceId value: ' . $value),
        };
    }
}
