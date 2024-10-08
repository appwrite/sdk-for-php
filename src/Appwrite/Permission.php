<?php

namespace Appwrite;

class Permission
{
    public static function read(string $role): string
    {
        return "read(\"$role\")";
    }

    public static function write(string $role): string
    {
        return "write(\"$role\")";
    }

    public static function create(string $role): string
    {
        return "create(\"$role\")";
    }

    public static function update(string $role): string
    {
        return "update(\"$role\")";
    }

    public static function delete(string $role): string
    {
        return "delete(\"$role\")";
    }
}
