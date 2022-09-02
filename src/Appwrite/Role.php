<?php

namespace Appwrite;

class Role
{
    public static function any(): string
    {
        return 'any';
    }
    public static function user(string $id): string
    {
        return "user:$id";
    }
    public static function users(): string
    {
        return 'users';
    }
    public static function guests(): string
    {
        return 'guests';
    }
    public static function team(string $id, string $role = ""): string
    {
        if(empty($role)) {
            return "team:$id";
        }
        return "team:$id/$role";
    }
    public static function status(string $status): string
    {
        return "status:$status";
    }
}