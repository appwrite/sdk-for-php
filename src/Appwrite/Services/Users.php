<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Users extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * List users
     *
     * Get a list of all the project's users. You can use the query params to
     * filter your results.
     *
     * @param array $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function list(array $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/users');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user
     *
     * Create a new user.
     *
     * @param string $userId
     * @param string $email
     * @param string $phone
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function create(string $userId, string $email = null, string $phone = null, string $password = null, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($phone)) {
            $apiParams['phone'] = $phone;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with Argon2 password
     *
     * Create a new user. Password provided must be hashed with the
     * [Argon2](https://en.wikipedia.org/wiki/Argon2) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createArgon2User(string $userId, string $email, string $password, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/argon2');

        $apiParams = [];
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
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with bcrypt password
     *
     * Create a new user. Password provided must be hashed with the
     * [Bcrypt](https://en.wikipedia.org/wiki/Bcrypt) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createBcryptUser(string $userId, string $email, string $password, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/bcrypt');

        $apiParams = [];
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
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List Identities
     *
     * Get identities for all users.
     *
     * @param string $queries
     * @param string $search
     * @throws AppwriteException
     * @return array

     */
    public function listIdentities(string $queries = null, string $search = null): array
    {
        $apiPath = str_replace([], [], '/users/identities');

        $apiParams = [];
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete Identity
     *
     * Delete an identity by its unique ID.
     *
     * @param string $identityId
     * @throws AppwriteException
     * @return string

     */
    public function deleteIdentity(string $identityId): string
    {
        $apiPath = str_replace(['{identityId}'], [$identityId], '/users/identities/{identityId}');

        $apiParams = [];
        if (!isset($identityId)) {
            throw new AppwriteException('Missing required parameter: "identityId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with MD5 password
     *
     * Create a new user. Password provided must be hashed with the
     * [MD5](https://en.wikipedia.org/wiki/MD5) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createMD5User(string $userId, string $email, string $password, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/md5');

        $apiParams = [];
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
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with PHPass password
     *
     * Create a new user. Password provided must be hashed with the
     * [PHPass](https://www.openwall.com/phpass/) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createPHPassUser(string $userId, string $email, string $password, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/phpass');

        $apiParams = [];
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
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with Scrypt password
     *
     * Create a new user. Password provided must be hashed with the
     * [Scrypt](https://github.com/Tarsnap/scrypt) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $passwordSalt
     * @param int $passwordCpu
     * @param int $passwordMemory
     * @param int $passwordParallel
     * @param int $passwordLength
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createScryptUser(string $userId, string $email, string $password, string $passwordSalt, int $passwordCpu, int $passwordMemory, int $passwordParallel, int $passwordLength, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/scrypt');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!isset($passwordSalt)) {
            throw new AppwriteException('Missing required parameter: "passwordSalt"');
        }
        if (!isset($passwordCpu)) {
            throw new AppwriteException('Missing required parameter: "passwordCpu"');
        }
        if (!isset($passwordMemory)) {
            throw new AppwriteException('Missing required parameter: "passwordMemory"');
        }
        if (!isset($passwordParallel)) {
            throw new AppwriteException('Missing required parameter: "passwordParallel"');
        }
        if (!isset($passwordLength)) {
            throw new AppwriteException('Missing required parameter: "passwordLength"');
        }
        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($passwordSalt)) {
            $apiParams['passwordSalt'] = $passwordSalt;
        }

        if (!is_null($passwordCpu)) {
            $apiParams['passwordCpu'] = $passwordCpu;
        }

        if (!is_null($passwordMemory)) {
            $apiParams['passwordMemory'] = $passwordMemory;
        }

        if (!is_null($passwordParallel)) {
            $apiParams['passwordParallel'] = $passwordParallel;
        }

        if (!is_null($passwordLength)) {
            $apiParams['passwordLength'] = $passwordLength;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with Scrypt modified password
     *
     * Create a new user. Password provided must be hashed with the [Scrypt
     * Modified](https://gist.github.com/Meldiron/eecf84a0225eccb5a378d45bb27462cc)
     * algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $passwordSalt
     * @param string $passwordSaltSeparator
     * @param string $passwordSignerKey
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createScryptModifiedUser(string $userId, string $email, string $password, string $passwordSalt, string $passwordSaltSeparator, string $passwordSignerKey, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/scrypt-modified');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!isset($passwordSalt)) {
            throw new AppwriteException('Missing required parameter: "passwordSalt"');
        }
        if (!isset($passwordSaltSeparator)) {
            throw new AppwriteException('Missing required parameter: "passwordSaltSeparator"');
        }
        if (!isset($passwordSignerKey)) {
            throw new AppwriteException('Missing required parameter: "passwordSignerKey"');
        }
        if (!is_null($userId)) {
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($passwordSalt)) {
            $apiParams['passwordSalt'] = $passwordSalt;
        }

        if (!is_null($passwordSaltSeparator)) {
            $apiParams['passwordSaltSeparator'] = $passwordSaltSeparator;
        }

        if (!is_null($passwordSignerKey)) {
            $apiParams['passwordSignerKey'] = $passwordSignerKey;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Create user with SHA password
     *
     * Create a new user. Password provided must be hashed with the
     * [SHA](https://en.wikipedia.org/wiki/Secure_Hash_Algorithm) algorithm. Use
     * the [POST /users](https://appwrite.io/docs/server/users#usersCreate)
     * endpoint to create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param string $passwordVersion
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function createSHAUser(string $userId, string $email, string $password, string $passwordVersion = null, string $name = null): array
    {
        $apiPath = str_replace([], [], '/users/sha');

        $apiParams = [];
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
            $apiParams['userId'] = $userId;
        }

        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($passwordVersion)) {
            $apiParams['passwordVersion'] = $passwordVersion;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_POST, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get user
     *
     * Get a user by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function get(string $userId): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete user
     *
     * Delete a user by its unique ID, thereby releasing it's ID. Since ID is
     * released and can be reused, all user-related resources like documents or
     * storage files should be deleted before user deletion. If you want to keep
     * ID reserved, use the
     * [updateStatus](https://appwrite.io/docs/server/users#usersUpdateStatus)
     * endpoint instead.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return string

     */
    public function delete(string $userId): string
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update email
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/email');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!is_null($email)) {
            $apiParams['email'] = $email;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update user labels
     *
     * Update the user labels by its unique ID. 
     * 
     * Labels can be used to grant access to resources. While teams are a way for
     * user's to share access to a resource, labels can be defined by the
     * developer to grant access without an invitation. See the [Permissions
     * docs](https://appwrite.io/docs/permissions) for more info.
     *
     * @param string $userId
     * @param array $labels
     * @throws AppwriteException
     * @return array

     */
    public function updateLabels(string $userId, array $labels): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/labels');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($labels)) {
            throw new AppwriteException('Missing required parameter: "labels"');
        }
        if (!is_null($labels)) {
            $apiParams['labels'] = $labels;
        }


        return $this->client->call(Client::METHOD_PUT, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List user logs
     *
     * Get the user activity logs list by its unique ID.
     *
     * @param string $userId
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listLogs(string $userId, array $queries = null): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/logs');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List user memberships
     *
     * Get the user membership list by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function listMemberships(string $userId): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/memberships');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update name
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/name');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($name)) {
            throw new AppwriteException('Missing required parameter: "name"');
        }
        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update password
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/password');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update phone
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/phone');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($number)) {
            throw new AppwriteException('Missing required parameter: "number"');
        }
        if (!is_null($number)) {
            $apiParams['number'] = $number;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Get user preferences
     *
     * Get the user preferences by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function getPrefs(string $userId): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update user preferences
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/prefs');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($prefs)) {
            throw new AppwriteException('Missing required parameter: "prefs"');
        }
        if (!is_null($prefs)) {
            $apiParams['prefs'] = $prefs;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * List user sessions
     *
     * Get the user sessions list by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return array

     */
    public function listSessions(string $userId): array
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_GET, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete user sessions
     *
     * Delete all user's sessions by using the user's unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return string

     */
    public function deleteSessions(string $userId): string
    {
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/sessions');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Delete user session
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
        $apiPath = str_replace(['{userId}', '{sessionId}'], [$userId, $sessionId], '/users/{userId}/sessions/{sessionId}');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update user status
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/status');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($status)) {
            throw new AppwriteException('Missing required parameter: "status"');
        }
        if (!is_null($status)) {
            $apiParams['status'] = $status;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update email verification
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/verification');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($emailVerification)) {
            throw new AppwriteException('Missing required parameter: "emailVerification"');
        }
        if (!is_null($emailVerification)) {
            $apiParams['emailVerification'] = $emailVerification;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }

    /**
     * Update phone verification
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
        $apiPath = str_replace(['{userId}'], [$userId], '/users/{userId}/verification/phone');

        $apiParams = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($phoneVerification)) {
            throw new AppwriteException('Missing required parameter: "phoneVerification"');
        }
        if (!is_null($phoneVerification)) {
            $apiParams['phoneVerification'] = $phoneVerification;
        }


        return $this->client->call(Client::METHOD_PATCH, $apiPath, [
            'content-type' => 'application/json',
        ], $apiParams);
    }
}
