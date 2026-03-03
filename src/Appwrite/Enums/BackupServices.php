<?php

namespace Appwrite\Enums;

use JsonSerializable;

class BackupServices implements JsonSerializable
{
    private static BackupServices $DATABASES;
    private static BackupServices $FUNCTIONS;
    private static BackupServices $STORAGE;

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

    public static function DATABASES(): BackupServices
    {
        if (!isset(self::$DATABASES)) {
            self::$DATABASES = new BackupServices('databases');
        }
        return self::$DATABASES;
    }
    public static function FUNCTIONS(): BackupServices
    {
        if (!isset(self::$FUNCTIONS)) {
            self::$FUNCTIONS = new BackupServices('functions');
        }
        return self::$FUNCTIONS;
    }
    public static function STORAGE(): BackupServices
    {
        if (!isset(self::$STORAGE)) {
            self::$STORAGE = new BackupServices('storage');
        }
        return self::$STORAGE;
    }
}