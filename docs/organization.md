# Organization Service


```http request
GET https://cloud.appwrite.io/v1/organization
```

** Get the current organization. **


```http request
PUT https://cloud.appwrite.io/v1/organization
```

** Update the current organization&#039;s name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| name | string | New organization name. Max length: 128 chars. |  |


```http request
DELETE https://cloud.appwrite.io/v1/organization
```

** Delete the current organization. All projects that belong to the organization are deleted as well. **


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
| scopes | array | Key scopes list. Maximum of 200 scopes are allowed. |  |
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
| scopes | array | Key scopes list. Maximum of 200 scopes are allowed. |  |
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
GET https://cloud.appwrite.io/v1/organization/memberships
```

** Get a list of all memberships from the current organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: userId, teamId, invited, joined, confirm, roles | [] |
| search | string | Search term to filter your list results. Max length: 256 chars. |  |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/organization/memberships
```

** Invite a new member to join the current organization. An email with a link to join the organization will be sent to the new member&#039;s email address. If member doesn&#039;t exist in the project it will be automatically created. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| email | string | Email of the new organization member. |  |
| userId | string | ID of the user to be added to the organization. |  |
| phone | string | Phone number. Format this number with a leading '+' and a country code, e.g., +16175551212. |  |
| roles | array | Array of strings. Use this param to set the user roles in the organization. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Maximum of 100 roles are allowed, each 81 characters long. |  |
| url | string | URL to redirect the user back to your app from the invitation email. This parameter is not required when an API key is supplied. |  |
| name | string | Name of the new organization member. Max length: 128 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/organization/memberships/{membershipId}
```

** Get a membership from the current organization by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| membershipId | string | **Required** Membership ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/organization/memberships/{membershipId}
```

** Modify the roles of a member in the current organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| membershipId | string | **Required** Membership ID. |  |
| roles | array | An array of strings. Use this param to set the user's roles in the organization. A role can be any string. Learn more about [roles and permissions](https://appwrite.io/docs/permissions). Maximum of 100 roles are allowed, each 81 characters long. |  |


```http request
DELETE https://cloud.appwrite.io/v1/organization/memberships/{membershipId}
```

** Remove a member from the current organization. The member is removed whether they accepted the invitation or not; a pending invitation is revoked. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| membershipId | string | **Required** Membership ID. |  |


```http request
GET https://cloud.appwrite.io/v1/organization/projects
```

** Get a list of all projects. You can use the query params to filter your results. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: name, teamId, labels, search, accessedAt | [] |
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
| region | string | Project Region. |  |


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

