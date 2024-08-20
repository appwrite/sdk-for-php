<?php

namespace Appwrite\Services;

use Appwrite\AppwriteException;
use Appwrite\Client;
use Appwrite\Service;
use Appwrite\InputFile;
use Appwrite\Enums\AuthenticatorType;
use Appwrite\Enums\AuthenticationFactor;
use Appwrite\Enums\OAuthProvider;

class Account extends Service
{
     public function __construct(Client $client)
     {
         parent::__construct($client);
     }

    /**
     * Get account
     *
     * Get the currently logged in user.
     *
     * @throws AppwriteException
     * @return array
     */
    public function get(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create account
     *
     * Use this endpoint to allow a new user to register a new account in your
     * project. After the user registration completes successfully, you can use
     * the
     * [/account/verfication](https://appwrite.io/docs/references/cloud/client-web/account#createVerification)
     * route to start verifying the user email address. To allow the new user to
     * login to their new account, you need to create a new [account
     * session](https://appwrite.io/docs/references/cloud/client-web/account#createEmailSession).
     *
     * @param string $userId
     * @param string $email
     * @param string $password
     * @param ?string $name
     * @throws AppwriteException
     * @return array
     */
    public function create(string $userId, string $email, string $password, ?string $name = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        if (!is_null($name)) {
            $apiParams['name'] = $name;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update email
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
        $apiPath = str_replace(
            [],
            [],
            '/account/email'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List Identities
     *
     * Get the list of identities for the currently logged in user.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listIdentities(?array $queries = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/identities'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete identity
     *
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
            '/account/identities/{identityId}'
        );

        $apiParams = [];
        $apiParams['identityId'] = $identityId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create JWT
     *
     * Use this endpoint to create a JSON Web Token. You can use the resulting JWT
     * to authenticate on behalf of the current user when working with the
     * Appwrite server-side API and SDKs. The JWT secret is valid for 15 minutes
     * from its creation and will be invalid if the user will logout in that time
     * frame.
     *
     * @throws AppwriteException
     * @return array
     */
    public function createJWT(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/jwts'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List logs
     *
     * Get the list of latest security activity logs for the currently logged in
     * user. Each log returns user IP address, location and date and time of log.
     *
     * @param ?array $queries
     * @throws AppwriteException
     * @return array
     */
    public function listLogs(?array $queries = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/logs'
        );

        $apiParams = [];

        if (!is_null($queries)) {
            $apiParams['queries'] = $queries;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update MFA
     *
     * Enable or disable MFA on an account.
     *
     * @param bool $mfa
     * @throws AppwriteException
     * @return array
     */
    public function updateMFA(bool $mfa): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa'
        );

        $apiParams = [];
        $apiParams['mfa'] = $mfa;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create Authenticator
     *
     * Add an authenticator app to be used as an MFA factor. Verify the
     * authenticator using the [verify
     * authenticator](/docs/references/cloud/client-web/account#updateMfaAuthenticator)
     * method.
     *
     * @param AuthenticatorType $type
     * @throws AppwriteException
     * @return array
     */
    public function createMfaAuthenticator(AuthenticatorType $type): array
    {
        $apiPath = str_replace(
            ['{type}'],
            [$type],
            '/account/mfa/authenticators/{type}'
        );

        $apiParams = [];
        $apiParams['type'] = $type;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Verify Authenticator
     *
     * Verify an authenticator app after adding it using the [add
     * authenticator](/docs/references/cloud/client-web/account#createMfaAuthenticator)
     * method.
     *
     * @param AuthenticatorType $type
     * @param string $otp
     * @throws AppwriteException
     * @return array
     */
    public function updateMfaAuthenticator(AuthenticatorType $type, string $otp): array
    {
        $apiPath = str_replace(
            ['{type}'],
            [$type],
            '/account/mfa/authenticators/{type}'
        );

        $apiParams = [];
        $apiParams['type'] = $type;
        $apiParams['otp'] = $otp;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete Authenticator
     *
     * Delete an authenticator for a user by ID.
     *
     * @param AuthenticatorType $type
     * @throws AppwriteException
     * @return string
     */
    public function deleteMfaAuthenticator(AuthenticatorType $type): string
    {
        $apiPath = str_replace(
            ['{type}'],
            [$type],
            '/account/mfa/authenticators/{type}'
        );

        $apiParams = [];
        $apiParams['type'] = $type;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create MFA Challenge
     *
     * Begin the process of MFA verification after sign-in. Finish the flow with
     * [updateMfaChallenge](/docs/references/cloud/client-web/account#updateMfaChallenge)
     * method.
     *
     * @param AuthenticationFactor $factor
     * @throws AppwriteException
     * @return array
     */
    public function createMfaChallenge(AuthenticationFactor $factor): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/challenge'
        );

        $apiParams = [];
        $apiParams['factor'] = $factor;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create MFA Challenge (confirmation)
     *
     * Complete the MFA challenge by providing the one-time password. Finish the
     * process of MFA verification by providing the one-time password. To begin
     * the flow, use
     * [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge)
     * method.
     *
     * @param string $challengeId
     * @param string $otp
     * @throws AppwriteException
     * @return string
     */
    public function updateMfaChallenge(string $challengeId, string $otp): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/challenge'
        );

        $apiParams = [];
        $apiParams['challengeId'] = $challengeId;
        $apiParams['otp'] = $otp;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List Factors
     *
     * List the factors available on the account to be used as a MFA challange.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listMfaFactors(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/factors'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get MFA Recovery Codes
     *
     * Get recovery codes that can be used as backup for MFA flow. Before getting
     * codes, they must be generated using
     * [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes)
     * method. An OTP challenge is required to read recovery codes.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getMfaRecoveryCodes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/recovery-codes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create MFA Recovery Codes
     *
     * Generate recovery codes as backup for MFA flow. It's recommended to
     * generate and show then immediately after user successfully adds their
     * authehticator. Recovery codes can be used as a MFA verification type in
     * [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge)
     * method.
     *
     * @throws AppwriteException
     * @return array
     */
    public function createMfaRecoveryCodes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/recovery-codes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Regenerate MFA Recovery Codes
     *
     * Regenerate recovery codes that can be used as backup for MFA flow. Before
     * regenerating codes, they must be first generated using
     * [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes)
     * method. An OTP challenge is required to regenreate recovery codes.
     *
     * @throws AppwriteException
     * @return array
     */
    public function updateMfaRecoveryCodes(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/mfa/recovery-codes'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update name
     *
     * Update currently logged in user account name.
     *
     * @param string $name
     * @throws AppwriteException
     * @return array
     */
    public function updateName(string $name): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/name'
        );

        $apiParams = [];
        $apiParams['name'] = $name;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update password
     *
     * Update currently logged in user password. For validation, user is required
     * to pass in the new password, and the old password. For users created with
     * OAuth, Team Invites and Magic URL, oldPassword is optional.
     *
     * @param string $password
     * @param ?string $oldPassword
     * @throws AppwriteException
     * @return array
     */
    public function updatePassword(string $password, ?string $oldPassword = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/password'
        );

        $apiParams = [];
        $apiParams['password'] = $password;

        if (!is_null($oldPassword)) {
            $apiParams['oldPassword'] = $oldPassword;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update phone
     *
     * Update the currently logged in user's phone number. After updating the
     * phone number, the phone verification status will be reset. A confirmation
     * SMS is not sent automatically, however you can use the [POST
     * /account/verification/phone](https://appwrite.io/docs/references/cloud/client-web/account#createPhoneVerification)
     * endpoint to send a confirmation SMS.
     *
     * @param string $phone
     * @param string $password
     * @throws AppwriteException
     * @return array
     */
    public function updatePhone(string $phone, string $password): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/phone'
        );

        $apiParams = [];
        $apiParams['phone'] = $phone;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get account preferences
     *
     * Get the preferences as a key-value object for the currently logged in user.
     *
     * @throws AppwriteException
     * @return array
     */
    public function getPrefs(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/prefs'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update preferences
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
        $apiPath = str_replace(
            [],
            [],
            '/account/prefs'
        );

        $apiParams = [];
        $apiParams['prefs'] = $prefs;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create password recovery
     *
     * Sends the user an email with a temporary secret key for password reset.
     * When the user clicks the confirmation link he is redirected back to your
     * app password reset URL with the secret key and email address values
     * attached to the URL query string. Use the query string params to submit a
     * request to the [PUT
     * /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#updateRecovery)
     * endpoint to complete the process. The verification link sent to the user's
     * email address is valid for 1 hour.
     *
     * @param string $email
     * @param string $url
     * @throws AppwriteException
     * @return array
     */
    public function createRecovery(string $email, string $url): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/recovery'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['url'] = $url;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create password recovery (confirmation)
     *
     * Use this endpoint to complete the user account password reset. Both the
     * **userId** and **secret** arguments will be passed as query parameters to
     * the redirect URL you have provided when sending your request to the [POST
     * /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#createRecovery)
     * endpoint.
     * 
     * Please note that in order to avoid a [Redirect
     * Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md)
     * the only valid redirect URLs are the ones from domains you have set when
     * adding your platforms in the console interface.
     *
     * @param string $userId
     * @param string $secret
     * @param string $password
     * @throws AppwriteException
     * @return array
     */
    public function updateRecovery(string $userId, string $secret, string $password): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/recovery'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * List sessions
     *
     * Get the list of active sessions across different devices for the currently
     * logged in user.
     *
     * @throws AppwriteException
     * @return array
     */
    public function listSessions(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete sessions
     *
     * Delete all sessions from the user account and remove any sessions cookies
     * from the end client.
     *
     * @throws AppwriteException
     * @return string
     */
    public function deleteSessions(): string
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create anonymous session
     *
     * Use this endpoint to allow a new user to register an anonymous account in
     * your project. This route will also create a new session for the user. To
     * allow the new user to convert an anonymous account to a normal account, you
     * need to update its [email and
     * password](https://appwrite.io/docs/references/cloud/client-web/account#updateEmail)
     * or create an [OAuth2
     * session](https://appwrite.io/docs/references/cloud/client-web/account#CreateOAuth2Session).
     *
     * @throws AppwriteException
     * @return array
     */
    public function createAnonymousSession(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions/anonymous'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create email password session
     *
     * Allow the user to login into their account by providing a valid email and
     * password combination. This route will create a new session for the user.
     * 
     * A user is limited to 10 active sessions at a time by default. [Learn more
     * about session
     * limits](https://appwrite.io/docs/authentication-security#limits).
     *
     * @param string $email
     * @param string $password
     * @throws AppwriteException
     * @return array
     */
    public function createEmailPasswordSession(string $email, string $password): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions/email'
        );

        $apiParams = [];
        $apiParams['email'] = $email;
        $apiParams['password'] = $password;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update magic URL session
     *
     * Use this endpoint to create a session from token. Provide the **userId**
     * and **secret** parameters from the successful response of authentication
     * flows initiated by token creation. For example, magic URL and phone login.
     *
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array
     */
    public function updateMagicURLSession(string $userId, string $secret): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions/magic-url'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update phone session
     *
     * Use this endpoint to create a session from token. Provide the **userId**
     * and **secret** parameters from the successful response of authentication
     * flows initiated by token creation. For example, magic URL and phone login.
     *
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array
     */
    public function updatePhoneSession(string $userId, string $secret): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions/phone'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create session
     *
     * Use this endpoint to create a session from token. Provide the **userId**
     * and **secret** parameters from the successful response of authentication
     * flows initiated by token creation. For example, magic URL and phone login.
     *
     * @param string $userId
     * @param string $secret
     * @throws AppwriteException
     * @return array
     */
    public function createSession(string $userId, string $secret): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/sessions/token'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Get session
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
        $apiPath = str_replace(
            ['{sessionId}'],
            [$sessionId],
            '/account/sessions/{sessionId}'
        );

        $apiParams = [];
        $apiParams['sessionId'] = $sessionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update session
     *
     * Use this endpoint to extend a session's length. Extending a session is
     * useful when session expiry is short. If the session was created using an
     * OAuth provider, this endpoint refreshes the access token from the provider.
     *
     * @param string $sessionId
     * @throws AppwriteException
     * @return array
     */
    public function updateSession(string $sessionId): array
    {
        $apiPath = str_replace(
            ['{sessionId}'],
            [$sessionId],
            '/account/sessions/{sessionId}'
        );

        $apiParams = [];
        $apiParams['sessionId'] = $sessionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Delete session
     *
     * Logout the user. Use 'current' as the session ID to logout on this device,
     * use a session ID to logout on another device. If you're looking to logout
     * the user on all devices, use [Delete
     * Sessions](https://appwrite.io/docs/references/cloud/client-web/account#deleteSessions)
     * instead.
     *
     * @param string $sessionId
     * @throws AppwriteException
     * @return string
     */
    public function deleteSession(string $sessionId): string
    {
        $apiPath = str_replace(
            ['{sessionId}'],
            [$sessionId],
            '/account/sessions/{sessionId}'
        );

        $apiParams = [];
        $apiParams['sessionId'] = $sessionId;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_DELETE,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update status
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
        $apiPath = str_replace(
            [],
            [],
            '/account/status'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PATCH,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create email token (OTP)
     *
     * Sends the user an email with a secret key for creating a session. If the
     * provided user ID has not be registered, a new user will be created. Use the
     * returned user ID and secret and submit a request to the [POST
     * /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession)
     * endpoint to complete the login process. The secret sent to the user's email
     * is valid for 15 minutes.
     * 
     * A user is limited to 10 active sessions at a time by default. [Learn more
     * about session
     * limits](https://appwrite.io/docs/authentication-security#limits).
     *
     * @param string $userId
     * @param string $email
     * @param ?bool $phrase
     * @throws AppwriteException
     * @return array
     */
    public function createEmailToken(string $userId, string $email, ?bool $phrase = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/tokens/email'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;

        if (!is_null($phrase)) {
            $apiParams['phrase'] = $phrase;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create magic URL token
     *
     * Sends the user an email with a secret key for creating a session. If the
     * provided user ID has not been registered, a new user will be created. When
     * the user clicks the link in the email, the user is redirected back to the
     * URL you provided with the secret key and userId values attached to the URL
     * query string. Use the query string parameters to submit a request to the
     * [POST
     * /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession)
     * endpoint to complete the login process. The link sent to the user's email
     * address is valid for 1 hour. If you are on a mobile device you can leave
     * the URL parameter empty, so that the login completion will be handled by
     * your Appwrite instance by default.
     * 
     * A user is limited to 10 active sessions at a time by default. [Learn more
     * about session
     * limits](https://appwrite.io/docs/authentication-security#limits).
     * 
     *
     * @param string $userId
     * @param string $email
     * @param ?string $url
     * @param ?bool $phrase
     * @throws AppwriteException
     * @return array
     */
    public function createMagicURLToken(string $userId, string $email, ?string $url = null, ?bool $phrase = null): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/tokens/magic-url'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['email'] = $email;

        if (!is_null($url)) {
            $apiParams['url'] = $url;
        }

        if (!is_null($phrase)) {
            $apiParams['phrase'] = $phrase;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create OAuth2 token
     *
     * Allow the user to login to their account using the OAuth2 provider of their
     * choice. Each OAuth2 provider should be enabled from the Appwrite console
     * first. Use the success and failure arguments to provide a redirect URL's
     * back to your app when login is completed. 
     * 
     * If authentication succeeds, `userId` and `secret` of a token will be
     * appended to the success URL as query parameters. These can be used to
     * create a new session using the [Create
     * session](https://appwrite.io/docs/references/cloud/client-web/account#createSession)
     * endpoint.
     * 
     * A user is limited to 10 active sessions at a time by default. [Learn more
     * about session
     * limits](https://appwrite.io/docs/authentication-security#limits).
     *
     * @param OAuthProvider $provider
     * @param ?string $success
     * @param ?string $failure
     * @param ?array $scopes
     * @throws AppwriteException
     * @return string
     */
    public function createOAuth2Token(OAuthProvider $provider, ?string $success = null, ?string $failure = null, ?array $scopes = null): string
    {
        $apiPath = str_replace(
            ['{provider}'],
            [$provider],
            '/account/tokens/oauth2/{provider}'
        );

        $apiParams = [];
        $apiParams['provider'] = $provider;

        if (!is_null($success)) {
            $apiParams['success'] = $success;
        }

        if (!is_null($failure)) {
            $apiParams['failure'] = $failure;
        }

        if (!is_null($scopes)) {
            $apiParams['scopes'] = $scopes;
        }

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_GET,
            $apiPath,
            $apiHeaders,
            $apiParams, 'location'
        );
    }

    /**
     * Create phone token
     *
     * Sends the user an SMS with a secret key for creating a session. If the
     * provided user ID has not be registered, a new user will be created. Use the
     * returned user ID and secret and submit a request to the [POST
     * /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession)
     * endpoint to complete the login process. The secret sent to the user's phone
     * is valid for 15 minutes.
     * 
     * A user is limited to 10 active sessions at a time by default. [Learn more
     * about session
     * limits](https://appwrite.io/docs/authentication-security#limits).
     *
     * @param string $userId
     * @param string $phone
     * @throws AppwriteException
     * @return array
     */
    public function createPhoneToken(string $userId, string $phone): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/tokens/phone'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['phone'] = $phone;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create email verification
     *
     * Use this endpoint to send a verification message to your user email address
     * to confirm they are the valid owners of that address. Both the **userId**
     * and **secret** arguments will be passed as query parameters to the URL you
     * have provided to be attached to the verification email. The provided URL
     * should redirect the user back to your app and allow you to complete the
     * verification process by verifying both the **userId** and **secret**
     * parameters. Learn more about how to [complete the verification
     * process](https://appwrite.io/docs/references/cloud/client-web/account#updateVerification).
     * The verification link sent to the user's email address is valid for 7 days.
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
        $apiPath = str_replace(
            [],
            [],
            '/account/verification'
        );

        $apiParams = [];
        $apiParams['url'] = $url;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create email verification (confirmation)
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
        $apiPath = str_replace(
            [],
            [],
            '/account/verification'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Create phone verification
     *
     * Use this endpoint to send a verification SMS to the currently logged in
     * user. This endpoint is meant for use after updating a user's phone number
     * using the
     * [accountUpdatePhone](https://appwrite.io/docs/references/cloud/client-web/account#updatePhone)
     * endpoint. Learn more about how to [complete the verification
     * process](https://appwrite.io/docs/references/cloud/client-web/account#updatePhoneVerification).
     * The verification code sent to the user's phone number is valid for 15
     * minutes.
     *
     * @throws AppwriteException
     * @return array
     */
    public function createPhoneVerification(): array
    {
        $apiPath = str_replace(
            [],
            [],
            '/account/verification/phone'
        );

        $apiParams = [];

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_POST,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }

    /**
     * Update phone verification (confirmation)
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
        $apiPath = str_replace(
            [],
            [],
            '/account/verification/phone'
        );

        $apiParams = [];
        $apiParams['userId'] = $userId;
        $apiParams['secret'] = $secret;

        $apiHeaders = [];
        $apiHeaders['content-type'] = 'application/json';

        return $this->client->call(
            Client::METHOD_PUT,
            $apiPath,
            $apiHeaders,
            $apiParams
        );
    }
}