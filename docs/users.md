# Users Service

## List users

```http request
GET https://cloud.appwrite.io/v1/users
```

** Get a list of all the project&#039;s users. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, email, phone, status, passwordUpdate, registration, emailVerification, phoneVerification, labels | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Create user

```http request
POST https://cloud.appwrite.io/v1/users
```

** Create a new user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| password | string | Plain text user password. Must be at least 8 chars. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with Argon2 password

```http request
POST https://cloud.appwrite.io/v1/users/argon2
```

** Create a new user. Password provided must be hashed with the [Argon2](https://en.wikipedia.org/wiki/Argon2) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using Argon2. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with bcrypt password

```http request
POST https://cloud.appwrite.io/v1/users/bcrypt
```

** Create a new user. Password provided must be hashed with the [Bcrypt](https://en.wikipedia.org/wiki/Bcrypt) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using Bcrypt. |  |
| name | string | User name. Max length: 128 chars. |  |

## List Identities

```http request
GET https://cloud.appwrite.io/v1/users/identities
```

** Get identities for all users. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, provider, providerUid, providerEmail, providerAccessTokenExpiry | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |

## Delete identity

```http request
DELETE https://cloud.appwrite.io/v1/users/identities/{identityId}
```

** Delete an identity by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| identityId | string | **Required** Identity ID. |  |

## Create user with MD5 password

```http request
POST https://cloud.appwrite.io/v1/users/md5
```

** Create a new user. Password provided must be hashed with the [MD5](https://en.wikipedia.org/wiki/MD5) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using MD5. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with PHPass password

```http request
POST https://cloud.appwrite.io/v1/users/phpass
```

** Create a new user. Password provided must be hashed with the [PHPass](https://www.openwall.com/phpass/) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or pass the string `ID.unique()`to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using PHPass. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with Scrypt password

```http request
POST https://cloud.appwrite.io/v1/users/scrypt
```

** Create a new user. Password provided must be hashed with the [Scrypt](https://github.com/Tarsnap/scrypt) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using Scrypt. |  |
| passwordSalt | string | Optional salt used to hash password. |  |
| passwordCpu | integer | Optional CPU cost used to hash password. |  |
| passwordMemory | integer | Optional memory cost used to hash password. |  |
| passwordParallel | integer | Optional parallelization cost used to hash password. |  |
| passwordLength | integer | Optional hash length used to hash password. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with Scrypt modified password

```http request
POST https://cloud.appwrite.io/v1/users/scrypt-modified
```

** Create a new user. Password provided must be hashed with the [Scrypt Modified](https://gist.github.com/Meldiron/eecf84a0225eccb5a378d45bb27462cc) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using Scrypt Modified. |  |
| passwordSalt | string | Salt used to hash password. |  |
| passwordSaltSeparator | string | Salt separator used to hash password. |  |
| passwordSignerKey | string | Signer key used to hash password. |  |
| name | string | User name. Max length: 128 chars. |  |

## Create user with SHA password

```http request
POST https://cloud.appwrite.io/v1/users/sha
```

** Create a new user. Password provided must be hashed with the [SHA](https://en.wikipedia.org/wiki/Secure_Hash_Algorithm) algorithm. Use the [POST /users](https://appwrite.io/docs/server/users#usersCreate) endpoint to create users with a plain text password. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password hashed using SHA. |  |
| passwordVersion | string | Optional SHA version used to hash password. Allowed values are: 'sha1', 'sha224', 'sha256', 'sha384', 'sha512/224', 'sha512/256', 'sha512', 'sha3-224', 'sha3-256', 'sha3-384', 'sha3-512' |  |
| name | string | User name. Max length: 128 chars. |  |

## Get user

```http request
GET https://cloud.appwrite.io/v1/users/{userId}
```

** Get a user by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Delete user

```http request
DELETE https://cloud.appwrite.io/v1/users/{userId}
```

** Delete a user by its unique ID, thereby releasing it&#039;s ID. Since ID is released and can be reused, all user-related resources like documents or storage files should be deleted before user deletion. If you want to keep ID reserved, use the [updateStatus](https://appwrite.io/docs/server/users#usersUpdateStatus) endpoint instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update email

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/email
```

** Update the user email by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| email | string | User email. |  |

## Create user JWT

```http request
POST https://cloud.appwrite.io/v1/users/{userId}/jwts
```

** Use this endpoint to create a JSON Web Token for user by its unique ID. You can use the resulting JWT to authenticate on behalf of the user. The JWT secret will become invalid if the session it uses gets deleted. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| sessionId | string | Session ID. Use the string 'recent' to use the most recent session. Defaults to the most recent session. |  |
| duration | integer | Time in seconds before JWT expires. Default duration is 900 seconds, and maximum is 3600 seconds. | 900 |

## Update user labels

```http request
PUT https://cloud.appwrite.io/v1/users/{userId}/labels
```

** Update the user labels by its unique ID. 

Labels can be used to grant access to resources. While teams are a way for user&#039;s to share access to a resource, labels can be defined by the developer to grant access without an invitation. See the [Permissions docs](https://appwrite.io/docs/permissions) for more info. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| labels | array | Array of user labels. Replaces the previous labels. Maximum of 1000 labels are allowed, each up to 36 alphanumeric characters long. |  |

## List user logs

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/logs
```

** Get the user activity logs list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Only supported methods are limit and offset | [] |

## List user memberships

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/memberships
```

** Get the user membership list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update MFA

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/mfa
```

** Enable or disable MFA on a user account. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| mfa | boolean | Enable or disable MFA. |  |

## Delete Authenticator

```http request
DELETE https://cloud.appwrite.io/v1/users/{userId}/mfa/authenticators/{type}
```

** Delete an authenticator app. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| type | string | **Required** Type of authenticator. |  |

## List Factors

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/mfa/factors
```

** List the factors available on the account to be used as a MFA challange. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Get MFA Recovery Codes

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/mfa/recovery-codes
```

** Get recovery codes that can be used as backup for MFA flow by User ID. Before getting codes, they must be generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Regenerate MFA Recovery Codes

```http request
PUT https://cloud.appwrite.io/v1/users/{userId}/mfa/recovery-codes
```

** Regenerate recovery codes that can be used as backup for MFA flow by User ID. Before regenerating codes, they must be first generated using [createMfaRecoveryCodes](/docs/references/cloud/client-web/account#createMfaRecoveryCodes) method. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Create MFA Recovery Codes

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/mfa/recovery-codes
```

** Generate recovery codes used as backup for MFA flow for User ID. Recovery codes can be used as a MFA verification type in [createMfaChallenge](/docs/references/cloud/client-web/account#createMfaChallenge) method by client SDK. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update name

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/name
```

** Update the user name by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| name | string | User name. Max length: 128 chars. |  |

## Update password

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/password
```

** Update the user password by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| password | string | New user password. Must be at least 8 chars. |  |

## Update phone

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/phone
```

** Update the user phone by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| number | string | User phone number. |  |

## Get user preferences

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/prefs
```

** Get the user preferences by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update user preferences

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/prefs
```

** Update the user preferences by its unique ID. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| prefs | object | Prefs key-value JSON object. | {} |

## List user sessions

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/sessions
```

** Get the user sessions list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Create session

```http request
POST https://cloud.appwrite.io/v1/users/{userId}/sessions
```

** Creates a session for a user. Returns an immediately usable session object.

If you want to generate a token for a custom authentication flow, use the [POST /users/{userId}/tokens](https://appwrite.io/docs/server/users#createToken) endpoint. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |

## Delete user sessions

```http request
DELETE https://cloud.appwrite.io/v1/users/{userId}/sessions
```

** Delete all user&#039;s sessions by using the user&#039;s unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Delete user session

```http request
DELETE https://cloud.appwrite.io/v1/users/{userId}/sessions/{sessionId}
```

** Delete a user sessions by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| sessionId | string | **Required** Session ID. |  |

## Update user status

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/status
```

** Update the user status by its unique ID. Use this endpoint as an alternative to deleting a user if you want to keep user&#039;s ID reserved. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| status | boolean | User Status. To activate the user pass `true` and to block the user pass `false`. |  |

## List User Targets

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/targets
```

** List the messaging targets that are associated with a user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, email, phone, status, passwordUpdate, registration, emailVerification, phoneVerification, labels | [] |

## Create User Target

```http request
POST https://cloud.appwrite.io/v1/users/{userId}/targets
```

** Create a messaging target. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| targetId | string | Target ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| providerType | string | The target provider type. Can be one of the following: `email`, `sms` or `push`. |  |
| identifier | string | The target identifier (token, email, phone etc.) |  |
| providerId | string | Provider ID. Message will be sent to this target from the specified provider ID. If no provider ID is set the first setup provider will be used. |  |
| name | string | Target name. Max length: 128 chars. For example: My Awesome App Galaxy S23. |  |

## Get User Target

```http request
GET https://cloud.appwrite.io/v1/users/{userId}/targets/{targetId}
```

** Get a user&#039;s push notification target by ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| targetId | string | **Required** Target ID. |  |

## Update User target

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/targets/{targetId}
```

** Update a messaging target. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| targetId | string | **Required** Target ID. |  |
| identifier | string | The target identifier (token, email, phone etc.) |  |
| providerId | string | Provider ID. Message will be sent to this target from the specified provider ID. If no provider ID is set the first setup provider will be used. |  |
| name | string | Target name. Max length: 128 chars. For example: My Awesome App Galaxy S23. |  |

## Delete user target

```http request
DELETE https://cloud.appwrite.io/v1/users/{userId}/targets/{targetId}
```

** Delete a messaging target. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| targetId | string | **Required** Target ID. |  |

## Create token

```http request
POST https://cloud.appwrite.io/v1/users/{userId}/tokens
```

** Returns a token with a secret key for creating a session. Use the user ID and secret and submit a request to the [PUT /account/sessions/token](https://appwrite.io/docs/references/cloud/client-web/account#createSession) endpoint to complete the login process.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| length | integer | Token length in characters. The default length is 6 characters | 6 |
| expire | integer | Token expiration period in seconds. The default expiration is 15 minutes. | 900 |

## Update email verification

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/verification
```

** Update the user email verification status by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| emailVerification | boolean | User email verification status. |  |

## Update phone verification

```http request
PATCH https://cloud.appwrite.io/v1/users/{userId}/verification/phone
```

** Update the user phone verification status by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| phoneVerification | boolean | User phone verification status. |  |

