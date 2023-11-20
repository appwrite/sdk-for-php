# Account Service

## Get account

```http request
GET https://HOSTNAME/v1/account
```

** Get the currently logged in user. **

## Update email

```http request
PATCH https://HOSTNAME/v1/account/email
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
GET https://HOSTNAME/v1/account/identities
```

** Get the list of identities for the currently logged in user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | string | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, provider, providerUid, providerEmail, providerAccessTokenExpiry | [] |

## Delete Identity

```http request
DELETE https://HOSTNAME/v1/account/identities/{identityId}
```

** Delete an identity by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| identityId | string | **Required** Identity ID. |  |

## List logs

```http request
GET https://HOSTNAME/v1/account/logs
```

** Get the list of latest security activity logs for the currently logged in user. Each log returns user IP address, location and date and time of log. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## Update name

```http request
PATCH https://HOSTNAME/v1/account/name
```

** Update currently logged in user account name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | User name. Max length: 128 chars. |  |

## Update password

```http request
PATCH https://HOSTNAME/v1/account/password
```

** Update currently logged in user password. For validation, user is required to pass in the new password, and the old password. For users created with OAuth, Team Invites and Magic URL, oldPassword is optional. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string | New user password. Must be at least 8 chars. |  |
| oldPassword | string | Current user password. Must be at least 8 chars. |  |

## Update phone

```http request
PATCH https://HOSTNAME/v1/account/phone
```

** Update the currently logged in user&#039;s phone number. After updating the phone number, the phone verification status will be reset. A confirmation SMS is not sent automatically, however you can use the [POST /account/verification/phone](https://appwrite.io/docs/references/cloud/client-web/account#createPhoneVerification) endpoint to send a confirmation SMS. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| password | string | User password. Must be at least 8 chars. |  |

## Get account preferences

```http request
GET https://HOSTNAME/v1/account/prefs
```

** Get the preferences as a key-value object for the currently logged in user. **

## Update preferences

```http request
PATCH https://HOSTNAME/v1/account/prefs
```

** Update currently logged in user account preferences. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| prefs | object | Prefs key-value JSON object. | {} |

## Create password recovery

```http request
POST https://HOSTNAME/v1/account/recovery
```

** Sends the user an email with a temporary secret key for password reset. When the user clicks the confirmation link he is redirected back to your app password reset URL with the secret key and email address values attached to the URL query string. Use the query string params to submit a request to the [PUT /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#updateRecovery) endpoint to complete the process. The verification link sent to the user&#039;s email address is valid for 1 hour. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the recovery email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |

## Create password recovery (confirmation)

```http request
PUT https://HOSTNAME/v1/account/recovery
```

** Use this endpoint to complete the user account password reset. Both the **userId** and **secret** arguments will be passed as query parameters to the redirect URL you have provided when sending your request to the [POST /account/recovery](https://appwrite.io/docs/references/cloud/client-web/account#createRecovery) endpoint.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md) the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid reset token. |  |
| password | string | New user password. Must be at least 8 chars. |  |
| passwordAgain | string | Repeat new user password. Must be at least 8 chars. |  |

## List sessions

```http request
GET https://HOSTNAME/v1/account/sessions
```

** Get the list of active sessions across different devices for the currently logged in user. **

## Delete sessions

```http request
DELETE https://HOSTNAME/v1/account/sessions
```

** Delete all sessions from the user account and remove any sessions cookies from the end client. **

## Get session

```http request
GET https://HOSTNAME/v1/account/sessions/{sessionId}
```

** Use this endpoint to get a logged in user&#039;s session using a Session ID. Inputting &#039;current&#039; will return the current session being used. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to get the current device session. |  |

## Update OAuth session (refresh tokens)

```http request
PATCH https://HOSTNAME/v1/account/sessions/{sessionId}
```

** Access tokens have limited lifespan and expire to mitigate security risks. If session was created using an OAuth provider, this route can be used to &quot;refresh&quot; the access token. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to update the current device session. |  |

## Delete session

```http request
DELETE https://HOSTNAME/v1/account/sessions/{sessionId}
```

** Logout the user. Use &#039;current&#039; as the session ID to logout on this device, use a session ID to logout on another device. If you&#039;re looking to logout the user on all devices, use [Delete Sessions](https://appwrite.io/docs/references/cloud/client-web/account#deleteSessions) instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string 'current' to delete the current device session. |  |

## Update status

```http request
PATCH https://HOSTNAME/v1/account/status
```

** Block the currently logged in user account. Behind the scene, the user record is not deleted but permanently blocked from any access. To completely delete a user, use the Users API instead. **

## Create email verification

```http request
POST https://HOSTNAME/v1/account/verification
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
PUT https://HOSTNAME/v1/account/verification
```

** Use this endpoint to complete the user email verification process. Use both the **userId** and **secret** parameters that were attached to your app URL to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

## Create phone verification

```http request
POST https://HOSTNAME/v1/account/verification/phone
```

** Use this endpoint to send a verification SMS to the currently logged in user. This endpoint is meant for use after updating a user&#039;s phone number using the [accountUpdatePhone](https://appwrite.io/docs/references/cloud/client-web/account#updatePhone) endpoint. Learn more about how to [complete the verification process](https://appwrite.io/docs/references/cloud/client-web/account#updatePhoneVerification). The verification code sent to the user&#039;s phone number is valid for 15 minutes. **

## Create phone verification (confirmation)

```http request
PUT https://HOSTNAME/v1/account/verification/phone
```

** Use this endpoint to complete the user phone verification process. Use the **userId** and **secret** that were sent to your user&#039;s phone number to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

