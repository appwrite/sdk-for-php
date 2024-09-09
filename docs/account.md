# Account Service

## Get account

```http request
GET https://cloud.appwrite.io/v1/account
```

** Get the currently logged in user. **

## Create account

```http request
POST https://cloud.appwrite.io/v1/account
```

** Use this endpoint to allow a new user to register a new account in your project. After the user registration completes successfully, you can use the [/account/verfication](https://appwrite.io/docs/references/cloud/client-web/account#createVerification) route to start verifying the user email address. To allow the new user to login to their new account, you need to create a new [account session](https://appwrite.io/docs/references/cloud/client-web/account#createEmailSession). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | New user password. Must be between 8 and 256 chars. |  |
| name | string | User name. Max length: 128 chars. |  |

## Update email

```http request
PATCH https://cloud.appwrite.io/v1/account/email
```

** Update currently logged in user account email address. After changing user address, the user confirmation status will get reset. A new confirmation email is not sent automatically however you can use the send confirmation email endpoint again to send the confirmation email. For security measures, user password is required to complete this request.
This endpoint can also be used to convert an anonymous account to a normal one, by passing an email address and a new password.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| password | string | User password. Must be at least 8 chars. |  |

## List Identities

```http request
GET https://cloud.appwrite.io/v1/account/identities
```

** Get the list of identities for the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, provider, providerUid, providerEmail, providerAccessTokenExpiry | [] |

## Delete identity

```http request
DELETE https://cloud.appwrite.io/v1/account/identities/{identityId}
```

** Delete an identity by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| identityId | string | **Required** Identity ID. |  |

## Create JWT

```http request
POST https://cloud.appwrite.io/v1/account/jwts
```

** Use this endpoint to create a JSON Web Token. You can use the resulting JWT to authenticate on behalf of the current user when working with the Appwrite server-side API and SDKs. The JWT secret is valid for 15 minutes from its creation and will be invalid if the user will logout in that time frame. **

## List logs

```http request
GET https://cloud.appwrite.io/v1/account/logs
```

** Get the list of latest security activity logs for the currently logged in user. Each log returns user IP address, location and date and time of log. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## Update MFA

```http request
PATCH https://cloud.appwrite.io/v1/account/mfa
```

** Enable or disable MFA on an account. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| mfa | boolean | Enable or disable MFA. |  |

## Create Authenticator

```http request
POST https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Add an authenticator app to be used as an MFA factor. Verify the authenticator using the [verify authenticator](/docs/references/cloud/client-web/account#updateMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. Must be `totp` |  |

## Verify Authenticator

```http request
PUT https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Verify an authenticator app after adding it using the [add authenticator](/docs/references/cloud/client-web/account#createMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |
| otp | string | Valid verification token. |  |

## Delete Authenticator

```http request
DELETE https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Delete an authenticator for a user by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |

## Create MFA Challenge

```http request
POST https://cloud.appwrite.io/v1/account/mfa/challenge
```

** Begin the process of MFA verification after sign-in. Finish the flow with [updateMfaChallenge](/docs/references/cloud/client-web/account#updateMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| factor | string | Factor used for verification. Must be one of following: `email`, `phone`, `totp`, `recoveryCode`. |  |

## Create MFA Challenge (confirmation)

```http request
PUT https://cloud.appwrite.io/v1/account/mfa/challenge
```

** Complete the MFA challenge by providing the one-time password. Finish the process of MFA verification by providing the one-time password. To begin the flow, use [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| challengeId | string | ID of the challenge. |  |
| otp | string | Valid verification token. |  |

## List Factors

```http request
GET https://cloud.appwrite.io/v1/account/mfa/factors
```

** List the factors available on the account to be used as a MFA challange. **

## Get MFA Recovery Codes

```http request
GET https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Get recovery codes that can be used as backup for MFA flow. Before getting codes, they must be generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to read recovery codes. **

## Create MFA Recovery Codes

```http request
POST https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Generate recovery codes as backup for MFA flow. It&#039;s recommended to generate and show then immediately after user successfully adds their authehticator. Recovery codes can be used as a MFA verification type in [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **

## Regenerate MFA Recovery Codes

```http request
PATCH https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Regenerate recovery codes that can be used as backup for MFA flow. Before regenerating codes, they must be first generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to regenreate recovery codes. **

## Update name

```http request
PATCH https://cloud.appwrite.io/v1/account/name
```

** Update currently logged in user account name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | User name. Max length: 128 chars. |  |

## Update password

```http request
PATCH https://cloud.appwrite.io/v1/account/password
```

** Update currently logged in user password. For validation, user is required to pass in the new password, and the old password. For users created with OAuth, Team Invites and Magic URL, oldPassword is optional. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string | New user password. Must be at least 8 chars. |  |
| oldPassword | string | Current user password. Must be at least 8 chars. |  |

## Update phone

```http request
PATCH https://cloud.appwrite.io/v1/account/phone
```

** Update the currently logged in user&#039;s phone number. After updating the phone number, the phone verification status will be reset. A confirmation SMS is not sent automatically, however you can use the [POST /account/verification/phone](https://appwrite.io/docs/references/cloud/client-web/account#createPhoneVerification) endpoint to send a confirmation SMS. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| password | string | User password. Must be at least 8 chars. |  |

## Get account preferences

```http request
GET https://cloud.appwrite.io/v1/account/prefs
```

** Get the preferences as a key-value object for the currently logged in user. **

## Update preferences

```http request
PATCH https://cloud.appwrite.io/v1/account/prefs
```

** Update currently logged in user account preferences. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| prefs | object | Prefs key-value JSON object. | {} |

## Create password recovery

```http request
POST https://cloud.appwrite.io/v1/account/recovery
```

** Sends the user an email with a temporary secret key for password reset. When the user clicks the confirmation link he is redirected back to your app password reset URL with the secret key and email address values attached to the URL query string. Use the query string params to submit a request to the [PUT /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#updateRecovery) endpoint to complete the process. The verification link sent to the user&#039;s email address is valid for 1 hour. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the recovery email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |

## Create password recovery (confirmation)

```http request
PUT https://cloud.appwrite.io/v1/account/recovery
```

** Use this endpoint to complete the user account password reset. Both the **userId** and **secret** arguments will be passed as query parameters to the redirect URL you have provided when sending your request to the [POST /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#createRecovery) endpoint.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md) the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid reset token. |  |
| password | string | New user password. Must be between 8 and 256 chars. |  |

## List sessions

```http request
GET https://cloud.appwrite.io/v1/account/sessions
```

** Get the list of active sessions across different devices for the currently logged in user. **

## Delete sessions

```http request
DELETE https://cloud.appwrite.io/v1/account/sessions
```

** Delete all sessions from the user account and remove any sessions cookies from the end client. **

## Create anonymous session

```http request
POST https://cloud.appwrite.io/v1/account/sessions/anonymous
```

** Use this endpoint to allow a new user to register an anonymous account in your project. This route will also create a new session for the user. To allow the new user to convert an anonymous account to a normal account, you need to update its [email and password](https://appwrite.io/docs/references/cloud/client-web/account#updateEmail) or create an [OAuth2 session](https://appwrite.io/docs/references/cloud/client-web/account#CreateOAuth2Session). **

## Create email password session

```http request
POST https://cloud.appwrite.io/v1/account/sessions/email
```

** Allow the user to login into their account by providing a valid email and password combination. This route will create a new session for the user.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| password | string | User password. Must be at least 8 chars. |  |

## Update magic URL session

```http request
PUT https://cloud.appwrite.io/v1/account/sessions/magic-url
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Valid verification token. |  |

## Update phone session

```http request
PUT https://cloud.appwrite.io/v1/account/sessions/phone
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Valid verification token. |  |

## Create session

```http request
POST https://cloud.appwrite.io/v1/account/sessions/token
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Secret of a token generated by login methods. For example, the `createMagicURLToken` or `createPhoneToken` methods. |  |

## Get session

```http request
GET https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Use this endpoint to get a logged in user&#039;s session using a Session ID. Inputting &#039;current&#039; will return the current session being used. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to get the current device session. |  |

## Update session

```http request
PATCH https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Use this endpoint to extend a session&#039;s length. Extending a session is useful when session expiry is short. If the session was created using an OAuth provider, this endpoint refreshes the access token from the provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to update the current device session. |  |

## Delete session

```http request
DELETE https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Logout the user. Use &#039;current&#039; as the session ID to logout on this device, use a session ID to logout on another device. If you&#039;re looking to logout the user on all devices, use [Delete Sessions](https://appwrite.io/docs/references/cloud/client-web/account#deleteSessions) instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to delete the current device session. |  |

## Update status

```http request
PATCH https://cloud.appwrite.io/v1/account/status
```

** Block the currently logged in user account. Behind the scene, the user record is not deleted but permanently blocked from any access. To completely delete a user, use the Users API instead. **

## Create email token (OTP)

```http request
POST https://cloud.appwrite.io/v1/account/tokens/email
```

** Sends the user an email with a secret key for creating a session. If the provided user ID has not be registered, a new user will be created. Use the returned user ID and secret and submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The secret sent to the user&#039;s email is valid for 15 minutes.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| phrase | boolean | Toggle for security phrase. If enabled, email will be send with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |

## Create magic URL token

```http request
POST https://cloud.appwrite.io/v1/account/tokens/magic-url
```

** Sends the user an email with a secret key for creating a session. If the provided user ID has not been registered, a new user will be created. When the user clicks the link in the email, the user is redirected back to the URL you provided with the secret key and userId values attached to the URL query string. Use the query string parameters to submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The link sent to the user&#039;s email address is valid for 1 hour. If you are on a mobile device you can leave the URL parameter empty, so that the login completion will be handled by your Appwrite instance by default.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the magic URL login. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| phrase | boolean | Toggle for security phrase. If enabled, email will be send with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |

## Create OAuth2 token

```http request
GET https://cloud.appwrite.io/v1/account/tokens/oauth2/{provider}
```

** Allow the user to login to their account using the OAuth2 provider of their choice. Each OAuth2 provider should be enabled from the Appwrite console first. Use the success and failure arguments to provide a redirect URL&#039;s back to your app when login is completed. 

If authentication succeeds, `userId` and `secret` of a token will be appended to the success URL as query parameters. These can be used to create a new session using the [Create session](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| provider | string | **Required** OAuth2 Provider. Currently, supported providers are: amazon, apple, auth0, authentik, autodesk, bitbucket, bitly, box, dailymotion, discord, disqus, dropbox, etsy, facebook, github, gitlab, google, linkedin, microsoft, notion, oidc, okta, paypal, paypalSandbox, podio, salesforce, slack, spotify, stripe, tradeshift, tradeshiftBox, twitch, wordpress, yahoo, yammer, yandex, zoho, zoom. |  |
| success | string | URL to redirect back to your app after a successful login attempt.  Only URLs from hostnames in your project's platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| failure | string | URL to redirect back to your app after a failed login attempt.  Only URLs from hostnames in your project's platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| scopes | array | A list of custom OAuth2 scopes. Check each provider internal docs for a list of supported scopes. Maximum of 100 scopes are allowed, each 4096 characters long. | [] |

## Create phone token

```http request
POST https://cloud.appwrite.io/v1/account/tokens/phone
```

** Sends the user an SMS with a secret key for creating a session. If the provided user ID has not be registered, a new user will be created. Use the returned user ID and secret and submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The secret sent to the user&#039;s phone is valid for 15 minutes.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |

## Create email verification

```http request
POST https://cloud.appwrite.io/v1/account/verification
```

** Use this endpoint to send a verification message to your user email address to confirm they are the valid owners of that address. Both the **userId** and **secret** arguments will be passed as query parameters to the URL you have provided to be attached to the verification email. The provided URL should redirect the user back to your app and allow you to complete the verification process by verifying both the **userId** and **secret** parameters. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updateVerification). The verification link sent to the user&#039;s email address is valid for 7 days.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md), the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | URL to redirect the user back to your app from the verification email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |

## Create email verification (confirmation)

```http request
PUT https://cloud.appwrite.io/v1/account/verification
```

** Use this endpoint to complete the user email verification process. Use both the **userId** and **secret** parameters that were attached to your app URL to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

## Create phone verification

```http request
POST https://cloud.appwrite.io/v1/account/verification/phone
```

** Use this endpoint to send a verification SMS to the currently logged in user. This endpoint is meant for use after updating a user&#039;s phone number using the [accountUpdatePhone](https://appwrite.io/docs/references/cloud/client-web/account#updatePhone) endpoint. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updatePhoneVerification). The verification code sent to the user&#039;s phone number is valid for 15 minutes. **

## Update phone verification (confirmation)

```http request
PUT https://cloud.appwrite.io/v1/account/verification/phone
```

** Use this endpoint to complete the user phone verification process. Use the **userId** and **secret** that were sent to your user&#039;s phone number to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

