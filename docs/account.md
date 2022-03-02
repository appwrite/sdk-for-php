# Account Service

## Get Account

```http request
GET https://HOSTNAME/v1/account
```

** Get currently logged in user data as JSON object. **

## Delete Account

```http request
DELETE https://HOSTNAME/v1/account
```

** Delete a currently logged in user account. Behind the scene, the user record is not deleted but permanently blocked from any access. This is done to avoid deleted accounts being overtaken by new users with the same email address. Any user-related resources like documents or storage files should be deleted separately. **

## Update Account Email

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

## Get Account Logs

```http request
GET https://HOSTNAME/v1/account/logs
```

** Get currently logged in user list of latest security activity logs. Each log returns user IP address, location and date and time of log. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| limit | integer | Maximum number of logs to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |

## Update Account Name

```http request
PATCH https://HOSTNAME/v1/account/name
```

** Update currently logged in user account name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | User name. Max length: 128 chars. |  |

## Update Account Password

```http request
PATCH https://HOSTNAME/v1/account/password
```

** Update currently logged in user password. For validation, user is required to pass in the new password, and the old password. For users created with OAuth and Team Invites, oldPassword is optional. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| password | string | New user password. Must be at least 8 chars. |  |
| oldPassword | string | Current user password. Must be at least 8 chars. |  |

## Get Account Preferences

```http request
GET https://HOSTNAME/v1/account/prefs
```

** Get currently logged in user preferences as a key-value object. **

## Update Account Preferences

```http request
PATCH https://HOSTNAME/v1/account/prefs
```

** Update currently logged in user account preferences. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| prefs | object | Prefs key-value JSON object. | {} |

## Create Password Recovery

```http request
POST https://HOSTNAME/v1/account/recovery
```

** Sends the user an email with a temporary secret key for password reset. When the user clicks the confirmation link he is redirected back to your app password reset URL with the secret key and email address values attached to the URL query string. Use the query string params to submit a request to the [PUT /account/recovery](/docs/client/account#accountUpdateRecovery) endpoint to complete the process. The verification link sent to the user&#039;s email address is valid for 1 hour. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | User email. |  |
| url | string | URL to redirect the user back to your app from the recovery email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |

## Create Password Recovery (confirmation)

```http request
PUT https://HOSTNAME/v1/account/recovery
```

** Use this endpoint to complete the user account password reset. Both the **userId** and **secret** arguments will be passed as query parameters to the redirect URL you have provided when sending your request to the [POST /account/recovery](/docs/client/account#accountCreateRecovery) endpoint.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md) the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid reset token. |  |
| password | string | New user password. Must be at least 8 chars. |  |
| passwordAgain | string | Repeat new user password. Must be at least 8 chars. |  |

## Get Account Sessions

```http request
GET https://HOSTNAME/v1/account/sessions
```

** Get currently logged in user list of active sessions across different devices. **

## Delete All Account Sessions

```http request
DELETE https://HOSTNAME/v1/account/sessions
```

** Delete all sessions from the user account and remove any sessions cookies from the end client. **

## Get Session By ID

```http request
GET https://HOSTNAME/v1/account/sessions/{sessionId}
```

** Use this endpoint to get a logged in user&#039;s session using a Session ID. Inputting &#039;current&#039; will return the current session being used. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string &#039;current&#039; to get the current device session. |  |

## Update Session (Refresh Tokens)

```http request
PATCH https://HOSTNAME/v1/account/sessions/{sessionId}
```

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string &#039;current&#039; to update the current device session. |  |

## Delete Account Session

```http request
DELETE https://HOSTNAME/v1/account/sessions/{sessionId}
```

** Use this endpoint to log out the currently logged in user from all their account sessions across all of their different devices. When using the Session ID argument, only the unique session ID provided is deleted.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| sessionId | string | **Required** Session ID. Use the string &#039;current&#039; to delete the current device session. |  |

## Create Email Verification

```http request
POST https://HOSTNAME/v1/account/verification
```

** Use this endpoint to send a verification message to your user email address to confirm they are the valid owners of that address. Both the **userId** and **secret** arguments will be passed as query parameters to the URL you have provided to be attached to the verification email. The provided URL should redirect the user back to your app and allow you to complete the verification process by verifying both the **userId** and **secret** parameters. Learn more about how to [complete the verification process](/docs/client/account#accountUpdateVerification). The verification link sent to the user&#039;s email address is valid for 7 days.

Please note that in order to avoid a [Redirect Attack](https://github.com/OWASP/CheatSheetSeries/blob/master/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.md), the only valid redirect URLs are the ones from domains you have set when adding your platforms in the console interface.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| url | string | URL to redirect the user back to your app from the verification email. Only URLs from hostnames in your project platform list are allowed. This requirement helps to prevent an [open redirect](https://cheatsheetseries.owasp.org/cheatsheets/Unvalidated_Redirects_and_Forwards_Cheat_Sheet.html) attack against your project API. |  |

## Create Email Verification (confirmation)

```http request
PUT https://HOSTNAME/v1/account/verification
```

** Use this endpoint to complete the user email verification process. Use both the **userId** and **secret** parameters that were attached to your app URL to verify the user email ownership. If confirmed this route will return a 200 status code. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. |  |
| secret | string | Valid verification token. |  |

