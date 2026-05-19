# Presences Service


```http request
GET https://cloud.appwrite.io/v1/presences
```

** List presence logs. Expired entries are filtered out automatically.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |
| ttl | integer | TTL (seconds) for caching list responses. Responses are stored in an in-memory key-value cache, keyed per project, collection, schema version (attributes and indexes), caller authorization roles, and the exact query — so users with different permissions never share cached entries. Schema changes invalidate cached entries automatically; document writes do not, so choose a TTL you are comfortable serving as stale data. Set to 0 to disable caching. Must be between 0 and 86400 (24 hours). | 0 |


```http request
GET https://cloud.appwrite.io/v1/presences/{presenceId}
```

** Get a presence log by its unique ID. Entries whose `expiresAt` is in the past are treated as not found.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| presenceId | string | **Required** Presence unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/presences/{presenceId}
```

** Create or update a presence log by its user ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| presenceId | string | **Required** Presence unique ID. |  |
| userId | string | User ID. |  |
| status | string | Presence status. |  |
| permissions | array | An array of permissions strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| expiresAt | string | Presence expiry datetime. |  |
| metadata | object | Presence metadata object. | {} |


```http request
PATCH https://cloud.appwrite.io/v1/presences/{presenceId}
```

** Update a presence log by its unique ID. Using the patch method you can pass only specific fields that will get updated.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| presenceId | string | **Required** Presence unique ID. |  |
| userId | string | User ID. |  |
| status | string | Presence status. |  |
| expiresAt | string | Presence expiry datetime. |  |
| metadata | object | Presence metadata object. | {} |
| permissions | array | An array of permissions strings. By default, only the current user is granted all permissions. [Learn more about permissions](https://appwrite.io/docs/permissions). |  |
| purge | boolean | When true, purge cached responses used by list presences endpoint. |  |


```http request
DELETE https://cloud.appwrite.io/v1/presences/{presenceId}
```

** Delete a presence log by its unique ID.
 **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| presenceId | string | **Required** Presence unique ID. |  |

