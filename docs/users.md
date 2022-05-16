# Users Service

## List Users

```http request
GET https://HOSTNAME/v1/users
```

** Get a list of all the project&#039;s users. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| limit | integer | Maximum number of users to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this param to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |
| cursor | string | ID of the user used as the starting point for the query, excluding the user itself. Should be used for efficient pagination when working with large sets of data. [learn more about pagination](https://appwrite.io/docs/pagination) |  |
| cursorDirection | string | Direction of the cursor. | after |
| orderType | string | Order result by ASC or DESC order. | ASC |

## Create User

```http request
POST https://HOSTNAME/v1/users
```

** Create a new user. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | User ID. Choose your own unique ID or pass the string &quot;unique()&quot; to auto generate it. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can&#039;t start with a special char. Max length is 36 chars. |  |
| email | string | User email. |  |
| password | string | User password. Must be at least 8 chars. |  |
| name | string | User name. Max length: 128 chars. |  |

## Get User

```http request
GET https://HOSTNAME/v1/users/{userId}
```

** Get a user by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Delete User

```http request
DELETE https://HOSTNAME/v1/users/{userId}
```

** Delete a user by its unique ID, thereby releasing it&#039;s ID. Since ID is released and can be reused, all user-related resources like documents or storage files should be deleted before user deletion. If you want to keep ID reserved, use the [updateStatus](/docs/server/users#usersUpdateStatus) endpoint instead. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update Email

```http request
PATCH https://HOSTNAME/v1/users/{userId}/email
```

** Update the user email by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| email | string | User email. |  |

## Get User Logs

```http request
GET https://HOSTNAME/v1/users/{userId}/logs
```

** Get the user activity logs list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| limit | integer | Maximum number of logs to return in response. By default will return maximum 25 results. Maximum of 100 results allowed per request. | 25 |
| offset | integer | Offset value. The default value is 0. Use this value to manage pagination. [learn more about pagination](https://appwrite.io/docs/pagination) | 0 |

## Get User Memberships

```http request
GET https://HOSTNAME/v1/users/{userId}/memberships
```

** Get the user membership list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update Name

```http request
PATCH https://HOSTNAME/v1/users/{userId}/name
```

** Update the user name by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| name | string | User name. Max length: 128 chars. |  |

## Update Password

```http request
PATCH https://HOSTNAME/v1/users/{userId}/password
```

** Update the user password by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| password | string | New user password. Must be at least 8 chars. |  |

## Get User Preferences

```http request
GET https://HOSTNAME/v1/users/{userId}/prefs
```

** Get the user preferences by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Update User Preferences

```http request
PATCH https://HOSTNAME/v1/users/{userId}/prefs
```

** Update the user preferences by its unique ID. The object you pass is stored as is, and replaces any previous value. The maximum allowed prefs size is 64kB and throws error if exceeded. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| prefs | object | Prefs key-value JSON object. | {} |

## Get User Sessions

```http request
GET https://HOSTNAME/v1/users/{userId}/sessions
```

** Get the user sessions list by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Delete User Sessions

```http request
DELETE https://HOSTNAME/v1/users/{userId}/sessions
```

** Delete all user&#039;s sessions by using the user&#039;s unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |

## Delete User Session

```http request
DELETE https://HOSTNAME/v1/users/{userId}/sessions/{sessionId}
```

** Delete a user sessions by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| sessionId | string | **Required** Session ID. |  |

## Update User Status

```http request
PATCH https://HOSTNAME/v1/users/{userId}/status
```

** Update the user status by its unique ID. Use this endpoint as an alternative to deleting a user if you want to keep user&#039;s ID reserved. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| status | boolean | User Status. To activate the user pass `true` and to block the user pass `false`. |  |

## Update Email Verification

```http request
PATCH https://HOSTNAME/v1/users/{userId}/verification
```

** Update the user email verification status by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| userId | string | **Required** User ID. |  |
| emailVerification | boolean | User email verification status. |  |

