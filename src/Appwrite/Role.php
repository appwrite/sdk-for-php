<?php

namespace Appwrite;

/**
 * Helper class to generate role strings for Permission.
 */
class Role
{
    /**
     * Grants access to anyone.
     *
     * This includes authenticated and unauthenticated users.
     * 
     * @return string
     */
    public static function any(): string
    {
        return 'any';
    }

    /**
     * Grants access to a specific user by user ID.
     * 
     * You can optionally pass verified or unverified for
     * `status` to target specific types of users.
     *
     * @param string $id 
     * @param string $status 
     * @return string
     */
    public static function user(string $id, string $status = ""): string
    {
        if(empty($status)) {
            return "user:$id";
        }
        return "user:$id/$status";
    }

    /**
     * Grants access to any authenticated or anonymous user.
     * 
     * You can optionally pass verified or unverified for
     * `status` to target specific types of users.
     * 
     * @param string $status 
     * @return string
     */
    public static function users(string $status = ""): string
    {
        if(empty($status)) {
            return 'users';
        }
        return "users/$status";
    }

    /**
     * Grants access to any guest user without a session.
     * 
     * Authenticated users don't have access to this role.
     * 
     * @return string
     */
    public static function guests(): string
    {
        return 'guests';
    }

    /**
     * Grants access to a team by team ID.
     * 
     * You can optionally pass a role for `role` to target
     * team members with the specified role.
     * 
     * @param string $id 
     * @param string $role 
     * @return string
     */
    public static function team(string $id, string $role = ""): string
    {
        if(empty($role)) {
            return "team:$id";
        }
        return "team:$id/$role";
    }

    /**
     * Grants access to a specific member of a team.
     * 
     * When the member is removed from the team, they will
     * no longer have access.
     * 
     * @param string $id 
     * @return string
     */
    public static function member(string $id): string
    {
        return "member:$id";
    }

    /**
     * Grants access to a user with the specified label.
     * 
     * @param string $name 
     * @return  string
     */
    public static function label(string $name): string
    {
        return "label:$name";
    }
}