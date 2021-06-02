<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;

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
     * @param string $orderType
     * @throws AppwriteException
     * @return array
     */
    public function list(string $search = null, int $limit = null, int $offset = null, string $orderType = null): array
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
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array
     */
    public function create(string $email, string $password, string $name = null): array
    {
        if (empty($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }

        if (empty($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }

        $path   = str_replace([], [], '/users');
        $params = [];

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
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete User
     *
     * Delete a user by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array
     */
    public function delete(string $userId): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get User Logs
     *
     * Get a user activity logs list by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array
     */
    public function getLogs(string $userId): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/logs');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
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
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');
        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update User Preferences
     *
     * Update the user preferences by its unique ID. You can pass only the
     * specific settings you wish to update.
     *
     * @param string $userId
     * @param array $prefs
     * @throws AppwriteException
     * @return array
     */
    public function updatePrefs(string $userId, array $prefs): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        if (empty($prefs)) {
            throw new AppwriteException('Missing required parameter: "prefs"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');
        $params = [];

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
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');
        $params = [];

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
     * @return array
     */
    public function deleteSessions(string $userId): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');
        $params = [];

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
     * @return array
     */
    public function deleteSession(string $userId, string $sessionId): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        if (empty($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        $path   = str_replace(['{userId}', '{sessionId}'], [$userId, $sessionId], '/users/{userId}/sessions/{sessionId}');
        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update User Status
     *
     * Update the user status by its unique ID.
     *
     * @param string $userId
     * @param int $status
     * @throws AppwriteException
     * @return array
     */
    public function updateStatus(string $userId, int $status): array
    {
        if (empty($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        if (empty($status)) {
            throw new AppwriteException('Missing required parameter: "status"');
        }

        $path   = str_replace(['{userId}'], [$userId], '/users/{userId}/status');
        $params = [];

        if (!is_null($status)) {
            $params['status'] = $status;
        }

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}