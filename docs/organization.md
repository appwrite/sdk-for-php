# Organization Service


```http request
GET https://cloud.appwrite.io/v1/organization/keys
```

** Get a list of all API keys from the current organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: expire, accessedAt, name, scopes | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/organization/keys
```

** Create a new organization API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | Key ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
GET https://cloud.appwrite.io/v1/organization/keys/{keyId}
```

** Get a key by its unique ID. This endpoint returns details about a specific API key in your organization including its scopes. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key unique ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/organization/keys/{keyId}
```

** Update a key by its unique ID. Use this endpoint to update the name, scopes, or expiration time of an API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key unique ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
DELETE https://cloud.appwrite.io/v1/organization/keys/{keyId}
```

** Delete a key by its unique ID. Once deleted, the key can no longer be used to authenticate API calls. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key unique ID. |  |


```http request
GET https://cloud.appwrite.io/v1/organization/projects
```

** Get a list of all projects. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, teamId, labels, search | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/organization/projects
```

** Create a new project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | Unique Id. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, and hyphen. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Project name. Max length: 128 chars. |  |
| region | string | Project Region. | fra |


```http request
GET https://cloud.appwrite.io/v1/organization/projects/{projectId}
```

** Get a project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/organization/projects/{projectId}
```

** Update a project by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |
| name | string | Project name. Max length: 128 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/organization/projects/{projectId}
```

** Delete a project by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| projectId | string | **Required** Project unique ID. |  |

