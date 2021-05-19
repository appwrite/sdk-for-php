<?php

namespace Appwrite\Services;

use Exception;
use Appwrite\Client;
use Appwrite\Service;

class Account extends Service
{
    /**
     * Get Account
     *
     * Get currently logged in user data as JSON object.
     *
     * @throws Exception
     * @return array
     */
    public function get():array
    {
        $path   = str_replace([], [], '/account');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Account
     *
     * Delete a currently logged in user account. Behind the scene, the user
     * record is not deleted but permanently blocked from any access. This is done
     * to avoid deleted accounts being overtaken by new users with the same email
     * address. Any user-related resources like documents or storage files should
     * be deleted separately.
     *
     * @throws Exception
     * @return array
     */
    public function delete():array
    {
        $path   = str_replace([], [], '/account');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Account Email
     *
     * Update currently logged in user account email address. After changing user
     * address, user confirmation status is being reset and a new confirmation
     * mail is sent. For security measures, user password is required to complete
     * this request.
     * This endpoint can also be used to convert an anonymous account to a normal
     * one, by passing an email address and a new password.
     *
     * @param string $email
     * @param string $password
     * @throws Exception
     * @return array
     */
    public function updateEmail(string $email, string $password):array
    {
        $path   = str_replace([], [], '/account/email');
        $params = [];

        $params['email'] = $email;
        $params['password'] = $password;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Account Logs
     *
     * Get currently logged in user list of latest security activity logs. Each
     * log returns user IP address, location and date and time of log.
     *
     * @throws Exception
     * @return array
     */
    public function getLogs():array
    {
        $path   = str_replace([], [], '/account/logs');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Account Name
     *
     * Update currently logged in user account name.
     *
     * @param string $name
     * @throws Exception
     * @return array
     */
    public function updateName(string $name):array
    {
        $path   = str_replace([], [], '/account/name');
        $params = [];

        $params['name'] = $name;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Account Password
     *
     * Update currently logged in user password. For validation, user is required
     * to pass in the new password, and the old password. For users created with
     * OAuth and Team Invites, oldPassword is optional.
     *
     * @param string $password
     * @param string $oldPassword
     * @throws Exception
     * @return array
     */
    public function updatePassword(string $password, string $oldPassword = ''):array
    {
        $path   = str_replace([], [], '/account/password');
        $params = [];

        $params['password'] = $password;
        $params['oldPassword'] = $oldPassword;

        return $this->client->call(Client::METHOD_PATCH, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Account Preferences
     *
     * Get currently logged in user preferences as a key-value object.
     *
     * @throws Exception
     * @return array
     */
    public function getPrefs():array
    {
        $path   = str_replace([], [], '/account/prefs');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Update Account Preferences
     *
     * Update currently logged in user account preferences. You can pass only the
     * specific settings you wish to update.
     *
     * @param array $prefs
     * @throws Exception
     * @return array
     */
    public function updatePrefs(array $prefs):array
    {
        $path   = str_replace([], [], '/account/prefs');
        $params = [];

        $params['prefs'] = $prefs;

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
     * @throws Exception
     * @return array
     */
    public function createRecovery(string $email, string $url):array
    {
        $path   = str_replace([], [], '/account/recovery');
        $params = [];

        $params['email'] = $email;
        $params['url'] = $url;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Complete Password Recovery
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
     * @throws Exception
     * @return array
     */
    public function updateRecovery(string $userId, string $secret, string $password, string $passwordAgain):array
    {
        $path   = str_replace([], [], '/account/recovery');
        $params = [];

        $params['userId'] = $userId;
        $params['secret'] = $secret;
        $params['password'] = $password;
        $params['passwordAgain'] = $passwordAgain;

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Get Account Sessions
     *
     * Get currently logged in user list of active sessions across different
     * devices.
     *
     * @throws Exception
     * @return array
     */
    public function getSessions():array
    {
        $path   = str_replace([], [], '/account/sessions');
        $params = [];


        return $this->client->call(Client::METHOD_GET, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete All Account Sessions
     *
     * Delete all sessions from the user account and remove any sessions cookies
     * from the end client.
     *
     * @throws Exception
     * @return array
     */
    public function deleteSessions():array
    {
        $path   = str_replace([], [], '/account/sessions');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Delete Account Session
     *
     * Use this endpoint to log out the currently logged in user from all their
     * account sessions across all of their different devices. When using the
     * option id argument, only the session unique ID provider will be deleted.
     *
     * @param string $sessionId
     * @throws Exception
     * @return array
     */
    public function deleteSession(string $sessionId):array
    {
        $path   = str_replace(['{sessionId}'], [$sessionId], '/account/sessions/{sessionId}');
        $params = [];


        return $this->client->call(Client::METHOD_DELETE, $path, [
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
     * process](/docs/client/account#accountUpdateVerification). The verification
     * link sent to the user's email address is valid for 7 days.
     * 
     * Please note that in order to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md),
     * the only valid redirect URLs are the ones from domains you have set when
     * adding your platforms in the console interface.
     * 
     *
     * @param string $url
     * @throws Exception
     * @return array
     */
    public function createVerification(string $url):array
    {
        $path   = str_replace([], [], '/account/verification');
        $params = [];

        $params['url'] = $url;

        return $this->client->call(Client::METHOD_POST, $path, [
            'content-type' => 'application/json',
        ], $params);
    }

    /**
     * Complete Email Verification
     *
     * Use this endpoint to complete the user email verification process. Use both
     * the **userId** and **secret** parameters that were attached to your app URL
     * to verify the user email ownership. If confirmed this route will return a
     * 200 status code.
     *
     * @param string $userId
     * @param string $secret
     * @throws Exception
     * @return array
     */
    public function updateVerification(string $userId, string $secret):array
    {
        $path   = str_replace([], [], '/account/verification');
        $params = [];

        $params['userId'] = $userId;
        $params['secret'] = $secret;

        return $this->client->call(Client::METHOD_PUT, $path, [
            'content-type' => 'application/json',
        ], $params);
    }
}