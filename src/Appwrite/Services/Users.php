<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Users extends Service
{
    /**
     * List Users
     *
     * Get a list of all the project's users. You can use the query params to
     * filter your results.
     *
     * @param string $search
     * @param int $limit
     * @param int $offset
     * @param string $cursor
     * @param string $cursorDirection
     * @param string $orderType
     * @throws AppwriteException
     * @return array

     */
    public function list(string $search = null, int $limit = null, int $offset = null, string $cursor = null, string $cursorDirection = null, string $orderType = null): array
    {
        $path   = str_replace([], [], '/users');

        $params = [];
        if (!is_null($search)) {
            $params['search'] = $search;
        }

        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }

        if (!is_null($cursor)) {
            $params['cursor'] = $cursor;
        }

        if (!is_null($cursorDirection)) {
            $params['cursorDirection'] = $cursorDirection;
        }

        if (!is_null($orderType)) {
            $params['orderType'] = $orderType;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create User
     *
     * Create a new user.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function create(string $userId, string $email, string $password, string $name = null): array
    {
        $path   = str_replace([], [], '/users');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($userId)) {
            $params['userId'] = $userId;
        }

        if (!is_null($email)) {
            $params['email'] = $email;
        }

        if (!is_null($password)) {
            $params['password'] = $password;
        }

        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User
     *
     * Get a user by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function get(string $userId): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete User
     *
     * Delete a user by its unique ID, thereby releasing it's ID. Since ID is
     * released and can be reused, all user-related resources like documents or
     * storage files should be deleted before user deletion. If you want to keep
     * ID reserved, use the [updateStatus](/docs/server/users#usersUpdateStatus)
     * endpoint instead.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return string

     */
    public function delete(string $userId): string
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Email
     *
     * Update the user email by its unique ID.
     *
     * @param string $userId
     * @param string $email
     * @throws AppwriteException
     * @return array

     */
    public function updateEmail(string $userId, string $email): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/email');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!is_null($email)) {
            $params['email'] = $email;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User Logs
     *
     * Get the user activity logs list by its unique ID.
     *
     * @param string $userId
     * @param int $limit
     * @param int $offset
     * @throws AppwriteException
     * @return array

     */
    public function getLogs(string $userId, int $limit = null, int $offset = null): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/logs');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!is_null($limit)) {
            $params['limit'] = $limit;
        }

        if (!is_null($offset)) {
            $params['offset'] = $offset;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User Memberships
     *
     * Get the user membership list by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function getMemberships(string $userId): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/memberships');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Name
     *
     * Update the user name by its unique ID.
     *
     * @param string $userId
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function updateName(string $userId, string $name): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/name');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $params['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Password
     *
     * Update the user password by its unique ID.
     *
     * @param string $userId
     * @param string $password
     * @throws AppwriteException
     * @return array

     */
    public function updatePassword(string $userId, string $password): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/password');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($password)) {
            $params['password'] = $password;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Phone
     *
     * Update the user phone by its unique ID.
     *
     * @param string $userId
     * @param string $number
     * @throws AppwriteException
     * @return array

     */
    public function updatePhone(string $userId, string $number): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/phone');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($number)) {
            throw new AppwriteException('Missing required parameter: "number"');
        }
        if (!is_null($number)) {
            $params['number'] = $number;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User Preferences
     *
     * Get the user preferences by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function getPrefs(string $userId): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update User Preferences
     *
     * Update the user preferences by its unique ID. The object you pass is stored
     * as is, and replaces any previous value. The maximum allowed prefs size is
     * 64kB and throws error if exceeded.
     *
     * @param string $userId
     * @param array $prefs
     * @throws AppwriteException
     * @return array

     */
    public function updatePrefs(string $userId, array $prefs): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($prefs)) {
            throw new AppwriteException('Missing required parameter: "prefs"');
        }
        if (!is_null($prefs)) {
            $params['prefs'] = $prefs;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User Sessions
     *
     * Get the user sessions list by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function getSessions(string $userId): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete User Sessions
     *
     * Delete all user's sessions by using the user's unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return string

     */
    public function deleteSessions(string $userId): string
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete User Session
     *
     * Delete a user sessions by its unique ID.
     *
     * @param string $userId
     * @param string $sessionId
     * @throws AppwriteException
     * @return string

     */
    public function deleteSession(string $userId, string $sessionId): string
    {
        $path   = str_replace(['{userId}', '{sessionId}'], [$userId, $sessionId], '/users/{userId}/sessions/{sessionId}');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update User Status
     *
     * Update the user status by its unique ID. Use this endpoint as an
     * alternative to deleting a user if you want to keep user's ID reserved.
     *
     * @param string $userId
     * @param bool $status
     * @throws AppwriteException
     * @return array

     */
    public function updateStatus(string $userId, bool $status): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/status');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($status)) {
            throw new AppwriteException('Missing required parameter: "status"');
        }
        if (!is_null($status)) {
            $params['status'] = $status;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Email Verification
     *
     * Update the user email verification status by its unique ID.
     *
     * @param string $userId
     * @param bool $emailVerification
     * @throws AppwriteException
     * @return array

     */
    public function updateEmailVerification(string $userId, bool $emailVerification): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/verification');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($emailVerification)) {
            throw new AppwriteException('Missing required parameter: "emailVerification"');
        }
        if (!is_null($emailVerification)) {
            $params['emailVerification'] = $emailVerification;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Phone Verification
     *
     * Update the user phone verification status by its unique ID.
     *
     * @param string $userId
     * @param bool $phoneVerification
     * @throws AppwriteException
     * @return array

     */
    public function updatePhoneVerification(string $userId, bool $phoneVerification): array
    {
        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/verification/phone');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($phoneVerification)) {
            throw new AppwriteException('Missing required parameter: "phoneVerification"');
        }
        if (!is_null($phoneVerification)) {
            $params['phoneVerification'] = $phoneVerification;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
