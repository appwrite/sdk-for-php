<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;

class Account extends Service
{
     public function __construct(Client $client)
     {
          $this->client = $client;
     }

    /**
     * Get Account
     *
     * Get currently logged in user data as JSON object.
     *
     * @throws AppwriteException
     * @return array

     */
    public function get(): array
    {
        $path   = str_replace([], [], '/account');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Email
     *
     * Update currently logged in user account email address. After changing user
     * address, the user confirmation status will get reset. A new confirmation
     * email is not sent automatically however you can use the send confirmation
     * email endpoint again to send the confirmation email. For security measures,
     * user password is required to complete this request.
     * This endpoint can also be used to convert an anonymous account to a normal
     * one, by passing an email address and a new password.
     * 
     *
     * @param string $email
     * @param string $password
     * @throws AppwriteException
     * @return array

     */
    public function updateEmail(string $email, string $password): array
    {
        $path   = str_replace([], [], '/account/email');

        $params = [];
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($email)) {
            $params['email'] = $email;
        }

        if (!is_null($password)) {
            $params['password'] = $password;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Logs
     *
     * Get currently logged in user list of latest security activity logs. Each
     * log returns user IP address, location and date and time of log.
     *
     * @param array $queries
     * @throws AppwriteException
     * @return array

     */
    public function listLogs(array $queries = null): array
    {
        $path   = str_replace([], [], '/account/logs');

        $params = [];
        if (!is_null($queries)) {
            $params['queries'] = $queries;
        }


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Name
     *
     * Update currently logged in user account name.
     *
     * @param string $name
     * @throws AppwriteException
     * @return array

     */
    public function updateName(string $name): array
    {
        $path   = str_replace([], [], '/account/name');

        $params = [];
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
     * Update currently logged in user password. For validation, user is required
     * to pass in the new password, and the old password. For users created with
     * OAuth, Team Invites and Magic URL, oldPassword is optional.
     *
     * @param string $password
     * @param string $oldPassword
     * @throws AppwriteException
     * @return array

     */
    public function updatePassword(string $password, string $oldPassword = null): array
    {
        $path   = str_replace([], [], '/account/password');

        $params = [];
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($password)) {
            $params['password'] = $password;
        }

        if (!is_null($oldPassword)) {
            $params['oldPassword'] = $oldPassword;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Phone
     *
     * Update the currently logged in user's phone number. After updating the
     * phone number, the phone verification status will be reset. A confirmation
     * SMS is not sent automatically, however you can use the [POST
     * /account/verification/phone](/docs/client/account#accountCreatePhoneVerification)
     * endpoint to send a confirmation SMS.
     *
     * @param string $phone
     * @param string $password
     * @throws AppwriteException
     * @return array

     */
    public function updatePhone(string $phone, string $password): array
    {
        $path   = str_replace([], [], '/account/phone');

        $params = [];
        if (!isset($phone)) {
            throw new AppwriteException('Missing required parameter: "phone"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!is_null($phone)) {
            $params['phone'] = $phone;
        }

        if (!is_null($password)) {
            $params['password'] = $password;
        }


        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Account Preferences
     *
     * Get currently logged in user preferences as a key-value object.
     *
     * @throws AppwriteException
     * @return array

     */
    public function getPrefs(): array
    {
        $path   = str_replace([], [], '/account/prefs');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Preferences
     *
     * Update currently logged in user account preferences. The object you pass is
     * stored as is, and replaces any previous value. The maximum allowed prefs
     * size is 64kB and throws error if exceeded.
     *
     * @param array $prefs
     * @throws AppwriteException
     * @return array

     */
    public function updatePrefs(array $prefs): array
    {
        $path   = str_replace([], [], '/account/prefs');

        $params = [];
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
     * Create Password Recovery
     *
     * Sends the user an email with a temporary secret key for password reset.
     * When the user clicks the confirmation link he is redirected back to your
     * app password reset URL with the secret key and email address values
     * attached to the URL query string. Use the query string params to submit a
     * request to the [PUT
     * /account/recovery](/docs/client/account#accountUpdateRecovery) endpoint to
     * complete the process. The verification link sent to the user's email
     * address is valid for 1 hour.
     *
     * @param string $email
     * @param string $url
     * @throws AppwriteException
     * @return array

     */
    public function createRecovery(string $email, string $url): array
    {
        $path   = str_replace([], [], '/account/recovery');

        $params = [];
        if (!isset($email)) {
            throw new AppwriteException('Missing required parameter: "email"');
        }
        if (!isset($url)) {
            throw new AppwriteException('Missing required parameter: "url"');
        }
        if (!is_null($email)) {
            $params['email'] = $email;
        }

        if (!is_null($url)) {
            $params['url'] = $url;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Password Recovery (confirmation)
     *
     * Use this endpoint to complete the user account password reset. Both the
     * **userId** and **secret** arguments will be passed as query parameters to
     * the redirect URL you have provided when sending your request to the [POST
     * /account/recovery](/docs/client/account#accountCreateRecovery) endpoint.
     * 
     * Please note that in order to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md)
     * the only valid redirect URLs are the ones from domains you have set when
     * adding your platforms in the console interface.
     *
     * @param string $userId
     * @param string $secret
     * @param string $password
     * @param string $passwordAgain
     * @throws AppwriteException
     * @return array

     */
    public function updateRecovery(string $userId, string $secret, string $password, string $passwordAgain): array
    {
        $path   = str_replace([], [], '/account/recovery');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($secret)) {
            throw new AppwriteException('Missing required parameter: "secret"');
        }
        if (!isset($password)) {
            throw new AppwriteException('Missing required parameter: "password"');
        }
        if (!isset($passwordAgain)) {
            throw new AppwriteException('Missing required parameter: "passwordAgain"');
        }
        if (!is_null($userId)) {
            $params['userId'] = $userId;
        }

        if (!is_null($secret)) {
            $params['secret'] = $secret;
        }

        if (!is_null($password)) {
            $params['password'] = $password;
        }

        if (!is_null($passwordAgain)) {
            $params['passwordAgain'] = $passwordAgain;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * List Sessions
     *
     * Get currently logged in user list of active sessions across different
     * devices.
     *
     * @throws AppwriteException
     * @return array

     */
    public function listSessions(): array
    {
        $path   = str_replace([], [], '/account/sessions');

        $params = [];

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Sessions
     *
     * Delete all sessions from the user account and remove any sessions cookies
     * from the end client.
     *
     * @throws AppwriteException
     * @return string

     */
    public function deleteSessions(): string
    {
        $path   = str_replace([], [], '/account/sessions');

        $params = [];

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Session
     *
     * Use this endpoint to get a logged in user's session using a Session ID.
     * Inputting 'current' will return the current session being used.
     *
     * @param string $sessionId
     * @throws AppwriteException
     * @return array

     */
    public function getSession(string $sessionId): array
    {
        $path   = str_replace(['{sessionId}'], [$sessionId], '/account/sessions/{sessionId}');

        $params = [];
        if (!isset($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update OAuth Session (Refresh Tokens)
     *
     * Access tokens have limited lifespan and expire to mitigate security risks.
     * If session was created using an OAuth provider, this route can be used to
     * "refresh" the access token.
     *
     * @param string $sessionId
     * @throws AppwriteException
     * @return array

     */
    public function updateSession(string $sessionId): array
    {
        $path   = str_replace(['{sessionId}'], [$sessionId], '/account/sessions/{sessionId}');

        $params = [];
        if (!isset($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Session
     *
     * Use this endpoint to log out the currently logged in user from all their
     * account sessions across all of their different devices. When using the
     * Session ID argument, only the unique session ID provided is deleted.
     * 
     *
     * @param string $sessionId
     * @throws AppwriteException
     * @return string

     */
    public function deleteSession(string $sessionId): string
    {
        $path   = str_replace(['{sessionId}'], [$sessionId], '/account/sessions/{sessionId}');

        $params = [];
        if (!isset($sessionId)) {
            throw new AppwriteException('Missing required parameter: "sessionId"');
        }

        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Status
     *
     * Block the currently logged in user account. Behind the scene, the user
     * record is not deleted but permanently blocked from any access. To
     * completely delete a user, use the Users API instead.
     *
     * @throws AppwriteException
     * @return array

     */
    public function updateStatus(): array
    {
        $path   = str_replace([], [], '/account/status');

        $params = [];

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Email Verification
     *
     * Use this endpoint to send a verification message to your user email address
     * to confirm they are the valid owners of that address. Both the **userId**
     * and **secret** arguments will be passed as query parameters to the URL you
     * have provided to be attached to the verification email. The provided URL
     * should redirect the user back to your app and allow you to complete the
     * verification process by verifying both the **userId** and **secret**
     * parameters. Learn more about how to [complete the verification
     * process](/docs/client/account#accountUpdateEmailVerification). The
     * verification link sent to the user's email address is valid for 7 days.
     * 
     * Please note that in order to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md),
     * the only valid redirect URLs are the ones from domains you have set when
     * adding your platforms in the console interface.
     * 
     *
     * @param string $url
     * @throws AppwriteException
     * @return array

     */
    public function createVerification(string $url): array
    {
        $path   = str_replace([], [], '/account/verification');

        $params = [];
        if (!isset($url)) {
            throw new AppwriteException('Missing required parameter: "url"');
        }
        if (!is_null($url)) {
            $params['url'] = $url;
        }


        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Email Verification (confirmation)
     *
     * Use this endpoint to complete the user email verification process. Use both
     * the **userId** and **secret** parameters that were attached to your app URL
     * to verify the user email ownership. If confirmed this route will return a
     * 200 status code.
     *
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array

     */
    public function updateVerification(string $userId, string $secret): array
    {
        $path   = str_replace([], [], '/account/verification');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($secret)) {
            throw new AppwriteException('Missing required parameter: "secret"');
        }
        if (!is_null($userId)) {
            $params['userId'] = $userId;
        }

        if (!is_null($secret)) {
            $params['secret'] = $secret;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Phone Verification
     *
     * Use this endpoint to send a verification SMS to the currently logged in
     * user. This endpoint is meant for use after updating a user's phone number
     * using the [accountUpdatePhone](/docs/client/account#accountUpdatePhone)
     * endpoint. Learn more about how to [complete the verification
     * process](/docs/client/account#accountUpdatePhoneVerification). The
     * verification code sent to the user's phone number is valid for 15 minutes.
     *
     * @throws AppwriteException
     * @return array

     */
    public function createPhoneVerification(): array
    {
        $path   = str_replace([], [], '/account/verification/phone');

        $params = [];

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Create Phone Verification (confirmation)
     *
     * Use this endpoint to complete the user phone verification process. Use the
     * **userId** and **secret** that were sent to your user's phone number to
     * verify the user email ownership. If confirmed this route will return a 200
     * status code.
     *
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array

     */
    public function updatePhoneVerification(string $userId, string $secret): array
    {
        $path   = str_replace([], [], '/account/verification/phone');

        $params = [];
        if (!isset($userId)) {
            throw new AppwriteException('Missing required parameter: "userId"');
        }
        if (!isset($secret)) {
            throw new AppwriteException('Missing required parameter: "secret"');
        }
        if (!is_null($userId)) {
            $params['userId'] = $userId;
        }

        if (!is_null($secret)) {
            $params['secret'] = $secret;
        }


        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}
