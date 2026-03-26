# Project Service


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

