<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Users extends Service
{
    /**
     * List Users
     *
     * Get a list of all the project users. You can use the query params to filter your results.
     *
     * @param string $search
     * @param integer $limit
     * @param integer $offset
     * @param string $orderType
     * @throws Exception
     * @return array
     */
    public function listUsers($search = '', $limit = 25, $offset = 0, $orderType = 'ASC')
    {
        $path   = str_replace([], [], '/users');
        $params = [];

        $params['search'] = $search;
        $params['limit'] = $limit;
        $params['offset'] = $offset;
        $params['orderType'] = $orderType;

        return $this->client->call(Client::METHOD_GET, $path, [
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
     * @throws Exception
     * @return array
     */
    public function createUser($email, $password, $name = '')
    {
        $path   = str_replace([], [], '/users');
        $params = [];

        $params['email'] = $email;
        $params['password'] = $password;
        $params['name'] = $name;

        return $this->client->call(Client::METHOD_POST, $path, [
        ], $params);
    }

    /**
     * Get User
     *
     * Get user by its unique ID.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getUser($id)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Get User Logs
     *
     * Get user activity logs list by its unique ID.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getUserLogs($id)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}/logs');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Get User Prefs
     *
     * Get user preferences by its unique ID.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getUserPrefs($id)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}/prefs');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Get User Sessions
     *
     * Get user sessions list by its unique ID.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function getUserSessions($id)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}/sessions');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
        ], $params);
    }

    /**
     * Delete User Sessions
     *
     * Delete all user sessions by its unique ID.
     *
     * @param string $id
     * @throws Exception
     * @return array
     */
    public function deleteUserSessions($id)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}/sessions');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
        ], $params);
    }

    /**
     * Delete User Session
     *
     * Delete user sessions by its unique ID.
     *
     * @param string $id
     * @param string $session
     * @throws Exception
     * @return array
     */
    public function deleteUsersSession($id, $session)
    {
        $path   = str_replace(['{id}', '{session}'], [$id, $session], '/users/{id}/sessions/{session}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
        ], $params);
    }

    /**
     * Block User
     *
     * Update user status by its unique ID.
     *
     * @param string $id
     * @param string $status
     * @throws Exception
     * @return array
     */
    public function updateUserStatus($id, $status)
    {
        $path   = str_replace(['{id}'], [$id], '/users/{id}/status');
        $params = [];

        $params['status'] = $status;

        return $this->client->call(Client::METHOD_PATCH, $path, [
        ], $params);
    }

}