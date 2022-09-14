<?php

namespace Appwrite;

class Role
{
    public static function any(): string
    {
        return 'any';
    }
    public static function user(string $id, string $status = ""): string
    {
        if(empty($status)) {
            return "user:$id";
        }
        return "user:$id/$status";
    }
    public static function users(string $status = ""): string
    {
        if(empty($status)) {
            return 'users';
        }
        return "users/$status";
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
    public static function member(string $id): string
    {
        return "member:$id";
    }
    public static function status(string $status): string
    {
        return "status:$status";
    }
}