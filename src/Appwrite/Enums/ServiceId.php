<?php

namespace Appwrite\Enums;

use JsonSerializable;

class ServiceId implements JsonSerializable
{
    private static ServiceId $ACCOUNT;
    private static ServiceId $AVATARS;
    private static ServiceId $DATABASES;
    private static ServiceId $TABLESDB;
    private static ServiceId $LOCALE;
    private static ServiceId $HEALTH;
    private static ServiceId $PROJECT;
    private static ServiceId $STORAGE;
    private static ServiceId $TEAMS;
    private static ServiceId $USERS;
    private static ServiceId $VCS;
    private static ServiceId $SITES;
    private static ServiceId $FUNCTIONS;
    private static ServiceId $PROXY;
    private static ServiceId $GRAPHQL;
    private static ServiceId $MIGRATIONS;
    private static ServiceId $MESSAGING;

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

    public static function ACCOUNT(): ServiceId
    {
        if (!isset(self::$ACCOUNT)) {
            self::$ACCOUNT = new ServiceId('account');
        }
        return self::$ACCOUNT;
    }
    public static function AVATARS(): ServiceId
    {
        if (!isset(self::$AVATARS)) {
            self::$AVATARS = new ServiceId('avatars');
        }
        return self::$AVATARS;
    }
    public static function DATABASES(): ServiceId
    {
        if (!isset(self::$DATABASES)) {
            self::$DATABASES = new ServiceId('databases');
        }
        return self::$DATABASES;
    }
    public static function TABLESDB(): ServiceId
    {
        if (!isset(self::$TABLESDB)) {
            self::$TABLESDB = new ServiceId('tablesdb');
        }
        return self::$TABLESDB;
    }
    public static function LOCALE(): ServiceId
    {
        if (!isset(self::$LOCALE)) {
            self::$LOCALE = new ServiceId('locale');
        }
        return self::$LOCALE;
    }
    public static function HEALTH(): ServiceId
    {
        if (!isset(self::$HEALTH)) {
            self::$HEALTH = new ServiceId('health');
        }
        return self::$HEALTH;
    }
    public static function PROJECT(): ServiceId
    {
        if (!isset(self::$PROJECT)) {
            self::$PROJECT = new ServiceId('project');
        }
        return self::$PROJECT;
    }
    public static function STORAGE(): ServiceId
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new ServiceId('storage');
        }
        return self::$STORAGE;
    }
    public static function TEAMS(): ServiceId
    {
        if (!isset(self::$TEAMS)) {
            self::$TEAMS = new ServiceId('teams');
        }
        return self::$TEAMS;
    }
    public static function USERS(): ServiceId
    {
        if (!isset(self::$USERS)) {
            self::$USERS = new ServiceId('users');
        }
        return self::$USERS;
    }
    public static function VCS(): ServiceId
    {
        if (!isset(self::$VCS)) {
            self::$VCS = new ServiceId('vcs');
        }
        return self::$VCS;
    }
    public static function SITES(): ServiceId
    {
        if (!isset(self::$SITES)) {
            self::$SITES = new ServiceId('sites');
        }
        return self::$SITES;
    }
    public static function FUNCTIONS(): ServiceId
    {
        if (!isset(self::$FUNCTIONS)) {
            self::$FUNCTIONS = new ServiceId('functions');
        }
        return self::$FUNCTIONS;
    }
    public static function PROXY(): ServiceId
    {
        if (!isset(self::$PROXY)) {
            self::$PROXY = new ServiceId('proxy');
        }
        return self::$PROXY;
    }
    public static function GRAPHQL(): ServiceId
    {
        if (!isset(self::$GRAPHQL)) {
            self::$GRAPHQL = new ServiceId('graphql');
        }
        return self::$GRAPHQL;
    }
    public static function MIGRATIONS(): ServiceId
    {
        if (!isset(self::$MIGRATIONS)) {
            self::$MIGRATIONS = new ServiceId('migrations');
        }
        return self::$MIGRATIONS;
    }
    public static function MESSAGING(): ServiceId
    {
        if (!isset(self::$MESSAGING)) {
            self::$MESSAGING = new ServiceId('messaging');
        }
        return self::$MESSAGING;
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
            default => throw new \InvalidArgumentException('Unknown ServiceId value: ' . $value),
        };
    }
}
