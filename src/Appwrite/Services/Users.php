<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\PasswordHash;
use Appwrite\Enums\AuthenticatorType;
use Appwrite\Enums\MessagingProviderType;

class Users extends Service
{
    public function __construct(Client $client)
    {
        parent::__construct($client);
    }

    /**
     * Get a list of all the project's users. You can use the query params to
     * filter your results.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\UserList
     */
    public function list(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\UserList
    {
        $apiPath = str_replace(
            [],
            [],
            '/users'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\UserList::from($response);

    }

    /**
     * Create a new user.
     *
     * @param string $userId
     * @param ?string $email
     * @param ?string $phone
     * @param ?string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function create(string $userId, ?string $email = null, ?string $phone = null, ?string $password = null, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['phone'] = $phone;

        if (!is_null($password)) {
            $apiParams['password'] = $password;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Create a new user. Password provided must be hashed with the
     * [Argon2](https://en.wikipedia.org/wiki/Argon2) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createArgon2User(string $userId, string $email, string $password, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/argon2'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Create a new user. Password provided must be hashed with the
     * [Bcrypt](https://en.wikipedia.org/wiki/Bcrypt) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createBcryptUser(string $userId, string $email, string $password, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/bcrypt'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Get identities for all users.
     *
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\IdentityList
     */
    public function listIdentities(?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\IdentityList
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/identities'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\IdentityList::from($response);

    }

    /**
     * Delete an identity by its unique ID.
     *
     * @param string $identityId
     * @throws AppwriteException
     * @return string
     */
    public function deleteIdentity(string $identityId): string
    {
        $apiPath = str_replace(
            ['{identityId}'],
            [$identityId],
            '/users/identities/{identityId}'
        );

        $apiParams = [];
        $apiParams['identityId'] = $identityId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Create a new user. Password provided must be hashed with the
     * [MD5](https://en.wikipedia.org/wiki/MD5) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createMD5User(string $userId, string $email, string $password, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/md5'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Create a new user. Password provided must be hashed with the
     * [PHPass](https://www.openwall.com/phpass/) algorithm. Use the [POST
     * /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to
     * create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createPHPassUser(string $userId, string $email, string $password, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/phpass'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
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
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createScryptUser(string $userId, string $email, string $password, string $passwordSalt, int $passwordCpu, int $passwordMemory, int $passwordParallel, int $passwordLength, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/scrypt'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;
        $apiParams['passwordSalt'] = $passwordSalt;
        $apiParams['passwordCpu'] = $passwordCpu;
        $apiParams['passwordMemory'] = $passwordMemory;
        $apiParams['passwordParallel'] = $passwordParallel;
        $apiParams['passwordLength'] = $passwordLength;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
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
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createScryptModifiedUser(string $userId, string $email, string $password, string $passwordSalt, string $passwordSaltSeparator, string $passwordSignerKey, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/scrypt-modified'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;
        $apiParams['passwordSalt'] = $passwordSalt;
        $apiParams['passwordSaltSeparator'] = $passwordSaltSeparator;
        $apiParams['passwordSignerKey'] = $passwordSignerKey;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Create a new user. Password provided must be hashed with the
     * [SHA](https://en.wikipedia.org/wiki/Secure_Hash_Algorithm) algorithm. Use
     * the [POST /users](https://appwrite.io/docs/server/users#usersCreate)
     * endpoint to create users with a plain text password.
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?PasswordHash $passwordVersion
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function createSHAUser(string $userId, string $email, string $password, ?PasswordHash $passwordVersion = null, ?string $name = null): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            [],
            [],
            '/users/sha'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($passwordVersion)) {
            $apiParams['passwordVersion'] = $passwordVersion;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Get a user by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function get(string $userId): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
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
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the user email by its unique ID.
     *
     * @param string $userId
     * @param string $email
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateEmail(string $userId, string $email): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/email'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Enable or disable whether a user can impersonate other users. When
     * impersonation headers are used, the request runs as the target user for API
     * behavior, while internal audit logs still attribute the action to the
     * original impersonator and store the impersonated target details only in
     * internal audit payload data.
     * 
     *
     * @param string $userId
     * @param bool $impersonator
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateImpersonator(string $userId, bool $impersonator): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/impersonator'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['impersonator'] = $impersonator;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Use this endpoint to create a JSON Web Token for user by its unique ID. You
     * can use the resulting JWT to authenticate on behalf of the user. The JWT
     * secret will become invalid if the session it uses gets deleted.
     *
     * @param string $userId
     * @param ?string $sessionId
     * @param ?int $duration
     * @throws AppwriteException
     * @return \Appwrite\Models\Jwt
     */
    public function createJWT(string $userId, ?string $sessionId = null, ?int $duration = null): \Appwrite\Models\Jwt
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/jwts'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($sessionId)) {
            $apiParams['sessionId'] = $sessionId;
        }

        if (!is_null($duration)) {
            $apiParams['duration'] = $duration;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Jwt::from($response);

    }

    /**
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
     * @return \Appwrite\Models\User
     */
    public function updateLabels(string $userId, array $labels): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/labels'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['labels'] = $labels;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Get the user activity logs list by its unique ID.
     *
     * @param string $userId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\LogList
     */
    public function listLogs(string $userId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\LogList
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/logs'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\LogList::from($response);

    }

    /**
     * Get the user membership list by its unique ID.
     *
     * @param string $userId
     * @param ?array $queries
     * @param ?string $search
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\MembershipList
     */
    public function listMemberships(string $userId, ?array $queries = null, ?string $search = null, ?bool $total = null): \Appwrite\Models\MembershipList
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/memberships'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($search)) {
            $apiParams['search'] = $search;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MembershipList::from($response);

    }

    /**
     * Enable or disable MFA on a user account.
     *
     * @param string $userId
     * @param bool $mfa
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateMFA(string $userId, bool $mfa): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/mfa'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['mfa'] = $mfa;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Delete an authenticator app.
     *
     * @param string $userId
     * @param AuthenticatorType $type
     * @throws AppwriteException
     * @return string
     */
    public function deleteMFAAuthenticator(string $userId, AuthenticatorType $type): string
    {
        $apiPath = str_replace(
            ['{userId}', '{type}'],
            [$userId, $type],
            '/users/{userId}/mfa/authenticators/{type}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['type'] = $type;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * List the factors available on the account to be used as a MFA challange.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\MfaFactors
     */
    public function listMFAFactors(string $userId): \Appwrite\Models\MfaFactors
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/mfa/factors'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MfaFactors::from($response);

    }

    /**
     * Get recovery codes that can be used as backup for MFA flow by User ID.
     * Before getting codes, they must be generated using
     * [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes)
     * method.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\MfaRecoveryCodes
     */
    public function getMFARecoveryCodes(string $userId): \Appwrite\Models\MfaRecoveryCodes
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/mfa/recovery-codes'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MfaRecoveryCodes::from($response);

    }

    /**
     * Regenerate recovery codes that can be used as backup for MFA flow by User
     * ID. Before regenerating codes, they must be first generated using
     * [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes)
     * method.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\MfaRecoveryCodes
     */
    public function updateMFARecoveryCodes(string $userId): \Appwrite\Models\MfaRecoveryCodes
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/mfa/recovery-codes'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MfaRecoveryCodes::from($response);

    }

    /**
     * Generate recovery codes used as backup for MFA flow for User ID. Recovery
     * codes can be used as a MFA verification type in
     * [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge)
     * method by client SDK.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\MfaRecoveryCodes
     */
    public function createMFARecoveryCodes(string $userId): \Appwrite\Models\MfaRecoveryCodes
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/mfa/recovery-codes'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\MfaRecoveryCodes::from($response);

    }

    /**
     * Update the user name by its unique ID.
     *
     * @param string $userId
     * @param string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateName(string $userId, string $name): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/name'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['name'] = $name;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Update the user password by its unique ID.
     *
     * @param string $userId
     * @param string $password
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updatePassword(string $userId, string $password): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/password'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Update the user phone by its unique ID.
     *
     * @param string $userId
     * @param string $number
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updatePhone(string $userId, string $number): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/phone'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['number'] = $number;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Get the user preferences by its unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\Preferences
     */
    public function getPrefs(string $userId): \Appwrite\Models\Preferences
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/prefs'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Preferences::from($response);

    }

    /**
     * Update the user preferences by its unique ID. The object you pass is stored
     * as is, and replaces any previous value. The maximum allowed prefs size is
     * 64kB and throws error if exceeded.
     *
     * @param string $userId
     * @param array $prefs
     * @throws AppwriteException
     * @return \Appwrite\Models\Preferences
     */
    public function updatePrefs(string $userId, array $prefs): \Appwrite\Models\Preferences
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/prefs'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['prefs'] = $prefs;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Preferences::from($response);

    }

    /**
     * Get the user sessions list by its unique ID.
     *
     * @param string $userId
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\SessionList
     */
    public function listSessions(string $userId, ?bool $total = null): \Appwrite\Models\SessionList
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/sessions'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\SessionList::from($response);

    }

    /**
     * Creates a session for a user. Returns an immediately usable session object.
     * 
     * If you want to generate a token for a custom authentication flow, use the
     * [POST
     * /users/{userId}/tokens](https://appwrite.io/docs/server/users#createToken)
     * endpoint.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return \Appwrite\Models\Session
     */
    public function createSession(string $userId): \Appwrite\Models\Session
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/sessions'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Session::from($response);

    }

    /**
     * Delete all user's sessions by using the user's unique ID.
     *
     * @param string $userId
     * @throws AppwriteException
     * @return string
     */
    public function deleteSessions(string $userId): string
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/sessions'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Delete a user sessions by its unique ID.
     *
     * @param string $userId
     * @param string $sessionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteSession(string $userId, string $sessionId): string
    {
        $apiPath = str_replace(
            ['{userId}', '{sessionId}'],
            [$userId, $sessionId],
            '/users/{userId}/sessions/{sessionId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['sessionId'] = $sessionId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Update the user status by its unique ID. Use this endpoint as an
     * alternative to deleting a user if you want to keep user's ID reserved.
     *
     * @param string $userId
     * @param bool $status
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateStatus(string $userId, bool $status): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/status'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['status'] = $status;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * List the messaging targets that are associated with a user.
     *
     * @param string $userId
     * @param ?array $queries
     * @param ?bool $total
     * @throws AppwriteException
     * @return \Appwrite\Models\TargetList
     */
    public function listTargets(string $userId, ?array $queries = null, ?bool $total = null): \Appwrite\Models\TargetList
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/targets'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        if (!is_null($total)) {
            $apiParams['total'] = $total;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\TargetList::from($response);

    }

    /**
     * Create a messaging target.
     *
     * @param string $userId
     * @param string $targetId
     * @param MessagingProviderType $providerType
     * @param string $identifier
     * @param ?string $providerId
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\Target
     */
    public function createTarget(string $userId, string $targetId, MessagingProviderType $providerType, string $identifier, ?string $providerId = null, ?string $name = null): \Appwrite\Models\Target
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/targets'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['targetId'] = $targetId;
        $apiParams['providerType'] = $providerType;
        $apiParams['identifier'] = $identifier;

        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Target::from($response);

    }

    /**
     * Get a user's push notification target by ID.
     *
     * @param string $userId
     * @param string $targetId
     * @throws AppwriteException
     * @return \Appwrite\Models\Target
     */
    public function getTarget(string $userId, string $targetId): \Appwrite\Models\Target
    {
        $apiPath = str_replace(
            ['{userId}', '{targetId}'],
            [$userId, $targetId],
            '/users/{userId}/targets/{targetId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['targetId'] = $targetId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Target::from($response);

    }

    /**
     * Update a messaging target.
     *
     * @param string $userId
     * @param string $targetId
     * @param ?string $identifier
     * @param ?string $providerId
     * @param ?string $name
     * @throws AppwriteException
     * @return \Appwrite\Models\Target
     */
    public function updateTarget(string $userId, string $targetId, ?string $identifier = null, ?string $providerId = null, ?string $name = null): \Appwrite\Models\Target
    {
        $apiPath = str_replace(
            ['{userId}', '{targetId}'],
            [$userId, $targetId],
            '/users/{userId}/targets/{targetId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['targetId'] = $targetId;

        if (!is_null($identifier)) {
            $apiParams['identifier'] = $identifier;
        }

        if (!is_null($providerId)) {
            $apiParams['providerId'] = $providerId;
        }

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Target::from($response);

    }

    /**
     * Delete a messaging target.
     *
     * @param string $userId
     * @param string $targetId
     * @throws AppwriteException
     * @return string
     */
    public function deleteTarget(string $userId, string $targetId): string
    {
        $apiPath = str_replace(
            ['{userId}', '{targetId}'],
            [$userId, $targetId],
            '/users/{userId}/targets/{targetId}'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['targetId'] = $targetId;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        return $response;

    }

    /**
     * Returns a token with a secret key for creating a session. Use the user ID
     * and secret and submit a request to the [PUT
     * /account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession)
     * endpoint to complete the login process.
     * 
     *
     * @param string $userId
     * @param ?int $length
     * @param ?int $expire
     * @throws AppwriteException
     * @return \Appwrite\Models\Token
     */
    public function createToken(string $userId, ?int $length = null, ?int $expire = null): \Appwrite\Models\Token
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/tokens'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;

        if (!is_null($length)) {
            $apiParams['length'] = $length;
        }

        if (!is_null($expire)) {
            $apiParams['expire'] = $expire;
        }

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\Token::from($response);

    }

    /**
     * Update the user email verification status by its unique ID.
     *
     * @param string $userId
     * @param bool $emailVerification
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updateEmailVerification(string $userId, bool $emailVerification): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/verification'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['emailVerification'] = $emailVerification;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }

    /**
     * Update the user phone verification status by its unique ID.
     *
     * @param string $userId
     * @param bool $phoneVerification
     * @throws AppwriteException
     * @return \Appwrite\Models\User
     */
    public function updatePhoneVerification(string $userId, bool $phoneVerification): \Appwrite\Models\User
    {
        $apiPath = str_replace(
            ['{userId}'],
            [$userId],
            '/users/{userId}/verification/phone'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['phoneVerification'] = $phoneVerification;

        $apiHeaders = [];
        $apiHeaders['X-Appwrite-Project'] = $this->client->getConfig('project');
        $apiHeaders['content-type'] = 'application/json';
        $apiHeaders['accept'] = 'application/json';

        $response = $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );

        if (!is_array($response)) {
            throw new \UnexpectedValueException('Expected array response when hydrating a response model.');
        }

        return \Appwrite\Models\User::from($response);

    }
}
