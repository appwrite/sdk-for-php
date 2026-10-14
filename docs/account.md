# Account Service


```http request
GET https://cloud.appwrite.io/v1/account
```

** Get the currently logged in user. **


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


```http request
GET https://cloud.appwrite.io/v1/account/consents
```

** Get a list of the OAuth2 consents the current user has given to third-party apps. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/account/consents/{consentId}
```

** Get an OAuth2 consent the current user has given to a third-party app by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| consentId | string | **Required** Consent unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/account/consents/{consentId}
```

** Delete an OAuth2 consent by its unique ID. All token families issued under the consent are revoked, and the app must ask for consent again to regain access. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| consentId | string | **Required** Consent unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/account/consents/{consentId}/tokens
```

** Get a list of the token families issued under an OAuth2 consent. Each entry represents one authorized device or session; the token secrets themselves are never returned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| consentId | string | **Required** Consent unique ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
GET https://cloud.appwrite.io/v1/account/consents/{consentId}/tokens/{tokenId}
```

** Get a token family issued under an OAuth2 consent by its unique ID. The token secrets themselves are never returned. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| consentId | string | **Required** Consent unique ID. |  |
| tokenId | string | **Required** Token unique ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/account/consents/{consentId}/tokens/{tokenId}
```

** Delete a token family issued under an OAuth2 consent by its unique ID. The access and refresh tokens of the family stop working immediately; other token families and the consent itself are unaffected. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| consentId | string | **Required** Consent unique ID. |  |
| tokenId | string | **Required** Token unique ID. |  |


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


```http request
GET https://cloud.appwrite.io/v1/account/identities
```

** Get the list of identities for the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, provider, providerUid, providerEmail, providerAccessTokenExpiry | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/account/identities/{identityId}
```

** Delete an identity by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| identityId | string | **Required** Identity ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/account/mfa
```

** Enable or disable MFA on an account. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| mfa | boolean | Enable or disable MFA. |  |


```http request
POST https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Add an authenticator app to be used as an MFA factor. Verify the authenticator using the [verify authenticator](/docs/references/cloud/client-web/account#updateMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. Must be `totp` |  |


```http request
POST https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Add an authenticator app to be used as an MFA factor. Verify the authenticator using the [verify authenticator](/docs/references/cloud/client-web/account#updateMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. Must be `totp` |  |


```http request
PUT https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Verify an authenticator app after adding it using the [add authenticator](/docs/references/cloud/client-web/account#createMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |
| otp | string | Valid verification token. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Verify an authenticator app after adding it using the [add authenticator](/docs/references/cloud/client-web/account#createMfaAuthenticator) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |
| otp | string | Valid verification token. |  |


```http request
DELETE https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Delete an authenticator for a user by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |


```http request
DELETE https://cloud.appwrite.io/v1/account/mfa/authenticators/{type}
```

** Delete an authenticator for a user by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| type | string | **Required** Type of authenticator. |  |


```http request
POST https://cloud.appwrite.io/v1/account/mfa/challenges
```

** Begin the process of MFA verification after sign-in. Finish the flow with [updateMfaChallenge](/docs/references/cloud/client-web/account#updateMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| factor | string | Factor used for verification. Must be one of following: `email`, `phone`, `totp`, `recoveryCode`, `custom`. |  |


```http request
POST https://cloud.appwrite.io/v1/account/mfa/challenges
```

** Begin the process of MFA verification after sign-in. Finish the flow with [updateMfaChallenge](/docs/references/cloud/client-web/account#updateMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| factor | string | Factor used for verification. Must be one of following: `email`, `phone`, `totp`, `recoveryCode`, `custom`. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/mfa/challenges
```

** Complete the MFA challenge by providing the one-time password. Finish the process of MFA verification by providing the one-time password. To begin the flow, use [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| challengeId | string | ID of the challenge. |  |
| otp | string | Valid verification token. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/mfa/challenges
```

** Complete the MFA challenge by providing the one-time password. Finish the process of MFA verification by providing the one-time password. To begin the flow, use [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| challengeId | string | ID of the challenge. |  |
| otp | string | Valid verification token. |  |


```http request
GET https://cloud.appwrite.io/v1/account/mfa/factors
```

** List the factors available on the account to be used as a MFA challange. **


```http request
GET https://cloud.appwrite.io/v1/account/mfa/factors
```

** List the factors available on the account to be used as a MFA challange. **


```http request
GET https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Get recovery codes that can be used as backup for MFA flow. Before getting codes, they must be generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to read recovery codes. **


```http request
GET https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Get recovery codes that can be used as backup for MFA flow. Before getting codes, they must be generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to read recovery codes. **


```http request
POST https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Generate recovery codes as backup for MFA flow. It's recommended to generate and show then immediately after user successfully adds their authehticator. Recovery codes can be used as a MFA verification type in [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **


```http request
POST https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Generate recovery codes as backup for MFA flow. It's recommended to generate and show then immediately after user successfully adds their authehticator. Recovery codes can be used as a MFA verification type in [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method. **


```http request
PATCH https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Regenerate recovery codes that can be used as backup for MFA flow. Before regenerating codes, they must be first generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to regenreate recovery codes. **


```http request
PATCH https://cloud.appwrite.io/v1/account/mfa/recovery-codes
```

** Regenerate recovery codes that can be used as backup for MFA flow. Before regenerating codes, they must be first generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. An OTP challenge is required to regenreate recovery codes. **


```http request
PATCH https://cloud.appwrite.io/v1/account/name
```

** Update currently logged in user account name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | User name. Max length: 128 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/account/passkeys
```

** Get the list of verified passkeys registered by the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter and order on the following attributes: $id, $createdAt, $updatedAt, name, accessedAt | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/account/passkeys
```

** Start registering a passkey for the currently logged in user. The session must have signed in or completed an MFA challenge within the last 10 minutes. Pass the returned `publicKey` options to `navigator.credentials.create()`, then complete the registration with [Update passkey verification](/docs/references/cloud/client-web/account#updatePasskeyVerification). The passkey stays pending until verified, and the challenge expires after 5 minutes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| passkeyId | string | Passkey ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. | unique() |
| name | string | Passkey name, shown when listing passkeys. Max length: 128 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/account/passkeys/{passkeyId}
```

** Get a verified passkey of the currently logged in user by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| passkeyId | string | **Required** Passkey ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/account/passkeys/{passkeyId}
```

** Rename a passkey of the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| passkeyId | string | **Required** Passkey ID. |  |
| name | string | Passkey name. Max length: 128 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/account/passkeys/{passkeyId}
```

** Delete a passkey from the currently logged in user. The passkey can no longer be used to sign in, although it may remain stored on the user's device. The session must have signed in or completed an MFA challenge within the last 10 minutes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| passkeyId | string | **Required** Passkey ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/passkeys/{passkeyId}/verification
```

** Complete a passkey registration started with [Create passkey](/docs/references/cloud/client-web/account#createPasskey). Pass the JSON form of the credential returned by `navigator.credentials.create()`, for example `credential.toJSON()`. Each registration can be verified once; a failed attempt requires starting it again. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| passkeyId | string | **Required** Passkey ID. |  |
| credential | object | Registration credential returned by the authenticator, in the JSON form produced by `PublicKeyCredential.toJSON()`. | {} |


```http request
PATCH https://cloud.appwrite.io/v1/account/password
```

** Update currently logged in user password. For validation, user is required to pass in the new password, and the old password. For users created with OAuth, Team Invites and Magic URL, oldPassword is optional. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string | New user password. Must be at least 8 chars. |  |
| oldPassword | string | Current user password. Max length: 256 chars. |  |


```http request
PATCH https://cloud.appwrite.io/v1/account/phone
```

** Update the currently logged in user's phone number. After updating the phone number, the phone verification status will be reset. A confirmation SMS is not sent automatically, however you can use the [POST /account/verification/phone](https://appwrite.io/docs/references/cloud/client-web/account#createPhoneVerification) endpoint to send a confirmation SMS. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| password | string | User password. Must be at least 8 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/account/prefs
```

** Get the preferences as a key-value object for the currently logged in user. **


```http request
PATCH https://cloud.appwrite.io/v1/account/prefs
```

** Update currently logged in user account preferences. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| prefs | object | Prefs key-value JSON object. | {} |


```http request
POST https://cloud.appwrite.io/v1/account/recovery
```

** Sends the user an email with a temporary secret key for password reset. When the user clicks the confirmation link he is redirected back to your app password reset URL with the secret key and email address values attached to the URL query string. Use the query string params to submit a request to the [PUT /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#updateRecovery) endpoint to complete the process. The verification link sent to the user's email address is valid for 1 hour. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the recovery email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |


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


```http request
POST https://cloud.appwrite.io/v1/account/recovery/otp
```

** Use this endpoint to send a 6-digit password recovery code to the user's email address. Unlike [createRecovery](https://appwrite.io/docs/references/cloud/client-web/account#createRecovery), this method requires no redirect URL, which makes it suitable for mobile and desktop apps that cannot host a recovery page. Learn more about how to [complete the recovery process](https://appwrite.io/docs/references/cloud/client-web/account#updateRecoveryOTP). The code sent to the user's email address is valid for 15 minutes.

Enable the **phrase** parameter to include a randomly generated security phrase in both the email and the response. Showing that phrase in your app lets the user confirm the email genuinely came from your request, which helps protect against phishing.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| phrase | boolean | Toggle for security phrase. If enabled, email will be sent with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/recovery/otp
```

** Use this endpoint to complete the user password recovery process using the 6-digit code that was emailed by [createRecoveryOTP](https://appwrite.io/docs/references/cloud/client-web/account#createRecoveryOTP). Pass the **userId** of the user along with the **secret** code from the email and the new **password** to set. If confirmed, this route will return a 200 status code, the code is consumed and the user's password is updated.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid recovery OTP code. |  |
| password | string | New user password. Must be between 8 and 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/account/sessions
```

** Get the list of active sessions across different devices for the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
DELETE https://cloud.appwrite.io/v1/account/sessions
```

** Delete all sessions from the user account and remove any sessions cookies from the end client. Pass `current` as false to keep the session making the request and sign out of every other session. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| current | boolean | Delete the current session too. Use false to sign out of every other session while staying signed in on this one. | 1 |


```http request
POST https://cloud.appwrite.io/v1/account/sessions/anonymous
```

** Use this endpoint to allow a new user to register an anonymous account in your project. This route will also create a new session for the user. To allow the new user to convert an anonymous account to a normal account, you need to update its [email and password](https://appwrite.io/docs/references/cloud/client-web/account#updateEmail) or create an [OAuth2 session](https://appwrite.io/docs/references/cloud/client-web/account#CreateOAuth2Session). **


```http request
POST https://cloud.appwrite.io/v1/account/sessions/email
```

** Allow the user to login into their account by providing a valid email and password combination. This route will create a new session for the user. Use the optional `duration` parameter to create a shorter session, for example when the user doesn't choose "remember me". It must be at least 60 seconds and cannot exceed the project maximum session length.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| password | string | User password. Must be at least 8 chars. |  |
| duration | integer | Session length in seconds. Minimum is 60 seconds, and it cannot exceed the project maximum session length. Defaults to the project maximum session length. |  |


```http request
POST https://cloud.appwrite.io/v1/account/sessions/id-token
```

** Allow the user to login to their account using an OpenID Connect ID token obtained natively from the OAuth2 provider, for example via Google Credential Manager on Android or Sign in with Apple on iOS. No browser or redirect is involved: the ID token is verified against the provider's published signing keys and a session is created in a single request.

Native sign-in is switched on per provider with its nativeEnabled setting. It is independent of the browser-based flow's enabled setting, which has no effect on this endpoint. The token's audience must match the provider's configured client ID or one of its native client IDs; tokens issued for any other client ID are rejected. For Sign in with Apple, register your app's bundle ID as a native client ID. For Google, the web client ID used by Credential Manager is usually the configured client ID; add your Android and iOS client IDs as native client IDs if your app requests tokens for them.

Pass the raw nonce used when requesting the ID token so it can be validated against the token's nonce claim. When signing in with Apple, the nonce is required: hash it with SHA-256 before passing it to the Apple SDK, and send the raw value here - Apple tokens requested without a nonce are rejected. For Google the nonce is optional: it is validated whenever the token carries one, and ignored when the provider issued the token without one. Apple only returns the user's name on the first authorization, and never inside the ID token - capture it on the client and pass it via the name parameter.

If there is already an active session, the new session will be attached to the logged-in account. If there are no active sessions, the server will attempt to look for a user with the same email address as the verified email received from the provider and attach the new session to the existing user. If no matching user is found - the server will create a new user.

This flow does not return provider refresh tokens. You may pass an access token the provider handed your client, along with its lifetime, to store it on the session - but Appwrite cannot renew it once it expires. If your app needs long-lived access to provider APIs, use the browser-based OAuth2 flow instead.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| provider | string | OAuth2 provider that issued the ID token. Currently, supported providers are: apple, google. |  |
| idToken | string | OpenID Connect ID token (JWT) obtained natively from the provider, for example via Google Credential Manager or Sign in with Apple. |  |
| nonce | string | Raw nonce used when requesting the ID token. Required for Apple, and whenever the token carries a nonce claim, which must match it. Ignored when the provider issued the token without a nonce. |  |
| accessToken | string | Provider access token to store alongside the session for calling provider APIs. Never used for authentication. |  |
| accessTokenExpiry | integer | Seconds until the provider access token expires, as reported by the provider. Stored so clients can tell when the stored token goes stale. | 0 |
| name | string | User name. Only used when creating a new user and the ID token has no name claim, such as on the first Sign in with Apple authorization. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/sessions/magic-url
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Valid verification token. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/sessions/phone
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Valid verification token. |  |


```http request
POST https://cloud.appwrite.io/v1/account/sessions/token
```

** Use this endpoint to create a session from token. Provide the **userId** and **secret** parameters from the successful response of authentication flows initiated by token creation. For example, magic URL and phone login. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| secret | string | Secret of a token generated by login methods. For example, the `createMagicURLToken` or `createPhoneToken` methods. |  |


```http request
GET https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Use this endpoint to get a logged in user's session using a Session ID. Inputting 'current' will return the current session being used. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to get the current device session. | current |


```http request
PATCH https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Use this endpoint to extend a session's length. Extending a session is useful when session expiry is short. If the session was created using an OAuth provider, this endpoint refreshes the access token from the provider. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to update the current device session. | current |


```http request
DELETE https://cloud.appwrite.io/v1/account/sessions/{sessionId}
```

** Logout the user. Use 'current' as the session ID to logout on this device, use a session ID to logout on another device. If you're looking to logout the user on all devices, use [Delete Sessions](https://appwrite.io/docs/references/cloud/client-web/account#deleteSessions) instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to delete the current device session. | current |


```http request
PATCH https://cloud.appwrite.io/v1/account/status
```

** Block the currently logged in user account. Behind the scene, the user record is not deleted but permanently blocked from any access. To completely delete a user, use the Users API instead. **


```http request
POST https://cloud.appwrite.io/v1/account/tokens/email
```

** Sends the user an email with a secret key for creating a session. If the email address has never been used, a **new account is created** using the provided `userId`. Otherwise, if the email address is already attached to an account, the **user ID is ignored**. Then, the user will receive an email with the one-time password. Use the returned user ID and secret and submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The secret sent to the user's email is valid for 15 minutes.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. If the email address has never been used, a new account is created using the provided userId. Otherwise, if the email address is already attached to an account, the user ID is ignored. |  |
| email | string | User email. |  |
| phrase | boolean | Toggle for security phrase. If enabled, email will be send with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |


```http request
POST https://cloud.appwrite.io/v1/account/tokens/magic-url
```

** Sends the user an email with a secret key for creating a session. If the provided user ID has not been registered, a new user will be created. When the user clicks the link in the email, the user is redirected back to the URL you provided with the secret key and userId values attached to the URL query string. Use the query string parameters to submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The link sent to the user's email address is valid for 1 hour.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits).
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. If the email address has never been used, a new account is created using the provided userId. Otherwise, if the email address is already attached to an account, the user ID is ignored. |  |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the magic URL login. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| phrase | boolean | Toggle for security phrase. If enabled, email will be send with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |


```http request
GET https://cloud.appwrite.io/v1/account/tokens/oauth2/{provider}
```

** Allow the user to login to their account using the OAuth2 provider of their choice. Each OAuth2 provider should be enabled from the Appwrite console first. Use the success and failure arguments to provide a redirect URL's back to your app when login is completed. 

If authentication succeeds, `userId` and `secret` of a token will be appended to the success URL as query parameters. These can be used to create a new session using the [Create session](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint.

If there is already an active session, the OAuth2 identity is attached to the logged-in account and that session stays active until the token is exchanged for a new one.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| provider | string | **Required** OAuth2 Provider. Currently, supported providers are: amazon, apple, appwrite, auth0, authentik, autodesk, bitbucket, bitly, box, cloudflare, dailymotion, discord, disqus, dropbox, etsy, facebook, figma, fusionauth, github, gitlab, google, huggingface, kakao, keycloak, kick, linkedin, microsoft, notion, oidc, okta, paypal, paypalSandbox, podio, resend, salesforce, slack, spotify, stripe, tiktok, tradeshift, tradeshiftBox, twitch, webflow, wordpress, x, yahoo, yammer, yandex, zoho, zoom. |  |
| success | string | URL to redirect back to your app after a successful login attempt.  Only URLs from hostnames in your project's platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| failure | string | URL to redirect back to your app after a failed login attempt.  Only URLs from hostnames in your project's platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |
| scopes | array | A list of custom OAuth2 scopes. Check each provider internal docs for a list of supported scopes. Maximum of 100 scopes are allowed, each 4096 characters long. | [] |
| state | string | An opaque value your app generates and keeps, for example in a cookie. It is returned unchanged as the `state` query parameter on the success and failure URLs, so your app can check that the sign-in it receives is one it started. Printable ASCII only (RFC 6749 Appendix A.5). Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/account/tokens/passkey
```

** Start signing in with a passkey. No email or user ID is needed: pass the returned `publicKey` options to `navigator.credentials.get()` and the user picks one of their passkeys. Then call [Update passkey token](/docs/references/cloud/client-web/account#updatePasskeyToken) with the credential to receive a token, and exchange it with [Create session](/docs/references/cloud/client-web/account#createSession). The challenge expires after 5 minutes. **


```http request
PUT https://cloud.appwrite.io/v1/account/tokens/passkey
```

** Complete a passkey sign-in started with [Create passkey token](/docs/references/cloud/client-web/account#createPasskeyToken). Pass the challenge ID and the JSON form of the credential returned by `navigator.credentials.get()`, for example `credential.toJSON()`. The returned token includes its secret and expires after 1 minute: exchange it for a session with [Create session](/docs/references/cloud/client-web/account#createSession). Passkeys require user verification, so the session also satisfies MFA. Each challenge can only be used once. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| challengeId | string | Challenge ID returned by createPasskeyToken. |  |
| credential | object | Authentication credential returned by the authenticator, in the JSON form produced by `PublicKeyCredential.toJSON()`. | {} |


```http request
POST https://cloud.appwrite.io/v1/account/tokens/phone
```

** Sends the user an SMS with a secret key for creating a session. If the provided user ID has not be registered, a new user will be created. Use the returned user ID and secret and submit a request to the [POST /v1/account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process. The secret sent to the user's phone is valid for 15 minutes.

A user is limited to 10 active sessions at a time by default. [Learn more about session limits](https://appwrite.io/docs/authentication-security#limits). **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. If the phone number has never been used, a new account is created using the provided userId. Otherwise, if the phone number is already attached to an account, the user ID is ignored. |  |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |


```http request
POST https://cloud.appwrite.io/v1/account/verifications/email
```

** Use this endpoint to send a verification message to your user email address to confirm they are the valid owners of that address. Both the **userId** and **secret** arguments will be passed as query parameters to the URL you have provided to be attached to the verification email. The provided URL should redirect the user back to your app and allow you to complete the verification process by verifying both the **userId** and **secret** parameters. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updateVerification). The verification link sent to the user's email address is valid for 7 days.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md), the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | URL to redirect the user back to your app from the verification email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |


```http request
POST https://cloud.appwrite.io/v1/account/verifications/email
```

** Use this endpoint to send a verification message to your user email address to confirm they are the valid owners of that address. Both the **userId** and **secret** arguments will be passed as query parameters to the URL you have provided to be attached to the verification email. The provided URL should redirect the user back to your app and allow you to complete the verification process by verifying both the **userId** and **secret** parameters. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updateVerification). The verification link sent to the user's email address is valid for 7 days.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md), the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | URL to redirect the user back to your app from the verification email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/verifications/email
```

** Use this endpoint to complete the user email verification process. Use both the **userId** and **secret** parameters that were attached to your app URL to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/verifications/email
```

** Use this endpoint to complete the user email verification process. Use both the **userId** and **secret** parameters that were attached to your app URL to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |


```http request
POST https://cloud.appwrite.io/v1/account/verifications/email/otp
```

** Use this endpoint to send a 6-digit verification code to the currently logged in user's email address. Unlike [createEmailVerification](https://appwrite.io/docs/references/cloud/client-web/account#createEmailVerification), this method requires no redirect URL, which makes it suitable for mobile and desktop apps that cannot host a verification page. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updateEmailVerificationOTP). The code sent to the user's email address is valid for 15 minutes.

Enable the **phrase** parameter to include a randomly generated security phrase in both the email and the response. Showing that phrase in your app lets the user confirm the email genuinely came from your request, which helps protect against phishing.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| phrase | boolean | Toggle for security phrase. If enabled, email will be sent with a randomly generated phrase and the phrase will also be included in the response. Confirming phrases match increases the security of your authentication flow. |  |


```http request
PUT https://cloud.appwrite.io/v1/account/verifications/email/otp
```

** Use this endpoint to complete the user email verification process using the 6-digit code that was emailed by [createEmailVerificationOTP](https://appwrite.io/docs/references/cloud/client-web/account#createEmailVerificationOTP). Pass the **userId** of the user being verified along with the **secret** code from the email. If confirmed, this route will return a 200 status code and the code is consumed.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification OTP code. |  |


```http request
POST https://cloud.appwrite.io/v1/account/verifications/phone
```

** Use this endpoint to send a verification SMS to the currently logged in user. This endpoint is meant for use after updating a user's phone number using the [accountUpdatePhone](https://appwrite.io/docs/references/cloud/client-web/account#updatePhone) endpoint. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updatePhoneVerification). The verification code sent to the user's phone number is valid for 15 minutes. **


```http request
PUT https://cloud.appwrite.io/v1/account/verifications/phone
```

** Use this endpoint to complete the user phone verification process. Use the **userId** and **secret** that were sent to your user's phone number to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

