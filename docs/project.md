# Project Service


```http request
GET https://cloud.appwrite.io/v1/project/keys
```

** Get a list of all API keys from the current project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: expire, accessedAt, name, scopes | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/keys
```

** Create a new API key. It&#039;s recommended to have multiple API keys with strict scopes for separate functions within your project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | Key ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
GET https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Get a key by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Update a key by its unique ID. Use this endpoint to update the name, scopes, or expiration time of an API key. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |
| name | string | Key name. Max length: 128 chars. |  |
| scopes | array | Key scopes list. Maximum of 100 scopes are allowed. |  |
| expire | string | Expiration time in [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format. Use null for unlimited expiration. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/keys/{keyId}
```

** Delete a key by its unique ID. Once deleted, the key can no longer be used to authenticate API calls. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| keyId | string | **Required** Key ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/labels
```

** Update the project labels. Labels can be used to easily filter projects in an organization. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| labels | array | Array of project labels. Replaces the previous labels. Maximum of 1000 labels are allowed, each up to 36 alphanumeric characters long. |  |


```http request
GET https://cloud.appwrite.io/v1/project/platforms
```

** Get a list of all platforms in the project. This endpoint returns an array of all platforms and their configurations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: type, name, hostname, bundleIdentifier, applicationId, packageIdentifierName, packageName | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/android
```

** Create a new Android platform for your project. Use this endpoint to register a new Android platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| applicationId | string | Android application ID. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/android/{platformId}
```

** Update an Android platform by its unique ID. Use this endpoint to update the platform&#039;s name or application ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| applicationId | string | Android application ID. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/apple
```

** Create a new Apple platform for your project. Use this endpoint to register a new Apple platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| bundleIdentifier | string | Apple bundle identifier. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/apple/{platformId}
```

** Update an Apple platform by its unique ID. Use this endpoint to update the platform&#039;s name or bundle identifier. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| bundleIdentifier | string | Apple bundle identifier. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/linux
```

** Create a new Linux platform for your project. Use this endpoint to register a new Linux platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageName | string | Linux package name. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/linux/{platformId}
```

** Update a Linux platform by its unique ID. Use this endpoint to update the platform&#039;s name or package name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageName | string | Linux package name. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/web
```

** Create a new web platform for your project. Use this endpoint to register a new platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| hostname | string | Platform web hostname. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/web/{platformId}
```

** Update a web platform by its unique ID. Use this endpoint to update the platform&#039;s name or hostname. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| hostname | string | Platform web hostname. Max length: 256 chars. |  |


```http request
POST https://cloud.appwrite.io/v1/project/platforms/windows
```

** Create a new Windows platform for your project. Use this endpoint to register a new Windows platform where your users will run your application which will interact with the Appwrite API. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | Platform ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageIdentifierName | string | Windows package identifier name. Max length: 256 chars. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/platforms/windows/{platformId}
```

** Update a Windows platform by its unique ID. Use this endpoint to update the platform&#039;s name or package identifier name. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |
| name | string | Platform name. Max length: 128 chars. |  |
| packageIdentifierName | string | Windows package identifier name. Max length: 256 chars. |  |


```http request
GET https://cloud.appwrite.io/v1/project/platforms/{platformId}
```

** Get a platform by its unique ID. This endpoint returns the platform&#039;s details, including its name, type, and key configurations. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/platforms/{platformId}
```

** Delete a platform by its unique ID. This endpoint removes the platform and all its configurations from the project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| platformId | string | **Required** Platform ID. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/protocols/{protocolId}/status
```

** Update the status of a specific protocol. Use this endpoint to enable or disable a protocol in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| protocolId | string | **Required** Protocol name. Can be one of: rest, graphql, websocket |  |
| enabled | boolean | Protocol status. |  |


```http request
PATCH https://cloud.appwrite.io/v1/project/services/{serviceId}/status
```

** Update the status of a specific service. Use this endpoint to enable or disable a service in your project.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| serviceId | string | **Required** Service name. Can be one of: account, avatars, databases, tablesdb, locale, health, project, storage, teams, users, vcs, sites, functions, proxy, graphql, migrations, messaging |  |
| enabled | boolean | Service status. |  |


```http request
GET https://cloud.appwrite.io/v1/project/variables
```

** Get a list of all project environment variables. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| queries | array | Array of query strings generated using the Query class provided by the SDK. [Learn more about queries](https://appwrite.io/docs/queries). Maximum of 100 queries are allowed, each 4096 characters long. You may filter on the following attributes: key, resourceType, resourceId, secret | [] |
| total | boolean | When set to false, the total count returned will be 0 and will not be calculated. | 1 |


```http request
POST https://cloud.appwrite.io/v1/project/variables
```

** Create a new project environment variable. These variables can be accessed by all functions and sites in the project. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | Variable ID. Choose a custom ID or generate a random ID with `ID.unique()`. Valid chars are a-z, A-Z, 0-9, period, hyphen, and underscore. Can't start with a special char. Max length is 36 chars. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. | 1 |


```http request
GET https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Get a variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable ID. |  |


```http request
PUT https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Update variable by its unique ID. **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable ID. |  |
| key | string | Variable key. Max length: 255 chars. |  |
| value | string | Variable value. Max length: 8192 chars. |  |
| secret | boolean | Secret variables can be updated or deleted, but only projects can read them during build and runtime. |  |


```http request
DELETE https://cloud.appwrite.io/v1/project/variables/{variableId}
```

** Delete a variable by its unique ID.  **

### Parameters

| Field Name | Type | Description | Default |
| --- | --- | --- | --- |
| variableId | string | **Required** Variable ID. |  |

